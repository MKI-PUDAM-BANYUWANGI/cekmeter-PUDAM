<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Pelanggan;
use App\Http\Requests\StorePelangganRequest;
use App\Http\Requests\UpdatePelangganRequest;
use App\Models\LogData;
use App\Models\MerkMeter;
use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ApiLogDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Ambil filter tanggal mulai dan tanggal akhir dari request
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        // Query filtering
        $logdata = LogData::when($startDate && $endDate, function ($query) use ($startDate, $endDate) {
                return $query->whereBetween('tanggal_cek', [$startDate, $endDate]);
            })
            ->orderBy('tanggal_cek', 'desc') // Urutkan berdasarkan tanggal cek terbaru
            ->get();

        return response()->json($logdata);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data
        $this->validate($request, [
            'petugas_id' => 'required|exists:staff,nip',
            'no_sp' => 'required|exists:pelanggans,no_sp',
            'merk_meter_id' => 'required',
            'kondisi_meter' => 'required',
            'ket_kondisi' => 'nullable',
            'foto_meter' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120'
        ]);

        // Mengambil semua data request kecuali 'foto_meter'
        $logData = $request->except('foto_meter');

        // Jika ada file yang diunggah
        if ($request->hasFile('foto_meter')) {
            $filePath = $request->file('foto_meter')->store('logdata', 'public');
            $logData['foto_meter'] = $filePath;
        }

        // Set tanggal_cek otomatis ke waktu saat ini
        $logData['tanggal_cek'] = now()->setTimezone('Asia/Jakarta');

        // Membuat data log
        $logdata = LogData::create($logData);

        return response()->json([
            'message' => 'Log Data Berhasil Ditambahkan!',
            'data' => $logdata,
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $logdata = LogData::findOrFail($id);
        return response()->json($logdata);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'petugas_id' => 'nullable|exists:staff,nip',
            'no_sp' => 'nullable|exists:pelanggans,no_sp',
            'merk_meter_id' => 'nullable',
            'kondisi_meter' => 'nullable',
            'ket_kondisi' => 'nullable',
            'foto_meter' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120'
        ]);

        $logdata = LogData::findOrFail($id);
        $logData = $request->except('foto_meter');

        if ($request->hasFile('foto_meter')) {
            // Hapus foto lama
            if ($logdata->foto_meter && Storage::exists($logdata->foto_meter)) {
                Storage::delete($logdata->foto_meter);
            }

            // Simpan foto baru
            $filePath = $request->file('foto_meter')->store('logdata', 'public');
            $logData['foto_meter'] = $filePath;
        }

        // Update tanggal_cek otomatis ke waktu saat ini
        $logData['tanggal_cek'] = now()->setTimezone('Asia/Jakarta');

        // Update data
        $logdata->update($logData);

        return response()->json([
            'message' => 'Log Data Berhasil Diperbarui!',
            'data' => $logdata,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $logdata = LogData::findOrFail($id);

        // Hapus foto jika ada
        if ($logdata->foto_meter && Storage::exists($logdata->foto_meter)) {
            Storage::delete($logdata->foto_meter);
        }

        $logdata->delete();

        return response()->json([
            'message' => 'Log Data Berhasil Dihapus!',
        ]);
    }
}

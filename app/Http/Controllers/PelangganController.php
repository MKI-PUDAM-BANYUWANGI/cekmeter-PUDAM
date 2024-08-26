<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Http\Requests\StorePelangganRequest;
use App\Http\Requests\UpdatePelangganRequest;
use App\Models\MerkMeter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pelanggan = Pelanggan::all();
        return view('data.pelanggan.pelanggan', compact('pelanggan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $merkmeter = MerkMeter::all();
        return view('data.pelanggan.tambah-pelanggan', compact('merkmeter'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data
        $this->validate($request, [
            'no_sp' => 'required',
            'nama_pelanggan' => 'required',
            'alamat' => 'required',
            'wilayah' => 'required|not_in:Pilih Wilayah',
            'merk_meter_id' => 'nullable|exists:merk_meters,id',
            'kondisi_meter' => 'nullable',
            'tanggal_cek' => 'nullable|date',
            'foto_meter' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120'
        ]);

        // Mengambil semua data request kecuali 'foto_meter'
        $pelangganData = $request->except('foto_meter');

        // Jika ada file yang diunggah
        if ($request->hasFile('foto_meter')) {
            // Menyimpan file dan mendapatkan path-nya
            $filePath = $request->file('foto_meter')->store('pelanggan', 'public');
            $pelangganData['foto_meter'] = $filePath;
        }

        // Membuat data pelanggan
        Pelanggan::create($pelangganData);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('pelanggan.index')->with('success', 'Data berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pelanggan $pelanggan)
    {
        // return view('pelanggan.show', compact('pelanggan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        $merkmeter = MerkMeter::all();
        return view('data.pelanggan.edit-pelanggan', compact('pelanggan', 'merkmeter'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'no_sp' => 'required',
            'nama_pelanggan' => 'required',
            'alamat' => 'required',
            'wilayah' => 'required|not_in:Pilih Wilayah',
            'merk_meter_id' => 'nullable|exists:merk_meters,id',
            'kondisi_meter' => 'nullable',
            'tanggal_cek' => 'nullable|date',
            'foto_meter' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120'
        ]);

        $pelanggan = Pelanggan::findOrFail($id);
        $pelangganData = $request->except('foto_meter');

        if ($request->hasFile('foto_meter')) {
            // Delete old file if exists
            if ($pelanggan->foto_meter && Storage::exists($pelanggan->foto_meter)) {
                Storage::delete($pelanggan->foto_meter);
            }

            // Store new file and get its path
            $filePath = $request->file('foto_meter')->store('pelanggan', 'public');
            $pelangganData['foto_meter'] = $filePath;
        }

        $pelanggan->update($pelangganData);

        return redirect()->route('pelanggan.index')->with('success', 'Data berhasil diperbarui!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pelanggan $pelanggan)
    {
        $pelanggan->delete();
        return redirect()->route('pelanggan.index')->with('success', 'Data Berhasil Dihapus!');
    }
}

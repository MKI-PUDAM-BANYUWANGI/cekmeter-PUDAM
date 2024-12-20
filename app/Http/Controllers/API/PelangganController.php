<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Pelanggan;
use App\Models\Wilayah;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pelanggan = Pelanggan::with('wilayah')->get();
        return response()->json($pelanggan, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'kode_wilayah' => 'required|string|size:2',
            'no_sp_lain' => 'required|string|max:255',
            'nama_pelanggan' => 'required|string|max:255',
            'alamat' => 'required|string',
        ]);

        $no_sp = $request->kode_wilayah . $request->no_sp_lain;

        // Cari wilayah berdasarkan kode_wilayah
        $wilayah = Wilayah::where('kode_wilayah', $request->kode_wilayah)->first();

        if (!$wilayah) {
            return response()->json(['message' => 'Wilayah Tidak Ditemukan'], 404);
        }

        // Simpan data pelanggan
        $pelanggan = Pelanggan::create([
            'no_sp' => $no_sp,
            'nama_pelanggan' => $request->nama_pelanggan,
            'alamat' => $request->alamat,
            'kode_wilayah' => $wilayah->kode_wilayah,
        ]);

        return response()->json(['message' => 'Data Pelanggan Berhasil Ditambahkan', 'data' => $pelanggan], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($no_sp)
    {
        $pelanggan = Pelanggan::with('wilayah')->where('no_sp', $no_sp)->first();

        if (!$pelanggan) {
            return response()->json(['message' => 'Pelanggan Tidak Ditemukan'], 404);
        }

        return response()->json($pelanggan, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $no_sp)
    {
        // Validasi input
        $request->validate([
            'kode_wilayah' => 'required|string|size:2',
            'no_sp_lain' => 'required|string|max:255',
            'nama_pelanggan' => 'required|string|max:255',
            'alamat' => 'required|string',
        ]);

        $pelanggan = Pelanggan::where('no_sp', $no_sp)->first();

        if (!$pelanggan) {
            return response()->json(['message' => 'Pelanggan Tidak Ditemukan'], 404);
        }

        $new_no_sp = $request->kode_wilayah . $request->no_sp_lain;
        $wilayah = Wilayah::where('kode_wilayah', $request->kode_wilayah)->first();

        if (!$wilayah) {
            return response()->json(['message' => 'Wilayah Tidak Ditemukan'], 404);
        }

        // Update data pelanggan
        $pelanggan->update([
            'no_sp' => $new_no_sp,
            'nama_pelanggan' => $request->nama_pelanggan,
            'alamat' => $request->alamat,
            'kode_wilayah' => $wilayah->kode_wilayah,
        ]);

        return response()->json(['message' => 'Data Pelanggan Berhasil Diperbarui', 'data' => $pelanggan], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($no_sp)
    {
        $pelanggan = Pelanggan::where('no_sp', $no_sp)->first();

        if (!$pelanggan) {
            return response()->json(['message' => 'Pelanggan Tidak Ditemukan'], 404);
        }

        $pelanggan->delete();
        return response()->json(['message' => 'Data Pelanggan Berhasil Dihapus'], 200);
    }

    /**
     * Search pelanggan by no_sp.
     */
    public function search(Request $request)
    {
        $no_sp = $request->input('no_sp');
        $pelanggan = Pelanggan::with('wilayah')
            ->where('no_sp', $no_sp)
            ->first();

        if ($pelanggan) {
            return response()->json([
                'nama_pelanggan' => $pelanggan->nama_pelanggan,
                'alamat' => $pelanggan->alamat,
                'wilayah' => $pelanggan->wilayah->nama_wilayah ?? 'Tidak Diketahui',
                'no_sp' => $pelanggan->no_sp
            ]);
        } else {
            return response()->json(null, 404);
        }
    }
}

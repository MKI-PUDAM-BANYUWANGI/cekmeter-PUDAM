<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\MerkMeter;
use Illuminate\Http\Request;

class MerkMeterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $merks = MerkMeter::all();

        return response()->json([
            'success' => true,
            'message' => 'Data Merk Meter berhasil diambil',
            'data' => $merks
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'nama_merk' => 'required|min:3',
            'deskripsi' => 'nullable|string'
        ]);

        // Simpan data
        $merk = MerkMeter::create($validatedData);

        return response()->json([
            'success' => true,
            'message' => 'Data Merk Meter berhasil ditambahkan',
            'data' => $merk
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $merk = MerkMeter::find($id);

        if (!$merk) {
            return response()->json([
                'success' => false,
                'message' => 'Data Merk Meter tidak ditemukan'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Data Merk Meter berhasil diambil',
            'data' => $merk
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $merk = MerkMeter::find($id);

        if (!$merk) {
            return response()->json([
                'success' => false,
                'message' => 'Data Merk Meter tidak ditemukan'
            ], 404);
        }

        // Validasi input
        $validatedData = $request->validate([
            'nama_merk' => 'required|string|max:255',
            'deskripsi' => 'nullable|string'
        ]);

        // Update data
        $merk->update($validatedData);

        return response()->json([
            'success' => true,
            'message' => 'Data Merk Meter berhasil diupdate',
            'data' => $merk
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $merk = MerkMeter::find($id);

        if (!$merk) {
            return response()->json([
                'success' => false,
                'message' => 'Data Merk Meter tidak ditemukan'
            ], 404);
        }

        $merk->delete();

        return response()->json([
            'success' => true,
            'message' => 'Data Merk Meter berhasil dihapus'
        ], 200);
    }
}

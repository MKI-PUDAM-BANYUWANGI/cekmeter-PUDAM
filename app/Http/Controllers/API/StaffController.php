<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $staffs = Staff::with('wilayah')->get();

        return response()->json([
            'success' => true,
            'message' => 'List Data Staff',
            'data' => $staffs
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nip' => 'required|unique:staff,nip',
            'nama_staff' => 'required|string|max:255',
            'no_telepon' => 'required|string|max:15',
            'kode_wilayah' => 'required|string|max:10',
            'password' => 'required|string|min:6',
        ]);

        $staff = Staff::create([
            'nip' => $validatedData['nip'],
            'nama_staff' => $validatedData['nama_staff'],
            'no_telepon' => $validatedData['no_telepon'],
            'kode_wilayah' => $validatedData['kode_wilayah'],
            'password' => $validatedData['password'], // Hash password
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Data Staff Berhasil Ditambahkan',
            'data' => $staff
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($nip)
    {
        $staff = Staff::where('nip', $nip)->first();

        if (!$staff) {
            return response()->json([
                'success' => false,
                'message' => 'Data Staff Tidak Ditemukan'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Detail Data Staff',
            'data' => $staff
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $nip)
    {
        $staff = Staff::where('nip', $nip)->first();

        if (!$staff) {
            return response()->json([
                'success' => false,
                'message' => 'Data Staff Tidak Ditemukan'
            ], 404);
        }

        $validatedData = $request->validate([
            'nama_staff' => 'required|string|max:255',
            'no_telepon' => 'required|string|max:15',
            'kode_wilayah' => 'required|string|max:10',
            'password' => 'nullable|string|min:6',
        ]);

        $staff->update([
            'nama_staff' => $validatedData['nama_staff'],
            'no_telepon' => $validatedData['no_telepon'],
            'kode_wilayah' => $validatedData['kode_wilayah'],
            'password' => $validatedData['password'],
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Data Staff Berhasil Diupdate',
            'data' => $staff
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($nip)
    {
        $staff = Staff::where('nip', $nip)->first();

        if (!$staff) {
            return response()->json([
                'success' => false,
                'message' => 'Data Staff Tidak Ditemukan'
            ], 404);
        }

        $staff->delete();

        return response()->json([
            'success' => true,
            'message' => 'Data Staff Berhasil Dihapus'
        ], 200);
    }
}

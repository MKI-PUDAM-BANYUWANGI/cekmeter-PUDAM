<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Http\Requests\StoreStaffRequest;
use App\Http\Requests\UpdateStaffRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Hash;
use App\Models\Wilayah;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;


class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $staffs = Staff::all();
        $wilayah = Wilayah::all();
        return view('data.staff.staff', compact('staffs', 'wilayah'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $wilayah = Wilayah::all();
        return view('data.staff.tambahstaff', compact('wilayah'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nip' => 'required',
            'nama_staff' => 'required',
            'no_telepon' => 'required',
            'kode_wilayah' => 'required',
            'password' => 'required',
        ]);

        Staff::create([
            'nip' => $request->nip,
            'nama_staff' => $request->nama_staff,
            'no_telepon' => $request->no_telepon,
            'kode_wilayah' => $request->kode_wilayah,
            'password' => $request->password,
        ]);

        // Menampilkan SweetAlert
        Alert::success('Berhasil!', 'Data Staff Berhasil Ditambahkan!');

        return redirect()->route('staff.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($nip)
    {
        $staff = Staff::findOrFail($nip);
        $wilayah = Wilayah::all();
        return view('data.staff.editstaff', compact('staff', 'wilayah'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $nip)
    {
        $request->validate([
            'nip' => 'required',
            'nama_staff' => 'required',
            'no_telepon' => 'required',
            'kode_wilayah' => 'required',
            'password' => 'required',
        ]);

        $staffs = Staff::findOrFail($nip);
        $staffs->update([
            'nip' => $request->nip,
            'nama_staff' => $request->nama_staff,
            'no_telepon' => $request->no_telepon,
            'kode_wilayah' => $request->kode_wilayah,
            'password' => $request->password ? ($request->password) : $staffs->password,
        ]);

        // Menampilkan SweetAlert
        Alert::success('Berhasil!', 'Data Staff berhasil diperbarui!');

        return redirect()->route('staff.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($nip)
    {
        Staff::findOrFail($nip)->delete();
        // Menampilkan SweetAlert
        Alert::success('Berhasil!', 'Data Staff berhasil dihapus!');
        return redirect()->route('staff.index');
    }
}

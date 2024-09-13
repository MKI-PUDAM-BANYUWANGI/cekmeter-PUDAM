<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


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
        return view('data.pelanggan.tambah-pelanggan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'no_sp' => 'required',
            'nama_pelanggan' => 'required',
            'alamat' => 'required',
            'wilayah' => 'required|not_in:Pilih Wilayah',
        ]);

        // Membuat data pelanggan
        Pelanggan::create($validatedData);

        // Menampilkan SweetAlert
        Alert::success('Berhasil!', 'Data Pelanggan Berhasil Ditambahkan!');

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('pelanggan.index');
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
        return view('data.pelanggan.edit-pelanggan', compact('pelanggan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        $validatedData = $request->validate([
            'no_sp' => 'required',
            'nama_pelanggan' => 'required',
            'alamat' => 'required',
            'wilayah' => 'required|not_in:Pilih Wilayah',
        ]);

        // Update Data
        $pelanggan->update($validatedData);

        // Menampilkan SweetAlert
        Alert::success('Berhasil!', 'Data Pelanggan Berhasil Diperbarui!');

        return redirect()->route('pelanggan.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pelanggan $pelanggan)
    {
        $pelanggan->delete();
        // Menampilkan SweetAlert
        Alert::success('Berhasil!', 'Data Pelanggan Berhasil Dihapus!');

        return redirect()->route('pelanggan.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\MerkMeter;
use Illuminate\Http\Request;

class MerkMeterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('data.merkmeter.merkmeter', [
            'merks' => MerkMeter::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('data.merkmeter.tambahmerkmeter');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_merk' => 'nullable'
        ]);

        MerkMeter::create($validatedData);

        return redirect(route('merkmeter.index'))->with('Berhasil menambahkan merk meter!');

    }

    /**
     * Display the specified resource.
     */
    public function show(MerkMeter $merk)
    {
        // return view('data.merkmeter.merkmeter', [
        //     'nama_merk' => $merk
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $merk = MerkMeter::findorfail($id);
        return view('data.merkmeter.editmerkmeter', [
            'merk' => $merk
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $merk = MerkMeter::findOrFail($id);
        $validatedData = $request->validate([
        'nama_merk' => 'required|string|max:255',
        ]);
        $merk->update($validatedData);
    
        return redirect(route('merkmeter.index'))->with('success', 'Berhasil mengubah merk!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $merk = MerkMeter::findOrFail($id);
        $merk->delete();
        return redirect(route('merkmeter.index'))->with('success', 'Berhasil menghapus merk!');
    }
}

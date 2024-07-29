<?php

namespace App\Http\Controllers;

use App\Models\MerkMeter;
use App\Http\Requests\StoreMerkMeterRequest;
use App\Http\Requests\UpdateMerkMeterRequest;

class MerkMeterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('data.merkmeter.merkmeter', [
            //
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('data.merkmeter.tambahmerkmeter', [
            //
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMerkMeterRequest $request)
    {
        $validatedData = $request->validate([
            'nama_merk' => 'nullable'
        ]);

        MerkMeter::create($validatedData);

        return redirect(route('data.merkmeter.merkmeter'))->with('Berhasil menambahkan merk meter!');

    }

    /**
     * Display the specified resource.
     */
    public function show(MerkMeter $merkMeter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MerkMeter $merkMeter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMerkMeterRequest $request, MerkMeter $merkMeter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MerkMeter $merkMeter)
    {
        //
    }
}

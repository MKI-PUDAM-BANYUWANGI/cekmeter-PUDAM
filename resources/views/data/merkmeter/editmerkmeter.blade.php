@extends('layout.dashboard-layout')

@section('title','Admin Dashboard - CekMeter PUDAM')

@section('main-content')
<div class="container-fluid">
    <div class="card card-info card-outline">
        <div class="card-header bg-primary">
            <h3 style="color:white;">Edit Tambah Data Merk Meter</h3>
        </div>
        <div class="card-body">
            <form action="/merkmeter">
                <div class="form-group">
                    <label for="namamerkmeter">Nama Merk Meter</label>
                    <input type="text" id="namamerkmeter" name="namamerkmeter" class="form-control" placeholder="Masukan Nama Merk Meter">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Ubah Data</button>
                    <button type="reset" class="btn btn-danger">Reset Data</button>
                </div>
            </form>
        </div>
    </div>

</div>

@endsection
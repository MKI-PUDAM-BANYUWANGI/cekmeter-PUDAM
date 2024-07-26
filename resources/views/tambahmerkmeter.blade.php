@extends('layout.dashboard-layout')

@section('title','Admin Dashboard - CekMeter PUDAM')

@section('main-content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h4 mb-0 text-gray-800">Tambah Merk Meter</h1>
    </div>

    <form>
        <div class="form-group">
            <label for="exampleInputEmail1">Nama Merk Meter</label>
            <input type="text" class="form-control" id="namamerkmeter" aria-describedby="emailHelp" placeholder="Nama Merk Meter">
        </div>
        <button type="submit" class="btn btn-primary">Tambah Merk</button>
</form>
    
</div>

@endsection
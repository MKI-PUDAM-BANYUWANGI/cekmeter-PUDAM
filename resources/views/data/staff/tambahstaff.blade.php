@extends('layout.dashboard-layout')

@section('title','Admin Dashboard - Data Staff')

@section('main-content')

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header bg-primary">
            <h3 style="color:white;">Form Tambah Petugas Lapangan</h3>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
        <div class="card-body">
            <form action="{{ route('staff.store') }}" method="POST">
            @csrf
                <div class="form-group">
                    <label for="nip" class="form-label">NIP</label>
                    <input type="number" class="form-control" id="nip" name="nip" required>
                </div>
                <div class="form-group">
                    <label for="namastaff" class="form-label">Nama Staff</label>
                    <input type="text" class="form-control" id="namastaff"  name="nama_staff" required>
                </div>
                <div class="form-group">
                    <label for="notelepon" class="form-label">No. Telepon</label>
                    <input type="number" class="form-control" id="notelepon" name="no_telepon" required>
                </div>
                <div class="form-group">
                    <label for="wilayah" class="form-label">Wilayah</label>
                    <select id="kode_wilayah" name="kode_wilayah" class="form-control">
                        <option value="" disabled selected>Pilih Wilayah</option>
                        @foreach ($wilayah as $wilayah)
                            <option value="{{ $wilayah['kode_wilayah'] }}">{{ $wilayah['kode_wilayah'] }} - {{ $wilayah['nama_wilayah'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                    <button type="reset" class="btn btn-danger">Reset Data</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

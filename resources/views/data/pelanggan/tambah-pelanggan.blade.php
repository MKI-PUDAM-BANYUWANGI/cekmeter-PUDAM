@extends('layout.dashboard-layout')

@section('title','Admin Dashboard - Tambah Pelanggan')

@section('main-content')
<div class="container-fluid">
    <div class="card card-info card-outline">
        <div class="card-header bg-primary">
            <h3 style="color:white;">Form Tambah Data Pelanggan</h3>
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
            <form action="{{ route('pelanggan.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="no_sp">Nomor SP</label>
                    <input type="number" id="no_sp" name="no_sp" class="form-control" placeholder="Masukan Nomor SP" required>
                </div>
                <div class="form-group">
                    <label for="nama">Nama Pelanggan</label>
                    <input type="text" id="nama_pelanggan" name="nama_pelanggan" class="form-control" placeholder="Masukan Nama Pelanggan" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat Pelanggan</label>
                    <textarea type="text" id="alamat" name="alamat" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="wilayah">Wilayah</label>
                    <select id="wilayah" name="wilayah" class="form-control">
                        <option selected>Pilih Wilayah</option>
                        <option>01 - Banyuwangi</option>
                        <option>02 - Rogojampi</option>
                        <option>03 - Muncar</option>
                        <option>04 - Genteng</option>
                        <option>05 - Wongsorejo</option>
                        <option>06 - Tegaldlimo</option>
                    </select>
                </div>
                {{-- <div class="form-group">
                    <label for="merk_meter_id">Merk Meter</label>
                    <select class="form-control" id="merk_meter_id" name="merk_meter_id">
                        <option value="">Pilih Merk Meter</option>
                        @foreach($merkmeter as $meter)
                            <option value="{{ $meter->id }}">{{ $meter->nama_merk }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="kondisi_meter">Kondisi Meter</label>
                    <select id="kondisi_meter" name="kondisi_meter" class="form-control">
                        <option selected>Pilih Kondisi Meter</option>
                        <option value="Sangat Baik">Sangat Baik</option>
                        <option value="Baik">Baik</option>
                        <option value="Buruk">Buruk</option>
                        <option value="Sangat Buruk">Sangat Buruk</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tanggal_cek">Tanggal Cek</label>
                    <input type="date" class="form-control" id="tanggal_cek" name="tanggal_cek">
                </div>
                <div class="form-group">
                    <label for="foto_meter">Foto Meter</label>
                    <input type="file" class="form-control" id="foto_meter" name="foto_meter">
                </div> --}}
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                    <button type="reset" class="btn btn-danger">Reset Data</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

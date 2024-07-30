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
                {{-- <div class="form-group">
                    <label for="nosp">Nomor SP</label>
                    <input type="number" id="no_sp" name="nosp" class="form-control" placeholder="Masukan Nomor SP">
                </div>
                <div class="form-group">
                    <label for="nama">Nama Pelanggan</label>
                    <input type="text" id="nama_pelanggan" name="nama" class="form-control" placeholder="Masukan Nama Pelanggan">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat Pelanggan</label>
                    <textarea type="text" id="alamat" name="alamat" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="wilayah">Wilayah</label>
                    <select id="wilayah" name="wilayah" class="form-control">
                        <option selected>Pilih Wilayah</option>
                        <option value="1">01 - Banyuwangi</option>
                        <option value="2">02 - Rogojampi</option>
                        <option value="3">03 - Muncar</option>
                        <option value="4">04 - Genteng</option>
                        <option value="5">05 - Wongsorejo</option>
                        <option value="6">06 - Tegaldlimo</option>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                    <button type="reset" class="btn btn-danger">Reset Data</button>
                </div> --}}
                <div class="form-group">
                    <label for="no_sp">Nomor SP:</label>
                    <input type="text" class="form-control" id="no_sp" name="no_sp" required>
                </div>
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat:</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" required>
                </div>
                <div class="form-group">
                    <label for="wilayah">Wilayah:</label>
                    <input type="text" class="form-control" id="wilayah" name="wilayah" required>
                </div>
                <div class="form-group">
                    <label for="merk_meter">Merk Meter:</label>
                    <input type="text" class="form-control" id="merk_meter" name="merk_meter">
                </div>
                <div class="form-group">
                    <label for="kondisi_meter">Kondisi Meter:</label>
                    <input type="text" class="form-control" id="kondisi_meter" name="kondisi_meter">
                </div>
                <div class="form-group">
                    <label for="tanggal_cek">Tanggal Cek:</label>
                    <input type="date" class="form-control" id="tanggal_cek" name="tanggal_cek">
                </div>
                <div class="form-group">
                    <label for="foto_meter">Foto Meter:</label>
                    <input type="file" class="form-control-file" id="foto_meter" name="foto_meter">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection

@extends('layout.dashboard-layout')

@section('title','Admin Dashboard - Tambah Pelanggan')

@section('main-content')
<div class="container-fluid">
    <div class="card card-info card-outline">
        <div class="card-header bg-primary">
            <h3 style="color:white;">Form Tambah Data Pelanggan</h3>
        </div>
        <div class="card-body">
            <form action="/pelanggan">
                <div class="form-group">
                    <label for="nosp">Nomor SP</label>
                    <input type="number" id="nosp" name="nosp" class="form-control" placeholder="Masukan Nomor SP">
                </div>
                <div class="form-group">
                    <label for="nama">Nama Pelanggan</label>
                    <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukan Nama Pelanggan">
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
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

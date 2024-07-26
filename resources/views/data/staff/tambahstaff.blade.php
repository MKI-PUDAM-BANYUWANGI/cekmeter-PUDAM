@extends('layout.dashboard-layout')

@section('title','Admin Dashboard - Data Staff')

@section('main-content')

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header bg-primary">
            <h3 style="color:white;">Tambah Staff/User</h3>
        </div>
        <div class="card-body">
            <form action="/staff">
                <div class="mb-3">
                  <label for="nip" class="form-label">NIP</label>
                  <input type="number" class="form-control" id="nip">
                </div>
                <div class="mb-3">
                  <label for="namastaff" class="form-label">Nama Staff</label>
                  <input type="text" class="form-control" id="namastaff">
                </div>
                <div class="mb-3">
                  <label for="alamat" class="form-label">Alamat</label>
                  <input type="text" class="form-control" id="alamat">
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email">
                </div>
                <div class="mb-3">
                  <label for="notelepon" class="form-label">No. Telepon</label>
                  <input type="number" class="form-control" id="notelepon">
                </div>
                <div class="mb-3">
                        <label for="inputState" class="form-label">Wilayah</label>
                        <select id="inputState" class="form-control">
                          <option selected>Pilih Wilayah</option>
                          <option>01 - Banyuwangi</option>
                          <option>02 - Rogojampi</option>
                          <option>03 - Muncar</option>
                          <option>04 - Genteng</option>
                          <option>05 - Wongsorejo</option>
                          <option>06 - Tegaldlimo</option>
                        </select>
                </div>
                <br>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                    <button type="reset" class="btn btn-danger">Reset Data</button>
                </div>
              </form>
        </div>
    </div>
</div>

@endsection

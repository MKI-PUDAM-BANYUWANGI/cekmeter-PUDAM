@extends('layout.dashboard-layout')

@section('title','Data Staff')

@section('main-content')

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Staff/User</h1>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <form>
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
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <a href="/staff">
                    <button type="button" class="btn btn-primary">Tambah Staff</button>
                </a>
              </form>
        </div>
    </div>
</div>

@endsection
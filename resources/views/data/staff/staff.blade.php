@extends('layout.dashboard-layout')

@section('title','Data Staff')

@section('main-content')

{{-- Tabel Data User --}}
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Staff/User</h1>
        <a href="/tambahstaff" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Tambah Data <i></i></a>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width:"100%" cellspacing="0">
              <thead class="text-center">
                <tr>
                  <th scope="col">No.</th>
                  <th scope="col">NIP</th>
                  <th scope="col">Nama</th>
                  <th scope="col">No.Telp</th>
                  <th scope="col">Wilayah</th>
                  <th scope="col">Password</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>2929</td>
                  <td>Rio Adjie Wiguna</td>
                  <td>087857373900</td>
                  <td>Singojuruh</td>
                  <td>12345</td>
                  <td>
                      <!-- Update Button -->
                      <a href="#" class="btn btn-info"><i class="fas fa-edit"></i></a>
                      <!-- Delete Button -->
                      <a href="#" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                  </td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>2929</td>
                  <td>Wahyu Eka Saputra</td>
                  <td>087857373900</td>
                  <td>Srono</td>
                  <td>12345</td>
                  <td>
                    <!-- Update Button -->
                    <a href="#" class="btn btn-info"><i class="fas fa-edit"></i></a>
                    <!-- Delete Button -->
                    <a href="#" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                  </td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>2929</td>
                  <td>Ken Affila Syach Maulana</td>
                  <td>087857373900</td>
                  <td>Giri</td>
                  <td>12345</td>
                  <td>
                    <!-- Update Button -->
                    <a href="#" class="btn btn-info"><i class="fas fa-edit"></i></a>
                    <!-- Delete Button -->
                    <a href="#" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                  </td>
                </tr>
              </tbody>
            </table>
            </div>
        </div>
    </div>


</div>


@endsection

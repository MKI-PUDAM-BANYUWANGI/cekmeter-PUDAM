@extends('layout.dashboard-layout')

@section('title','Admin Dashboard - Data Pelanggan')

@section('main-content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Pelanggan PUDAM Banyuwangi</h1>
        <a href="/tambah-pelanggan" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Tambah Data <i></i></a>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="text-center">
                        <tr>
                            <th>No</th>
                            <th>Nomor SP</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Wilayah</th>
                            <th>Foto Meter</th>
                            <th>Merk Meter</th>
                            <th>Kondisi Meter</th>
                            <th>Tanggal Cek</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr>
                            <td>1</td>
                            <td>01234567</td>
                            <td>Ken Affila</td>
                            <td>Giri</td>
                            <td>Banyuwangi</td>
                            <td>
                                <img src="{{ asset('../assets/logo-cekmeter.png') }}" alt="cek-meter" width="50px" height="50px">
                            </td>
                            <td>Sanyo</td>
                            <td>Baik</td>
                            <td>25 Juli 2024</td>
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


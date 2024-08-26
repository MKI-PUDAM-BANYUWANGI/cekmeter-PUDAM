@extends('layout.dashboard-layout')

@section('title','Admin Dashboard - Edit Pelanggan')

@section('main-content')
<div class="container-fluid">
    <div class="card card-info card-outline">
        <div class="card-header bg-primary">
            <h3 style="color:white;">Form Ubah Data Pelanggan</h3>
            @if ($errors->any())
            <div class="alert alert-danger my-3">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @if (Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show mb-3" role="alert">
                {{ Session::get('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            @if (Session::get('error'))
            <div class="alert alert-danger alert-dismissible fade show mb-3" role="alert">
                {{ Session::get('danger') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
        </div>
        <div class="card-body">
            <form action="{{ route('pelanggan.update', $pelanggan->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="no_sp">Nomor SP</label>
                    <input type="number" id="no_sp" name="no_sp" class="form-control" placeholder="Masukan Nomor SP" value="{{ $pelanggan->no_sp }}">
                </div>
                <div class="form-group">
                    <label for="nama_pelanggan">Nama Pelanggan</label>
                    <input type="text" id="nama_pelanggan" name="nama_pelanggan" class="form-control" placeholder="Masukan Nama Pelanggan" value="{{ $pelanggan->nama_pelanggan }}">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat Pelanggan</label>
                    <textarea type="text" id="alamat" name="alamat" class="form-control">{{  $pelanggan->alamat  }}</textarea>
                </div>
                <div class="form-group">
                    <label for="wilayah">Wilayah</label>
                    <select id="wilayah" name="wilayah" class="form-control">
                        <option value="">Pilih Wilayah</option>
                        <option value="01 - Banyuwangi" {{ old('wilayah', $pelanggan->wilayah) == '01 - Banyuwangi' ? 'selected' : '' }}>01 - Banyuwangi</option>
                        <option value="02 - Rogojampi" {{ old('wilayah', $pelanggan->wilayah) == '02 - Rogojampi' ? 'selected' : '' }}>02 - Rogojampi</option>
                        <option value="03 - Muncar" {{ old('wilayah', $pelanggan->wilayah) == '03 - Muncar' ? 'selected' : '' }}>03 - Muncar</option>
                        <option value="04 - Genteng" {{ old('wilayah', $pelanggan->wilayah) == '04 - Genteng' ? 'selected' : '' }}>04 - Genteng</option>
                        <option value="05 - Wongsorejo" {{ old('wilayah', $pelanggan->wilayah) == '05 - Wongsorejo' ? 'selected' : '' }}>05 - Wongsorejo</option>
                        <option value="06 - Tegaldlimo" {{ old('wilayah', $pelanggan->wilayah) == '06 - Tegaldlimo' ? 'selected' : '' }}>06 - Tegaldlimo</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="merk_meter_id">Merk Meter</label>
                    <select class="form-control" id="merk_meter_id" name="merk_meter_id">
                        <option value="">Pilih Merk Meter</option>
                        @foreach($merkmeter as $meter)
                            <option value="{{ $meter->id }}" {{ $meter->id == $pelanggan->merk_meter_id ? 'selected' : '' }}>{{ $meter->nama_merk }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="kondisi_meter">Kondisi Meter</label>
                    <select id="kondisi_meter" name="kondisi_meter" class="form-control">
                        <option value="">Kondisi Meter</option>
                        <option value="Sangat Baik" {{ old('kondisi_meter', $pelanggan->kondisi_meter) == 'Sangat Baik' ? 'selected' : '' }}>Sangat Baik</option>
                        <option value="Baik" {{ old('kondisi_meter', $pelanggan->kondisi_meter) == 'Baik' ? 'selected' : '' }}>Baik</option>
                        <option value="Buruk" {{ old('kondisi_meter', $pelanggan->kondisi_meter) == 'Buruk' ? 'selected' : '' }}>Buruk</option>
                        <option value="Sangat Buruk" {{ old('kondisi_meter', $pelanggan->kondisi_meter) == 'Sangat Buruk' ? 'selected' : '' }}>Sangat Buruk</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tanggal_cek">Tanggal Cek</label>
                    <input type="date" class="form-control" id="tanggal_cek" name="tanggal_cek" value="{{ $pelanggan->tanggal_cek }}">
                </div>
                <div class="form-group">
                    <label for="foto_meter">Foto Meter</label>
                    <input type="file" class="form-control" id="foto_meter" name="foto_meter">
                    @if ($pelanggan->foto_meter)
                        <img src="{{ asset('storage/' . $pelanggan->foto_meter) }}" alt="Foto Meter" style="max-width: 100px; margin-top: 10px;">
                    @endif
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

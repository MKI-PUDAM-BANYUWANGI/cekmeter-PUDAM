@extends('layout.dashboard-layout')

@section('title','Admin Dashboard - Profil Admin')

@section('main-content')

<div class="container-fluid">
  <h1 class="h3 mb-0 text-gray-800">Ubah Password</h1>
<form class="p-3">
    <fieldset>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password Lama</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
          </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password Baru</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
          </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Konfirmasi Password Baru</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
          </div>
    </fieldset>
    <a href="/profile">
        <button type="button" class="btn btn-primary">Ubah Password</button>
      </a>
    </form>
</div>
@endsection

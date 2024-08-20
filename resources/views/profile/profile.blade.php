@extends('layout.dashboard-layout')

@section('title','Admin Dashboard - Profil Admin')

@section('main-content')

<div class="container-fluid">
  <h1 class="h3 mb-0 text-gray-800">Profil Admin</h1>
<form class="p-3">
    <fieldset disabled="disabled">
      <div class="form-group">
        <label for="exampleInputEmail1">Nama</label>
        <input type="email" class="form-control" id="disabledTextInput" aria-describedby="emailHelp" placeholder="{{ Auth::user()-> name }}">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="{{ Auth::user()-> email }}">
      </div>
    </fieldset>
    <a href="/ubah-password">
      <button type="button" class="btn btn-primary">Ubah Password</button>
    </a>
    </form>
</div>



@endsection

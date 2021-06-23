@extends('layouts.dashboard.admin.dashboard')
@section('title', 'Advertisement TVRI')
@section('content')
<div class="row">
  <div class="col-12">
    <h1 class="h3 text-gray-800">Advertisement</h1>
    <div class="row">
      <div class="col-12 col-lg-6">
      </div>
      <div class="col-12 col-lg-6">
        @if (session('alert'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('alert') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif
      </div>
    </div>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
      <thead>
        <tr>
          <th>#</th>
          <th>Profil</th>
          <th>Nama</th>
          <th>Email</th>
          <th>Handphone</th>
          <th>Alamat</th>
          <th>Status</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
      </tbody>
    </table> 
  </div>
</div>
@endsection
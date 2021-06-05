@extends('layouts.dashboard.dashboard')
@section('title', 'Status Post Berita')
@section('content')
<div class="row justify-content-center">
  <div class="col-12">
    <h1 class="h3 text-gray-800">Status Post Berita</h1>
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
    <table class="table table-bordered table-striped" style="width: 100%" id="example">
      <thead>
        <tr>
          <th>#</th>
          <th>Judul Berita</th>
          <th>Status</th>
          <th>Hari / Tgl Upload</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @php
          $i = 1;
        @endphp
        @foreach ($statuses as $status)
          <tr>
            <th>{{ $i++ }}</th>
            <td>{{ $status->judul }}</td>
            <td>{{ $status->status->status }}</td>
            <td>{{ $status->status->hari . ' / ' . $status->status->tgl }}</td>
            <td>
              <a href="{{ route('adminstatus.edit', $status->status->id) }}" class="btn btn-info"><i class="fas fa-edit"></i></a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
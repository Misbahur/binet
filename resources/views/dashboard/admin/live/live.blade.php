@extends('layouts.dashboard.admin.dashboard')
@section('title', 'Stream')
@section('content')
<div class="row justify-content-center">
  <div class="col-12">
    <h1 class="h3 text-gray-800">Buat Stream</h1>
    <div class="row">
      <div class="col-12 col-lg-6">
        <a href="{{ route('adminlive.create') }}" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Buat Stream</a>
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
          <th>Judul</th>
          <th>Slug</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @php
          $i = 1;
        @endphp
        @foreach ($lives as $live)
          <tr>
            <th>{{ $i++ }}</th>
            <td>{{ $live->judul }}</td>
            <td>{{ $live->slug }}</td>
            <td>
              <a href="{{ route('adminlive.edit', $live->id) }}" class="btn btn-info"><i class="fas fa-edit"></i></a>
              {{-- <a href="{{ route('adminlive.show', $live->id) }}" class="btn btn-success"><i class="fas fa-eye"></i></a> --}}
              <form action="{{ route('adminlive.destroy', $live->id) }}" method="POST" class="d-inline">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
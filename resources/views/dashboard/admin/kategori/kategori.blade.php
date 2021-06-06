@extends('layouts.dashboard.admin.dashboard')
@section('title', 'Kategori Berita')
@section('content')
<div class="row">
  <div class="col-12">
    <h1 class="h3 text-gray-800">Kategori Berita</h1>
    <div class="row">
      <div class="col-12 col-lg-6">
        <a href="{{ route('kategori.create') }}" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Tabah Kategori</a>
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
          <th>Kategori</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @php
          $i = 1;
        @endphp
        @foreach ($categories as $category)
          <tr>
            <th>{{ $i++ }}</th>
            <td>{{ $category->kategori }}</td>
            <td>
              <a href="{{ route('kategori.edit', $category->id) }}" class="btn btn-info"><i class="fas fa-edit"></i></a>
              <form action="{{ route('kategori.destroy', $category->id) }}" method="POST" class="d-inline">
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
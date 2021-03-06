@extends('layouts.dashboard.author.dashboard')
@section('title', 'Berita')
@section('content')
<div class="row">
  <div class="col-12">
    <h1 class="h3 text-gray-800">Daftar Berita</h1>
    @if (!Auth::user()->alamat)
    <div class="row">
      <div class="col-12">
        <div class="alert alert-success" role="alert">
          Selamat datang {{ Auth::user()->name }}, silahkan lengkapi profil  kamu untuk melengkapi syarat sebagai author kami.
        </div>
      </div>
    </div>
    @endif
    <div class="row">
      <div class="col-12 col-lg-6">
        <a href="{{ route('authorberita.create') }}" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Tulis Berita</a>
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
          <th>Thumbnail</th>
          <th>Banner</th>
          <th>Kategori</th>
          <th>Status</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @php
          $i = 1;
        @endphp
        @foreach ($news as $news)
          <tr>
            <th>{{ $i++ }}</th>
            <td>{{ $news->judul }}</td>
            <td>{{ $news->slug }}</td>
            <td><img src="{{ url('/storage/thumbnail/', $news->thumbnail) }}" alt="Thumbnail" width="150px"></td>
            <td><img src="{{ url('/storage/banner/', $news->banner) }}" alt="Banner" width="150px"></td>
            <td>{{ $news->kategori }}</td>
            <td>{{ $news->status->status }}</td>
            <td>
              <a href="{{ route('authorberita.show', $news->id) }}" class="btn btn-success m-1"><i class="fas fa-eye"></i></a>
              <a href="{{ route('authorberita.edit', $news->id) }}" class="btn btn-info  m-1"><i class="fas fa-edit"></i></a>
              <form action="{{ route('authorberita.destroy', $news->id) }}" method="POST" class="d-inline">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger m-1"><i class="fas fa-trash"></i></button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
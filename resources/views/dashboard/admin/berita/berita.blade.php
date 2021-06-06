@extends('layouts.dashboard.admin.dashboard')
@section('title', 'Berita')
@section('content')
<div class="row">
  <div class="col-12">
    <h1 class="h3 text-gray-800">Daftar Berita</h1>
    <div class="row">
      <div class="col-12 col-lg-6">
        <a href="{{ route('adminberita.create') }}" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Tulis Berita</a>
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
          <th>Author</th>
          <th>Judul</th>
          <th>Slug</th>
          <th>Kategori</th>
          <th>Status</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @php
        $i = 1;
        @endphp
        @foreach ($users as $user)
          <tr>
            <th>{{ $i++ }}</th>
            <td>{{ $user->name }}</td>
            <td class="overflow-auto">
              @foreach ($user->news as $news)
                <ul>
                  <li>
                    {{ $news->judul }}
                  </li>
                </ul>
              @endforeach
            </td>
            <td>
              @foreach ($user->news as $news)
                <ul>
                  <li>{{ $news->slug }}</li>
                </ul>
              @endforeach
            </td>
            <td>
              @foreach ($user->news as $news)
                <ul>
                  <li>{{ $news->kategori }}</li>
                </ul>
              @endforeach
            </td>
            <th>
              @foreach ($user->news as $news)
                <ul>
                  <li>{{ $news->status->status }}</li>
                </ul>
              @endforeach
            </th>
            <td>
              <a href="{{ route('adminberita.show', $user->id) }}" class="btn btn-success"><i class="fas fa-info-circle"></i></a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table> 
  </div>
</div>
@endsection
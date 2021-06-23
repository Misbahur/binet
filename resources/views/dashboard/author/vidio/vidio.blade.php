@extends('layouts.dashboard.author.dashboard')
@section('title', 'Video')
@section('content')
<div class="row justify-content-center">
  <div class="col-12">
    <h1 class="h3 text-gray-800">Upload Video</h1>
    <div class="row">
      <div class="col-12 col-lg-6">
        <a href="{{ route('authorvidio.create') }}" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Upload Video</a>
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
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @php
          $i = 1;
        @endphp
        @foreach ($videos as $video)
          <tr>
            <th>{{ $i++ }}</th>
            <td>{{ $video->judul }}</td>
            <td>{{ $video->slug }}</td>
            <td>
              <img src="{{ url('/storage/video/thumbnail', $video->thumbnail) }}" alt="Thumbnail" width="120px">
            </td>
            <td>
              <a href="{{ route('authorvidio.edit', $video->id) }}" class="btn btn-info"><i class="fas fa-edit"></i></a>
              <a href="{{ route('authorvidio.show', $video->id) }}" class="btn btn-success"><i class="fas fa-eye"></i></a>
              <form action="{{ route('authorvidio.destroy', $video->id) }}" method="POST" class="d-inline">
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
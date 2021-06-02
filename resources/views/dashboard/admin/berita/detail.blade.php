@extends('layouts.dashboard.dashboard')
@section('title', 'Detail Author Berita')
@section('content')
<div class="row">
  <div class="col-12">
    <h1 class="h3 text-gray-800">Detail Author Dan Berita Yang diPost</h1>
    <div class="card shadow">
      <div class="card-body">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Nama</th>
              <th>Berita</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th>{{ $users->name }}</th>
              <td>
                <table class="table table-bordered table-striped" style="100%" id="example">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Judul</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                      $i = 1;
                    @endphp
                    @forelse ($users->news as $news)
                      <tr>
                        <th>{{ $i++ }}</th>
                        <td>{{ $news->judul }}</td>
                        <td>{{ $news->status->status }}</td>
                        <td>
                          <a href="{{ route('adminberita.edit', $news->id) }}" class="btn btn-info"><i class="fas fa-edit"></i></a>
                          <a href="{{ route('adminberita.preview', $news->id) }}" class="btn btn-success"><i class="fas fa-eye"></i></a>
                          <form action="{{ route('adminberita.destroy', $news->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                          </form>
                        </td>
                      </tr>
                    @empty
                      <tr>
                        <td colspan="4" class="text-center">Belum ada berita yang di post</td>
                      </tr>
                    @endforelse
                  </tbody>
                </table>
              </td>
            </tr>
          </tbody>
        </table>
        <a href="{{ route('adminberita.index') }}" class="btn btn-warning">Kembali</a>
      </div>
    </div>
  </div>
</div>
@endsection
@extends('layouts.dashboard.admin.dashboard')
@section('title', 'Advertisement TVRI')
@section('content')
<div class="row">
  <div class="col-12">
    <h1 class="h3 text-gray-800">Advertisement</h1>
    <div class="row">
      <div class="col-12 col-lg-6">
        <a href="{{ route('iklan.create') }}" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Buat Iklan</a>
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
          <th>Perusahaan</th>
          <th>Awal Tampil</th>
          <th>Akhir Tampil</th>
          <th>Posisi</th>
          <th>url</th>
          <th>Iklan</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @php
          $i = 1;
        @endphp
        @foreach ($advertisements as $advertisement)
          <tr>
            <th>{{ $i++ }}</th>
            <td>{{ $advertisement->perusahaan }}</td>
            <td>{{ $advertisement->awalTampil }}</td>
            <td>{{ $advertisement->akhirTampil }}</td>
            <td>{{ $advertisement->posisi }}</td>
            <td><a href="{{ $advertisement->url }}" target="_blank">{{ $advertisement->url }}</a></td>
            <td><img src="{{ url('/storage/iklan', $advertisement->iklan) }}" alt="" width="200px" height="120px"></td>
            <td>
              <a href="{{ route('iklan.edit', $advertisement->id) }}" class="btn btn-info"><i class="fas fa-edit"></i></a>
              <form action="{{ route('iklan.destroy', $advertisement->id) }}" method="POST" class="d-inline">
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
@extends('layouts.dashboard.dashboard')
@section('title', 'Edit Status Post Berita')
@section('content')
<h1 class="h3 text-gray-800">Edit Status Post</h1>
<div class="row justify-content-center mt-3">
  <div class="col-12 col-lg-6">
    <div class="card shadow">
      <div class="card-body">
        <form action="{{ route('adminstatus.update', $status->id) }}" method="POST">
          @csrf
          @method('put')
          <div class="form-group">
            <label for="status">Status Post Berita</label>
            <select name="status" id="status" class="form-control @error('status') is-invalid @enderror">
              @foreach ($statuses as $s)
                @if ($s == $status->status)
                  <option value="{{ $s }}" selected>{{ $s }}</option>
                @else
                  <option value="{{ $s }}">{{ $s }}</option>
                @endif
              @endforeach
            </select>
            @error('status')
              <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
          <a href="{{ route('adminstatus.index') }}" class="btn btn-warning">Kembali</a>
          <button type="submit" class="btn btn-primary">Edit Status Post</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
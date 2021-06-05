@extends('layouts.dashboard.dashboard')
@section('title', 'Edit Status Author')
@section('content')
<h1 class="h3 text-gray-800">Edit Status Author</h1>
<div class="row justify-content-center mt-3">
  <div class="col-12 col-lg-6">
    <div class="card shadow">
      <div class="card-body">
        <form action="{{ route('author.update', $authorStatus->id) }}" method="POST">
          @csrf
          @method('put')
          <div class="form-group">
            <label for="status">Status Author</label>
            <select name="status" id="status" class="form-control @error('status') is-invalid @enderror">
              @foreach ($statuses as $status)
                @if ($status == $authorStatus->status)
                  <option value="{{ $status }}" selected>{{ $status }}</option>
                @else
                  <option value="{{ $status }}">{{ $status }}</option>
                @endif
              @endforeach
            </select>
            @error('status')
              <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
          <a href="{{ route('author.index') }}" class="btn btn-warning">Kembali</a>
          <button type="submit" class="btn btn-primary">Edit Kategori</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
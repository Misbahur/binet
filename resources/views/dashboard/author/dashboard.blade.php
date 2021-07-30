@extends('layouts.dashboard.author.dashboard')
@section('title', 'Dashboard')
@section('content')
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-2">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
  </div>

  @if (!Auth::user()->alamat)
  <div class="row">
    <div class="col-12">
      <div class="alert alert-success" role="alert">
        Selamat datang {{ Auth::user()->name }}, silahkan lengkapi profil  kamu untuk melengkapi syarat sebagai author kami.
      </div>
    </div>
  </div>
  @endif

  <!-- Content Row -->
  <div class="row">
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-6 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                News</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $news }}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-newspaper fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-6 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                Video</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $video }}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-video fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
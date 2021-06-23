<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/dashboard') }}">
    <div class="sidebar-brand-icon">
      <img src="{{ url('/frontend/images/logo/tvrisumut.png') }}" alt="Logo TVRI" width="70px">
    </div>
    <div class="sidebar-brand-text mx-3">Portal TVRI</div>
  </a>
  <!-- Divider -->
  <hr class="sidebar-divider my-0">
  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <a class="nav-link" href="{{ route('dashboard.author') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard Author</span>
    </a>
  </li>
  <li class="nav-item active">
    <a class="nav-link" href="{{ route('authorberita.index') }}">
      <i class="fas fa-fw fa-newspaper"></i>
      <span>Berita</span>
    </a>
  </li>
  <li class="nav-item active">
    <a class="nav-link" href="{{ route('authorstatus.index') }}">
      <i class="fas fa-fw fa-upload"></i>
      <span>Status</span>
    </a>
  </li>
  <li class="nav-item active">
    <a class="nav-link" href="{{ route('authorvidio.index') }}">
      <i class="fas fa-fw fa-video"></i>
      <span>Vidio</span>
    </a>
  </li>
  <!-- Divider -->
  <hr class="sidebar-divider">
  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
</ul>
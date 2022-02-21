<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/dashboard') }}">
    <div class="sidebar-brand-icon">
      <img src="{{ url('/frontend/images/logo/logo1putih.png') }}" alt="Logo TVRI" width="70px">
    </div>
    <div class="sidebar-brand-text mx-3">Portal BINET</div>
  </a>
  <!-- Divider -->
  <hr class="sidebar-divider my-0">
  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <a class="nav-link" href="{{ route('dashboard.admin') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard Admin</span>
    </a>
  </li>
  <li class="nav-item active">
    <a class="nav-link" href="{{ route('author.index') }}">
      <i class="fas fa-fw fa-user"></i>
      <span>Author</span>
    </a>
  </li>
  <li class="nav-item active">
    <a class="nav-link" href="{{ route('kategori.index') }}">
      <i class="fas fa-fw fa-list"></i>
      <span>Kategori Berita</span>
    </a>
  </li>
  <li class="nav-item active">
    <a class="nav-link" href="{{ route('adminberita.index') }}">
      <i class="fas fa-fw fa-newspaper"></i>
      <span>Berita</span>
    </a>
  </li>
  <li class="nav-item active">
    <a class="nav-link" href="{{ route('adminvidio.index') }}">
      <i class="fas fa-fw fa-newspaper"></i>
      <span>Video</span>
    </a>
  </li>
  <li class="nav-item active">
    <a class="nav-link" href="{{ route('adminlive.index') }}">
      <i class="fas fa-fw fa-video"></i>
      <span>Live Stream</span>
    </a>
  </li>
  <li class="nav-item active">
    <a class="nav-link" href="{{ route('adminstatus.index') }}">
      <i class="fas fa-fw fa-upload"></i>
      <span>Status</span>
    </a>
  </li>
  <li class="nav-item active">
    <a class="nav-link" href="{{ route('iklan.index') }}">
      <i class="fas fa-fw fa-ad"></i>
      <span>Advertisement</span>
    </a>
  </li>
  <!-- Divider -->
  <hr class="sidebar-divider">
  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
</ul>
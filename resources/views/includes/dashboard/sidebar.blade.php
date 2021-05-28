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
  @auth
    @if (Auth::user()->role == "Admin")
      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard Admin</span>
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('kategori.index') }}">
          <i class="fas fa-fw fa-list"></i>
          <span>Kategori Berita</span>
        </a>
      </li>
    @elseif(Auth::user()->role == "Author")
      <!-- Nav Item - Author -->
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard Author</span>
        </a>
      </li>
    @endif
  @endauth
  <!-- Divider -->
  <hr class="sidebar-divider">
  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
</ul>
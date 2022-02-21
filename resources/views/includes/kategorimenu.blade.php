<div class="container">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link {{ (request()->is('hotNews')) ? 'active' : '' }}" href="{{ route('hotNews') }}">Hot News</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ (request()->is('lokal')) ? 'active' : '' }}" href="{{ route('lokal') }}">Lokal</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ (request()->is('nasional')) ? 'active' : '' }}" href="{{ route('nasional') }}">Nasional</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ (request()->is('international')) ? 'active' : '' }}" href="{{ route('international') }}">Internasional</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ (request()->is('ekonomi')) ? 'active' : '' }}" href="{{ route('ekonomi') }}">Ekonomi</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ (request()->is('sejarah&budaya')) ? 'active' : '' }}" href="{{ route('sejarah&budaya') }}">Budaya & Sejarah</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ (request()->is('hiburan')) ? 'active' : '' }}" href="{{ route('hiburan') }}">Hiburan</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ (request()->is('gayahidup')) ? 'active' : '' }}" href="{{ route('gayahidup') }}">Gaya Hidup</a>
        </li>
        {{-- <li class="nav-item">
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
  </li> --}}
    </ul>
</div>

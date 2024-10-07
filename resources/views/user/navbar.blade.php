 <nav class="navbar bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand text-white fw-bolder" href="#">
        <img src="{{ asset('assets/logo.png') }}" alt="" width="30" height="30" class="d-inline-block align-text-top">
        SIJASA BANYUWANGI
      </a>
      <ul class="nav justify-content-end">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="#">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="kategori">Kategori</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Panduan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Kontak</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-link-login" href="{{ route('auth.login') }}">Login</a>
        </li>
      </ul>
    </div>
  </nav>
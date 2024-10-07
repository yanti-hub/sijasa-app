<nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Beranda</a></li>
          <li><a href="#about">Tentang Kami</a></li>
          <li><a href="#services">Kategori</a></li>
          <li><a href="#portfolio">Fasilitas</a></li>
          <li><a href="#team">Panduan</a></li>
          <li><a href="#contact">Contact</a></li>
          <li class="dropdown"><a href="{{ route('auth.login') }}"><span>Login</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="logout">Profile</a></li>
              <li><a href="logout">Logout</a></li>
            </ul>
          </li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
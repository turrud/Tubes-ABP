<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-block" style="z-index: 2000;">
    <div class="container-fluid">
      <!-- Navbar brand -->
      <a class="navbar-brand nav-link" target="_blank" href="/">
        <strong class="gowis mx-3">Go Wis</strong>
      </a>
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01"
        aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarExample01">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item active">
            <a class="nav-link" aria-current="page" href="/paketWisata">Paket Wisata</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/sewaKendaraan" rel="nofollow"
              target="_blank">Sewa Kendaraan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/berita" target="_blank">Berita</a>
          </li>
        </ul>

        <div>
          <ul class="navbar-nav ms-auto d-flex flex-row">
            @auth
            <li class="nav-item dropdown">
              <a
                 class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center"
                 href="#"
                 id="navbarDropdownMenuLink"
                 role="button"
                 data-mdb-toggle="dropdown"
                 aria-expanded="false"
                 >
                 Welcome back, {{ Auth::user()->name }}
              </a>
              <ul
                  class="dropdown-menu dropdown-menu-end"
                  aria-labelledby="navbarDropdownMenuLink"
                  >
                <li><a class="dropdown-item" href="#"><i class="bi bi-person-circle"></i> My profile</a></li>
                <li><hr class="dropdown-divider"></li>

                <li>
                  <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-in-right"></i> Logout</button>
                  </form>
              </ul>
              @else
                <div class="d-flex align-items-center">
                  <button type="button" class="btn btn-link px-3 me-2">
                    <a href="/login">Login</a>
                  </button>
                </div>
              </li>
            </ul>
            @endauth
        </div>
      </div>
    </div>
  </nav>
  <!-- Navbar -->
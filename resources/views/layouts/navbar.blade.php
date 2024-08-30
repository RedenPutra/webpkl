<!-- Navbar & Hero Start -->
<div class="container-xxl position-relative p-0">
  <nav class="navbar navbar-expand-lg navbar-dark bg-light px-4 px-lg-5 py-3 py-lg-0">
    {{-- <div class="logo">
        <a href="/">    
            <img src="{{ asset('img/logo.png') }}" alt="" style="height: 100px">
        </a>
    </div> --}}
      <a href="/">
        <img src="{{ asset('img/bprbaru.png') }}" alt="Logo" height="85px">
    </a>
          <!-- <img src="img/logo.png" alt="Logo"> -->
      <button class="navbar-toggler  btn-custom-blue" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
          <span class="fa fa-bars"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav ms-auto py-0 pe-4">
              <a href="/" class="nav-item nav-link">HOME</a>
              <div class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">PROFIL</a>
                  <div class="dropdown-menu m-0">
                      <a href="visi" class="dropdown-item">VISI & MISI</a>
                      <a href="sejarah" class="dropdown-item">SEJARAH</a>
                      <a href="cab" class="dropdown-item">KANTOR CABANG</a>
                      <a href="struktur" class="dropdown-item">STRUKTUR ORGANISASI</a>
                  </div>
              </div>
              <div class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">PRODUK</a>
                  <div class="dropdown-menu m-0">
                      <a href="tabungan" class="dropdown-item">SIMPANAN</a>
                      <a href="kredit" class="dropdown-item">KREDIT</a>
                  </div>
              </div>
              <div class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">SIMULASI</a>
                  <div class="dropdown-menu m-0">
                      <a href="umum" class="dropdown-item">KREDIT UMUM</a>
                      <a href="mikro" class="dropdown-item">SAHABAT MIKRO</a>
                  </div>
              </div>
              <div class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">LAPORAN</a>
                  <div class="dropdown-menu m-0">
                      <a href="keuangan" class="dropdown-item">LAPORAN KEUANGAN BPR SUKABUMI</a>
                      <a href="kelola" class="dropdown-item">LAPORAN TATA KELOLA BPR SUKABUMI</a>
                  </div>
              </div>
              <a href="berita" class="nav-item nav-link">BERITA</a>
              <a href="gallery" class="nav-item nav-link">GALLERY</a>
              @auth
              <a href="{{ route('dashboard.index') }}" class="nav-item nav-link">ADMIN</a>
              @endauth
          </div>
      </div>
  </nav>

  {{-- <div class="container-xxl py-5 bg-dark hero-header mb-5">
      <div class="container text-center my-5 pt-5 pb-4">
          <h1 class="display-3 text-white mb-3 animated slideInDown">Services</h1>
          <nav aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-center text-uppercase">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item text-white active" aria-current="page">Service</li>
              </ol>
          </nav>
      </div>
  </div> --}}
</div>
<!-- Navbar & Hero End -->
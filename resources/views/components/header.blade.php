<div class="container-fluid sticky-top">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light p-0">
      <a href="index.html" class="navbar-brand">
        <img
          src="img/LekerLondo.png"
          alt="Hairnic Logo1"
          class="logo-navbar"
        />
      </a>
      <button
        type="button"
        class="navbar-toggler ms-auto me-0"
        data-bs-toggle="collapse"
        data-bs-target="#navbarCollapse"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto">
          <a href="/" class="nav-item nav-link fw-bold {{ Request::is('/') ? 'active' : '' }}"
            >Beranda</a
          >
          <a href="/aboutus" class="nav-item nav-link {{ Request::is('aboutus') ? 'active' : '' }}"
          >Tentang Kami</a>

          <a href="/product" class="nav-item nav-link fw-bold {{ Request::is('product') ? 'active' : '' }}"
            >Produk</a
          >

          <a href="/franchise" class="nav-item nav-link fw-bold {{ Request::is('franchise') ? 'active' : '' }}"
            >Waralaba</a
          >
          <a href="/location" class="nav-item nav-link {{ Request::is('location') ? 'active' : '' }}">Lokasi</a>

          <a href="/career" class="nav-item nav-link {{ Request::is('career') ? 'active' : '' }}">Karir</a>

          <a href="/callus" class="nav-item nav-link {{ Request::is('callus') ? 'active' : '' }}"
          >Hubungi Kami</a>
        </div>
        @include('components.cta-partner')
      </div>
    </nav>
  </div>
</div>

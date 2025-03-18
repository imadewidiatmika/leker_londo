<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Leker Londo | Produk</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" integrity="sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD" crossorigin="anonymous">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Poppins:wght@200;600;700&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
  </head>

  <body>
    <!-- Spinner Start -->
    <div
      id="spinner"
      class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
    >
      <div
        class="spinner-grow text-primary"
        style="width: 3rem; height: 3rem"
        role="status"
      >
        <span class="sr-only">Loading...</span>
      </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <x-header />
    <!-- Navbar End -->

    <!-- Hero Start -->
    <div class="container-fluid bg-pink hero-header mb-5">
      <div class="container text-center">
        <nav aria-label="breadcrumb">
          <ol
            class="breadcrumb justify-content-center mb-0 animated slideInDown"
          >
          <li class="breadcrumb-item">
            <a class="text-white" href="#">Beranda</a>
          </li>
          <li class="breadcrumb-item">
            <a class="text-white" href="#">Halaman</a>
          </li>
          <li class="breadcrumb-item text-white active" aria-current="page">
            Produk
          </li>
          </ol>
        </nav>
        <h1 class="display-4 text-white mb-3 animated slideInDown">Produk</h1>

      </div>
    </div>
    <!-- Hero End -->

    <!-- Product Start -->
<!-- Product Start -->
<div class="container-fluid py-5">
  <div class="container">
      <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px">
          <h1 class="text-red mb-3">
              <span class="fw-bold text-dark">Produk </span>Leker Londo
          </h1>
          <p class="mb-5 text-dark">
              Kami selalu berinovasi dalam produk dan varian LEKER LONDO. LEKER LONDO dibuat dengan bahan asli tanpa pengawet sehingga menjadikan LEKER LONDO snack yang sehat.
          </p>
      </div>

      <!-- Tabs -->
      <ul class="nav nav-tabs text-primary" id="productTab" role="tablist">
          <!-- Tab untuk menampilkan semua produk (All Menu) -->
          <li class="nav-item" role="presentation">
              <button class="nav-link active" id="all-menu-tab" data-bs-toggle="tab" data-bs-target="#all-menu" type="button" role="tab">
                  All Menu
              </button>
          </li>
          
          <!-- Tabs untuk kategori produk lainnya -->
          @foreach($products->groupBy('category') as $category => $items)
              <li class="nav-item" role="presentation">
                  <button class="nav-link" id="{{ Str::slug($category) }}-tab" data-bs-toggle="tab" data-bs-target="#{{ Str::slug($category) }}" type="button" role="tab">
                      {{ $category }}
                  </button>
              </li>
          @endforeach
      </ul>

      <!-- Tab Content -->
      <div class="tab-content mt-4" id="productTabContent">
          <!-- Menampilkan semua produk (All Menu) -->
          <div class="tab-pane fade show active" id="all-menu" role="tabpanel">
              <div class="row g-4">
                  @foreach($products as $product)
                      <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                          <div class="product-item text-center border h-100 p-4">
                              <img class="img-fluid mb-4" src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" />
                              <a href="#" class="h6 d-inline-block mb-2 text-dark" onclick="showModal('{{ $product->name }}', '{{ asset('storage/' . $product->image) }}', '{{ $product->description }}')">
                                  {{ $product->name }}
                              </a>
                          </div>
                      </div>
                  @endforeach
              </div>
          </div>

          <!-- Tab Content untuk kategori produk lainnya -->
          @foreach($products->groupBy('category') as $category => $items)
              <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="{{ Str::slug($category) }}" role="tabpanel">
                  <div class="row g-4">
                      @foreach($items as $product)
                          <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                              <div class="product-item text-center border h-100 p-4">
                                  <img class="img-fluid mb-4" src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" />
                                  <a href="#" class="h6 d-inline-block mb-2 text-dark" onclick="showModal('{{ $product->name }}', '{{ asset('storage/' . $product->image) }}', '{{ $product->description }}')">
                                      {{ $product->name }}
                                  </a>
                              </div>
                          </div>
                      @endforeach
                  </div>
              </div>
          @endforeach
      </div>
  </div>
  <br>
  <center>@include('components.cta-partner')</center>
  <br>
  @include('components.product-modal')
</div>
<!-- Product End -->


    <!-- Product End -->


    <!-- Footer Start -->
    <x-footer />
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-dark btn-lg-square back-to-top"
      ><i class="bi bi-arrow-up"></i
    ></a>

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
  </body>
</html>

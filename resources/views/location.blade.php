<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Leker Londo | Lokasi</title>
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
            Lokasi
          </li>
          </ol>
        </nav>
        <h1 class="display-4 text-white mb-3 animated slideInDown">
         Lokasi
        </h1>
      </div>
    </div>
    <!-- Hero End -->

    <!-- Blog Start -->
    <div class="container-fluid py-5">
      <div class="container">
        <div
          class="mx-auto text-center wow fadeIn"
          data-wow-delay="0.1s"
          style="max-width: 600px"
        >
          <h1 class="text-primary mb-3">
            <span class="fw-bold text-dark">Lokasi </span>Leker Londo
          </h1>
          <p class="mb-5 text-dark">
            Lokasi Leker Londo ada di berbagai lokasi
          </p>
        </div>
        <div class="row g-4 justify-content-center">
          @foreach($locations as $location)
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
              <div class="blog-item border h-100 p-4">
                <img class="img-fluid mb-4" src="{{ asset('storage/' . $location->image) }}" style="width: 450px; height:250px" alt="{{ $location->name }}" />
                <a href="#" class="h5 lh-base d-inline-block text-dark">
                  {{ $location->name }}
                </a>
                <p class="mb-4 text-dark-2">
                  <a href="{{ $location->map_link }}" target="_blank">{{ $location->address }}</a>
                </p>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
    <!-- Blog End -->
    <center>@include('components.cta-partner')</center>
    <br>

    <!-- Footer Start -->
    <x-footer />
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-dark btn-lg-square back-to-top">
      <i class="bi bi-arrow-up"></i>
    </a>

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

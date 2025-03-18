<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Leker Londo | Hubungi Kami</title>
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
<!-- SweetAlert2 CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
              Hubungi Kami
            </li>
          </ol>
        </nav>
        <h1 class="display-4 text-white mb-3 animated slideInDown">Hubungi Kami</h1>
      </div>
    </div>
    <!-- Hero End -->

    <!-- Contact Info Start -->
    <div class="container-fluid py-5">
      <div class="container">
        <div class="row g-4">
          <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
            <div
              class="contact-info-item position-relative bg-primary text-center p-3"
            >
              <div class="border py-5 px-3">
                <i class="fa fa-map-marker-alt fa-3x text-dark mb-4"></i>
                <h5 class="text-white">Alamat Kantor</h5>
                <h5 class="fw-light text-white">Riverfront Urban Resort</h5>
              </div>
            </div>
          </div>
          <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
            <div
              class="contact-info-item position-relative bg-primary text-center p-3"
            >
              <div class="border py-5 px-3">
                <i class="fa fa-phone-alt fa-3x text-dark mb-4"></i>
                <h5 class="text-white">Hubungi Kami</h5>
                <h5 class="fw-light text-white">0811 3342 777
                </h5>
              </div>
            </div>
          </div>
          <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
            <div
              class="contact-info-item position-relative bg-primary text-center p-3"
            >
              <div class="border py-5 px-3">
                <i class="fa fa-envelope fa-3x text-dark mb-4"></i>
                <h5 class="text-white">Email Kami</h5>
                <h5 class="fw-light text-white">lekerlondoindo@gmail.com</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Contact Info End -->

    <!-- Contact Start -->
    <div class="container-fluid py-5">
      <div class="container">
        <div
          class="mx-auto text-center wow fadeIn"
          data-wow-delay="0.1s"
          style="max-width: 600px"
        >
          <h1 class="text-primary mb-5">
            <span class="fw-bold text-dark">Hubungi </span>
           Leker Londo
          </h1>
        </div>
        <div class="row g-5">
          <div class="col-lg-7 wow fadeIn" data-wow-delay="0.1s">
            <p class="mb-4 text-dark">
              Apabila Anda memiliki pertanyaan atau memerlukan informasi lebih lanjut, silakan hubungi kami melalui kontak di atas atau isi data di bawah ini :
            </p>
            <div class="wow fadeIn" data-wow-delay="0.3s">
              <form action="{{ route('callus.store') }}" method="POST">
                @csrf
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="name" placeholder="Your Name" required />
                            <label for="name">Your Name</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="email" class="form-control" name="email" placeholder="Your Email" required />
                            <label for="email">Your Email</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="subject" placeholder="Subject" required />
                            <label for="subject">Subject</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating">
                            <textarea class="form-control" name="message" placeholder="Leave a message here" style="height: 150px" required></textarea>
                            <label for="message">Message</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-dark w-100 py-3" type="submit">
                            Kirim Pertanyaan
                        </button>
                    </div>
                </div>
            </form>

            <!-- SweetAlert2 Success/Failure Alerts -->
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    @if(session('success'))
                        Swal.fire({
                            title: "Berhasil!",
                            text: "{{ session('success') }}",
                            icon: "success",
                            confirmButtonText: "OK"
                        });
                    @endif

                    @if(session('error'))
                        Swal.fire({
                            title: "Gagal!",
                            text: "{{ session('error') }}",
                            icon: "error",
                            confirmButtonText: "Coba Lagi"
                        });
                    @endif
                });
            </script>
        
            
            </div>
          </div>
          <div class="col-lg-5 wow fadeIn" data-wow-delay="0.5s">
            <iframe
                class="w-100 h-100"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9875.675248183653!2d112.61134568967445!3d-7.975719349191002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6281adf4b921d%3A0x3e326c1e55cdbb0a!2sSuperindo%20SUKUN!5e0!3m2!1sen!2sid!4v1710266001234!5m2!1sen!2sid"
                frameborder="0"
                style="min-height: 300px; border: 0"
                allowfullscreen=""
                aria-hidden="false"
                tabindex="0"
            ></iframe>
        </div>
        
        </div>
      </div>
    </div>
    <!-- Contact End -->

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

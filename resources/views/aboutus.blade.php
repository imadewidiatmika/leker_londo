<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Leker Londo | Tentang Kami</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" integrity="sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD" crossorigin="anonymous">
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
              Tentang Kami
            </li>
          </ol>
        </nav>
        <h1 class="display-4 text-white mb-3 animated slideInDown">Tentang Kami</h1>
        <p class="mb-4 text-white">
          Leker Londo menghidupkan kembali jajanan tradisional, membangkitkan kenangan manis, dan menghadirkan kebahagiaan dalam setiap gigitan lezatnya.
        </p>
      </div>
    </div>
    <!-- Hero End -->


    <!-- Feature Start -->
    <div class="container-fluid py-5 bg-white">
      <div class="container">
        <div
          class="mx-auto text-center wow fadeIn"
          data-wow-delay="0.1s"
          style="max-width: 600px"
        >
          <h1 class="text-dark mb-3">
            LEKER LONDO, Sejuta Rasa Sejuta Kenangan
          </h1>
          <p class="mb-5 text-dark-2" style="text-align: justify;">
            Kami memulai perjalanan ini dari cinta yang mendalam terhadap jajanan masa kecil yang selalu menghiasi hari-hari ceria kami. Leker, dengan aroma yang menggoda dan cita rasa yang memikat, menyimpan kenangan indah yang ingin kami bagikan kepada Anda semua. 
<br><br>Sebagai penikmat makanan, kami percaya jajanan tradisional memiliki keajaiban tersendiri, bahkan saat banyak di antaranya terlupakan. Di Leker Londo, kami berkomitmen untuk menghadirkan kembali kenikmatan jajanan tradisional yang telah menjadi bagian dari sejarah kuliner Indonesia.

<br><br>Mari bergabung bersama kami dan hadirkan kelezatan Leker yang sehat dan lezat. Nikmati setiap gigitannya yang akan membangkitkan kembali memori indah masa lalu. Kami ingin setiap suapan membawa Anda kembali ke masa bahagia di setiap outlet kami.

<br><br>Jadilah bagian dari cerita ini dan rasakan cinta yang dituangkan dalam setiap sajian kami.
          </p>
        </div>
<hr>

        <div
        class="mx-auto text-center wow fadeIn"
        data-wow-delay="0.1s"
        style="max-width: 600px"
      >
        <h1 class="text-dark mb-3">
          VISI
        </h1>
        <p class="mb-5 text-dark-2" style="text-align: justify;">
          Menjadi brand jajanan tradisional Indonesia yang terdepan,
          inovatif,dan mendunia,dengan tetap mempertahankan cita rasa khas serta kualitas terbaik.
        </p>
      </div>

      <hr>
      <div
      class="mx-auto text-center wow fadeIn"
      data-wow-delay="0.1s"
      style="max-width: 600px"
    >
      <h1 class="text-dark mb-3">
        MISI
      </h1>
      <p class="mb-5 text-dark-2" style="text-align: justify;">
        1. Melestarikan Warisan Kuliner- Menghadirkan jajanan
        tradisional dengan resep autentik yang tetap relevan dengan selera masa kini.
        <br><br>
        2. Inovasi Produk- Mengembangkan varian rasa dan kemasan modern tanpa menghilangkan nilai tradisional.
        <br><br>
        3. Kualitas Terbaik- Menggunakan bahan baku berkualitas tinggi dan proses produksi yang higienis.
        <br><br>
        4. Branding dan Pemasaran Kreatif - Memanfaatkan teknologi digital dan strategi pemasaran yang inovatif untukmenjangkau lebih banyak pelanggan, baik di dalam maupun luar negeri.
      </p>
    </div>

      </div>
    </div>
    <center>@include('components.cta-partner')</center>
    <br>
    <!-- Feature End -->

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

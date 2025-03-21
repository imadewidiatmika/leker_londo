<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Leker Londo</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" integrity="sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD" crossorigin="anonymous">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

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
      <div class="container">
        <div class="row g-5 align-items-center">
          <div class="col-lg-6 text-center text-lg-start">
            <h3 class="fw-light crispy animated slideInRight">
              Crispy & Lezat
            </h3>
            <h1 class="display-4 animated slideInRight text-white">
              Snack <span class="fw-bolder text-dark">Viral</span> Leker Londo
            </h1>
            <p class="mb-4 text-white animated slideInRight">
              Diciptakan dengan berbagai varian rasa yang lezat, Leker Londo
              akan menggoyang lidah kalian. Ciptakan sejuta rasa sejuta kenangan
              bersama Leker Londo.
            </p>
            <a href="/product" class="btn btn-dark py-2 px-4 me-3 animated slideInRight"
              >Lihat Varian</a
            >
            <a
              href="#" id="claimPartner"
              class="btn btn-outline-dark py-2 px-4 animated slideInRight"
              >Menjadi Mitra</a
            >
          </div>
          <div class="col-lg-6">
            <img
              class="img-fluid animated pulse infinite img"
              src="img/leker-header.png"
              alt=""
            />
          </div>
        </div>
      </div>
    </div>
    <!-- Hero End -->

    <!-- Feature Start -->
    <div class="container-fluid py-5">
      <div class="container">
        <div class="row g-4">
          <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
            <div
              class="feature-item position-relative bg-danger text-center p-3"
            >
              <div class="border py-5 px-3">
                <i class="fa fa-heart fa-3x text-dark mb-4"></i>
                <h5 class="text mb-0">Sehat</h5>
              </div>
            </div>
          </div>
          <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
            <div
              class="feature-item position-relative bg-danger text-center p-3"
            >
              <div class="border py-5 px-3">
                <i class="fa fa-smile fa-3x text-dark mb-4"></i>
                <h5 class="text mb-0">Lezat</h5>
              </div>
            </div>
          </div>
          <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
            <div
              class="feature-item position-relative bg-danger text-center p-3"
            >
              <div class="border py-5 px-3">
                <i class="fa fa-leaf fa-3x text-dark mb-4"></i>
                <h5 class="text mb-0">Bahan Asli</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Feature End -->

    <!-- About Start -->
    <div class="container-fluid py-5">
      <div class="container">
        <div class="row g-5 align-items-center">
          <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
            <img
              class="img-fluid animated pulse infinite"
              src="img/logoabout.png"
            />
          </div>
          <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
            <h1 class="text-primary mb-4">
              Tentang Kami
              <span class="fw-bolder text-dark">Leker Londo</span>
            </h1>
            <p class="mb-4 text-p fw-light text-dark">
              LEKER LONDO dimulai dari kegemaran kami akan jajanan masa kecil yang akhirnya membuat kami ingin berbagi cerita dan kenangan kepada semua orang. Kami adalah penikmat makanan dan jajanan tradisional yang saat ini telah terlupakan. Oleh karena itu kami ingin membagikan kenikmatan jajanan tradisional yang salah satunya adalah LEKER kepada semua masyarakat.
            </p>

            <a class="btn btn-dark py-2 px-4"href="/aboutus">Lebih Lanjut</a>
          </div>
        </div>
      </div>
    </div>
    <!-- About End -->

    <!-- Deal Start -->
    <div class="container-fluid deal my-5 py-5 bg-red">
      <div class="container py-5">
          <div class="row g-5 align-items-center">
              <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                  <img class="img-fluid animated pulse infinite" src="img/calon_mitra.png" />
              </div>
              <div class="col-lg-6 z-2" data-wow-delay="0.5s">
                  <div class="bg-primary text-center p-4">
                      <div class="border p-4">
                          <p class="mb-2 text-dark">Calon Mitra Leker Londo</p>
                          <h2 class="fw-bold text-dark text-uppercase mb-4">COBA GRATIS ALL VARIAN</h2>
                          <h1 class="display-4 text-red mb-4">RP. 0,-</h1>
                          <h5>Mari Menjadi Mitra Bisnis</h5>
                          <p class="mb-4 fw-normal text-dark">Leker Londo membuka peluang bisnis untuk Anda para pengusaha seluruh Indonesia</p>
                          <div class="row g-0 cdt mb-4 text-red">
                              <div class="col-3"><h1 class="display-6" id="cdt-days"></h1></div>
                              <div class="col-3"><h1 class="display-6" id="cdt-hours"></h1></div>
                              <div class="col-3"><h1 class="display-6" id="cdt-minutes"></h1></div>
                              <div class="col-3"><h1 class="display-6" id="cdt-seconds"></h1></div>
                          </div>
                          <a class="btn btn-dark py-2 px-4" href="#" id="claimButton">Klaim Sekarang</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  @include('components.deals-modal')
  
    <!-- Deal End -->

    <!-- Feature Start -->
    <div class="container-fluid py-5">
      <div class="container">
        <div
          class="mx-auto text-center wow fadeIn"
          data-wow-delay="0.1s"
          style="max-width: 600px"
        >
          <h1 class="text-primary mb-3">
            <span class="fw-bolder text-dark">Mengapa Memilih </span>Leker Londo
          </h1>
        </div>
        <div class="row g-4 align-items-center mt-5">
          <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
            <div class="row g-5">
              <div class="col-12 d-flex">
                <div
                  class="btn-square rounded-circle border-leker flex-shrink-0"
                  style="width: 80px; height: 80px"
                >
                  <i class="fa fa-check fa-2x text-primary"></i>
                </div>
                <div class="ps-3">
                  <h5 class="text-dark">Bahan Baku Asli</h5>
                  <hr class="w-25 bg-primary my-2" />
                  <span
                    >Kami menggabungkan pesona LEKER tradisional dengan tren kuliner modern tanpa bahan buatan</span
                  >
                </div>
              </div>
              <div class="col-12 d-flex">
                <div
                  class="btn-square rounded-circle border-leker flex-shrink-0"
                  style="width: 80px; height: 80px"
                >
                  <i class="fa fa-check fa-2x text-primary"></i>
                </div>
                <div class="ps-3">
                  <h5 class="text-dark">Mewah, Enak & terjangkau</h5>
                  <hr class="w-25 bg-primary my-2" />
                  <span
                    >Rasa dan presentasi premium dengan harga yang dapat dijangkau semua kalangan</span
                  >
                </div>
              </div>
              <div class="col-12 d-flex">
                <div
                  class="btn-square rounded-circle border-leker flex-shrink-0"
                  style="width: 80px; height: 80px"
                >
                  <i class="fa fa-check fa-2x text-primary"></i>
                </div>
                <div class="ps-3">
                  <h5 class="text-dark">Produk Inovatif</h5>
                  <hr class="w-25 bg-primary my-2" />
                  <span
                    >Rasa yang sudah teruji dan diterima oleh masyarakat serta selalu berinovasi pada produk.</span
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
            <img
              class="img-fluid animated pulse infinite"
              src="img/logoabout.png"
            />
          </div>
          <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
            <div class="row g-5">
              <div class="col-12 d-flex">
                <div
                  class="btn-square rounded-circle border-leker flex-shrink-0"
                  style="width: 80px; height: 80px"
                >
                  <i class="fa fa-check fa-2x text-primary"></i>
                </div>
                <div class="ps-3">
                  <h5 class="text-dark">Modal Bisnis Skalabel</h5>
                  <hr class="w-25 bg-primary my-2" />
                  <span
                    >Dirancang untuk pertumbuhan cepat melalui kemitraan, waralaba, dan ekspansi ritel</span
                  >
                </div>
              </div>
              <div class="col-12 d-flex">
                <div
                  class="btn-square rounded-circle border-leker flex-shrink-0"
                  style="width: 80px; height: 80px"
                >
                  <i class="fa fa-check fa-2x text-primary"></i>
                </div>
                <div class="ps-3">
                  <h5 class="text-dark">Manajemen Professional</h5>
                  <hr class="w-25 bg-primary my-2" />
                  <span
                    >Didukung profesional yang berkompeten di bidangnya menjamin proses produksi sesuai standar yang berlaku sehingga terjaga kualitas dan higienitasnya</span
                  >
                </div>
              </div>
              <div class="col-12 d-flex">
                <div
                  class="btn-square rounded-circle border-leker flex-shrink-0"
                  style="width: 80px; height: 80px"
                >
                  <i class="fa fa-check fa-2x text-primary"></i>
                </div>
                <div class="ps-3">
                  <h5 class="text-dark">Marketing Inovatif</h5>
                  <hr class="w-25 bg-primary my-2" />
                  <span
                    >LEKER LONDO memastikan akan selalu memahami trend dan dengan riset yang mendalam menyediakan berbagai inovasi yang diinginkan pasar</span
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Feature End -->

    <!-- How To Use Start -->
    <div class="container-fluid how-to-use bg-primary my-5 py-5">
      <div class="container text-white py-5">
        <div
          class="mx-auto text-center wow fadeIn"
          data-wow-delay="0.1s"
          style="max-width: 600px"
        >
          <h1 class="text-white mb-3">
            <span class="fw-bolder text-dark">Langkah Mudah</span> Menjadi Mitra 
          </h1>
          <p class="mb-5 text-dark-2">
            Dapatkan semua manfaat dengan menjadi mitra kami dengan langkah yang sangat mudah seperti di bawah ini.
          </p>
        </div>
        <div class="row g-5">
          <div class="col-lg-4 text-center wow fadeIn" data-wow-delay="0.1s">
            <div
              class="btn-square rounded-circle border mx-auto mb-4"
              style="width: 120px; height: 120px"
            >
              <i class="fa fa-phone fa-3x text-dark"></i>
            </div>
            <h5 class="text-dark-2">Hubungi kami</h5>
            <hr class="w-25 bg-light my-2 mx-auto " />
            <span class="text-dark-2"
              >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
              aliquet, erat non malesuada consequat.</span
            >
          </div>
          <div class="col-lg-4 text-center wow fadeIn" data-wow-delay="0.3s">
            <div
              class="btn-square rounded-circle border mx-auto mb-4"
              style="width: 120px; height: 120px"
            >
              <i class="fa fa-cookie fa-3x text-dark"></i>
            </div>
            <h5 class="text-dark">Coba semua produk kami</h5>
            <hr class="w-25 bg-light my-2 mx-auto" />
            <span class="text-dark-2"
              >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
              aliquet, erat non malesuada consequat.</span
            >
          </div>
          <div class="col-lg-4 text-center wow fadeIn" data-wow-delay="0.5s">
            <div
              class="btn-square rounded-circle border mx-auto mb-4"
              style="width: 120px; height: 120px"
            >
              <i class="fa fa-store fa-3x text-dark"></i>
            </div>
            <h5 class="text-dark">Tentukan Model Waralaba</h5>
            <hr class="w-25 bg-light my-2 mx-auto" />
            <span class="text-dark-2"
              >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
              aliquet, erat non malesuada consequat.</span
            >
          </div>
        </div>
      </div>
    </div>
    <!-- How To Use End -->

    <!-- Product Start -->
    <div class="container-fluid py-5">
      <div class="container">
        <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px">
          <h1 class="text-primary mb-3">
            <span class="fw-bolder text-dark">Best Seller</span> Leker Londo
          </h1>
        </div>
        
        <!-- Swiper Container -->
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">
            
            <!-- Item Produk -->
            <div class="swiper-slide">
              <div class="product-item text-center border h-100 p-4">
                <img class="img-fluid mb-4" src="img/Produk/Coklat_Pisang.jpg" alt="" />
                <a href="" class="h6 d-inline-block mb-2">Pisang Coklat</a>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="product-item text-center border h-100 p-4">
                <img class="img-fluid mb-4" src="img/Produk/Keju.jpg" alt="" />
                <a href="" class="h6 d-inline-block mb-2">Keju</a>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="product-item text-center border h-100 p-4">
                <img class="img-fluid mb-4" src="img/Produk/Abon_Ayam.jpg" alt="" />
                <a href="" class="h6 d-inline-block mb-2">Abon Ayam</a>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="product-item text-center border h-100 p-4">
                <img class="img-fluid mb-4" src="img/Produk/Meses.jpg" alt="" />
                <a href="" class="h6 d-inline-block mb-2">Meses</a>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="product-item text-center border h-100 p-4">
                <img class="img-fluid mb-4" src="img/Produk/Mozarela.jpg" alt="" />
                <a href="" class="h6 d-inline-block mb-2">Mozzarella</a>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="product-item text-center border h-100 p-4">
                <img class="img-fluid mb-4" src="img/Produk/Coklat_Keju.jpg" alt="" />
                <a href="" class="h6 d-inline-block mb-2">Keju Coklat</a>
              </div>
            </div>
            
            <!-- Tambahkan produk lain dengan format serupa -->
            
          </div>
          <!-- Navigasi Swiper -->
    <br><br>
          <div class="swiper-pagination"></div>
        
        </div>
        <center><a class="btn btn-dark py-2 px-4 mt-4" href="/product">Lihat Semua Produk</a></center>
      </div>
    </div>
    <!-- Product End -->

    <!-- Testimonial Start -->
    <div class="container-fluid testimonial bg-primary my-5 py-5">
      <div class="container text-white py-5">
        <div
          class="mx-auto text-center wow fadeIn"
          data-wow-delay="0.1s"
          style="max-width: 600px"
        >
          <h1 class="text-white mb-3 fw-bolder">
            Testimoni Pelanggan & Mitra
            <span class="fw-bolder text-dark">Leker Londo</span>
          </h1>
          <p class="mb-5 text-dark-2">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
            aliquet, erat non malesuada consequat, nibh erat tempus risus.
          </p>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div
              class="owl-carousel testimonial-carousel wow fadeIn"
              data-wow-delay="0.1s"
            >
              <div class="testimonial-item text-center" data-dot="1">
                <img
                  class="img-fluid border p-2"
                  src="img/testimonial-1.jpg"
                  alt=""
                />
                <h5 class="fw-light lh-base text-dark-2">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
                  aliquet, erat non malesuada consequat, nibh erat tempus risus,
                  vitae porttitor purus nisl vitae purus. Praesent tristique
                  odio ut rutrum pellentesque. Fusce eget molestie est, at
                  rutrum est. Nullam scelerisque libero nunc, vitae ullamcorper
                  elit volutpat ut.
                </h5>
                <h5 class="mb-1">Client Name</h5>
                <h6 class="fw-light text-dark-2 fst-italic mb-0">Profession</h6>
              </div>
              <div class="testimonial-item text-center" data-dot="2">
                <img
                  class="img-fluid border p-2"
                  src="img/testimonial-2.jpg"
                  alt=""
                />
                <h5 class="fw-light lh-base text-dark-2">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
                  aliquet, erat non malesuada consequat, nibh erat tempus risus,
                  vitae porttitor purus nisl vitae purus. Praesent tristique
                  odio ut rutrum pellentesque. Fusce eget molestie est, at
                  rutrum est. Nullam scelerisque libero nunc, vitae ullamcorper
                  elit volutpat ut.
                </h5>
                <h5 class="mb-1">Client Name</h5>
                <h6 class="fw-light text-dark-2 fst-italic mb-0">Profession</h6>
              </div>
              <div class="testimonial-item text-center" data-dot="3">
                <img
                  class="img-fluid border p-2"
                  src="img/testimonial-3.jpg"
                  alt=""
                />
                <h5 class="fw-light lh-base text-dark-2">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
                  aliquet, erat non malesuada consequat, nibh erat tempus risus,
                  vitae porttitor purus nisl vitae purus. Praesent tristique
                  odio ut rutrum pellentesque. Fusce eget molestie est, at
                  rutrum est. Nullam scelerisque libero nunc, vitae ullamcorper
                  elit volutpat ut.
                </h5>
                <h5 class="mb-1">Client Name</h5>
                <h6 class="fw-light text-dark-2 fst-italic mb-0">Profession</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Testimonial End -->

    <!-- Blog Start -->
    <div class="container-fluid py-5">
      <div class="container">
        <div
          class="mx-auto text-center wow fadeIn"
          data-wow-delay="0.1s"
          style="max-width: 600px"
        >
          <h1 class="text-primary mb-3">
            <span class="fw-bolder text-dark">Lokasi</span> Leker Londo
          </h1>
          <p class="mb-5 text-dark">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
            aliquet, erat non malesuada consequat, nibh erat tempus risus.
          </p>
        </div>
        <div class="row g-4 justify-content-center">
          <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
            <div class="blog-item border h-100 p-4">
              <img class="img-fluid mb-4" src="img/Header_lokasi.jpg" style="width: 450px; height:250px" alt="" />
              <a href="" class="h5 lh-base d-inline-block text-dark"
                >⁠Outlet Indomaret Depan Unisma</a
              >
              <p class="mb-4 text-dark-2">
               <a href="https://maps.app.goo.gl/Thc2XZvTcCoKzrij6">Jl. Mayjen Hariyono Jl. MT. Haryono No.60 - 65, Dinoyo</a>
              </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
            <div class="blog-item border h-100 p-4">
              <img class="img-fluid mb-4" src="img/Lokasi_toko.jpg"  style="width: 450px; height:250px" alt="" />
              <a href="" class="h5 lh-base d-inline-block text-dark"
                >Outlet Superindo Sukun</a
              >
              <p class="mb-4 text-dark-2">
                <a href="https://maps.app.goo.gl/6Mb7GdBNRLXzMPKc6">Jl. Mayjen Hariyono Jl. MT. Haryono No.60 - 65, Dinoyo</a>
               </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Blog End -->

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
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script>
document.addEventListener("DOMContentLoaded", function() {
    @if (session()->has('success'))
        Swal.fire({
            title: 'Sukses!',
            text: '{{ session("success") }}',
            icon: 'success',
            confirmButtonText: 'OK'
        });
    @endif

    @if (session()->has('warning'))
        Swal.fire({
            title: 'Pendaftaran Gagal!',
            text: '{{ session("warning") }}',
            icon: 'warning',
            confirmButtonText: 'Coba Lagi'
        });
    @endif
});
    </script>
  </body>
</html>

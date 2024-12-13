<!DOCTYPE html>
<html lang="en">
  <head>
    <title>BIORAMA</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="author" content="" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>

    <link rel="stylesheet" type="text/css" href="css/vendor.css" />
    <link rel="stylesheet" type="text/css" href="css/disabilitas.css" />
    <link rel="stylesheet" type="text/css" href="css/produk.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap"
      rel="stylesheet"
    />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="shortcut icon" href="img/logoo.png" type="image/x-icon">
    
  </head>
  <body>
  @include ('/partials/symbol')

    <div class="preloader-wrapper">
      <div class="preloader"></div>
    </div>

    <div
      class="offcanvas offcanvas-end"
      tabindex="-1"
      id="cartSidebar"
      aria-labelledby="cartSidebarLabel"
    >
      <div class="offcanvas-header justify-content-center">
        <h5 class="offcanvas-title" id="cartSidebarLabel" style="margin-right: 15rem;">Keranjang</h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="offcanvas"
          aria-label="Close"
        ></button>
      </div>

      <ul class="list-group mb-3" id="cart-items" style=""></ul>
          <!-- Item yang ditambahkan akan muncul di sini -->
        </ul>
       <div class="offcanvas-body"></div>
        
        <div class="list-group-item d-flex justify-content-between">
          <span>Total(Rupiah)</span>
          <strong id="total-price">$0</strong>
        </div>
        <a href="{{url ('/checkout') }}"
          class="w-100 btn btn-primary btn-lg mt-2"
          type="button"
          onclick="checkout()"
        >
          Checkout
        </a>
      </div>
    </div>

  @include ('/partials/navbar')

    <section
      style="
        background-image: url('img/banner-1.jpg');
        background-repeat: no-repeat;
        background-size: cover;
      "
    > 
      <div class="container-lg">
        <div class="row">
          <div class="col-lg-6 pt-5 mt-5">
            <h2 class="display-1 ls-1">
              <span class="fw-bold text-primary">Biorama</span> pasar organik untuk 
              <span class="fw-bold">inovasi UMKM</span>
            </h2>
            <p class="fs-4">Kreativitas UMKM untuk Semua</p>
            <div class="d-flex gap-3">
              <a
                href="#catalog"
                class="btn btn-primary text-uppercase fs-6 rounded-pill px-4 py-3 mt-3"
                >Start Shopping</a
              >
              <a
                href="#"
                class="btn btn-dark text-uppercase fs-6 rounded-pill px-4 py-3 mt-3"
                >Join Now</a
              >
            </div>
            <div class="row my-5">
              <div class="col">
                <div class="row text-dark">
                  <div class="col-auto">
                    <p class="fs-1 fw-bold lh-sm mb-0">41+</p>
                  </div>
                  <div class="col">
                    <p class="text-uppercase lh-sm mb-0">Lorem ipsum dolor sit.</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="row text-dark">
                  <div class="col-auto">
                    <p class="fs-1 fw-bold lh-sm mb-0">50+</p>
                  </div>
                  <div class="col">
                    <p class="text-uppercase lh-sm mb-0">Lorem, ipsum dolor.</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="row text-dark">
                  <div class="col-auto">
                    <p class="fs-1 fw-bold lh-sm mb-0">10+</p>
                  </div>
                  <div class="col">
                    <p class="text-uppercase lh-sm mb-0">Lorem, ipsum dolor.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div
          class="row row-cols-1 row-cols-sm-3 row-cols-lg-3 g-0 justify-content-center"
        >
          <div class="col" data-aos="fade-up"
           data-aos-duration="700">
            <div class="card border-0 bg-primary rounded-0 p-4 text-light">
              <div class="row">
                <div class="col-md-3 text-center">
                  <svg width="60" height="60">
                    <use xlink:href="#fresh"></use>
                  </svg>
                </div>
                <div class="col-md-9">
                  <div class="card-body p-0">
                    <h5 class="text-light">Fresh from farm</h5>
                    <p class="card-text">
                      Lorem ipsum dolor sit amet, consectetur adipi elit.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col" data-aos="fade-up"
     data-aos-duration="700">
            <div class="card border-0 bg-secondary rounded-0 p-4 text-light">
              <div class="row">
                <div class="col-md-3 text-center">
                  <svg width="60" height="60">
                    <use xlink:href="#organic"></use>
                  </svg>
                </div>
                <div class="col-md-9">
                  <div class="card-body p-0">
                    <h5 class="text-light">100% Organic</h5>
                    <p class="card-text">
                      Lorem ipsum dolor sit amet, consectetur adipi elit.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col" data-aos="fade-up"
     data-aos-duration="700">
            <div class="card border-0 bg-danger rounded-0 p-4 text-light">
              <div class="row">
                <div class="col-md-3 text-center">
                  <svg width="60" height="60">
                    <use xlink:href="#delivery"></use>
                  </svg>
                </div>
                <div class="col-md-9">
                  <div class="card-body p-0">
                    <h5 class="text-light">Free delivery</h5>
                    <p class="card-text">
                      Lorem ipsum dolor sit amet, consectetur adipi elit.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    @include ('/partials/disabilitas')

<!-- Penanda halaman www.w3.org -->
   @include ('/mitra/mitra')

    @include ('/product/productkreativ')

    <section class="py-3">
      <div class="container-lg">
        <div class="row">
          <div class="col-md-12">
            <div class="banner-blocks" >
              <div
                class="banner-ad d-flex align-items-center large bg-info block-1" data-aos="fade-right" data-aos-duration="1500"
                style="
                  background: url('img/banner-ad-1.jpg') no-repeat;
                  background-size: cover;
                "
              >
                <div class="banner-content p-5">
                  <div class="content-wrapper text-light">
                    <h3 class="banner-title text-light">Barang DIJUAL</h3>
                    <p>Diskon hingga 30%</p>
                    <a href="#" class="btn-link text-white">Shop Now</a>
                  </div>
                </div>
              </div>
              
              <div
                class="banner-ad bg-success-subtle block-2" data-aos="fade-left" data-aos-duration="1500"
                style="
                  background: url('img/banner-ad-2.jpg') no-repeat;
                  background-size: cover;
                "
              >
                <div class="banner-content align-items-center p-5">
                  <div class="content-wrapper text-light">
                    <h3 class="banner-title text-light">Penawaran kombo</h3>
                    <p>Diskon hingga 50%</p>
                    <a href="#" class="btn-link text-white">Shop Now</a>
                  </div>
                </div>
              </div>

              <div
                class="banner-ad bg-danger block-3"  data-aos="fade-left" data-aos-duration="1500"
                style="
                  background: url('img/banner-ad-3.jpg') no-repeat;
                  background-size: cover;
                "
              >
                <div class="banner-content align-items-center p-5">
                  <div class="content-wrapper text-light">
                    <h3 class="banner-title text-light">Kupon Diskon</h3>
                    <p>Diskon hingga 40%</p>
                    <a href="#" class="btn-link text-white">Shop Now</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- / Banner Blocks -->
          </div>
        </div>
      </div>
    </section>

    <!-- FEATURE PRODUK INI -->
    
    <section>
      <div class="container-lg">
        <div
          class="bg-secondary text-light py-5 my-5" data-aos="fade-up"
     data-aos-anchor-placement="center-bottom" data-aos-duration="1000"
          style="
            background: url('img/banner-newsletter.jpg') no-repeat;
            background-size: cover;
          "
        >
          <div class="container" id="contact">
            <div class="row justify-content-center">
              <div class="col-md-5 p-3">
                <div class="section-header">
                  <h2 class="section-title display-5 text-light">
                    Dapatkan Diskon 25% pada pembelian Anda
                  </h2>
                </div>
                <p>Daftar sekarang untuk menjadi member kami</p>
              </div>
              <div class="col-md-5 p-3">
                <form>
                  <div class="mb-3">
                    <label for="name" class="form-label d-none">Name</label>
                    <input
                      type="text"
                      class="form-control form-control-md rounded-0"
                      name="name"
                      id="name"
                      placeholder="Name"
                    />
                  </div>
                  <div class="mb-3">
                    <label for="email" class="form-label d-none">Email</label>
                    <input
                      type="email"
                      class="form-control form-control-md rounded-0"
                      name="email"
                      id="email"
                      placeholder="Email Address"
                    />
                  </div>
                  <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-dark btn-md rounded-0">
                      Submit
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  @include ('/product/kulinerkreativ')

  @include ('/product/productkreativ')

  @include ('/product/workshop')

    <section class="pb-4 my-4">
      <div class="container-lg" data-aos="fade-up"
     data-aos-anchor-placement="center-bottom" data-aos-duration="2000">
        <div class="bg-warning pt-5 rounded-5">
          <div class="container" >
            <div class="row justify-content-center align-items-center">
              <div class="col-md-4">
                <h2 class="mt-5">Download Biorama App</h2>
                <p>Online Orders made easy, fast and reliable</p>
                <div class="d-flex gap-2 flex-wrap mb-5">
                  <a href="#" title="App store"
                    ><img src="img/img-app-store.png" alt="app-store"
                  /></a>
                  <a href="#" title="Google Play"
                    ><img src="img/img-google-play.png" alt="google-play"
                  /></a>
                </div>
              </div>
              <div class="col-md-5">
                <img
                  src="img/banner-onlineapp.png"
                  alt="phone"
                  class="img-fluid"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py-4">
      <div class="container-lg">
        <h2 class="my-4">Orang-orang juga mencari</h2>
        <a href="#" class="btn btn-warning me-2 mb-2">Keripik Tempe Renyah</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Tas Anyaman Tradisional</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Sambal Khas Nusantara</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Kerajinan Kayu Ukir</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Bolu Kukus Gula Aren</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Teh Herbal Organik</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Dompet Kulit Lokal</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Cokelat Premium Lokal</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Abon Ikan Pedas Manis</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Kerupuk Udang Tradisional</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Aksesori Perak Handmade</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Kopi Arabika Sumatera</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Batik Tulis Khas Jawa</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Teh Herbal Organik</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Cokelat Premium Lokal</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Lampu Hias Rotan</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Dodol Garut Asli</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Kerajinan Tangan Bambu</a>
      </div>

    </section>

    <section class="py-5">
      <div class="container-lg">
        <div class="row row-cols-1 row-cols-sm-3 row-cols-lg-5">
          <div class="col">
            <div class="card mb-3 border border-dark-subtle p-3">
              <div class="text-dark mb-3">
                <svg width="32" height="32">
                  <use xlink:href="#package"></use>
                </svg>
              </div>
              <div class="card-body p-0">
                <h5>Pengiriman Gratis</h5>
                <p class="card-text">
                  Kami menawarkan layanan pengiriman gratis untuk setiap pembelian.
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-3 border border-dark-subtle p-3">
              <div class="text-dark mb-3">
                <svg width="32" height="32">
                  <use xlink:href="#secure"></use>
                </svg>
              </div>
              <div class="card-body p-0">
                <h5>Pembayaran 100% Aman</h5>
                <p class="card-text">
                  Transaksi Anda dijamin aman dengan sistem pembayaran terpercaya.
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-3 border border-dark-subtle p-3">
              <div class="text-dark mb-3">
                <svg width="32" height="32">
                  <use xlink:href="#quality"></use>
                </svg>
              </div>
              <div class="card-body p-0">
                <h5>Jaminan Kualitas</h5>
                <p class="card-text">
                  Produk kami memiliki kualitas terbaik yang terjamin dan tentunya 100% Organik.
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-3 border border-dark-subtle p-3">
              <div class="text-dark mb-3">
                <svg width="32" height="32">
                  <use xlink:href="#savings"></use>
                </svg>
              </div>
              <div class="card-body p-0">
                <h5>Terjamin Hemat</h5>
                <p class="card-text">
                  Dapatkan penawaran menarik yang membantu Anda menghemat lebih banyak.
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-3 border border-dark-subtle p-3">
              <div class="text-dark mb-3">
                <svg width="32" height="32">
                  <use xlink:href="#offers"></use>
                </svg>
              </div>
              <div class="card-body p-0">
                <h5>Penawaran Harian</h5>
                <p class="card-text">
                  Nikmati penawaran menarik setiap hari yang tidak boleh Anda lewatkan.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- footer strarrt -->
  @include ('/partials/footer')

    
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <script src="js/plugins.js"></script>
    <script src="js/script.js"></script>
    <script src="js/disabilitas.js"></script>
    <script src="js/keranjang.js"></script>
    
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>

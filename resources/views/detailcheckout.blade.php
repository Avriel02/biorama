<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>BIORMA</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />
    <link
      rel="shortcut icon"
      href="img/logoo.png"
      type="image/x-icon"
    />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link
      href="lib/detail/lightbox/css/lightbox.min.css"
      rel="stylesheet"
    />
    <link
      href="lib/detail/owlcarousel/assets/owl.carousel.min.css"
      rel="stylesheet"
    />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap-detail.min.css" rel="stylesheet" />

    <!-- Stylesheet css -->
    <link href="css/checkout.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/disabilitas.css" />
  </head>

  <body>
    <!-- w3 -->
   @include ('/partials/symbol')
    <!-- w3 -->
    <!-- side bar disabilitas -->
   @include ('/partials/disabilitas')

    <!-- Sidebar Aksesibilitas -->
 

    <!-- header ini -->
    <div class="page-header py-5">
      <h1 class="text-center text-white display-6">Shop Detail</h1>
      <ol class="breadcrumb justify-content-center mb-0">
        <li class="breadcrumb-item"><a href="{{url ('/beranda')}}">Beranda</a></li>
        <li class="breadcrumb-item"><a href="{{url ('/produk')}}">Produk</a></li>
        <li class="breadcrumb-item active text-white">Shop Detail</li>
      </ol>
    </div>
    <!--  Header End -->

    <!-- Single Product Start -->
    <div class="container-fluid py-5 mt-5">
      <div class="container py-5">
        <div class="row g-4 mb-5">
          <div class="col-lg-8 col-xl-9">
            <div class="row g-4">
              <div
                id="imageCarousel"
                class="carousel slide col-lg-6"
                data-bs-ride="carousel"
              >
                <div class="carousel-inner border rounded">
                  <div class="carousel-item active">
                    <a href="#">
                      <img
                        src="img/detail-2.jpg"
                        class="img-fluid rounded"
                        alt="Image 1"
                      />
                    </a>
                  </div>
                  <div class="carousel-item">
                    <a href="#">
                      <img
                        src="img/detail-3.jpg"
                        class="img-fluid rounded"
                        alt="Image 2"
                      />
                    </a>
                  </div>
                  <div class="carousel-item">
                    <a href="#">
                      <img
                        src="img/detail-4.jpg"
                        class="img-fluid rounded"
                        alt="Image 3"
                      />
                    </a>
                  </div>
                  <div class="carousel-item">
                    <a href="#">
                      <img
                        src="img/detail-5.jpg"
                        class="img-fluid rounded"
                        alt="Image 4"
                      />
                    </a>
                  </div>
                </div>

                <!-- no slide-->
                <div id="carousel-indicator" class="carousel-indicator">
                  1/4
                </div>

                <!-- komtrol slide -->
                <button
                  class="carousel-control-prev"
                  type="button"
                  data-bs-target="#imageCarousel"
                  data-bs-slide="prev"
                >
                  <span class="carousel-control-prev-icon"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button
                  class="carousel-control-next"
                  type="button"
                  data-bs-target="#imageCarousel"
                  data-bs-slide="next"
                >
                  <span class="carousel-control-next-icon"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>

              <div class="col-lg-6">
                <h4 class="fw-bold mb-3">Beff vegetables</h4>
                <p class="mb-3">Makanana Diet</p>
                <h5 class="fw-bold mb-3">Rp 10.000</h5>
                <div class="d-flex mb-4">
                  <i class="fa fa-star text-secondary"></i>
                  <i class="fa fa-star text-secondary"></i>
                  <i class="fa fa-star text-secondary"></i>
                  <i class="fa fa-star text-secondary"></i>
                  <i class="fa fa-star"></i>
                </div>
                <p class="mb-4">
                Kombinasi sempurna antara daging sapi berkualitas dan sayuran segar yang kaya akan nutrisi. 
                Beef Vegetables menghadirkan rasa yang lezat sekaligus menyehatkan, cocok untuk Anda yang 
                menginginkan makanan praktis namun tetap bergizi.
                </p>
                
                <div class="input-group quantity mb-5" style="width: 100px">
                  <div class="input-group-btn">
                    <button
                      class="btn btn-sm btn-minus rounded-circle bg-light border"
                    >
                      <i class="fa fa-minus"></i>
                    </button>
                  </div>
                  <input
                    type="text"
                    class="form-control form-control-sm text-center border-0"
                    value="1"
                  />
                  <div class="input-group-btn">
                    <button
                      class="btn btn-sm btn-plus rounded-circle bg-light border"
                    >
                      <i class="fa fa-plus"></i>
                    </button>
                  </div>
                </div>
                <a
                  href="#"
                  class="btn border border-secondary rounded-pill px-4 py-2 mb-4 text-primary"
                  ><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to
                  cart</a
                >
                <a
                  href="{{url ('/checkout')}}"
                  class="btn border border-secondary rounded-pill px-4 py-2 mb-4 text-primary"
                  ><i class="fa fa-money-bill-wave me-2 text-primary"></i>
                  Checkout</a
                >
              </div>
              <div class="col-lg-12">
                <nav>
                  <div class="nav nav-tabs mb-3">
                    <button
                      class="nav-link active border-white border-bottom-0"
                      type="button"
                      role="tab"
                      id="nav-about-tab"
                      data-bs-toggle="tab"
                      data-bs-target="#nav-about"
                      aria-controls="nav-about"
                      aria-selected="true"
                    >
                      Deskripsi Produk
                    </button>
                    <button
                      class="nav-link border-white border-bottom-0"
                      type="button"
                      role="tab"
                      id="nav-mission-tab"
                      data-bs-toggle="tab"
                      data-bs-target="#nav-mission"
                      aria-controls="nav-mission"
                      aria-selected="false"
                    >
                      Testimoni
                    </button>
                    <button
                      class="nav-link border-white border-bottom-0"
                      type="button"
                      role="tab"
                      id="nav-mission-tab"
                      data-bs-toggle="tab"
                      data-bs-target="#nav-toko"
                      aria-controls="nav-mission"
                      aria-selected="false"
                    >
                      Toko
                    </button>
                  </div>
                </nav>
                <div class="tab-content mb-5">
                  <div
                    class="tab-pane active"
                    id="nav-about"
                    role="tabpanel"
                    aria-labelledby="nav-about-tab"
                  >
                    <p>
                    Kombinasi sempurna antara daging sapi berkualitas dan sayuran segar yang kaya akan nutrisi. 
                    Beef Vegetables menghadirkan rasa yang lezat sekaligus menyehatkan, 
                    cocok untuk Anda yang menginginkan makanan praktis namun tetap bergizi.
                    </p>
                    <p>
                    Keunggulan Produk:

                    Bahan Berkualitas: Daging sapi premium dan sayuran pilihan segar.
                    Sehat & Lezat: Tinggi protein, serat, dan bebas bahan pengawet.
                    Multifungsi: Cocok untuk lauk utama, salad, atau hidangan praktis lainnya.
                    Mudah Disajikan: Hanya perlu dipanaskan dan siap dinikmati.
                    </p>
                    <div class="px-2">
                      <div class="row g-4">
                        <div class="col-6">
                          <div
                            class="row bg-light align-items-center text-center justify-content-center py-2"
                          >
                            <p>Information nilai gizi</p>
                            <div class="col-6">
                              <p class="mb-0">Kalori</p>
                            </div>
                            <div class="col-6">
                              <p class="mb-0">50-150 kkal</p>
                            </div>
                          </div>
                          <div
                            class="row text-center align-items-center justify-content-center py-2"
                          >
                            <div class="col-6">
                              <p class="mb-0">Protein</p>
                            </div>
                            <div class="col-6">
                              <p class="mb-0">10-20 gram</p>
                            </div>
                          </div>
                          <div
                            class="row bg-light text-center align-items-center justify-content-center py-2"
                          >
                            <div class="col-6">
                              <p class="mb-0">Karbohidrat</p>
                            </div>
                            <div class="col-6">
                              <p class="mb-0">35-45 gram</p>
                            </div>
                          </div>
                          <div
                            class="row text-center align-items-center justify-content-center py-2"
                          >
                            <div class="col-6">
                              <p class="mb-0">Vitamin A</p>
                            </div>
                            <div class="col-6">
                              <p class="mb-0">15-25%</p>
                            </div>
                          </div>
                          <div
                            class="row bg-light text-center align-items-center justify-content-center py-2"
                          >
                            <div class="col-6">
                              <p class="mb-0">Vitamin C</p>
                            </div>
                            <div class="col-6">
                              <p class="mb-0">20-35%</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- testomoni start -->
                  <div
                    class="tab-pane"
                    id="nav-mission"
                    role="tabpanel"
                    aria-labelledby="nav-mission-tab"
                  >
                    <div class="d-flex">
                      <img
                        src="img/testimonial-4.jpeg"
                        class="img-fluid rounded-circle p-3"
                        style="width: 100px; height: 100px"
                        alt=""
                      />
                      <div class="">
                        <p class="mb-2" style="font-size: 14px">
                          12 Oktober 2024
                        </p>
                        <div class="d-flex justify-content-between">
                          <h5>Avril Nur Adi</h5>
                          <div class="d-flex mb-3">
                            <i class="fa fa-star text-secondary"></i>
                            <i class="fa fa-star text-secondary"></i>
                            <i class="fa fa-star text-secondary"></i>
                            <i class="fa fa-star text-secondary"></i>
                            <i class="fa fa-star"></i>
                          </div>
                        </div>
                        <p>
                          Lorem Ipsum is therefore always free from repetition
                          injected humour, or non-characteristic words etc. Susp
                          endisse ultricies nisi vel quam suscipit
                        </p>
                      </div>
                    </div>
                    <div class="d-flex">
                      <img
                        src="img/testimonial-3.jpg"
                        class="img-fluid rounded-circle p-3"
                        style="width: 100px; height: 100px"
                        alt=""
                      />
                      <div class="">
                        <p class="mb-2" style="font-size: 14px">
                          22 Oktober 2024
                        </p>
                        <div class="d-flex justify-content-between">
                          <h5>Hb Rafi'i</h5>
                          <div class="d-flex mb-3">
                            <i class="fa fa-star text-secondary"></i>
                            <i class="fa fa-star text-secondary"></i>
                            <i class="fa fa-star text-secondary"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                          </div>
                        </div>
                        <p class="text-dark">
                          Lorem Ipsum is therefore always free from repetition
                          injected humour, or non-characteristic words etc. Susp
                          endisse ultricies nisi vel quam suscipit
                        </p>
                      </div>
                    </div>
                  </div>
                  <!-- testomoni end -->

                  <!-- toko/store start -->
                  <div
                    class="tab-pane"
                    id="nav-toko"
                    role="tabpanel"
                    aria-labelledby="nav-mission-tab"
                  >
                    <div class="d-flex">
                      <img
                        src="img/toko-1.png"
                        class="img-fluid rounded-circle p-3"
                        style="width: 100px; height: 100px"
                        alt=""
                      />
                      <div class="">
                        <p class="mb-2" style="font-size: 14px">🟢 Online</p>
                        <div class="d-flex justify-content-between">
                          <h5>CST Healthy Food</h5>
                          <div class="d-flex mb-3">
                            <i class="fa fa-star text-secondary"></i>
                            <i class="fa fa-star text-secondary"></i>
                            <i class="fa fa-star text-secondary"></i>
                            <i class="fa fa-star text-secondary"></i>
                            <i class="fa fa-star"></i>
                          </div>
                        </div>
                        <i class="fa-solid fa-location-dot"></i> Purwokerto
                        Selatan
                        <p>
                          <br />
                          Lorem ipsum dolor, sit amet consectetur adipisicing
                          elit. Velit sapiente esse vero tempora tenetur fuga.
                          Exercitationem recusandae quos unde provident.
                        </p>
                      </div>
                    </div>
                    <a
                      href="{{url ('/detailmitra')}}"
                      class="btn border border-secondary rounded-pill px-4 py-2 mb-4 text-primary"
                      ><i class="fa fa-eye me-2 text-primary"></i> Lihat Toko</a
                    >
                  </div>
                </div>
              </div>
              <form action="#">
                <h4 class="mb-5 fw-bold">Nilai Produk</h4>
                <div class="row g-4">
                  <div class="col-lg-6">
                    <div class="border-bottom rounded">
                      <input
                        type="text"
                        class="form-control border-0 me-4"
                        placeholder="Nama *"
                      />
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="border-bottom rounded">
                      <input
                        type="email"
                        class="form-control border-0"
                        placeholder="Email *"
                      />
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="border-bottom rounded my-4">
                      <textarea
                        name=""
                        id=""
                        class="form-control border-0"
                        cols="30"
                        rows="8"
                        placeholder="Tulis Reviewmu *"
                        spellcheck="false"
                      ></textarea>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="d-flex justify-content-between py-3 mb-5">
                      <div class="d-flex align-items-center">
                        <p class="mb-0 me-3">Penilaian Review</p>
                        <div
                          class="d-flex align-items-center"
                          style="font-size: 12px"
                        >
                          <i class="fa fa-star text-muted"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                        </div>
                      </div>
                      <a
                        href="#"
                        class="btn border border-secondary text-primary rounded-pill px-4 py-3"
                      >
                        Post Review</a
                      >
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-4 col-xl-3">
            <div class="row g-4 fruite">
              <div class="col-lg-12">
                <div class="input-group w-100 mx-auto d-flex mb-4">
                  <input
                    type="search"
                    class="form-control p-3"
                    placeholder="keywords"
                    aria-describedby="search-icon-1"
                  />
                  <span id="search-icon-1" class="input-group-text p-3"
                    ><i class="fa fa-search"></i
                  ></span>
                </div>
                <div class="mb-4">
                  <h4>Categories</h4>
                  <ul class="list-unstyled fruite-categorie">
                    <li>
                      <div class="d-flex justify-content-between fruite-name">
                        <a href="#"
                          ><i class="fa fa-check"></i> Makanan Rendah kalori
                        </a>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex justify-content-between fruite-name">
                        <a href="#"
                          ><i class="fa fa-check"></i> Baik untuk berdiet</a
                        >
                      </div>
                    </li>
                    <li>
                      <div class="d-flex justify-content-between fruite-name">
                        <a href="#"
                          ><i class="fa fa-check"></i> Rasa Bintang lima</a
                        >
                      </div>
                    </li>
                    <li>
                      <div class="d-flex justify-content-between fruite-name">
                        <a href="#"
                          ><i class="fa fa-check"></i> Snack Bergizi Tinggi</a
                        >
                      </div>
                    </li>
                    <li>
                      <div class="d-flex justify-content-between fruite-name">
                        <a href="#"
                          ><i class="fa fa-check"></i> Dari Sayuran yang Fresh
                        </a>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-12">
                <h4 class="mb-4">Produk lainnya</h4>
                <div class="d-flex align-items-center justify-content-start">
                  <div class="rounded" style="width: 100px; height: 100px">
                    <img
                      src="img/product-makanan-2.png"
                      class="img-fluid rounded"
                      alt="Image"
                      style="width: 80px"
                    />
                  </div>
                  <div>
                    <h6 class="mb-2">Roti Kentang</h6>
                    <div class="d-flex mb-2">
                      <i class="fa fa-star text-secondary"></i>
                      <i class="fa fa-star text-secondary"></i>
                      <i class="fa fa-star text-secondary"></i>
                      <i class="fa fa-star text-secondary"></i>
                      <i class="fa fa-star"></i>
                    </div>
                    <div class="d-flex mb-2">
                      <h5 class="fw-bold me-2">Rp 15.000</h5>
                    </div>
                  </div>
                </div>
                <div class="d-flex align-items-center justify-content-start">
                  <div class="rounded" style="width: 100px; height: 100px">
                    <img
                      src="img/product-makanan-1.png"
                      class="img-fluid rounded"
                      alt=""
                      style="width: 80px"
                    />
                  </div>
                  <div>
                    <h6 class="mb-2">Beff vegetables</h6>
                    <div class="d-flex mb-2">
                      <i class="fa fa-star text-secondary"></i>
                      <i class="fa fa-star text-secondary"></i>
                      <i class="fa fa-star text-secondary"></i>
                      <i class="fa fa-star text-secondary"></i>
                      <i class="fa fa-star"></i>
                    </div>
                    <div class="d-flex mb-2">
                      <h5 class="fw-bold me-2">Rp 10.000</h5>
                    </div>
                  </div>
                </div>
                <div class="d-flex align-items-center justify-content-start">
                  <div class="rounded" style="width: 100px; height: 100px">
                    <img
                      src="img/product-makanan-3.png"
                      class="img-fluid rounded"
                      alt=""
                      style="width: 80px"
                    />
                  </div>
                  <div>
                    <h6 class="mb-2">Beras Pulen</h6>
                    <div class="d-flex mb-2">
                      <i class="fa fa-star text-secondary"></i>
                      <i class="fa fa-star text-secondary"></i>
                      <i class="fa fa-star text-secondary"></i>
                      <i class="fa fa-star text-secondary"></i>
                      <i class="fa fa-star"></i>
                    </div>
                    <div class="d-flex mb-2">
                      <h5 class="fw-bold me-2">Rp 19.000</h5>
                    </div>
                  </div>
                </div>
                <div class="d-flex align-items-center justify-content-start">
                  <div class="rounded" style="width: 100px; height: 100px">
                    <img
                      src="img/product-makanan-4.png"
                      class="img-fluid rounded"
                      alt=""
                      style="width: 80px"
                    />
                  </div>
                  <div>
                    <h6 class="mb-2">Pizza noris'z</h6>
                    <div class="d-flex mb-2">
                      <i class="fa fa-star text-secondary"></i>
                      <i class="fa fa-star text-secondary"></i>
                      <i class="fa fa-star text-secondary"></i>
                      <i class="fa fa-star text-secondary"></i>
                      <i class="fa fa-star"></i>
                    </div>
                    <div class="d-flex mb-2">
                      <h5 class="fw-bold me-2">Rp 30.000</h5>
                    </div>
                  </div>
                </div>
                <div class="d-flex align-items-center justify-content-start">
                  <div class="rounded" style="width: 100px; height: 100px">
                    <img
                      src="img/product-thumb-17.png"
                      class="img-fluid rounded"
                      alt=""
                      style="width: 80px"
                    />
                  </div>
                  <div>
                    <h6 class="mb-2">Eucalyptus Momsky</h6>
                    <div class="d-flex mb-2">
                      <i class="fa fa-star text-secondary"></i>
                      <i class="fa fa-star text-secondary"></i>
                      <i class="fa fa-star text-secondary"></i>
                      <i class="fa fa-star text-secondary"></i>
                      <i class="fa fa-star"></i>
                    </div>
                    <div class="d-flex mb-2">
                      <h5 class="fw-bold me-2">Rp 20.000</h5>
                    </div>
                  </div>
                </div>
                <div class="d-flex align-items-center justify-content-start">
                  <div class="rounded" style="width: 100px; height: 100px">
                    <img
                      src="img/product-thumb-18.png"
                      class="img-fluid rounded"
                      alt=""
                      style="width: 80px"
                    />
                  </div>
                  <div>
                    <h6 class="mb-2">Boneka Organik</h6>
                    <div class="d-flex mb-2">
                      <i class="fa fa-star text-secondary"></i>
                      <i class="fa fa-star text-secondary"></i>
                      <i class="fa fa-star text-secondary"></i>
                      <i class="fa fa-star text-secondary"></i>
                      <i class="fa fa-star"></i>
                    </div>
                    <div class="d-flex mb-2">
                      <h5 class="fw-bold me-2">Rp 25.000</h5>
                    </div>
                  </div>
                </div>
                <div class="d-flex justify-content-center my-4">
                  <a
                    href="{{url ('/produk')}}"
                    class="btn border border-secondary px-4 py-3 rounded-pill text-primary w-100"
                    >Vew More</a
                  >
                </div>
              </div>
              <div class="col-lg-12">
                <div class="position-relative">
                  <img
                    src="img/diskon.jpg"
                    class="img-fluid w-100 rounded"
                    alt=""
                  />
                  <div
                    class="position-absolute"
                    style="top: 50%; right: 10px; transform: translateY(-50%)"
                  >
                    <h3 class="text-secondary fw-bold">
                      <a href="#">
                        Claim<br />
                        Diskon<br />
                        Disini
                      </a>
                    </h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <h1 class="fw-bold mb-0">Kamu Mungkin Juga Suka</h1>
        <div class="vesitable">
          <div class="owl-carousel vegetable-carousel justify-content-center">
            <div
              class="border border-primary rounded position-relative vesitable-item"
            >
              <div class="vesitable-img">
                <img
                  src="img/produk-8.jpg"
                  class="img-fluid w-100 rounded-top"
                  alt=""
                />
              </div>
              <div class="p-4 pb-0 rounded-bottom">
                <h4>Bonsai Kaktus</h4>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit sed do
                  eiusmod te incididunt
                </p>
                <div class="d-flex justify-content-between flex-lg-wrap">
                  <p class="text-dark fs-5 fw-bold">Rp 70.000</p>
                  <a
                    href="#"
                    class="btn border border-secondary rounded-pill px-3 py-1 mb-4 text-primary"
                    ><i class="fa fa-eye me-2 text-primary"></i> Lihat Produk</a
                  >
                </div>
              </div>
            </div>
            <div
              class="border border-primary rounded position-relative vesitable-item"
            >
              <div class="vesitable-img">
                <img
                  src="img/produk-1.jpg"
                  class="img-fluid w-100 rounded-top"
                  alt=""
                />
              </div>

              <div class="p-4 pb-0 rounded-bottom">
                <h4>Beras Pulen</h4>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit sed do
                  eiusmod te incididunt
                </p>
                <div class="d-flex justify-content-between flex-lg-wrap">
                  <p class="text-dark fs-5 fw-bold">Rp 20.000</p>
                  <a
                    href="#"
                    class="btn border border-secondary rounded-pill px-3 py-1 mb-4 text-primary"
                    ><i class="fa fa-eye me-2 text-primary"></i> Lihat Produk</a
                  >
                </div>
              </div>
            </div>
            <div
              class="border border-primary rounded position-relative vesitable-item"
            >
              <div class="vesitable-img">
                <img
                  src="img/produk-2.jpg"
                  class="img-fluid w-100 rounded-top bg-light"
                  alt=""
                />
              </div>

              <div class="p-4 pb-0 rounded-bottom">
                <h4>Water Imun</h4>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit sed do
                  eiusmod te incididunt
                </p>
                <div class="d-flex justify-content-between flex-lg-wrap">
                  <p class="text-dark fs-5 fw-bold">Rp 7.000</p>
                  <a
                    href="#"
                    class="btn border border-secondary rounded-pill px-3 py-1 mb-4 text-primary"
                    ><i class="fa fa-eye me-2 text-primary"></i> Lihat Produk</a
                  >
                </div>
              </div>
            </div>
            <div
              class="border border-primary rounded position-relative vesitable-item"
            >
              <div class="vesitable-img">
                <img
                  src="img/produk-3.jpg"
                  class="img-fluid w-100 rounded-top"
                  alt=""
                />
              </div>
              <div class="p-4 pb-0 rounded-bottom">
                <h4>Sabun Organik</h4>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit sed do
                  eiusmod te incididunt
                </p>
                <div class="d-flex justify-content-between flex-lg-wrap">
                  <p class="text-dark fs-5 fw-bold">Rp 7.000</p>
                  <a
                    href="#"
                    class="btn border border-secondary rounded-pill px-3 py-1 mb-4 text-primary"
                    ><i class="fa fa-eye me-2 text-primary"></i> Lihat Produk</a
                  >
                </div>
              </div>
            </div>
            <div
              class="border border-primary rounded position-relative vesitable-item"
            >
              <div class="vesitable-img">
                <img
                  src="img/produk-4.jpg"
                  class="img-fluid w-100 rounded-top"
                  alt=""
                />
              </div>

              <div class="p-4 pb-0 rounded-bottom">
                <h4>Tas Anyaman</h4>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit sed do
                  eiusmod te incididunt
                </p>
                <div class="d-flex justify-content-between flex-lg-wrap">
                  <p class="text-dark fs-5 fw-bold">Rp 50.000</p>
                  <a
                    href="#"
                    class="btn border border-secondary rounded-pill px-3 py-1 mb-4 text-primary"
                    ><i class="fa fa-eye me-2 text-primary"></i> Lihat Produk</a
                  >
                </div>
              </div>
            </div>
            <div
              class="border border-primary rounded position-relative vesitable-item"
            >
              <div class="vesitable-img">
                <img
                  src="img/produk-5.jpg"
                  class="img-fluid w-100 rounded-top"
                  alt=""
                />
              </div>

              <div class="p-4 pb-0 rounded-bottom">
                <h4>Norist' Pizza</h4>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit sed do
                  eiusmod te incididunt
                </p>
                <div class="d-flex justify-content-between flex-lg-wrap">
                  <p class="text-dark fs-5 fw-bold">Rp. 25.000</p>
                  <a
                    href="#"
                    class="btn border border-secondary rounded-pill px-3 py-1 mb-4 text-primary"
                    ><i class="fa fa-eye me-2 text-primary"></i> Lihat Produk</a
                  >
                </div>
              </div>
            </div>
            <div
              class="border border-primary rounded position-relative vesitable-item"
            >
              <div class="vesitable-img">
                <img
                  src="img/produk-6.jpg"
                  class="img-fluid w-100 rounded-top"
                  alt=""
                />
              </div>

              <div class="p-4 pb-0 rounded-bottom">
                <h4>Roti kentang</h4>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit sed do
                  eiusmod te incididunt
                </p>
                <div class="d-flex justify-content-between flex-lg-wrap">
                  <p class="text-dark fs-5 fw-bold">Rp 17.000</p>
                  <a
                    href="#"
                    class="btn border border-secondary rounded-pill px-3 py-1 mb-4 text-primary"
                    ><i class="fa fa-eye me-2 text-primary"></i> Lihat Produk</a
                  >
                </div>
              </div>
            </div>
            <div
              class="border border-primary rounded position-relative vesitable-item"
            >
              <div class="vesitable-img">
                <img
                  src="img/produk-7.jpg"
                  class="img-fluid w-100 rounded-top"
                  alt=""
                />
              </div>
              <div class="p-4 pb-0 rounded-bottom">
                <h4>Hand Made bunny</h4>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit sed do
                  eiusmod te incididunt
                </p>
                <div class="d-flex justify-content-between flex-lg-wrap">
                  <p class="text-dark fs-5 fw-bold">Rp 25.000</p>
                  <a
                    href="#"
                    class="btn border border-secondary rounded-pill px-3 py-1 mb-4 text-primary"
                    ><i class="fa fa-eye me-2 text-primary"></i> Lihat Produk</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Single Produk End -->

    <!-- Footer Start -->
 @include ('/partials/footer')
    <!-- Footer End -->

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/detail/easing/easing.min.js"></script>
    <script src="lib/detail/waypoints/waypoints.min.js"></script>
    <script src="lib/detail/lightbox/js/lightbox.min.js"></script>
    <script src="lib/detail/owlcarousel/owl.carousel.min.js"></script>
    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
    ></script>

    <!-- Template Javascript -->
    <script src="js/checkout.js"></script>
    <script src="js/disabilitas.js"></script>
  </body>
</html>

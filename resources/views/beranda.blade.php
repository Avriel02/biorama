<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>BIORAMA</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&family=Poppins:wght@200;300;400;500;600&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <!-- Libraries ngelink -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link
      href="lib/owlcarousel/assets/owl.carousel.min.css"
      rel="stylesheet"
    />

    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template  dari css -->
    <link href="css/beranda.css" rel="stylesheet" />
    <link href="css/produk.css" rel="stylesheet" />

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
    <link rel="stylesheet" type="text/css" href="css/vendor.css" />
    <link rel="stylesheet" type="text/css" href="css/produk.css" />
    <link rel="stylesheet" href="css/disabilitas.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap"
      rel="stylesheet"
    />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link
      rel="shortcut icon"
      href="img/logoo.png"
      type="image/x-icon"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    />
  </head>

  <body>
    <!-- Navbar & Hero Start -->
   @include ('/partials/symbol')

    <!-- header start ini -->
  @include ('/partials/navbar')
    <!-- Navbar & Hero End -->

    <!-- Carousel start -->
    <div class="carousel-header">
      <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
          <li
            data-bs-target="#carouselId"
            data-bs-slide-to="0"
            class="active"
          ></li>
          <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <img
              src="img/welcome-bg-1.png"
              class="img-fluid"
              alt="Image"
            />
            <div class="carousel-caption">
              <div class="text-center p-4" style="max-width: 900px">
                <h4
                  class="text-white text-uppercase fw-bold mb-3 mb-md-4 wow fadeInUp"
                  data-wow-delay="0.1s"
                >
                  Welcome To Biorama
                </h4>
                <h1
                  class="display-1 text-capitalize text-white mb-3 mb-md-4 wow fadeInUp"
                  data-wow-delay="0.3s"
                >
                  Peduli Bumi <br />Pilih Produk Organik
                </h1>
                <p
                  class="text-white mb-4 mb-md-5 fs-5 wow fadeInUp"
                  data-wow-delay="0.5s"
                >
                  Dengan memilih produk organik, Anda tidak hanya mendapatkan
                  manfaat bagi kesehatan, tetapi juga ikut berperan dalam
                  melindungi Bumi dari kerusakan lingkungan. Produk-produk ini
                  bebas dari bahan kimia berbahaya
                </p>
                <a
                  class="btn btn-primary border-secondary rounded-pill text-white py-3 px-5 wow fadeInUp"
                  data-wow-delay="0.7s"
                  href="#"
                  >More Details</a
                >
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img
              src="img/welcome-bg-2.png"
              class="img-fluid"
              alt="Image"
            />
            <div class="carousel-caption">
              <div class="text-center p-4" style="max-width: 900px">
                <h5
                  class="text-white text-uppercase fw-bold mb-3 mb-md-4 wow fadeInUp"
                  data-wow-delay="0.1s"
                >
                  Welcome To Biorama
                </h5>
                <h1
                  class="display-1 text-capitalize text-white mb-3 mb-md-4 wow fadeInUp"
                  data-wow-delay="0.3s"
                >
                  Ramah Lingkungan Penuh Makna
                </h1>
                <p
                  class="text-white mb-4 mb-md-5 fs-5 wow fadeInUp"
                  data-wow-delay="0.5s"
                >
                  setiap produk organik di Biorama dipilih dengan teliti dari
                  mitra UMKM yang berkomitmen pada prinsip keberlanjutan, tidak
                  hanya membawa manfaat bagi penggunanya, tetapi juga berperan
                  dalam menjaga kelestarian lingkungan.
                </p>
                <a
                  class="btn btn-primary border-secondary rounded-pill text-white py-3 px-5 wow fadeInUp"
                  data-wow-delay="0.7s"
                  href="#"
                  >More Details</a
                >
              </div>
            </div>
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselId"
          data-bs-slide="prev"
        >
          <span
            class="carousel-control-prev-icon bg-secondary wow fadeInLeft"
            data-wow-delay="0.2s"
            aria-hidden="false"
          ></span>
          <span class="visually-hidden-focusable">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselId"
          data-bs-slide="next"
        >
          <span
            class="carousel-control-next-icon bg-secondary wow fadeInRight"
            data-wow-delay="0.2s"
            aria-hidden="false"
          ></span>
          <span class="visually-hidden-focusable">Next</span>
        </button>
      </div>
    </div>
    <!-- Carousel End -->


 
    @include ('/partials/disabilitas')
   
    <!-- Modal Search Start -->
    <div
      class="modal fade"
      id="searchModal"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-fullscreen">
        <div class="modal-content rounded-0">
          <div class="modal-header">
            <h4 class="modal-title text-secondary mb-0" id="exampleModalLabel">
              Search by keyword
            </h4>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body d-flex align-items-center">
            <div class="input-group w-75 mx-auto d-flex">
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
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Search End -->

    <!-- About Start -->
    <div class="container-fluid py-5">
      <div class="container py-5">
        <div class="row g-5">
          <div class="col-xl-5 wow fadeInLeft" data-wow-delay="0.1s">
            <div class="bg-light rounded">
              <img
                src="img/logobiorama.png"
                class="img-fluid w-80"
                style="margin-bottom: -7px"
                alt="Image"
              />
              <img
                src="img/namabiorama.png"
                class="img-fluid w-100 border-bottom border-5 border-primary"
                alt="Image"
              />
            </div>
          </div>
          <div class="col-xl-7 wow fadeInRight" data-wow-delay="0.3s">
            <h5 class="sub-title pe-3">Tentang Biorama</h5>
            <h1 class="display-5 mb-4">Platform Digital Inovatif</h1>
            <p class="mb-4">
            Kami hadir untuk membantu UMKM lokal memasarkan produk-produk organik mereka, 
            memperluas jangkauan pasar, dan membangun ekosistem yang kreatif dan berkelanjutan.
            Melalui Biorama, kami menghubungkan UMKM dengan konsumen yang peduli terhadap produk
             ramah lingkungan, sehat, dan berkualitas tinggi. Selain itu, kami juga menyediakan ruang 
             untuk kolaborasi melalui mini-workshop, pengalaman edukatif, dan berbagai aktivitas kreatif lainnya.
            </p>
            <div class="row gy-4 align-items-center">
              <div class="col-12 col-sm-6 d-flex align-items-center">
                <i class="fas fa-leaf fa-3x text-secondary"></i>
                <h5 class="ms-4">Praktik Keberlanjutan Terbaik</h5>
              </div>
              <div class="col-12 col-sm-6 d-flex align-items-center">
                <i class="fas fa-recycle fa-3x text-secondary"></i>
                <h5 class="ms-4">Produk Ramah Lingkungan Tersedia</h5>
              </div>
              <div class="col-4 col-md-3">
                <div class="bg-light text-center rounded p-3">
                  <div class="mb-2">
                    <i class="fas fa-seedling fa-4x text-primary"></i>
                  </div>

                  <p class="text-muted mb-0">Inovasi Untuk Masa Depan</p>
                </div>
              </div>
              <div class="col-8 col-md-9">
                <div class="mb-5">
                  <p class="text-primary h6 mb-3">
                    <i class="fa fa-check-circle text-secondary me-2"></i> 100%
                    Bahan Alami
                  </p>
                  <p class="text-primary h6 mb-3">
                    <i class="fa fa-check-circle text-secondary me-2"></i> Ramah
                    Lingkungan & Efektif
                  </p>
                  <p class="text-primary h6 mb-3">
                    <i class="fa fa-check-circle text-secondary me-2"></i>
                    Panduan Ahli Dalam Praktir Berkelanjutan
                  </p>
                </div>
                <div class="d-flex flex-wrap">
                  <div
                    id="phone-tada"
                    class="d-flex align-items-center justify-content-center me-4"
                  >
                    <a
                      href=""
                      class="position-relative wow tada"
                      data-wow-delay=".9s"
                    >
                      <i class="fa fa-phone-alt text-primary fa-3x"></i>
                      <div class="position-absolute" style="top: 0; left: 25px">
                        <span
                          ><i class="fa fa-comment-dots text-secondary"></i
                        ></span>
                      </div>
                    </a>
                  </div>
                  <div class="d-flex flex-column justify-content-center">
                    <span class="text-primary">Tanya MinBIO?</span>
                    <span
                      class="text-secondary fw-bold fs-5"
                      style="letter-spacing: 2px"
                      >Free: +62 889-8076-6136</span
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- About End -->

    <!-- Counter Start -->
    <div class="container-fluid counter-facts py-5">
      <div class="container py-5">
        <div class="row g-4">
          <div
            class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp"
            data-wow-delay="0.1s"
          >
            <div class="counter">
              <div class="counter-icon">
                <i class="fas fa-archive"></i>
              </div>
              <div class="counter-content">
                <h3>Produk Ramah Lingkungan</h3>
                <div class="d-flex align-items-center justify-content-center">
                  <span class="counter-value" data-toggle="counter-up">12</span>
                  <h4
                    class="text-secondary mb-0"
                    style="font-weight: 600; font-size: 25px"
                  >
                    +
                  </h4>
                </div>
              </div>
            </div>
          </div>
          <div
            class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp"
            data-wow-delay="0.3s"
          >
            <div class="counter">
              <div class="counter-icon">
                <i class="fas fa-users"></i>
              </div>
              <div class="counter-content">
                <h3>Tim Kreatif Lingkungan</h3>
                <div class="d-flex align-items-center justify-content-center">
                  <span class="counter-value" data-toggle="counter-up">14</span>
                  <h4
                    class="text-secondary mb-0"
                    style="font-weight: 600; font-size: 25px"
                  >
                    +
                  </h4>
                </div>
              </div>
            </div>
          </div>
          <div
            class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp"
            data-wow-delay="0.5s"
          >
            <div class="counter">
              <div class="counter-icon">
                <i class="fas fa-tools"></i>
              </div>
              <div class="counter-content">
                <h3>Workshop Lingkungan</h3>
                <div class="d-flex align-items-center justify-content-center">
                  <span class="counter-value" data-toggle="counter-up">14</span>

                  <h4
                    class="text-secondary mb-0"
                    style="font-weight: 600; font-size: 25px"
                  ></h4>
                </div>
              </div>
            </div>
          </div>
          <div
            class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp"
            data-wow-delay="0.7s"
          >
            <div class="counter">
              <div class="counter-icon">
                <i class="fas fa-user-check"></i>
              </div>
              <div class="counter-content">
                <h3>Dukungan Ahli Lingkungan</h3>
                <div class="d-flex align-items-center justify-content-center">
                  <span class="counter-value" data-toggle="counter-up">98</span>
                  <h4
                    class="text-secondary mb-0"
                    style="font-weight: 600; font-size: 25px"
                  >
                    %
                  </h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Counter  End -->

    <!-- Servis Start -->
    <div class="container-fluid service overflow-hidden pt-5" id="workshop">
      <div class="container py-5">
        <div
          class="section-title text-center mb-5 wow fadeInUp"
          data-wow-delay="0.1s"
        >
          <div class="sub-style">
            <h5 class="sub-title text-primary px-3">Workshop</h5>
          </div>
          <h1 class="display-5 mb-4">Manfaat Workshop</h1>
          <p class="mb-0">
          Dapatkan pengalaman belajar yang interaktif, wawasan baru dari para ahli, dan kesempatan 
          untuk berkolaborasi dengan komunitas kreatif dalam setiap sesi workshop kami. Jadilah bagian 
          dari perubahan positif untuk mendukung UMKM organik.
          </p>
        </div>
        <div class="row g-4">
          <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item">
              <div class="service-inner">
                <div class="service-img">
                  <img
                    src="img/workshop-2.jpg"
                    class="img-fluid w-80 rounded"
                    alt="Image"
                  />
                </div>
                <div class="service-title">
                  <div class="service-title-name">
                    <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                      <a href="#" class="h4 text-white mb-0">Solar Spark</a>
                    </div>
                    <a
                      class="btn bg-light text-secondary rounded-pill py-3 px-5 mb-4"
                      href="#"
                      >Explore More</a
                    >
                  </div>
                  <div class="service-content pb-4">
                    <a href="#"
                      ><h4 class="text-white mb-4 py-3">Solar Spark</h4></a
                    >
                    <div class="px-4">
                      <p class="mb-4">
                      Mendorong perkembangan pedesaan dengan inovasi energi terbarukan! Solar Smart mengusung 
                      teknologi panel surya sebagai solusi untuk meningkatkan akses energi di wilayah terpencil,
                      dan mewujudkan keberlanjutan untuk masa depan.
                      </p>
                      <a
                        class="btn btn-primary border-secondary rounded-pill py-3 px-5"
                        href="#"
                        >Explore More</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
            <div class="service-item">
              <div class="service-inner">
                <div class="service-img">
                  <img
                    src="img/workshop-3.jpg"
                    class="img-fluid w-100 rounded"
                    alt="Image"
                  />
                </div>
                <div class="service-title">
                  <div class="service-title-name">
                    <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                      <a href="#" class="h4 text-white mb-0">FunsRE</a>
                    </div>
                    <a
                      class="btn bg-light text-secondary rounded-pill py-3 px-5 mb-4"
                      href="#"
                      >Explore More</a
                    >
                  </div>
                  <div class="service-content pb-4">
                    <a href="#"
                      ><h4 class="text-white mb-4 py-3">SunsRE</h4></a
                    >
                    <div class="px-4">
                      <p class="mb-4">
                      Belajar energi terbarukan, FunsRE adalah ruang diskusi interaktif yang dirancang untuk meningkatkan 
                      kesadaran tentang pentingnya energi berkelanjutan. Bergabunglah untuk menemukan inspirasi, berbagi ide, 
                      dan menjadi bagian dari perubahan positif
                      </p>
                      <a
                        class="btn btn-primary border-secondary rounded-pill text-white py-3 px-5"
                        href="#"
                        >Explore More</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.5s">
            <div class="service-item">
              <div class="service-inner">
                <div class="service-img">
                  <img
                    src="img/workshop-4.jpg"
                    class="img-fluid w-100 rounded"
                    alt="Image"
                  />
                </div>
                <div class="service-title">
                  <div class="service-title-name">
                    <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                      <a href="#" class="h4 text-white mb-0"> Career Talk</a>
                    </div>
                    <a
                      class="btn bg-light text-secondary rounded-pill py-3 px-5 mb-4"
                      href="#"
                      >Explore More</a
                    >
                  </div>
                  <div class="service-content pb-4">
                    <a href="#"
                      ><h4 class="text-white mb-4 py-3">Career Talk</h4></a
                    >
                    <div class="px-4">
                      <p class="mb-4">
                      Ikuti diskusi inspiratif mengenai potensi biomassa sebagai solusi energi terbarukan. Dalam sesi ini, 
                      kita akan membahas tantangan dan peluang dalam memanfaatkan biomassa untuk mengurangi ketergantungan 
                      pada energi fosil
                      </p>
                      <a
                        class="btn btn-primary border-secondary rounded-pill text-white py-3 px-5"
                        href="#"
                        >Explore More</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item">
              <div class="service-inner">
                <div class="service-img">
                  <img
                    src="img/workshop-2.jpg"
                    class="img-fluid w-80 rounded"
                    alt="Image"
                  />
                </div>
                <div class="service-title">
                  <div class="service-title-name">
                    <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                      <a href="#" class="h4 text-white mb-0">Solar Spark</a>
                    </div>
                    <a
                      class="btn bg-light text-secondary rounded-pill py-3 px-5 mb-4"
                      href="#"
                      >Explore More</a
                    >
                  </div>
                  <div class="service-content pb-4">
                    <a href="#"
                      ><h4 class="text-white mb-4 py-3">Solar Spark</h4></a
                    >
                    <div class="px-4">
                      <p class="mb-4">
                      Mendorong perkembangan pedesaan dengan inovasi energi terbarukan! Solar Smart mengusung 
                      teknologi panel surya sebagai solusi untuk meningkatkan akses energi di wilayah terpencil,
                      dan mewujudkan keberlanjutan untuk masa depan.
                      </p>
                      <a
                        class="btn btn-primary border-secondary rounded-pill py-3 px-5"
                        href="#"
                        >Explore More</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
            <div class="service-item">
              <div class="service-inner">
                <div class="service-img">
                  <img
                    src="img/workshop-3.jpg"
                    class="img-fluid w-100 rounded"
                    alt="Image"
                  />
                </div>
                <div class="service-title">
                  <div class="service-title-name">
                    <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                      <a href="#" class="h4 text-white mb-0">FunsRE</a>
                    </div>
                    <a
                      class="btn bg-light text-secondary rounded-pill py-3 px-5 mb-4"
                      href="#"
                      >Explore More</a
                    >
                  </div>
                  <div class="service-content pb-4">
                    <a href="#"
                      ><h4 class="text-white mb-4 py-3">SunsRE</h4></a
                    >
                    <div class="px-4">
                      <p class="mb-4">
                      Belajar energi terbarukan, FunsRE adalah ruang diskusi interaktif yang dirancang untuk meningkatkan 
                      kesadaran tentang pentingnya energi berkelanjutan. Bergabunglah untuk menemukan inspirasi, berbagi ide, 
                      dan menjadi bagian dari perubahan positif
                      </p>
                      <a
                        class="btn btn-primary border-secondary rounded-pill text-white py-3 px-5"
                        href="#"
                        >Explore More</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.5s">
            <div class="service-item">
              <div class="service-inner">
                <div class="service-img">
                  <img
                    src="img/workshop-4.jpg"
                    class="img-fluid w-100 rounded"
                    alt="Image"
                  />
                </div>
                <div class="service-title">
                  <div class="service-title-name">
                    <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                      <a href="#" class="h4 text-white mb-0"> Career Talk</a>
                    </div>
                    <a
                      class="btn bg-light text-secondary rounded-pill py-3 px-5 mb-4"
                      href="#"
                      >Explore More</a
                    >
                  </div>
                  <div class="service-content pb-4">
                    <a href="#"
                      ><h4 class="text-white mb-4 py-3">Career Talk</h4></a
                    >
                    <div class="px-4">
                      <p class="mb-4">
                      Ikuti diskusi inspiratif mengenai potensi biomassa sebagai solusi energi terbarukan. Dalam sesi ini, 
                      kita akan membahas tantangan dan peluang dalam memanfaatkan biomassa untuk mengurangi ketergantungan 
                      pada energi fosil
                      </p>
                      <a
                        class="btn btn-primary border-secondary rounded-pill text-white py-3 px-5"
                        href="#"
                        >Explore More</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
         
        
          
        </div>
      </div>
    </div>
    <!-- Servis End -->

    <!-- Features Start -->
    <div class="container-fluid features overflow-hidden py-5">
      <div class="container">
        <div
          class="section-title text-center mb-5 wow fadeInUp"
          data-wow-delay="0.1s"
        >
          <div class="sub-style">
            <h5 class="sub-title text-primary px-3">Why Choose Us</h5>
          </div>
          <h1 class="display-5 mb-4">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
          </h1>
          <p class="mb-0">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat
            deleniti amet at atque sequi quibusdam cumque itaque repudiandae
            temporibus, eius nam mollitia voluptas maxime veniam necessitatibus
            saepe in ab? Repellat!
          </p>
        </div>
        <div class="row g-4 justify-content-center text-center">
          <div
            class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp"
            data-wow-delay="0.1s"
          >
            <div class="feature-item text-center p-4">
              <div class="feature-icon p-3 mb-4">
                <i class="fas fa-chart-line fa-4x text-primary"></i>
              </div>
              <div class="feature-content d-flex flex-column">
                <h5 class="mb-3">Akses Pasar</h5>
                <p class="mb-3">
                membantu UMKM organik untuk menjangkau pasar yang lebih luas dengan 
                menghadirkan platform digital inovatif.
                </p>
                <a class="btn btn-secondary rounded-pill" href="#"
                  >Read More<i class="fas fa-arrow-right ms-2"></i
                ></a>
              </div>
            </div>
          </div>
          <div
            class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp"
            data-wow-delay="0.3s"
          >
            <div class="feature-item text-center p-4">
              <div class="feature-icon p-3 mb-4">
                <i class="fas fa-sync-alt fa-4x text-primary"></i>
              </div>
              <div class="feature-content d-flex flex-column">
                <h5 class="mb-3">Efisiensi Produk</h5>
                <p class="mb-3">
                Melalui pendekatan teknologi dan strategi pemasaran yang tepat, 
                kami membantu UMKM meningkatkan efisiensi produk.
                </p>
                <a class="btn btn-secondary rounded-pill" href="#"
                  >Read More<i class="fas fa-arrow-right ms-2"></i
                ></a>
              </div>
            </div>
          </div>
          <div
            class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp"
            data-wow-delay="0.5s"
          >
            <div class="feature-item text-center p-4">
              <div class="feature-icon p-3 mb-4">
                <i class="fas fa-seedling fa-4x text-primary"></i>
              </div>
              <div class="feature-content d-flex flex-column">
                <h5 class="mb-3">Ekonomi Hijau</h5>
                <p class="mb-3">
                Kami mendukung prinsip ekonomi berkelanjutan dengan memprioritaskan 
                produk-produk organik yang ramah lingkungan.
                </p>
                <a class="btn btn-secondary rounded-pill" href="#"
                  >Read More<i class="fas fa-arrow-right ms-2"></i
                ></a>
              </div>
            </div>
          </div>
          <div
            class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp"
            data-wow-delay="0.7s"
          >
            <div class="feature-item text-center p-4">
              <div class="feature-icon p-3 mb-4">
                <i class="fas fa-palette fa-4x text-primary"></i>
              </div>
              <div class="feature-content d-flex flex-column">
                <h5 class="mb-3">Komunitas Kreatif</h5>
                <p class="mb-3">
                Biorama tidak hanya menjadi platform, tetapi juga ruang 
                untuk kolaborasi dan pertukaran ide. 
                </p>
                <a class="btn btn-secondary rounded-pill" href="#"
                  >Read More<i class="fas fa-arrow-right ms-2"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="col-12">
            <a
              class="btn btn-primary border-secondary rounded-pill py-3 px-5 wow fadeInUp"
              data-wow-delay="0.1s"
              href="#"
              >More Features</a
            >
          </div>
        </div>
      </div>
    </div>
    <!-- Features End -->

    <!-- Testimonial Start -->
    <div class="container-fluid testimonial overflow-hidden pb-5">
      <div class="container py-5">
        <div
          class="section-title text-center mb-5 wow fadeInUp"
          data-wow-delay="0.1s"
        >
          <div class="sub-style">
            <h5 class="sub-title text-primary px-3">What They Say </h5>
          </div>
          <h1 class="display-5 mb-4">Testimoni Pelanggan Kami</h1>
          <p class="mb-0">
          "Dengan Biorama, kami dapat lebih fokus pada inovasi produk karena mereka menangani 
          pemasaran dengan sangat baik. Terima kasih Biorama!"
          </p>
        </div>
        <div
          class="owl-carousel testimonial-carousel wow zoomInDown"
          data-wow-delay="0.2s"
        >
          <div class="testimonial-item">
            <div class="d-flex">
              <div
                class="rounded-circle me-4"
                style="width: 100px; height: 100px"
              >
                <img
                  class="img-fluid rounded-circle"
                  src="img/testimonial-3.jpg"
                  alt="img"
                />
              </div>
              <div class="my-auto">
                <h5>Habib Rafii</h5>
                <p class="mb-0">Profession</p>
              </div>
            </div>
          </div>
          <div class="testimonial-item">
            <div class="testimonial-content p-4 mb-5">
              <p class="fs-5 mb-0">
              "Platform Biorama sangat intuitif dan memberikan banyak fitur yang membantu 
              kami dalam mengelola penjualan produk organik secara online."
              </p>
              <div class="d-flex justify-content-end">
                <i class="fas fa-star text-secondary"></i>
                <i class="fas fa-star text-secondary"></i>
                <i class="fas fa-star text-secondary"></i>
                <i class="fas fa-star text-secondary"></i>
                <i class="fas fa-star text-secondary"></i>
              </div>
            </div>
            <div class="d-flex">
              <div
                class="rounded-circle me-4"
                style="width: 100px; height: 100px"
              >
                <img
                  class="img-fluid rounded-circle"
                  src="img/testimonial-3.jpg"
                  alt="img"
                />
              </div>
              <div class="my-auto">
                <h5>Habib Rafii</h5>
                <p class="mb-0">Profession</p>
              </div>
            </div>
          </div>
          <div class="testimonial-item">
            <div class="testimonial-content p-4 mb-5">
              <p class="fs-5 mb-0">
              "Platform Biorama sangat intuitif dan memberikan banyak fitur yang membantu 
              kami dalam mengelola penjualan produk organik secara online."
              </p>
              <div class="d-flex justify-content-end">
                <i class="fas fa-star text-secondary"></i>
                <i class="fas fa-star text-secondary"></i>
                <i class="fas fa-star text-secondary"></i>
                <i class="fas fa-star text-secondary"></i>
                <i class="fas fa-star text-secondary"></i>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
     
    <!-- Testimoni End -->
    <!-- section-->
    <section class="section" id="getintouch">
      <div class="section--text">
        <h3 class="section--tertiary-text">Love to hear something form you</h3>
      </div>
      <form class="section--form">
        <h3 class="section--form-text">Get in touch</h3>
        <input type="text" placeholder="Name" />
        <input type="text" placeholder="Email" />
        <input type="text" placeholder="Number" />
        <button class="submit" type="submit">Send</button>
      </form>
    </section>
    <!--End section-->
    <!-- Footer Start -->
  @include ('/partials/footer')
    <!-- Footer End -->

   
    <!-- JavaScript Libraries -->
    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
    ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="js/disabilitas.js"></script>

    <!-- Template Js -->
    <script src="js/main.js"></script>
  </body>
</html>

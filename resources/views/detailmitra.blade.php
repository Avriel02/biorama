<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Biorama</title>
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
    
    <div class="page-header py-5">
      <h1 class="text-center text-white display-6">Shop Detail</h1>
      <ol class="breadcrumb justify-content-center mb-0">
        <li class="breadcrumb-item"><a href="{{url ('/beranda')}}">Beranda</a></li>
        <li class="breadcrumb-item"><a href="{{url ('/produk')}}">Produk</a></li>
        <li class="breadcrumb-item active text-white">Mitra Kami</li>
      </ol>
    </div>
    <!-- Hero Start -->
    <div class="container-fluid py-5 mb-5 hero-header">
      <div class="container py-5">
        <div class="row g-5 align-items-center">
          <div class="col-md-12 col-lg-7">
            <h1 class="text-primary">CST Healthy Food</h1>
            <h5 class="mb-3 text-secondary">Pendiri : Taufik Prasetya</h5>
            <hr />
            <p>
              CST Healthy Food merupakan salah satu usaha dibidang F&B yang ada
              di Jawa Tengah yang sudah ada sejak 2019. Pemilik dari usaha ini
              adalah Bapak Taufik Prasetya. Bermula dari kecintaan pak Taufik
              mengkonsumsi sayur dan salah satu keluarganya ada yang sakit, Jadi
              beliau mencari tahu bahan-bahan alam yang ada disekitar agar layak
              dikonsumsi dengan proses pengolahan yang benar dan gizi seimbang.
              Semua produk yang dihasilkan sangat membantu banyak orang untuk
              yang sedang melakukan program menurunkan dan menaikkan berat
              badan, meningkatkan masa otot, program hamil, dan recovery orang
              yang sedang sakit. Produk yang ditawarkan berupa makanan bergizi
              seimbang dengan harga terjangkau mulai dari RP 18.000 hingga Rp
              50.000
            </p>
          </div>
          <div class="col-md-12 col-lg-5">
            <div
              id="carouselId"
              class="carousel slide position-relative"
              data-bs-ride="carousel"
            >
              <div class="carousel-inner" role="listbox">
                <div class="carousel-item active rounded">
                  <img
                    src="img/toko-1.png"
                    class="img-fluid w-100 h-100 rounded"
                    alt="First slide"
                  />
                  <a href="#" class="btn px-4 py-2 text-white rounded"
                    >Fruites</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Hero End -->

    <!-- Fruits Shop Start-->
    <div class="container-fluid fruite py-5" style="margin-top: -10rem">
      <div class="container py-5">
        <div class="tab-class text-center">
          <div class="row g-4">
            <div class="col-lg-4 text-start">
              <h1>Produk Kami</h1>
            </div>
            <div class="col-lg-8 text-end">
              <ul class="nav nav-pills d-inline-flex text-center mb-5">
                <li class="nav-item">
                  <a
                    class="d-flex m-2 py-2 bg-light rounded-pill active"
                    data-bs-toggle="pill"
                    href="#tab-1"
                  >
                    <span class="text-dark" style="width: 130px"
                      >Semua Produk</span
                    >
                  </a>
                </li>
                <li class="nav-item">
                  <a
                    class="d-flex py-2 m-2 bg-light rounded-pill"
                    data-bs-toggle="pill"
                    href="#tab-2"
                  >
                    <span class="text-dark" style="width: 130px"
                      >Bahan Pokok</span
                    >
                  </a>
                </li>
                <li class="nav-item">
                  <a
                    class="d-flex m-2 py-2 bg-light rounded-pill"
                    data-bs-toggle="pill"
                    href="#tab-3"
                  >
                    <span class="text-dark" style="width: 130px"
                      >Eco Organik</span
                    >
                  </a>
                </li>
                <li class="nav-item">
                  <a
                    class="d-flex m-2 py-2 bg-light rounded-pill"
                    data-bs-toggle="pill"
                    href="#tab-4"
                  >
                    <span class="text-dark" style="width: 130px">Kuliner</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a
                    class="d-flex m-2 py-2 bg-light rounded-pill"
                    data-bs-toggle="pill"
                    href="#tab-5"
                  >
                    <span class="text-dark" style="width: 130px">Handmade</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="tab-content">
            <div id="tab-1" class="tab-pane fade show p-0 active">
              <div class="row g-4">
                <div class="col-lg-12">
                  <div class="row g-4">
                    <div class="col-md-6 col-lg-4 col-xl-3">
                      <div class="rounded position-relative fruite-item">
                        <div class="fruite-img">
                          <img
                            src="img/produk-1.jpg"
                            class="img-fluid w-100 rounded-top"
                            alt=""
                          />
                        </div>

                        <div
                          class="p-4 border border-secondary border-top-0 rounded-bottom"
                        >
                          <h4>Beras pulen</h4>
                          <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit sed do eiusmod te incididunt
                          </p>
                          <div
                            class="d-flex justify-content-between flex-lg-wrap"
                          >
                            <p class="text-dark fs-5 fw-bold mb-0">Rp 20.000</p>
                            <a
                              href="{{ url ('/detailcheckout') }}"
                              class="btn border border-secondary rounded-pill px-3 text-primary"
                              ><i class="fa fa-eye me-2 text-primary"></i> Lihat
                              Produk</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                      <div class="rounded position-relative fruite-item">
                        <div class="fruite-img">
                          <img
                            src="img/produk-2.jpg"
                            class="img-fluid w-100 rounded-top"
                            alt=""
                          />
                        </div>

                        <div
                          class="p-4 border border-secondary border-top-0 rounded-bottom"
                        >
                          <h4>Infused Water</h4>
                          <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit sed do eiusmod te incididunt
                          </p>
                          <div
                            class="d-flex justify-content-between flex-lg-wrap"
                          >
                            <p class="text-dark fs-5 fw-bold mb-0">Rp 20.000</p>
                            <a
                              href="{{ url ('/detailcheckout') }}"
                              class="btn border border-secondary rounded-pill px-3 text-primary"
                              ><i class="fa fa-eye me-2 text-primary"></i> Lihat
                              Produk</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                      <div class="rounded position-relative fruite-item">
                        <div class="fruite-img">
                          <img
                            src="img/produk-3.jpg"
                            class="img-fluid w-100 rounded-top"
                            alt=""
                          />
                        </div>

                        <div
                          class="p-4 border border-secondary border-top-0 rounded-bottom"
                        >
                          <h4>Organic soap</h4>
                          <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit sed do eiusmod te incididunt
                          </p>
                          <div
                            class="d-flex justify-content-between flex-lg-wrap"
                          >
                            <p class="text-dark fs-5 fw-bold mb-0">Rp 20.000</p>
                            <a
                              href="{{ url ('/detailcheckout') }}"
                              class="btn border border-secondary rounded-pill px-3 text-primary"
                              ><i class="fa fa-eye me-2 text-primary"></i> Lihat
                              Produk</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                      <div class="rounded position-relative fruite-item">
                        <div class="fruite-img">
                          <img
                            src="img/produk-4.jpg"
                            class="img-fluid w-100 rounded-top"
                            alt=""
                          />
                        </div>

                        <div
                          class="p-4 border border-secondary border-top-0 rounded-bottom"
                        >
                          <h4>Tas Anyam</h4>
                          <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit sed do eiusmod te incididunt
                          </p>
                          <div
                            class="d-flex justify-content-between flex-lg-wrap"
                          >
                            <p class="text-dark fs-5 fw-bold mb-0">Rp 20.000</p>
                            <a
                              href="{{ url ('/detailcheckout') }}"
                              class="btn border border-secondary rounded-pill px-3 text-primary"
                              ><i class="fa fa-eye me-2 text-primary"></i> Lihat
                              Produk</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                      <div class="rounded position-relative fruite-item">
                        <div class="fruite-img">
                          <img
                            src="img/produk-5.jpg"
                            class="img-fluid w-100 rounded-top"
                            alt=""
                          />
                        </div>

                        <div
                          class="p-4 border border-secondary border-top-0 rounded-bottom"
                        >
                          <h4>Norist' Pizza</h4>
                          <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit sed do eiusmod te incididunt
                          </p>
                          <div
                            class="d-flex justify-content-between flex-lg-wrap"
                          >
                            <p class="text-dark fs-5 fw-bold mb-0">Rp 20.000</p>
                            <a
                              href="#"
                              class="btn border border-secondary rounded-pill px-3 text-primary"
                              ><i class="fa fa-eye me-2 text-primary"></i> Lihat
                              Produk</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                      <div class="rounded position-relative fruite-item">
                        <div class="fruite-img">
                          <img
                            src="img/produk-6.jpg"
                            class="img-fluid w-100 rounded-top"
                            alt=""
                          />
                        </div>

                        <div
                          class="p-4 border border-secondary border-top-0 rounded-bottom"
                        >
                          <h4>Roti Kentang</h4>
                          <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit sed do eiusmod te incididunt
                          </p>
                          <div
                            class="d-flex justify-content-between flex-lg-wrap"
                          >
                            <p class="text-dark fs-5 fw-bold mb-0">Rp 20.000</p>
                            <a
                              href="#"
                              class="btn border border-secondary rounded-pill px-3 text-primary"
                              ><i class="fa fa-eye me-2 text-primary"></i> Lihat
                              Produk</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                      <div class="rounded position-relative fruite-item">
                        <div class="fruite-img">
                          <img
                            src="img/produk-7.jpg"
                            class="img-fluid w-100 rounded-top"
                            alt=""
                          />
                        </div>

                        <div
                          class="p-4 border border-secondary border-top-0 rounded-bottom"
                        >
                          <h4>Hand made bunny</h4>
                          <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit sed do eiusmod te incididunt
                          </p>
                          <div
                            class="d-flex justify-content-between flex-lg-wrap"
                          >
                            <p class="text-dark fs-5 fw-bold mb-0">Rp 20.000</p>
                            <a
                              href="#"
                              class="btn border border-secondary rounded-pill px-3 text-primary"
                              ><i class="fa fa-eye me-2 text-primary"></i> Lihat
                              Produk</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                      <div class="rounded position-relative fruite-item">
                        <div class="fruite-img">
                          <img
                            src="img/produk-8.jpg"
                            class="img-fluid w-100 rounded-top"
                            alt=""
                          />
                        </div>

                        <div
                          class="p-4 border border-secondary border-top-0 rounded-bottom"
                        >
                          <h4>Bonsai Kaktus</h4>
                          <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit sed do eiusmod te incididunt
                          </p>
                          <div
                            class="d-flex justify-content-between flex-lg-wrap"
                          >
                            <p class="text-dark fs-5 fw-bold mb-0">Rp 20.000</p>
                            <a
                              href="#"
                              class="btn border border-secondary rounded-pill px-3 text-primary"
                              ><i class="fa fa-eye me-2 text-primary"></i> Lihat
                              Produk</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="tab-2" class="tab-pane fade show p-0">
              <div class="row g-4">
                <div class="col-lg-12">
                  <div class="row g-4">
                    <div class="col-md-6 col-lg-4 col-xl-3">
                      <div class="rounded position-relative fruite-item">
                        <div class="fruite-img">
                          <img
                            src="img/produk-1.jpg"
                            class="img-fluid w-100 rounded-top"
                            alt=""
                          />
                        </div>

                        <div
                          class="p-4 border border-secondary border-top-0 rounded-bottom"
                        >
                          <h4>Beras Pulen</h4>
                          <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit sed do eiusmod te incididunt
                          </p>
                          <div
                            class="d-flex justify-content-between flex-lg-wrap"
                          >
                            <p class="text-dark fs-5 fw-bold mb-0">Rp 20.000</p>
                            <a
                              href="#"
                              class="btn border border-secondary rounded-pill px-3 text-primary"
                              ><i class="fa fa-eye me-2 text-primary"></i> Lihat
                              Produk</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                      <div class="rounded position-relative fruite-item">
                        <div class="fruite-img">
                          <img
                            src="img/produk-2.jpg"
                            class="img-fluid w-100 rounded-top"
                            alt=""
                          />
                        </div>

                        <div
                          class="p-4 border border-secondary border-top-0 rounded-bottom"
                        >
                          <h4>Infused water</h4>
                          <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit sed do eiusmod te incididunt
                          </p>
                          <div
                            class="d-flex justify-content-between flex-lg-wrap"
                          >
                            <p class="text-dark fs-5 fw-bold mb-0">Rp 20.000</p>
                            <a
                              href="#"
                              class="btn border border-secondary rounded-pill px-3 text-primary"
                              ><i class="fa fa-eye me-2 text-primary"></i> Lihat
                              Produk</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="tab-3" class="tab-pane fade show p-0">
              <div class="row g-4">
                <div class="col-lg-12">
                  <div class="row g-4">
                    <div class="col-md-6 col-lg-4 col-xl-3">
                      <div class="rounded position-relative fruite-item">
                        <div class="fruite-img">
                          <img
                            src="img/produk-3.jpg"
                            class="img-fluid w-100 rounded-top"
                            alt=""
                          />
                        </div>

                        <div
                          class="p-4 border border-secondary border-top-0 rounded-bottom"
                        >
                          <h4>Organic Soap</h4>
                          <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit sed do eiusmod te incididunt
                          </p>
                          <div
                            class="d-flex justify-content-between flex-lg-wrap"
                          >
                            <p class="text-dark fs-5 fw-bold mb-0">Rp 20.000</p>
                            <a
                              href="#"
                              class="btn border border-secondary rounded-pill px-3 text-primary"
                              ><i class="fa fa-eye me-2 text-primary"></i> Lihat
                              Produk</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                      <div class="rounded position-relative fruite-item">
                        <div class="fruite-img">
                          <img
                            src="img/produk-4.jpg"
                            class="img-fluid w-100 rounded-top"
                            alt=""
                          />
                        </div>

                        <div
                          class="p-4 border border-secondary border-top-0 rounded-bottom"
                        >
                          <h4>Tas Anyam</h4>
                          <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit sed do eiusmod te incididunt
                          </p>
                          <div
                            class="d-flex justify-content-between flex-lg-wrap"
                          >
                            <p class="text-dark fs-5 fw-bold mb-0">Rp 20.000</p>
                            <a
                              href="#"
                              class="btn border border-secondary rounded-pill px-3 text-primary"
                              ><i class="fa fa-eye me-2 text-primary"></i> Lihat
                              Produk</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="tab-4" class="tab-pane fade show p-0">
              <div class="row g-4">
                <div class="col-lg-12">
                  <div class="row g-4">
                    <div class="col-md-6 col-lg-4 col-xl-3">
                      <div class="rounded position-relative fruite-item">
                        <div class="fruite-img">
                          <img
                            src="img/produk-5.jpg"
                            class="img-fluid w-100 rounded-top"
                            alt=""
                          />
                        </div>

                        <div
                          class="p-4 border border-secondary border-top-0 rounded-bottom"
                        >
                          <h4>Norist Pizza</h4>
                          <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit sed do eiusmod te incididunt
                          </p>
                          <div
                            class="d-flex justify-content-between flex-lg-wrap"
                          >
                            <p class="text-dark fs-5 fw-bold mb-0">Rp 20.000</p>
                            <a
                              href="#"
                              class="btn border border-secondary rounded-pill px-3 text-primary"
                              ><i class="fa fa-eye me-2 text-primary"></i> Lihat
                              Produk</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                      <div class="rounded position-relative fruite-item">
                        <div class="fruite-img">
                          <img
                            src="img/produk-6.jpg"
                            class="img-fluid w-100 rounded-top"
                            alt=""
                          />
                        </div>

                        <div
                          class="p-4 border border-secondary border-top-0 rounded-bottom"
                        >
                          <h4>Roti Kentang</h4>
                          <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit sed do eiusmod te incididunt
                          </p>
                          <div
                            class="d-flex justify-content-between flex-lg-wrap"
                          >
                            <p class="text-dark fs-5 fw-bold mb-0">Rp 20.000</p>
                            <a
                              href="#"
                              class="btn border border-secondary rounded-pill px-3 text-primary"
                              ><i class="fa fa-eye me-2 text-primary"></i> Lihat
                              Produk</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="tab-5" class="tab-pane fade show p-0">
              <div class="row g-4">
                <div class="col-lg-12">
                  <div class="row g-4">
                    <div class="col-md-6 col-lg-4 col-xl-3">
                      <div class="rounded position-relative fruite-item">
                        <div class="fruite-img">
                          <img
                            src="img/produk-7.jpg"
                            class="img-fluid w-100 rounded-top"
                            alt=""
                          />
                        </div>

                        <div
                          class="p-4 border border-secondary border-top-0 rounded-bottom"
                        >
                          <h4>Handmade Bunny</h4>
                          <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit sed do eiusmod te incididunt
                          </p>
                          <div
                            class="d-flex justify-content-between flex-lg-wrap"
                          >
                            <p class="text-dark fs-5 fw-bold mb-0">Rp 20.000</p>
                            <a
                              href="#"
                              class="btn border border-secondary rounded-pill px-3 text-primary"
                              ><i class="fa fa-eye me-2 text-primary"></i> Lihat
                              Produk</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                      <div class="rounded position-relative fruite-item">
                        <div class="fruite-img">
                          <img
                            src="img/produk-8.jpg"
                            class="img-fluid w-100 rounded-top"
                            alt=""
                          />
                        </div>
                        <div
                          class="p-4 border border-secondary border-top-0 rounded-bottom"
                        >
                          <h4>Bonsai Kaktus</h4>
                          <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit sed do eiusmod te incididunt
                          </p>
                          <div
                            class="d-flex justify-content-between flex-lg-wrap"
                          >
                            <p class="text-dark fs-5 fw-bold mb-0">Rp 20.000</p>
                            <a
                              href="#"
                              class="btn border border-secondary rounded-pill px-3 text-primary"
                              ><i class="fa fa-eye me-2 text-primary"></i> Lihat
                              Produk</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                      <div class="rounded position-relative fruite-item">
                        <div class="fruite-img">
                          <img
                            src="img/produk-3.jpg"
                            class="img-fluid w-100 rounded-top"
                            alt=""
                          />
                        </div>

                        <div
                          class="p-4 border border-secondary border-top-0 rounded-bottom"
                        >
                          <h4>Organic Soap</h4>
                          <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit sed do eiusmod te incididunt
                          </p>
                          <div
                            class="d-flex justify-content-between flex-lg-wrap"
                          >
                            <p class="text-dark fs-5 fw-bold mb-0">Rp 20.000</p>
                            <a
                              href="#"
                              class="btn border border-secondary rounded-pill px-3 text-primary"
                              ><i class="fa fa-eye me-2 text-primary"></i> Add
                              to cart</a
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
        </div>
      </div>
    </div>
    <!-- Fruits Shop End-->

    <!-- Featurs Start -->
    <div class="container-fluid service py-5">
      <div class="container py-5">
        <div class="row g-4 justify-content-center">
          <div class="col-md-6 col-lg-4">
            <a href="#">
              <div
                class="service-item bg-secondary rounded border border-secondary"
              >
                <div class="px-4 rounded-bottom">
                  <div
                    class="service-content bg-primary text-center p-4 rounded"
                  >
                    <h5 class="text-white">Fresh Organic</h5>
                    <h3 class="mb-0">20% OFF</h3>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a href="#">
              <div class="service-item bg-dark rounded border border-dark">
                <div class="px-4 rounded-bottom">
                  <div class="service-content bg-light text-center p-4 rounded">
                    <h5 class="text-primary">100% Organic</h5>
                    <h3 class="mb-0">Free delivery</h3>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a href="#">
              <div
                class="service-item bg-primary rounded border border-primary"
              >
                <div class="px-4 rounded-bottom">
                  <div
                    class="service-content bg-secondary text-center p-4 rounded"
                  >
                    <h5 class="text-white">Produk UMKM</h5>
                    <h3 class="mb-0">Discount 30%</h3>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>

 @include ('/partials/footer')
    <!-- Footer End -->

    <!-- JavaScript Libray -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/detail/easing/easing.min.js"></script>
    <script src="lib/detail/waypoints/waypoints.min.js"></script>
    <script src="lib/detail/lightbox/js/lightbox.min.js"></script>
    <script src="lib/detail/owlcarousel/owl.carousel.min.js"></script>

    <!-- ion icon -->
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

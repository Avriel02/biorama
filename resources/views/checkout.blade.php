<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>BIORAMA</title>
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
      href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
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

    <!-- Template Stylesheet -->
    <link href="css/checkout.css" rel="stylesheet" />
  </head>

  <body>
    <!-- Single Page Header start -->
    <div class="container-fluid page-header py-5">
      <h1 class="text-center text-white display-6">Checkout</h1>
      <ol class="breadcrumb justify-content-center mb-0">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Pages</a></li>
        <li class="breadcrumb-item active text-white">Checkout</li>
      </ol>
    </div>
    <!-- Single Page Header End -->

    <!-- Checkout Page Start -->
    <div class="container-fluid py-5" style="margin-top: 50px">
      <div class="container py-5">
        <h1 class="mb-4">Detail Pembayaran</h1>
        <form action="#">
          <div class="row g-5">
            <div class="col-md-12 col-lg-6 col-xl-7">
              <div class="row">
                <div class="col-md-12 col-lg-6">
                  <div class="form-item w-100">
                    <label class="form-label my-3">Nama<sup>*</sup></label>
                    <input type="text" class="form-control" />
                  </div>
                </div>
                <div class="col-md-12 col-lg-6">
                  <div class="form-item w-100">
                    <label class="form-label my-3"
                      >Nama Akhir<sup>*</sup></label
                    >
                    <input type="text" class="form-control" />
                  </div>
                </div>
              </div>
              <div class="form-item">
                <label class="form-label my-3"
                  >Pre-order (jika pre-order) <sup></sup
                ></label>
                <input type="date" class="form-control" />
              </div>
              <div class="form-item">
                <label class="form-label my-3">No Telepon <sup>*</sup></label>
                <input type="text" class="form-control" />
              </div>

              <div class="form-item">
                <label class="form-label my-3">Provinsi<sup>*</sup></label>
                <select
                  id="provinsi"
                  class="form-control"
                  onchange="fetchKabupaten()"
                  style="background-color: #ffffff"
                >
                  <option value="">Pilih Provinsi</option>
                </select>
              </div>
              <div class="form-item">
                <label class="form-label my-3"
                  >Kabupaten/Kota<sup>*</sup></label
                >
                <select
                  id="kabupaten"
                  class="form-control"
                  onchange="fetchKecamatan()"
                  style="background-color: #ffffff"
                >
                  <option value="">Pilih Kabupaten/Kota</option>
                </select>
              </div>
              <div class="form-item">
                <label class="form-label my-3">Kecamatan<sup>*</sup></label>
                <select
                  id="kecamatan"
                  class="form-control"
                  onchange="fetchdesa()"
                  style="background-color: #ffffff"
                >
                  <option value="">Pilih Kecamatan</option>
                </select>
              </div>
              <div class="form-item">
                <label class="form-label my-3">Desa<sup>*</sup></label>
                <select
                  id="desa"
                  class="form-control"
                  style="background-color: #ffffff"
                >
                  <option value="">Pilih Desa</option>
                </select>
              </div>
              <div class="form-item">
                <label class="form-label my-3">Detail Alamat<sup>*</sup></label>
                <input type="text" class="form-control" />
              </div>
              <hr />
              <div class="form-item">
                <textarea
                  name="text"
                  class="form-control"
                  spellcheck="false"
                  cols="30"
                  rows="11"
                  placeholder="Catatan untuk penjual (Optional)"
                ></textarea>
              </div>
            </div>
            <div class="col-md-12 col-lg-6 col-xl-5">
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Produk</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Harga</th>
                      <th scope="col">Jumlah</th>
                      <th scope="col">Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">
                        <div class="d-flex align-items-center mt-2">
                          <img
                            src="img/product-makanan-1.png"
                            class="img-fluid rounded-circle"
                            style="width: 90px; height: 90px"
                            alt=""
                          />
                        </div>
                      </th>
                      <td class="py-5">vegetables</td>
                      <td class="py-5">10.000</td>
                      <td class="py-5">2</td>
                      <td class="py-5">Rp20.000</td>
                    </tr>
                    <tr>
                      <th scope="row">
                        <div class="d-flex align-items-center mt-2">
                          <img
                            src="img/product-makanan-2.png"
                            class="img-fluid rounded-circle"
                            style="width: 90px; height: 90px"
                            alt=""
                          />
                        </div>
                      </th>
                      <td class="py-5">Roti kentang</td>
                      <td class="py-5">15.000</td>
                      <td class="py-5">1</td>
                      <td class="py-5">Rp15.000</td>
                    </tr>
                    <tr>
                      <th scope="row">
                        <div class="d-flex align-items-center mt-2">
                          <img
                            src="img/product-thumb-18.png"
                            class="img-fluid rounded-circle"
                            style="width: 90px; height: 90px"
                            alt=""
                          />
                        </div>
                      </th>
                      <td class="py-5">Organic Bunny</td>
                      <td class="py-5">25.00</td>
                      <td class="py-5">2</td>
                      <td class="py-5">Rp50.000</td>
                    </tr>
                    <tr>
                      <th scope="row"></th>
                      <td class="py-5"></td>
                      <td class="py-5"></td>
                      <td class="py-5">
                        <p class="mb-0 text-dark py-3">Subtotal</p>
                      </td>
                      <td class="py-5">
                        <div class="py-3 border-bottom border-top">
                          <p class="mb-0 text-dark">Rp85.000</p>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row"></th>
                      <td class="py-5">
                        <p class="mb-0 text-dark py-4">Voucermu</p>
                      </td>
                      <td colspan="3" class="py-5">
                        <div class="form-check text-start">
                          <input
                            type="checkbox"
                            class="form-check-input bg-primary border-0"
                            id="Shipping-1"
                            name="Shipping-1"
                            value="Shipping"
                          />
                          <label class="form-check-label" for="Shipping-1"
                            >Voucer Gratis Ongkir</label
                          >
                        </div>
                        <div class="form-check text-start">
                          <input
                            type="checkbox"
                            class="form-check-input bg-primary border-0"
                            id="Shipping-2"
                            name="Shipping-1"
                            value="Shipping"
                          />
                          <label class="form-check-label" for="Shipping-2"
                            >Cashback 30%</label
                          >
                        </div>
                        <div class="form-check text-start">
                          <input
                            type="checkbox"
                            class="form-check-input bg-primary border-0"
                            id="Shipping-3"
                            name="Shipping-1"
                            value="Shipping"
                          />
                          <label class="form-check-label" for="Shipping-3"
                            >Diskon 11:11</label
                          >
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row"></th>
                      <td class="py-5">
                        <p class="mb-0 text-dark text-uppercase py-3">TOTAL</p>
                      </td>
                      <td class="py-5"></td>
                      <td class="py-5"></td>
                      <td class="py-5">
                        <div class="py-3 border-bottom border-top">
                          <p class="mb-0 text-dark">Rp65.000</p>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <div
                class="row g-4 text-center align-items-center justify-content-center border-bottom py-3"
              >
                <ul style="list-style-type: none; padding-left: 0">
                  <li style="display: flex; align-items: center">
                    <input type="radio" name="bank" value="bca" />
                    <img
                      src="img/BCA.png"
                      alt="BCA"
                      style="margin-left: 10px; margin-right: 10px; width: 50px"
                    />
                    BCA
                  </li>
                  <br />
                  <li style="display: flex; align-items: center">
                    <input type="radio" name="bank" value="bri" />
                    <img
                      src="img/BRI.png"
                      alt="BRI"
                      style="margin-left: 10px; margin-right: 10px; width: 50px"
                    />
                    BRI
                  </li>
                  <br />
                  <li style="display: flex; align-items: center">
                    <input type="radio" name="bank" value="mandiri" />
                    <img
                      src="img/MANDIRI.png"
                      alt="Mandiri"
                      style="margin-left: 10px; margin-right: 10px; width: 50px"
                    />
                    Mandiri
                  </li>
                  <br />
                  <li style="display: flex; align-items: center">
                    <input type="radio" name="bank" value="bni" />
                    <img
                      src="img/BNI.png"
                      alt="BNI"
                      style="margin-left: 10px; margin-right: 10px; width: 50px"
                    />
                    BNI
                  </li>
                  <br />
                  <li style="display: flex; align-items: center">
                    <input type="radio" name="bank" value="COD" />
                    <img
                      src="img/COD.png"
                      alt="COD"
                      style="margin-left: 10px; margin-right: 10px; width: 50px"
                    />
                    COD
                  </li>
                </ul>
                <div class="bank-details">
                  <p>
                    Lakukan pembayaran Anda langsung ke rekening bank kami,
                    nomer Rekening akan ditampilkan setelah proses ini. Pesanan
                    Anda akan dikirim setelah kami menerima pembayaran.
                  </p>
                </div>
              </div>
              <div
                class="row g-4 text-center align-items-center justify-content-center pt-4"
              >
                <button
                  type="button"
                  class="btn border-secondary py-3 px-4 text-uppercase w-100 text-primary"
                  onclick="showPopup()"
                >
                  Place Order
                </button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>

    <div id="popup" class="popup-overlay">
      <div class="popup-content">
        <h2>Place Order Berhasil</h2>
        <p>Silakan lakukan pembayaran ke nomor BRIVA berikut:</p>
        <h3>12345-67890-12345</h3>
        <button class="close-btn" onclick="closePopup()">Tutup</button>
      </div>
    </div>
    <!-- Checkout Page End -->

    <!-- Footer Start -->
    @include ('/partials/footer')
    <!-- Footer End -->

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="/Checkout/main.js" defer></script>

    <!-- API wilyah indo -->
    <script>
      fetch("https://ibnux.github.io/data-indonesia/provinsi.json")
        .then((response) => response.json())
        .then((data) => {
          const provinsiSelect = document.getElementById("provinsi");
          data.forEach((provinsi) => {
            let option = document.createElement("option");
            option.value = provinsi.id;
            option.textContent = provinsi.nama;
            provinsiSelect.appendChild(option);
          });
        });

      // Fetch Kabupaten
      document
        .getElementById("provinsi")
        .addEventListener("change", function () {
          const provinsiId = this.value;
          const kabupatenSelect = document.getElementById("kabupaten");
          kabupatenSelect.innerHTML =
            '<option value="">Pilih Kabupaten/Kota</option>'; // Clear previous options

          fetch(
            `https://ibnux.github.io/data-indonesia/kabupaten/${provinsiId}.json`
          )
            .then((response) => response.json())
            .then((data) => {
              data.forEach((kabupaten) => {
                let option = document.createElement("option");
                option.value = kabupaten.id;
                option.textContent = kabupaten.nama;
                kabupatenSelect.appendChild(option);
              });
            });
        });

      // Fetch Kecamatan
      document
        .getElementById("kabupaten")
        .addEventListener("change", function () {
          const kabupatenId = this.value;
          const kecamatanSelect = document.getElementById("kecamatan");
          kecamatanSelect.innerHTML =
            '<option value="">Pilih Kecamatan</option>'; // Clear previous options

          fetch(
            `https://ibnux.github.io/data-indonesia/kecamatan/${kabupatenId}.json`
          )
            .then((response) => response.json())
            .then((data) => {
              data.forEach((kecamatan) => {
                let option = document.createElement("option");
                option.value = kecamatan.id;
                option.textContent = kecamatan.nama;
                kecamatanSelect.appendChild(option);
              });
            });
        });

      // Fetch Desa
      document
        .getElementById("kecamatan")
        .addEventListener("change", function () {
          const kecamatanId = this.value;
          const desaSelect = document.getElementById("desa");
          desaSelect.innerHTML = '<option value="">Pilih Desa</option>'; // Clear previous options

          fetch(
            `https://ibnux.github.io/data-indonesia/kelurahan/${kecamatanId}.json`
          )
            .then((response) => response.json())
            .then((data) => {
              data.forEach((desa) => {
                let option = document.createElement("option");
                option.value = desa.id;
                option.textContent = desa.nama;
                desaSelect.appendChild(option);
              });
            });
        });

      function showPopup() {
        document.getElementById("popup").style.display = "flex";
      }

      // Fungsi buat nutup pop-up
      function closePopup() {
        window.location.href = "{{url ('/produk')}}";
      }
    </script>
  </body>
</html>




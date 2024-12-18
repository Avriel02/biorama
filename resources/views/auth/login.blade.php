<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>BIORAMA</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <link rel="shortcut icon" type="image/png" href="img/logoo.png" />
  <meta content="" name="keywords" />
  <meta content="" name="description" />

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="css/login.css" />
  <!-- Icon Font Stylesheet -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- Libraries ngelink -->
  <link href="lib/animate/animate.min.css" rel="stylesheet" />
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

  <!-- Custom CSS -->
  
</head>

<body>
  <img src="img/bg-login.png" class="bg-image" alt="Background Image">
  <div class="container">
    <div class="login-container">
      <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
        <img src="img/logoo.png" width="180" alt="">

      
      </a>
      <h1>Login</h1>
      <form class="user" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1" class="form-label">Email</label>
          <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..." name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        </div>
        <div class="mb-4">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password" required autocomplete="current-password">
        </div>
        <div class="d-flex align-items-center justify-content-between mb-4">
          <div class="form-check">
            <input class="form-check-input primary" type="checkbox" value="" id="flexCheckChecked" checked>
            <label class="form-check-label text-dark" for="flexCheckChecked">
              Ingatkan perangkat ini
            </label>
          </div>
        </div>
        <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">
          Masuk
        </button>
        <div class="additional-links d-flex justify-content-center">
          <p class="fs-4 mb-0 fw-bold">Belum memiliki akun?</p>
          <a class="text-primary fw-bold ms-2" href="/register">Register</a>
        </div>
      </form>
    </div>
    <div class="image-container"></div>
  </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

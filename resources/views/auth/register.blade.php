<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register</title>
  <link rel="shortcut icon" type="image/png" href="img/logoo.png" />
  <link rel="stylesheet" href="css/register.css" />
  <!-- Custom CSS -->
  <style>
    /* CSS yang telah kita buat sebelumnya */
  </style>
</head>

<body>
  <img src="img/bg-login.png" class="bg-image" alt="Background Image">
  <div class="container">
    <div class="register-container">
      <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
        <img src="img/logoo.png" width="180" alt="">
      </a>
      <h1>Register</h1>
      <form action="{{ route('register.store') }}" method="POST" class="user">
        @csrf
        <div class="form-group">
          <label for="name" class="form-label">{{ __('Nama') }}</label>
          <input type="text" class="form-control form-control-user" id="name" aria-describedby="name" name="name" required placeholder="Nama">
          <div class="errors text-danger" style="font-size: 14px">
            {{ $errors->register->first('name') }}
          </div>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1" class="form-label">{{ __('Email Address') }}</label>
          <input type="email" class="form-control form-control-user" id="email" aria-describedby="email" name="email" required placeholder="Email">
          <div class="errors text-danger" style="font-size: 14px">
            {{ $errors->register->first('email') }}
          </div>
        </div>
        <div class="mb-4">
          <label for="exampleInputPassword1" class="form-label">{{ __('Password') }}</label>
          <input type="password" class="form-control form-control-user" id="password" name="password" required placeholder="Password">
          <div class="errors text-danger" style="font-size: 14px">
            {{ $errors->register->first('password') }}
          </div>
        </div>
        <div class="mb-4">
          <input type="password" class="form-control form-control-user" id="password_confirmation" name="password_confirmation" placeholder="Repeat Password" required>
          <div class="errors text-danger" style="font-size: 14px">
            {{ $errors->register->first('password') }}
          </div>
        </div>
        <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">
          Register
        </button>
        <div class="additional-links d-flex align-items-center justify-content-center">
          <p class="fs-4 mb-0 fw-bold">Sudah memiliki akun?</p>
          <a class="text-primary fw-bold ms-2" href="/login">Masuk</a>
        </div>
      </form>
    </div>
    <div class="image-container"></div>
  </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

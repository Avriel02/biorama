<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Profil Saya</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="keywords" />
  <meta content="" name="description" />

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet" />

  <!-- Icon Font Stylesheet -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- Libraries ngelink -->
  <link href="lib/animate/animate.min.css" rel="stylesheet" />
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

  <link href="css/bootstrap.min.css" rel="stylesheet" />

  <!-- Template dari css -->
  <link href="css/beranda.css" rel="stylesheet" />
  <link href="css/produk.css" rel="stylesheet" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="css/vendor.css" />
  <link rel="stylesheet" type="text/css" href="css/produk.css" />
  <link rel="stylesheet" href="css/disabilitas.css" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <link rel="shortcut icon" href="img/logoo.png" type="image/x-icon" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
  
  <link rel="stylesheet" href="{{ asset('css/user.css') }}" />
</head>

<body>
  @include('/partials/symbol')
  @include('/partials/navbar')
<img src="img/bg-login.png" class="bg-image" alt="Background Image">
  <div class="container">
    <div class="profile-container">
      <h2 class="mb-4">Profil Saya</h2>
      <h1 class="mb-4">Kelola informasi profil Anda untuk mengontrol, melindungi dan mengamankan akun</h1>
      
      <hr class="mb-4">

      @if(session('success'))
          <div class="alert alert-success">
              {{ session('success') }}
          </div>
      @endif

      @if($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif

     <form action="{{ route('profile.update') }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" id="username" name="username" class="form-control" value="{{ $user->username }}" {{ $user->username_changed ? 'readonly' : '' }}>
    </div>
    <div class="form-group mb-3">
        <label for="name" class="form-label">Nama</label>
        <input type="text" id="name" name="name" class="form-control" value="{{ $user->name }}">
    </div>
    <div class="form-group mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" id="email" name="email" class="form-control" value="{{ $user->email }}">
    </div>
    <div class="form-group mb-3">
        <label for="phone" class="form-label">Nomor Telepon</label>
        <input type="text" id="phone" name="phone" class="form-control" placeholder="Tambahkan nomor telepon" value="{{ $user->phone }}">
    </div>
    <div class="form-group mb-3">
        <label for="gender" class="form-label">Jenis Kelamin</label>
        <select id="gender" name="gender" class="form-control">
            <option value="male" {{ $user->gender == 'male' ? 'selected' : '' }}>Laki-laki</option>
            <option value="female" {{ $user->gender == 'female' ? 'selected' : '' }}>Perempuan</option>
        </select>
    </div>
    <div class="form-group mb-3">
        <label for="birthdate" class="form-label">Tanggal Lahir</label>
        <input type="date" id="birthdate" name="birthdate" class="form-control" value="{{ $user->birthdate }}">
    </div>
    <button type="submit" class="btn">Simpan</button>
    <a href="{{ route('logout') }}" class="btn btn-secondary ml-2">Logout</a>
</form>



    </div>
  </div>

  <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>

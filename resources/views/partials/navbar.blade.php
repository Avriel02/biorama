<body>
<header>
  <div class="container-fluid">
    <div class="row py-3 border-bottom">
      <div class="col-sm-4 col-lg-2 text-center text-sm-start d-flex gap-3 justify-content-center justify-content-md-start">
        <div class="d-flex align-item-center my-3 my-sm-0">
          <a href="{{ url('/beranda') }}">
            <img src="img/logo-2.png" alt="logo" class="img-fluid"/>
          </a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"></button>
      </div>

      @if(Request::is('login'))
        <!-- Navbar khusus hal aman login -->
        <div class="col-sm-8 col-lg-10 d-flex align-items-center justify-content-center">
          <h1 class="text-center">Login</h1>
        </div>
      @else
        <!-- Navbar untuk halaman lain -->
        <div class="col-sm-6 offset-sm-2 offset-md-0 col-lg-4">
          <div class="search-bar row bg-light p-2 rounded-4">
            <div class="col-md-4 d-none d-md-block">
              <select class="form-select border-0 bg-transparent">
                <option>Kategori</option>
                <option>Produk Kami</option>
                <option>Kuliner Kami</option>
                <option>Workshop</option>
              </select>
            </div>
            <div class="col-11 col-md-7">
              <form id="search-form" class="text-center" action="{{ url('/beranda') }}" method="post">
                @csrf <!-- Menambahkan CSRF token -->
                <input type="text" name="search" class="form-control border-0 bg-transparent" placeholder="Mau Belanja apa hari ini ?" />
              </form>
            </div>
            <div class="col-1">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path fill="currentColor" d="M21.71 20.29L18 16.61A9 9 0 1 0 16.61 18l3.68 3.68a1 1 0 0 0 1.42 0a1 1 0 0 0 0-1.39ZM11 18a7 7 0 1 1 7-7a7 7 0 0 1-7 7Z" />
              </svg>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <ul class="navbar-nav list-unstyled d-flex flex-row gap-3 gap-lg-5 justify-content-center flex-wrap align-items-center mb-0 fw-bold text-uppercase text-dark">
            <li class="nav-item {{ Request::is('beranda') ? 'active' : '' }}">
              <a href="{{ url('/beranda') }}" class="nav-link">Beranda</a>
            </li>
            <li class="nav-item {{ Request::is('produk') ? 'active' : '' }}">
              <a href="{{ url('/produk') }}" class="nav-link">Produk</a>
            </li>
          </ul>
        </div>
        <div class="col-sm-8 col-lg-2 d-flex gap-5 align-items-center justify-content-center justify-content-sm-end">
          <ul class="d-flex justify-content-end list-unstyled m-0">
            <li>
              <a href="{{url ('/profile')}}" class="p-2 mx-1">
                <svg width="24" height="24">
                  <use xlink:href="#user"></use>
                </svg>
              </a>
            </li>
            <li>
              <a href="#" class="p-2 mx-1">
                <svg width="24" height="24">
                  <use xlink:href="#wishlist"></use>
                </svg>
              </a>
            </li>
            <li>
              <a href="#" class="p-2 mx-1" data-bs-toggle="offcanvas" data-bs-target="#cartSidebar" aria-controls="cartSidebar">
                <svg width="24" height="24">
                  <use xlink:href="#shopping-bag"></use>
                </svg>
                <span id="cart-count" class="badge">0</span>
              </a>
            </li>
          </ul>
        </div>
      @endif
    </div>
  </div>
</header>
</body>

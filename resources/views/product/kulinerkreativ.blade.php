<section id="popular-products" class="products-carousel">
      <div class="container-lg overflow-hidden py-5">
        <div class="row">
          <div class="col-md-12">
            <div class="section-header d-flex justify-content-between my-4">
              <h2 class="section-title">Kuliner kreatif</h2>

              <div class="d-flex align-items-center">
                <a href="#" class="btn btn-primary me-2">View All</a>
                <div class="swiper-buttons">
                  <button
                    class="swiper-prev products-carousel-prev btn btn-primary"
                  >
                    ❮
                  </button>
                  <button
                    class="swiper-next products-carousel-next btn btn-primary"
                  >
                    ❯
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="swiper">
              <div class="swiper-wrapper">
                <div class="product-item swiper-slide">
                  <figure>
                    <a href="{{url ('/produk')}}" title="Product Title">
                      <img
                        src="img/product-makanan-1.png"
                        alt="Product Thumbnail"
                        class="tab-image"
                      />
                    </a>
                  </figure>
                  <div class="d-flex flex-column text-center">
                    <h3 class="fs-6 fw-normal">Salad diet</h3>
                    <div>
                      <span class="rating">
                        <svg width="18" height="18" class="text-warning">
                          <use xlink:href="#star-full"></use>
                        </svg>
                        <svg width="18" height="18" class="text-warning">
                          <use xlink:href="#star-full"></use>
                        </svg>
                        <svg width="18" height="18" class="text-warning">
                          <use xlink:href="#star-full"></use>
                        </svg>
                        <svg width="18" height="18" class="text-warning">
                          <use xlink:href="#star-full"></use>
                        </svg>
                        <svg width="18" height="18" class="text-warning">
                          <use xlink:href="#star-half"></use>
                        </svg>
                      </span>
                      <span>(222)</span>
                    </div>
                    <div
                      class="d-flex justify-content-center align-items-center gap-2"
                    >
                      <del>Rp 24.00</del>
                      <span class="text-dark fw-semibold">Rp18.00</span>
                      <span
                        class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary"
                        >10% OFF</span
                      >
                    </div>
                    <div class="button-area p-3 pt-0">
                      <div class="row g-1 mt-2">
                        <div class="col-3">
                          <input
                            type="number"
                            name="quantity"
                            class="form-control border-dark-subtle input-number quantity"
                            value="1"
                            onchange="updateCartQuantity('Salad Diet', this.value, 18)"
                          />
                        </div>
                        <div class="col-7">
                          <button
                            href="#"
                            class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"
                            onclick="addToCart('salad diet.', 18,'images/product-makanan-1.png')"
                            ><svg width="18" height="18">
                              <use xlink:href="#cart"></use>
                            </svg>
                            Add to Cart</button
                          >
                        </div>
                        <div class="col-2">
                          <a
                            href="#"
                            class="btn btn-outline-dark rounded-1 p-2 fs-6"
                            ><svg width="18" height="18">
                              <use xlink:href="#heart"></use></svg></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="product-item swiper-slide">
                  <figure>
                    <a href="{{url ('/produk')}}" title="Product Title">
                      <img
                        src="img/product-makanan-2.png"
                        alt="Product Thumbnail"
                        class="tab-image"
                      />
                    </a>
                  </figure>
                  <div class="d-flex flex-column text-center">
                    <h3 class="fs-6 fw-normal">Roti kentang tanpa telor</h3>
                    <div>
                      <span class="rating">
                        <svg width="18" height="18" class="text-warning">
                          <use xlink:href="#star-full"></use>
                        </svg>
                        <svg width="18" height="18" class="text-warning">
                          <use xlink:href="#star-full"></use>
                        </svg>
                        <svg width="18" height="18" class="text-warning">
                          <use xlink:href="#star-full"></use>
                        </svg>
                        <svg width="18" height="18" class="text-warning">
                          <use xlink:href="#star-full"></use>
                        </svg>
                        <svg width="18" height="18" class="text-warning">
                          <use xlink:href="#star-half"></use>
                        </svg>
                      </span>
                      <span>(222)</span>
                    </div>
                    <div
                      class="d-flex justify-content-center align-items-center gap-2"
                    >
                      <del>Rp 20.00</del>
                      <span class="text-dark fw-semibold">Rp15.00</span>
                      <span
                        class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary"
                        >10% OFF</span
                      >
                    </div>
                    <div class="button-area p-3 pt-0">
                      <div class="row g-1 mt-2">
                        <div class="col-3">
                          <input
                            type="number"
                            name="quantity"
                            class="form-control border-dark-subtle input-number quantity"
                            value="1"
                            onchange="updateCartQuantity('Roti kentang tanpa telor', this.value, 15)"
                          />
                        </div>
                        <div class="col-7">
                          <button
                            href="#"
                            class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"
                             onclick="addToCart('roti kentang tanpa telur.', 15,'images/product-makanan-2.png')"
                            ><svg width="18" height="18">
                              <use xlink:href="#cart"></use>
                            </svg>
                            Add to Cart</button
                          >
                        </div>
                        <div class="col-2">
                          <a
                            href="#"
                            class="btn btn-outline-dark rounded-1 p-2 fs-6"
                            ><svg width="18" height="18">
                              <use xlink:href="#heart"></use></svg></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="product-item swiper-slide">
                  <figure>
                    <a href="{{url ('/produk')}}" title="Product Title">
                      <img
                        src="img/product-makanan-3.png"
                        alt="Product Thumbnail"
                        class="tab-image"
                      />
                    </a>
                  </figure>
                  <div class="d-flex flex-column text-center">
                    <h3 class="fs-6 fw-normal">Kebun Dulur Tani</h3>
                    <div>
                      <span class="rating">
                        <svg width="18" height="18" class="text-warning">
                          <use xlink:href="#star-full"></use>
                        </svg>
                        <svg width="18" height="18" class="text-warning">
                          <use xlink:href="#star-full"></use>
                        </svg>
                        <svg width="18" height="18" class="text-warning">
                          <use xlink:href="#star-full"></use>
                        </svg>
                        <svg width="18" height="18" class="text-warning">
                          <use xlink:href="#star-full"></use>
                        </svg>
                        <svg width="18" height="18" class="text-warning">
                          <use xlink:href="#star-half"></use>
                        </svg>
                      </span>
                      <span>(222)</span>
                    </div>
                    <div
                      class="d-flex justify-content-center align-items-center gap-2"
                    >
                      <del>Rp24.00</del>
                      <span class="text-dark fw-semibold">Rp18.00</span>
                      <span
                        class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary"
                        >10% OFF</span
                      >
                    </div>
                    <div class="button-area p-3 pt-0">
                      <div class="row g-1 mt-2">
                        <div class="col-3">
                          <input
                            type="number"
                            name="quantity"
                            class="form-control border-dark-subtle input-number quantity"
                            value="1"
                            onchange="updateCartQuantity('Kebun Dulur tani', this.value, 18)"
                          />
                        </div>
                        <div class="col-7">
                          <button
                          class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"
                          onclick="addToCart('Kebun Dulur tani.', 18,'images/product-makanan-3.png')"
                            ><svg width="18" height="18">
                              <use xlink:href="#cart"></use>
                            </svg>
                            Add to Cart</button>
                        </div>
                        <div class="col-2">
                          <a
                            href="#"
                            class="btn btn-outline-dark rounded-1 p-2 fs-6"
                            ><svg width="18" height="18">
                              <use xlink:href="#heart"></use></svg ></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="product-item swiper-slide">
                  <figure>
                    <a href="{{url ('/produk')}}" title="Product Title">
                      <img
                        src="img/product-makanan-4.png"
                        alt="Product Thumbnail"
                        class="tab-image"
                      />
                    </a>
                  </figure>
                  <div class="d-flex flex-column text-center">
                    <h3 class="fs-6 fw-normal">Norits' Pizza</h3>
                    <div>
                      <span class="rating">
                        <svg width="18" height="18" class="text-warning">
                          <use xlink:href="#star-full"></use>
                        </svg>
                        <svg width="18" height="18" class="text-warning">
                          <use xlink:href="#star-full"></use>
                        </svg>
                        <svg width="18" height="18" class="text-warning">
                          <use xlink:href="#star-full"></use>
                        </svg>
                        <svg width="18" height="18" class="text-warning">
                          <use xlink:href="#star-full"></use>
                        </svg>
                        <svg width="18" height="18" class="text-warning">
                          <use xlink:href="#star-half"></use>
                        </svg>
                      </span>
                      <span>(222)</span>
                    </div>
                    <div
                      class="d-flex justify-content-center align-items-center gap-2"
                    >
                      <del>Rp 24.00</del>
                      <span class="text-dark fw-semibold">Rp18.00</span>
                      <span
                        class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary"
                        >10% OFF</span
                      >
                    </div>
                    <div class="button-area p-3 pt-0">
                      <div class="row g-1 mt-2">
                        <div class="col-3">
                          <input
                            type="number"
                            name="quantity"
                            class="form-control border-dark-subtle input-number quantity"
                            value="1"
                            onchange="updateCartQuantity('Norizs pizaa', this.value, 18)"
                          />
                        </div>
                        <div class="col-7">
                          <button
                            href="#"
                            class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"
                            onclick="addToCart('norizs pizza.', 18,'images/product-makanan-4.png')"
                            ><svg width="18" height="18">
                              <use xlink:href="#cart"></use>
                            </svg>
                            Add to Cart</button
                          >
                        </div>
                        <div class="col-2">
                          <a
                            href="#"
                            class="btn btn-outline-dark rounded-1 p-2 fs-6"
                            ><svg width="18" height="18">
                              <use xlink:href="#heart"></use></svg></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="product-item swiper-slide">
                  <figure>
                    <a href="{{url ('/produk')}}" title="Product Title">
                      <img
                        src="img/product-makanan-1.png"
                        alt="Product Thumbnail"
                        class="tab-image"
                      />
                    </a>
                  </figure>
                  <div class="d-flex flex-column text-center">
                    <h3 class="fs-6 fw-normal">Green salad</h3>
                    <div>
                      <span class="rating">
                        <svg width="18" height="18" class="text-warning">
                          <use xlink:href="#star-full"></use>
                        </svg>
                        <svg width="18" height="18" class="text-warning">
                          <use xlink:href="#star-full"></use>
                        </svg>
                        <svg width="18" height="18" class="text-warning">
                          <use xlink:href="#star-full"></use>
                        </svg>
                        <svg width="18" height="18" class="text-warning">
                          <use xlink:href="#star-full"></use>
                        </svg>
                        <svg width="18" height="18" class="text-warning">
                          <use xlink:href="#star-half"></use>
                        </svg>
                      </span>
                      <span>(222)</span>
                    </div>
                    <div
                      class="d-flex justify-content-center align-items-center gap-2"
                    >
                      <del>Rp24.00</del>
                      <span class="text-dark fw-semibold">Rp18.00</span>
                      <span
                        class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary"
                        >10% OFF</span
                      >
                    </div>
                    <div class="button-area p-3 pt-0">
                      <div class="row g-1 mt-2">
                        <div class="col-3">
                          <input
                            type="number"
                            name="quantity"
                            class="form-control border-dark-subtle input-number quantity"
                            value="1"
                            onchange="updateCartQuantity('Green Salad', this.value, 18)"
                          />
                        </div>
                        <div class="col-7">
                          <button
                            href="#"
                            class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"
                            onclick="addToCart('Green Salad.', 18,'images/product-makanan-1.png')"
                            ><svg width="18" height="18">
                              <use xlink:href="#cart"></use>
                            </svg>
                            Add to Cart</button
                          >
                        </div>
                        <div class="col-2">
                          <a
                            href="#"
                            class="btn btn-outline-dark rounded-1 p-2 fs-6"
                            ><svg width="18" height="18">
                              <use xlink:href="#heart"></use></svg></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="product-item swiper-slide">
                  <figure>
                    <a href="{{url ('/produk')}}" title="Product Title">
                      <img
                        src="img/product-makanan-2.png"
                        alt="Product Thumbnail"
                        class="tab-image"
                      />
                    </a>
                  </figure>
                  <div class="d-flex flex-column text-center">
                    <h3 class="fs-6 fw-normal">Marta Bakery</h3>
                    <div>
                      <span class="rating">
                        <svg width="18" height="18" class="text-warning">
                          <use xlink:href="#star-full"></use>
                        </svg>
                        <svg width="18" height="18" class="text-warning">
                          <use xlink:href="#star-full"></use>
                        </svg>
                        <svg width="18" height="18" class="text-warning">
                          <use xlink:href="#star-full"></use>
                        </svg>
                        <svg width="18" height="18" class="text-warning">
                          <use xlink:href="#star-full"></use>
                        </svg>
                        <svg width="18" height="18" class="text-warning">
                          <use xlink:href="#star-half"></use>
                        </svg>
                      </span>
                      <span>(222)</span>
                    </div>
                    <div
                      class="d-flex justify-content-center align-items-center gap-2"
                    >
                      <del>Rp 24.00</del>
                      <span class="text-dark fw-semibold">Rp18.00</span>
                      <span
                        class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary"
                        >10% OFF</span
                      >
                    </div>
                    <div class="button-area p-3 pt-0">
                      <div class="row g-1 mt-2">
                        <div class="col-3">
                          <input
                            type="number"
                            name="quantity"
                            class="form-control border-dark-subtle input-number quantity"
                            value="1"
                             onchange="updateCartQuantity('Marta Bakery', this.value, 18)"
                          />
                        </div>
                        <div class="col-7">
                          <button
                            href="#"
                            class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"
                            onclick="addToCart('Marta Bakery.', 18,'images/product-makanan-2.png')"
                            ><svg width="18" height="18">
                              <use xlink:href="#cart"></use>
                            </svg>
                            Add to Cart</button
                          >
                        </div>
                        <div class="col-2">
                          <a
                            href="#"
                            class="btn btn-outline-dark rounded-1 p-2 fs-6"
                            ><svg width="18" height="18">
                              <use xlink:href="#heart"></use></svg></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="product-item swiper-slide">
                  <figure>
                    <a href="{{url ('/produk')}}" title="Product Title">
                      <img
                        src="img/product-makanan-3.png"
                        alt="Product Thumbnail"
                        class="tab-image"
                      />
                    </a>
                  </figure>
                  <div class="d-flex flex-column text-center">
                    <h3 class="fs-6 fw-normal">
                      Kebun Dulur Tani
                    </h3>
                    <div>
                      <span class="rating">
                        <svg width="18" height="18" class="text-warning">
                          <use xlink:href="#star-full"></use>
                        </svg>
                        <svg width="18" height="18" class="text-warning">
                          <use xlink:href="#star-full"></use>
                        </svg>
                        <svg width="18" height="18" class="text-warning">
                          <use xlink:href="#star-full"></use>
                        </svg>
                        <svg width="18" height="18" class="text-warning">
                          <use xlink:href="#star-full"></use>
                        </svg>
                        <svg width="18" height="18" class="text-warning">
                          <use xlink:href="#star-half"></use>
                        </svg>
                      </span>
                      <span>(222)</span>
                    </div>
                    <div
                      class="d-flex justify-content-center align-items-center gap-2"
                    >
                      <del>Rp 24.00</del>
                      <span class="text-dark fw-semibold">Rp18.00</span>
                      <span
                        class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary"
                        >10% OFF</span
                      >
                    </div>
                    <div class="button-area p-3 pt-0">
                      <div class="row g-1 mt-2">
                        <div class="col-3">
                          <input
                            type="number"
                            name="quantity"
                            class="form-control border-dark-subtle input-number quantity"
                            value="1"
                             onchange="updateCartQuantity('Kebun dulur Tani', this.value, 18)"
                          />
                        </div>
                        <div class="col-7">
                          <button
                            href="#"
                            class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"
                            onclick="addToCart('Kebun Dulur Tani.', 18,'images/product-makanan-3.png')"
                            ><svg width="18" height="18">
                              <use xlink:href="#cart"></use>
                            </svg>
                            Add to Cart</button
                          >
                        </div>
                        <div class="col-2">
                          <a
                            href="#"
                            class="btn btn-outline-dark rounded-1 p-2 fs-6"
                            ><svg width="18" height="18">
                              <use xlink:href="#heart"></use></svg></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="product-item swiper-slide">
                  <figure>
                    <a href="{{url ('/produk')}}" title="Product Title">
                      <img
                        src="img/product-makanan-4.png"
                        alt="Product Thumbnail"
                        class="tab-image"
                      />
                    </a>
                  </figure>
                  <div class="d-flex flex-column text-center">
                    <h3 class="fs-6 fw-normal">NORITS' Pizza</h3>
                    <div>
                      <span class="rating">
                        <svg width="18" height="18" class="text-warning">
                          <use xlink:href="#star-full"></use>
                        </svg>
                        <svg width="18" height="18" class="text-warning">
                          <use xlink:href="#star-full"></use>
                        </svg>
                        <svg width="18" height="18" class="text-warning">
                          <use xlink:href="#star-full"></use>
                        </svg>
                        <svg width="18" height="18" class="text-warning">
                          <use xlink:href="#star-full"></use>
                        </svg>
                        <svg width="18" height="18" class="text-warning">
                          <use xlink:href="#star-half"></use>
                        </svg>
                      </span>
                      <span>(222)</span>
                    </div>
                    <div
                      class="d-flex justify-content-center align-items-center gap-2"
                    >
                      <del>Rp 24.00</del>
                      <span class="text-dark fw-semibold">Rp18.00</span>
                      <span
                        class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary"
                        >10% OFF</span
                      >
                    </div>
                    <div class="button-area p-3 pt-0">
                      <div class="row g-1 mt-2">
                        <div class="col-3">
                          <input
                            type="number"
                            name="quantity"
                            class="form-control border-dark-subtle input-number quantity"
                            value="1"
                            onchange="updateCartQuantity('Norizs Pizza', this.value, 18)"
                          />
                        </div>
                        <div class="col-7">
                          <button
                            class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"
                            onclick="addToCart('Norizs Pizza.', 18,'images/product-makanan-4.png')"
                            ><svg width="18" height="18">
                              <use xlink:href="#cart"></use>
                            </svg>
                            Add to Cart</button
                          >
                        </div>
                        <div class="col-2">
                          <a
                            href="#"
                            class="btn btn-outline-dark rounded-1 p-2 fs-6"
                            ><svg width="18" height="18">
                              <use xlink:href="#heart"></use></svg></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="product-item swiper-slide">
                  <figure>
                    <a href="{{url ('/produk')}}" title="Product Title">
                      <img
                        src="img/product-makanan-2.png"
                        alt="Product Thumbnail"
                        class="tab-image"
                      />
                    </a>
                  </figure>
                  <div class="d-flex flex-column text-center">
                    <h3 class="fs-6 fw-normal">Kebun Dulur tani</h3>
                    <div>
                      <span class="rating">
                        <svg width="18" height="18" class="text-warning">
                          <use xlink:href="#star-full"></use>
                        </svg>
                        <svg width="18" height="18" class="text-warning">
                          <use xlink:href="#star-full"></use>
                        </svg>
                        <svg width="18" height="18" class="text-warning">
                          <use xlink:href="#star-full"></use>
                        </svg>
                        <svg width="18" height="18" class="text-warning">
                          <use xlink:href="#star-full"></use>
                        </svg>
                        <svg width="18" height="18" class="text-warning">
                          <use xlink:href="#star-half"></use>
                        </svg>
                      </span>
                      <span>(222)</span>
                    </div>
                    <div
                      class="d-flex justify-content-center align-items-center gap-2"
                    >
                      <del>$24.00</del>
                      <span class="text-dark fw-semibold">$18.00</span>
                      <span
                        class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary"
                        >10% OFF</span
                      >
                    </div>
                    <div class="button-area p-3 pt-0">
                      <div class="row g-1 mt-2">
                        <div class="col-3">
                          <input
                            type="number"
                            name="quantity"
                            class="form-control border-dark-subtle input-number quantity"
                            value="1"
                            onchange="updateCartQuantity('Roti Tawar kentang', this.value, 18)"
                          />
                        </div>
                        <div class="col-7">
                          <button
                            class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"
                            onclick="addToCart('Norizs Pizza.', 18,'images/product-makanan-4.png')"
                            ><svg width="18" height="18">
                              <use xlink:href="#cart"></use>
                            </svg>
                            Add to Cart</button
                          >
                        </div>
                        <div class="col-2">
                          <a
                            href="#"
                            class="btn btn-outline-dark rounded-1 p-2 fs-6"
                            ><svg width="18" height="18">
                              <use xlink:href="#heart"></use></svg></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- / products-carousel -->
          </div>
        </div>
      </div>
    </section>
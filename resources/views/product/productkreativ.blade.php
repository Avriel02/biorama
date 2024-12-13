<section class="pb-5" id="catalog">
      <div class="container-lg">
        <div class="row">
          <div class="col-md-12">
            <div
              class="section-header d-flex flex-wrap justify-content-between my-4"
            >
              <h2 class="section-title">Produk Kreatif Kami</h2>

              <div class="d-flex align-items-center">
                <a href="#" class="btn btn-primary rounded-1">View All</a>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div
              class="product-grid row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5"
            >
              <div class="col-01">
                <div class="product-item">
                  <figure>
                    <a href="{{ url ('/detailcheckout') }}" title="Product Title">
                      <img
                        src="img/product-makanan-1.png"
                        alt="Product Thumbnail"
                        class="tab-image"
                          
                      />
                    </a>
                  </figure>
                  <div class="d-flex flex-column text-center">
                    <h3 class="fs-6 fw-normal">Salad Diet</h3>
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
                      <span>(60)</span>
                    </div>
                    <div
                      class="d-flex justify-content-center align-items-center gap-2"
                    >
                      <del>Rp 74.00</del>
                      <span class="text-dark fw-semibold">Rp 70.00</span>
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
                            min="1"
                            onchange="updateCartQuantity('Salad Diet.', this.value, 70)"
                          />
                        </div>
                        <div class="col-7">
                          <button
                          class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"
                          onclick="addToCart('Salad Diet.', 70, 'img/product-makanan-1.png')"
                            ><svg width="18" height="18">
                              <use xlink:href="#cart"></use>
                            </svg>
                            Add to Cart</button>
                        </div>
                        <div class="col-2">
                          <a
                            href="#"
                            class="btn btn-outline-dark rounded-1 p-2 fs-6 love-button"
                            ><svg width="18" height="18" class="heart-icon">
                              <use xlink:href="#heart"></use></svg></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Katalog2 -->
              <div class="col-01">
                <div class="product-item">
                  <figure>
                    <a href="{{ url ('/detailcheckout') }}" title="Product Title">
                      <img
                        src="img/product-makanan-2.png"
                        alt="Product Thumbnail"
                        class="tab-image"
                      />
                    </a>
                  </figure>
                  <div class="d-flex flex-column text-center">
                    <h3 class="fs-6 fw-normal">Roti kentang tanpa telur</h3>
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
                      <span>(41)</span>
                    </div>
                    <div
                      class="d-flex justify-content-center align-items-center gap-2"
                    >
                      <del>Rp 54.00</del>
                      <span class="text-dark fw-semibold">Rp 50.00</span>
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
                            min="1"
                            onchange="updateCartQuantity('Roti kentang tanpa telur', this.value, 50)"
                          />
                        </div>
                        <div class="col-7">
                          <button
                          class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"
                          onclick="addToCart('Roti kentang tanpa telur', 50,'images/product-makanan-2.png')"
                            ><svg width="18" height="18">
                              <use xlink:href="#cart"></use>
                            </svg>
                            Add to Cart</button>
                        </div>
                        <div class="col-2">
                          <a
                            href="#"
                            class="btn btn-outline-dark rounded-1 p-2 fs-6 love-button"
                            ><svg width="18" height="18" class="heart-icon">
                              <use xlink:href="#heart"></use></svg></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- katalog 3 -->
              <div class="col-01">
                <div class="product-item">
                  <figure>
                    <a href="{{ url ('/detailcheckout') }}" title="Product Title">
                      <img
                        src="img/product-makanan-3.png"
                        alt="Product Thumbnail"
                        class="tab-image"
                      />
                    </a>
                  </figure>
                  <div class="d-flex flex-column text-center">
                    <h3 class="fs-6 fw-normal">Beras sehat</h3>
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
                      <span>(32)</span>
                    </div>
                    <div
                      class="d-flex justify-content-center align-items-center gap-2"
                    >
                      <del>Rp 14.00</del>
                      <span class="text-dark fw-semibold">Rp 12.00</span>
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
                            onchange="updateCartQuantity('Beras sehat', this.value, 12)"
                          />
                        </div>
                        <div class="col-7">
                          <button
                            href="#"
                            class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"
                            onclick="addToCart('beras sehat', 15, 'images/product-makanan-3.png')"
                            ><svg width="18" height="18">
                              <use xlink:href="#cart"></use>
                            </svg>
                            Add to Cart</button
                          >
                        </div>
                        <div class="col-2">
                          <a
                            href="#"
                            class="btn btn-outline-dark rounded-1 p-2 fs-6 love-button"
                            ><svg width="18" height="18" class="heart-icon">
                              <use xlink:href="#heart"></use></svg ></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- katalog 4 -->
              <div class="col-01">
                <div class="product-item">
                  <figure>
                    <a href="{{ url ('/detailcheckout') }}" title="Product Title">
                      <img
                        src="img/product-makanan-4.png"
                        alt="Product Thumbnail"
                        class="tab-image"
                      />
                    </a>
                  </figure>
                  <div class="d-flex flex-column text-center">
                    <h3 class="fs-6 fw-normal">Norits Pizza</h3>
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
                      <span class="text-dark fw-semibold">Rp 18.00</span>
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
                            onchange="updateCartQuantity('Norits Pizza', this.value, 18)"
                          />
                        </div>
                        <div class="col-7">
                          <button
                            class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"
                            onclick="addToCart ('Norizs Pizza', 18, 'images/product-makanan-4.png')"
                            ><svg width="18" height="18">
                              <use xlink:href="#cart"></use>
                            </svg>
                            Add to Cart</button
                          >
                        </div>
                        <div class="col-2">
                          <a
                            href="#"
                            class="btn btn-outline-dark rounded-1 p-2 fs-6 love-button"
                            ><svg width="18" height="18" class="heart-icon">
                              <use xlink:href="#heart"></use></svg  ></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- katalog 5 -->
              <div class="col-01">
                <div class="product-item">
                  <figure>
                    <a href="{{ url ('/detailcheckout') }}" title="Product Title">
                      <img
                        src="img/product-thumb-15.png"
                        alt="Product Thumbnail"
                        class="tab-image"
                      />
                    </a>
                  </figure>
                  <div class="d-flex flex-column text-center">
                    <h3 class="fs-6 fw-normal">
                      Anyaman Tanjung
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
                      <span class="text-dark fw-semibold">Rp 18.00</span>
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
                            onchange="updateCartQuantity('Anyaman Tanjung', this.value, 18)"
                          />
                        </div>
                        <div class="col-7">
                          <button
                            onclick="addToCart('Anyaman Tanjung', 15, 'images/product-thumb-15.png')"
                            class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"
                            ><svg width="18" height="18">
                              <use xlink:href="#cart"></use>
                            </svg>
                            Add to Cart</button
                          >
                        </div>
                        <div class="col-2">
                          <a
                            href="#"
                            class="btn btn-outline-dark rounded-1 p-2 fs-6 love-button"
                            ><svg width="18" height="18" class="heart-icon">
                              <use xlink:href="#heart"></use></svg ></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- katalog 6 -->
              <div class="col-01">
                <div class="product-item">
                  <figure>
                    <a href="{{ url ('/detailcheckout') }}" title="Product Title">
                      <img
                        src="img/product-thumb-16.png"
                        alt="Product Thumbnail"
                        class="tab-image"
                      />
                    </a>
                  </figure>
                  <div class="d-flex flex-column text-center">
                    <h3 class="fs-6 fw-normal">Sabun non kimia</h3>
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
                      <span>(32)</span>
                    </div>
                    <div
                      class="d-flex justify-content-center align-items-center gap-2"
                    >
                      <del>Rp 14.00</del>
                      <span class="text-dark fw-semibold">Rp 12.00</span>
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
                            onchange="updateCartQuantity('sabun non kimia', this.value, 12)"
                          />
                        </div>
                        <div class="col-7">
                          <button
                            href="#"
                            class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"
                            onclick="addToCart('Sabun Non Kimia', 15, 'images/product-thumb-15.png')"
                            ><svg width="18" height="18">
                              <use xlink:href="#cart"></use>
                            </svg>
                            Add to Cart</button
                          >
                        </div>
                        <div class="col-2">
                          <a
                            href="#"
                            class="btn btn-outline-dark rounded-1 p-2 fs-6 love-button"
                            ><svg width="18" height="18" class="heart-icon">
                              <use xlink:href="#heart"></use></svg ></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- katalog 7 -->
              <div class="col-01">
                <div class="product-item">
                  <figure>
                    <a href="{{ url ('/detailcheckout') }}" title="Product Title">
                      <img
                        src="img/product-thumb-17.png"
                        alt="Product Thumbnail"
                        class="tab-image"
                      />
                    </a>
                  </figure>
                  <div class="d-flex flex-column text-center">
                    <h3 class="fs-6 fw-normal">Eucalyptus Momsky</h3>
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
                      <span>(32)</span>
                    </div>
                    <div
                      class="d-flex justify-content-center align-items-center gap-2"
                    >
                      <del>Rp 30.00</del>
                      <span class="text-dark fw-semibold">Rp 25.00</span>
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
                            onchange="updateCartQuantity('Eucalyptus Momsky', this.value, 25)"
                          />
                        </div>
                        <div class="col-7">
                          <button
                            href="#"
                            class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"
                            onclick="addToCart('Eucalyptus Momsky', 25, 'images/product-thumb-17.png')"
                            ><svg width="18" height="18">
                              <use xlink:href="#cart"></use>
                            </svg>
                            Add to Cart</button
                          >
                        </div>
                        <div class="col-2">
                          <a
                            href="#"
                            class="btn btn-outline-dark rounded-1 p-2 fs-6 love-button"
                            ><svg width="18" height="18" class="heart-icon">
                              <use xlink:href="#heart"></use></svg  ></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Katalog2 8 -->
              <div class="col-01">
                <div class="product-item">
                  <figure>
                    <a href="{{ url ('/detailcheckout') }}" title="Product Title">
                      <img
                        src="img/product-thumb-18.png"
                        alt="Product Thumbnail"
                        class="tab-image"
                      />
                    </a>
                  </figure>
                  <div class="d-flex flex-column text-center">
                    <h3 class="fs-6 fw-normal">Elforia Crochet buddy</h3>
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
                      <span>(32)</span>
                    </div>
                    <div
                      class="d-flex justify-content-center align-items-center gap-2"
                    >
                      <del>Rp 40.00</del>
                      <span class="text-dark fw-semibold">Rp 35.00</span>
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
                            onchange="updateCartQuantity('Elforia Crochet buddy', this.value, 35)"
                          />
                        </div>
                        <div class="col-7">
                          <button
                            href="#"
                            class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"
                            onclick="addToCart('Elforia Crochet buddy', 35, 'images/product-thumb-17.png')"
                            ><svg width="18" height="18">
                              <use xlink:href="#cart"></use>
                            </svg>
                            Add to Cart</button
                          >
                        </div>
                        <div class="col-2">
                          <a
                            href="#"
                            class="btn btn-outline-dark rounded-1 p-2 fs-6 love-button"
                            ><svg width="18" height="18" class="heart-icon">
                              <use xlink:href="#heart"></use></svg ></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- katalog 9 -->
              <div class="col-01">
                <div class="product-item">
                  <figure>
                    <a href="{{ url ('/detailcheckout') }}" title="Product Title">
                      <img
                        src="img/product-thumb-20.png"
                        alt="Product Thumbnail"
                        class="tab-image"
                      />
                    </a>
                  </figure>
                  <div class="d-flex flex-column text-center">
                    <h3 class="fs-6 fw-normal">Jauza Craft</h3>
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
                      <span>(32)</span>
                    </div>
                    <div
                      class="d-flex justify-content-center align-items-center gap-2"
                    >
                      <del>Rp 14.00</del>
                      <span class="text-dark fw-semibold">Rp 12.00</span>
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
                            onchange="updateCartQuantity('Jauza Craft', this.value, 12)"
                          />
                        </div>
                        <div class="col-7">
                          <button
                            href="#"
                            class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"
                            onclick="addToCart('Jauza Craft', 15, 'images/product-thumb-20.png')"
                            ><svg width="18" height="18">
                              <use xlink:href="#cart"></use>
                            </svg>
                            Add to Cart</button
                          >
                        </div>
                        <div class="col-2">
                          <a
                            href="#"
                            class="btn btn-outline-dark rounded-1 p-2 fs-6 love-button"
                            ><svg width="18" height="18" class="heart-icon">
                              <use xlink:href="#heart"></use></svg ></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- katalog 10 -->
              <div class="col-01">
                <div class="product-item">
                  <figure>
                    <a href="{{ url ('/detailcheckout') }}" title="Product Title">
                      <img
                        src="img/product-thumb-31.png"
                        alt="Product Thumbnail"
                        class="tab-image"
                      />
                    </a>
                  </figure>
                  <div class="d-flex flex-column text-center">
                    <h3 class="fs-6 fw-normal">Bank Sampah Inyong</h3>
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
                      <span>(32)</span>
                    </div>
                    <div
                      class="d-flex justify-content-center align-items-center gap-2"
                    >
                      <del>Rp 49.00</del>
                      <span class="text-dark fw-semibold">Rp 41.00</span>
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
                            onchange="updateCartQuantity('Bank Sampah Inyong', this.value, 41)"
                          />
                        </div>
                        <div class="col-7">
                          <button
                            href="#"
                            class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"
                            onclick="addToCart('Bank Sampah Inyong', 41, 'images/product-thumb-31.png')"
                            ><svg width="18" height="18">
                              <use xlink:href="#cart"></use>
                            </svg>
                            Add to Cart</button
                          >
                        </div>
                        <div class="col-2">
                          <a
                            href="#"
                            class="btn btn-outline-dark rounded-1 p-2 fs-6 love-button"
                            ><svg width="18" height="18" class="heart-icon">
                              <use xlink:href="#heart"></use></svg  ></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- katalog 11 -->
              <div class="col-01">
                <div class="product-item">
                  <figure>
                    <a href="{{ url ('/detailcheckout') }}" title="Product Title">
                      <img
                        src="img/product-thumb-15.png"
                        alt="Product Thumbnail"
                        class="tab-image"
                      />
                    </a>
                  </figure>
                  <div class="d-flex flex-column text-center">
                    <h3 class="fs-6 fw-normal">anyaman tanjung</h3>
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
                      <span>(32)</span>
                    </div>
                    <div
                      class="d-flex justify-content-center align-items-center gap-2"
                    >
                      <del>Rp 25.00</del>
                      <span class="text-dark fw-semibold">Rp 20.00</span>
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
                            onchange="updateCartQuantity('anyaman tanjung', this.value, 20)"
                          />
                        </div>
                        <div class="col-7">
                          <button
                            href="#"
                            class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"
                            onclick="addToCart('Anyaman Tanjung', 20, 'images/product-makanan-15.png')"
                            ><svg width="18" height="18">
                              <use xlink:href="#cart"></use>
                            </svg>
                            Add to Cart</button
                          >
                        </div>
                        <div class="col-2">
                          <a
                            href="#"
                            class="btn btn-outline-dark rounded-1 p-2 fs-6 love-button"
                            ><svg width="18" height="18" class="heart-icon">
                              <use xlink:href="#heart"></use></svg></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- katalog 12 -->
              <div class="col-01">
                <div class="product-item">
                  <figure>
                    <a href="{{ url ('/detailcheckout') }}" title="Product Title">
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
                      <span>(32)</span>
                    </div>
                    <div
                      class="d-flex justify-content-center align-items-center gap-2"
                    >
                      <del>Rp 14.00</del>
                      <span class="text-dark fw-semibold">Rp 12.00</span>
                      <span
                        class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary"
                        >10% OFF</span>
                    </div>
                    <div class="button-area p-3 pt-0">
                      <div class="row g-1 mt-2">
                        <div class="col-3">
                          <input
                            type="number"
                            name="quantity"
                            class="form-control border-dark-subtle input-number quantity"
                            value="1"
                            onchange="updateCartQuantity('Green salad', this.value, 12)"
                          />
                        </div>
                        <div class="col-7">
                          <button
                            href="#"
                            class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"
                            onclick="addToCart('Green salad', 15, 'images/product-thumb-2.png')"
                            ><svg width="18" height="18">
                              <use xlink:href="#cart"></use>
                            </svg>
                            Add to Cart</button >
                        </div>
                        <div class="col-2">
                          <a
                            href="#"
                            class="btn btn-outline-dark rounded-1 p-2 fs-6 love-button"
                            ><svg width="18" height="18" class="heart-icon">
                              <use xlink:href="#heart"></use></svg></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <!-- / product-grid -and-->
          </div>
        </div>
      </div>
    </section>
 <section id="best-sellers" class="best-sellers section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Best Sellers</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-5">

          <!-- Product 1 -->
     
        @foreach($data as $product)

          <!-- Product 4 -->
          <div class="col-lg-3 col-md-6">
            <div class="product-item">
              <div class="product-image">
                <div class="product-badge trending-badge">Trending</div>
                <img src="/productimage/{{$product->image}}" alt="Product Image" class="img-fluid" loading="lazy">
                <div class="product-actions">
                  <button class="action-btn wishlist-btn active">
                    <i class="bi bi-heart-fill"></i>
                  </button>
                  <button class="action-btn compare-btn">
                    <i class="bi bi-arrow-left-right"></i>
                  </button>
                  <button class="action-btn quickview-btn">
                    <i class="bi bi-zoom-in"></i>
                  </button>
                </div>
                <button class="cart-btn">Add to Cart</button>
              </div>
              <div class="product-info">
                <div class="product-category">Designer Series</div>
                <h4 class="product-name"><a href="product-details.html">{{$product->title}}</a></h4>
                <div class="product-rating">
                  <div class="stars">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                  <span class="rating-count">(56)</span>
                </div>
                <div class="product-price">${{$product->price}}</div>
                <div class="color-swatches">
                  <span class="swatch" style="background-color: #64748b;"></span>
                  <span class="swatch active" style="background-color: #7c3aed;"></span>
                  <span class="swatch" style="background-color: #f59e0b;"></span>
                </div>
              </div>
            </div>
          </div>
          <!-- End Product 4 -->
@endforeach
        </div>

      </div>

    </section>
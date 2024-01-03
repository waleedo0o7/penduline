<?php include 'layout-header.php'; ?>

<main class="main">

  <div class="bg-primary bottom-overlap">

    <div class="primary-day-offers co-swiper-arrow-start">

      <div class="swiper primary-day-offers-swiper">
        <div class="swiper-wrapper">

          <div class="one-item swiper-slide" style="background-image: url(assets/images/slide-2.jpg);">
            <?php @include "./src/html/primary-day-offers-slide-3.php"; ?>
          </div><!-- swiper-slide -->

          <div class="one-item swiper-slide" style="background-image: url(assets/images/slide-2.jpg);">
            <?php @include "./src/html/primary-day-offers-slide-3.php"; ?>
          </div><!-- swiper-slide -->

        </div> <!-- primary swiper-wrapper -->
      </div> <!-- swiper primary-day-offers-swiper -->


      <div class="primary-day-offers__navigation co-swiper-navigation">

        <a class="co-swiper-navigation__button color-white primary-day-offers-navigation__button--prev">
          <i class="fa fa-chevron-left"></i>
        </a>

        <a class="co-swiper-navigation__button color-white primary-day-offers-navigation__button--next">
          <i class="fa fa-chevron-right"></i>
        </a>

      </div> <!-- co-swiper-navigation -->

    </div> <!-- primary-day-offers -->

 
    <!-- RECENT ARRIVE SECTION START -->
    <section class="recent-arrive">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-xl-4 mb-4">
            <?php @include "./src/html/recent-arrive-style-1.html"; ?>
          </div>
          <div class="col-md-6 col-xl-4 mb-4">
            <?php @include "./src/html/recent-arrive-style-1.html"; ?>
          </div>
          <div class="col-md-6 col-xl-4 mb-4">
            <?php @include "./src/html/recent-arrive-style-1.html"; ?>
          </div>
        </div>
      </div>
    </section>
    <!-- RECENT ARRIVE SECTION END -->

    <!-- PRODUCTS SECTION START -->
    <section class="products pb-5">
      <div class="container">
        <div class="row">

          <div class="col-md-6 col-lg-4 col-xxl-2">
            <?php @include "./src/html/product-style-1.html"; ?>
          </div>

          <div class="col-md-6 col-lg-4 col-xxl-2">
            <?php @include "./src/html/product-style-1.html"; ?>
          </div>

          <div class="col-md-6 col-lg-4 col-xxl-2">
            <?php @include "./src/html/product-style-1.html"; ?>
          </div>

          <div class="col-md-6 col-lg-4 col-xxl-2">
            <?php @include "./src/html/product-style-1.html"; ?>
          </div>

          <div class="col-md-6 col-lg-4 col-xxl-2">
            <?php @include "./src/html/product-style-1.html"; ?>
          </div>

          <div class="col-md-6 col-lg-4 col-xxl-2">
            <?php @include "./src/html/product-style-1.html"; ?>
          </div>


        </div>
      </div>
    </section>
    <!-- PRODUCTS SECTION END -->

  </div> <!-- bg-primary intro-bg -->

  <!-- BEST OFFERS SECTION START -->
  <section class="best-offers top-overlap">
    <div class="container">
      <div class="co-section-header best-offers__header">
        <h2 class="co-section-header__title color-white">أفضل العروض</h2>
        <a href="view-products-list.php" class="btn btn--secondary--inverted">استكشف المزيد</a>
      </div>
    </div>

    <div class="swiper best-offers-swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <?php @include "./src/html/product-style-2.html"; ?>
        </div>

        <div class="swiper-slide">
          <?php @include "./src/html/product-style-2.html"; ?>
        </div>

        <div class="swiper-slide">
          <?php @include "./src/html/product-style-2.html"; ?>
        </div>

        <div class="swiper-slide">
          <?php @include "./src/html/product-style-2.html"; ?>
        </div>

        <div class="swiper-slide">
          <?php @include "./src/html/product-style-2.html"; ?>
        </div>

        <div class="swiper-slide">
          <?php @include "./src/html/product-style-2.html"; ?>
        </div>

        <div class="swiper-slide">
          <?php @include "./src/html/product-style-2.html"; ?>
        </div>

        <div class="swiper-slide">
          <?php @include "./src/html/product-style-2.html"; ?>
        </div>

      </div>
    </div>
    <div class="best-offers__navigation co-swiper-navigation co-swiper-navigation--gray">
      <a class="co-swiper-navigation__button best-offers-navigation__button--prev">
        <i class="fa fa-chevron-left"></i>
      </a>
      <a class="co-swiper-navigation__button best-offers-navigation__button--next">
        <i class="fa fa-chevron-right"></i>
      </a>
    </div>
  </section>
  <!-- BEST OFFERS SECTION END -->

  <!-- OUR RECOMMENDATION SECTION START -->
  <section class="recommendations">
    <div class="container">
      <div class="co-section-header">
        <h2 class="co-section-header__title">من ترشيحاتنا المفضلة </h2>
        <button class="btn btn--secondary">استكشف المزيد</button>
      </div>
    </div>

    <div class="swiper recommendations-offers-swiper">
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <?php @include "./src/html/product-style-3.html"; ?>
        </div>

        <div class="swiper-slide">
          <?php @include "./src/html/product-style-3.html"; ?>
        </div>

        <div class="swiper-slide">
          <?php @include "./src/html/product-style-3.html"; ?>
        </div>

        <div class="swiper-slide">
          <?php @include "./src/html/product-style-3.html"; ?>
        </div>

        <div class="swiper-slide">
          <?php @include "./src/html/product-style-3.html"; ?>
        </div>

        <div class="swiper-slide">
          <?php @include "./src/html/product-style-3.html"; ?>
        </div>

        <div class="swiper-slide">
          <?php @include "./src/html/product-style-3.html"; ?>
        </div>

        <div class="swiper-slide">
          <?php @include "./src/html/product-style-3.html"; ?>
        </div>

      </div>
    </div>
    <div class="recommendations__navigation co-swiper-navigation co-swiper-navigation--gray">
      <a class="co-swiper-navigation__button recommendations-navigation__button--prev">
        <i class="fa fa-chevron-left"></i>
      </a>
      <a class="co-swiper-navigation__button recommendations-navigation__button--next">
        <i class="fa fa-chevron-right"></i>
      </a>
    </div>
  </section>
  <!-- OUR RECOMMENDATION SECTION END -->

  <!-- BEST SELLER SECTION START -->
  <section class="best-seller">
    <div class="container">
      <div class="co-section-header">
        <h2 class="co-section-header__title">الأكثر مبيعا</h2>
        <button class="btn btn--secondary">استكشف المزيد</button>
      </div>
    </div>

    <div class="swiper best-seller-swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <?php @include "./src/html/product-style-1.html"; ?>
        </div>

        <div class="swiper-slide">
          <?php @include "./src/html/product-style-1.html"; ?>
        </div>

        <div class="swiper-slide">
          <?php @include "./src/html/product-style-1.html"; ?>
        </div>

        <div class="swiper-slide">
          <?php @include "./src/html/product-style-1.html"; ?>
        </div>

        <div class="swiper-slide">
          <?php @include "./src/html/product-style-1.html"; ?>
        </div>

        <div class="swiper-slide">
          <?php @include "./src/html/product-style-1.html"; ?>
        </div>

        <div class="swiper-slide">
          <?php @include "./src/html/product-style-1.html"; ?>
        </div>

        <div class="swiper-slide">
          <?php @include "./src/html/product-style-1.html"; ?>
        </div>

        <div class="swiper-slide">
          <?php @include "./src/html/product-style-1.html"; ?>
        </div>

      </div>
    </div>
    <div class="best-seller-swiper__navigation co-swiper-navigation co-swiper-navigation--gray">
      <a class="co-swiper-navigation__button best-seller-swiper-navigation__button--prev">
        <i class="fa fa-chevron-left"></i>
      </a>
      <a class="co-swiper-navigation__button best-seller-swiper-navigation__button--next">
        <i class="fa fa-chevron-right"></i>
      </a>
    </div>
  </section>
  <!-- BEST SELLER SECTION END -->

  <!-- SAVING AREA SECTION START -->
  <section class="saving-area">
    <div class="container">
      <div class="co-section-header">
        <h2 class="co-section-header__title">ركن التوفير</h2>
        <button class="btn btn--secondary">استكشف المزيد</button>
      </div>
    </div>

    <div class="swiper saving-area-swiper">
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <?php @include "./src/html/offer-style-2.html"; ?>
        </div>

        <div class="swiper-slide">
          <?php @include "./src/html/offer-style-2.html"; ?>
        </div>

        <div class="swiper-slide">
          <?php @include "./src/html/offer-style-2.html"; ?>
        </div>

        <div class="swiper-slide">
          <?php @include "./src/html/offer-style-2.html"; ?>
        </div>

        <div class="swiper-slide">
          <?php @include "./src/html/offer-style-2.html"; ?>
        </div>

        <div class="swiper-slide">
          <?php @include "./src/html/offer-style-2.html"; ?>
        </div>

      </div>
    </div>

    <div class="saving-area-swiper-swiper__navigation co-swiper-navigation co-swiper-navigation--gray">
      <a class="co-swiper-navigation__button saving-area-swiper-swiper-navigation__button--prev">
        <i class="fa fa-chevron-left"></i>
      </a>
      <a class="co-swiper-navigation__button saving-area-swiper-navigation__button--next">
        <i class="fa fa-chevron-right"></i>
      </a>
    </div>
  </section>
  <!-- SAVING AREA SECTION END -->

  <section class="doodle-and-win">

    <div class="container">
      <div class="doodle-and-win-content">
        <div class="co-bg-image-1">
          <img src="assets/images/home-win-bg-1.png" class="img-fluid bg-image" alt="">
          <img src="assets/images/intro-bg.png" class="img-fluid start-image" alt="">
        </div><!-- co-bg-image -->
        <div class="co-bg-image-2">
          <div class="section-bg" style="background-image: url(assets/images/home-win-bg-2.png);">

            <div class="section-content h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">

                <div class="col-lg-6">
                  <h1 class="mb-4 color-pink"> خربش واكسب </h1>
                  <p class=" lead m-0"> الكود أمان ومكسب كمان </p>
                  <p class=" lead m-0"> برنامج نقاط وهدايا مجانيه مع بندولين وبس </p>
                </div><!-- col-lg-6 -->

                <div class="col-lg-6">
                  <div class="text-center">

                    <a data-fancybox="product-video" href="assets/post-001.mp4" class="open-video">
                      <img src="assets/images/play-circle.svg" class="play-circle-icon mb-3" alt="">
                      <p class="color-white"> تشغيل الفيديو </p>
                    </a>

                    <a data-fancybox="product-video" href="assets/post-001.mp4" class="btn btn--primary--inverted open-video"> برنامج استبدال النقاط </a>

                  </div><!-- text-center -->
                </div><!-- col-lg-6 -->

              </div><!-- row -->
            </div><!-- section-content -->

          </div>

        </div><!-- co-bg-image -->
      </div><!-- doodle-and-win-content -->
    </div>
  </section> <!-- doodle-and-win -->

  <!-- BLOG SECTION START -->
  <section class="blog">

    <div class="container">
      <div class="co-section-header">
        <h2 class="co-section-header__title">المدونة</h2>
        <button class="btn btn--secondary">استكشف المزيد</button>
      </div>

      <div class="row">

        <div class="col-md-6 mb-4">
          <?php @include "./src/html/blog-style-1.html"; ?>
        </div> <!-- col-md-6 -->

        <div class="col-md-6 mb-4">
          <?php @include "./src/html/blog-style-1.html"; ?>
        </div> <!-- col-md-6 -->

      </div>
    </div>
  </section>
  <!-- BLOG SECTION END -->

  <!-- PARTNERS SECTION START -->
  <section class="partners">
    <div class="container">
      <div class="row">
        <div class="col-md-6 px-5">
          <div class="co-section-header">
            <h2 class="co-section-header__title">الشركاء الأكاديميين</h2>
          </div>
          <div class="swiper partners-academic-swiper overflow-hidden">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="partners__list">


                  <?php @include "./src/html/partner-style-1.html"; ?>
                  <?php @include "./src/html/partner-style-1.html"; ?>
                  <?php @include "./src/html/partner-style-1.html"; ?>
                  <?php @include "./src/html/partner-style-1.html"; ?>
                  <?php @include "./src/html/partner-style-1.html"; ?>
                  <?php @include "./src/html/partner-style-1.html"; ?>

                </div>
              </div>
              <div class="swiper-slide">
                <div class="partners__list">
                  <?php @include "./src/html/partner-style-1.html"; ?>
                  <?php @include "./src/html/partner-style-1.html"; ?>
                  <?php @include "./src/html/partner-style-1.html"; ?>
                  <?php @include "./src/html/partner-style-1.html"; ?>
                  <?php @include "./src/html/partner-style-1.html"; ?>
                  <?php @include "./src/html/partner-style-1.html"; ?>
                </div>
              </div>
            </div>
          </div>
          <div class="partners-academic-swiper__navigation co-swiper-navigation co-swiper-navigation--gray">
            <a class="co-swiper-navigation__button partners-academic-swiper-navigation__button--prev">
              <i class="fa fa-chevron-left"></i>
            </a>
            <a class="co-swiper-navigation__button partners-academic-swiper-navigation__button--next">
              <i class="fa fa-chevron-right"></i>
            </a>
          </div>
        </div>
        <div class="col-md-6 px-5">
          <div class="co-section-header">
            <h2 class="co-section-header__title">الشركاء التجاريون</h2>
          </div>
          <div class="swiper partners-ecommerce-swiper overflow-hidden">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="partners__list">
                  <div class="co-partner">
                    <img src="assets/images/Partners/1.jpg" alt="Partner">
                  </div>
                  <div class="co-partner">
                    <img src="assets/images/Partners/2.jpg" alt="Partner">
                  </div>
                  <div class="co-partner">
                    <img src="assets/images/Partners/3.jpg" alt="Partner">
                  </div>
                  <div class="co-partner">
                    <img src="assets/images/Partners/4.jpg" alt="Partner">
                  </div>
                  <div class="co-partner">
                    <img src="assets/images/Partners/5.jpg" alt="Partner">
                  </div>
                  <div class="co-partner">
                    <img src="assets/images/Partners/6.jpg" alt="Partner">
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="partners__list">
                  <div class="co-partner">
                    <img src="assets/images/Partners/2.jpg" alt="Partner">
                  </div>
                  <div class="co-partner">
                    <img src="assets/images/Partners/3.jpg" alt="Partner">
                  </div>
                  <div class="co-partner">
                    <img src="assets/images/Partners/5.jpg" alt="Partner">
                  </div>
                  <div class="co-partner">
                    <img src="assets/images/Partners/4.jpg" alt="Partner">
                  </div>
                  <div class="co-partner">
                    <img src="assets/images/Partners/3.jpg" alt="Partner">
                  </div>
                  <div class="co-partner">
                    <img src="assets/images/Partners/6.jpg" alt="Partner">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="partners-ecommerce-swiper__navigation co-swiper-navigation co-swiper-navigation--gray">
            <a class="co-swiper-navigation__button partners-ecommerce-swiper-navigation__button--prev">
              <i class="fa fa-chevron-left"></i>
            </a>
            <a class="co-swiper-navigation__button partners-ecommerce-swiper-navigation__button--next">
              <i class="fa fa-chevron-right"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- PARTNERS SECTION END -->

</main>

<?php include 'layout-footer.php'; ?>
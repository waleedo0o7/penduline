<button id="gotToTopButton" class="co-scroll-top" title="Go to top">
  <i class="icon icon-arrow_dropdown"></i>
</button>

<div class="loader">
  <div class="loader__item">
    <img src="assets/images/Brand/logo-white.svg" alt="Logo" />
    <div></div>
  </div>
</div>

<!-- HEADER SECTION START -->
<header class="header">


  <div class="header__top">
    <div class="header__top__container container">


      <a href="view-home.php" class="header__logo">
        <img src="assets/images/Brand/logo-white.svg" alt="Logo" />
      </a>

      <div class="co-language-switcher">
        <a href="#" data-toggle="modal" data-target="#change-language" class="co-language-switcher__link">
          <img class="co-language-switcher__flag" src="assets/images/Flag/egypt.png" alt="EGYPT" />
          <span class="co-language-switcher__link__label color-white">مصر</span>
          <i class="icon icon-arrow_dropdown icon-xl color-white"></i>
        </a>
      </div>

      <div class="co-icon-container">
        <i class="icon icon-location-3"></i>
        <span>القاهره</span>
      </div>
      <div class="co-icon-container">
        <i class="icon icon-earth"></i>
        <span>English</span>
      </div>
      <div class="co-search">
        <select class="select">
          <option value="0">الكل</option>
          <option value="1">1الكل</option>
        </select>
        <input type="text" placeholder="ابحث عن أي شيء يهمك" class="co-search__input" />
        <a href="" class="co-search__button">
          <i class="icon icon-Search"></i>
        </a>
      </div>
      <a href="view-cpanel-my-fav.php" class="color-white co-icon-container">
        <i class="icon icon-love"></i>
        <div>
          <!-- <span class="co-icon-container__label">المفضله</span> -->
          <span class="co-icon-container__title">قائمة مفضلاتك</span>
        </div>
      </a>

      <a href="view-cart.php" class="color-white co-icon-container">
        <i class="icon icon-cart"></i>
        <div>
          <span class="co-icon-container__title">عربة التسوق</span>
        </div>
      </a>

      <a href="view-auth-login.php" class=" color-white co-icon-container dropdown">
        <i class="icon icon-user-3"></i>
        <span class="co-icon-container__title color-white"> حسابك </span>
      </a> <!-- co-icon-container -->

    </div> <!-- header__top__container -->

  </div>


  <div class="header__nav-list">
    <div class="container header__nav-list__container">
      <ul class="header__nav reset-list">
        <li class="header__nav__item header__nav__item--active">
          <a href="view-products-list.php" class="header__nav__item__link"> <i class="fa fa-ellipsis show-all-icon" aria-hidden="true"></i> عرض الكل</a>
        </li>
        <li class="header__nav__item">
          <a href="view-products-list.php" class="header__nav__item__link"> عالم بندولين</a>
        </li>
        <li class="header__nav__item">
          <a href="view-products-list.php" class="header__nav__item__link"> البيبي و الام</a>
        </li>
        <li class="header__nav__item">
          <a href="view-products-list.php" class="header__nav__item__link"> عرض اليوم</a>
        </li>
        <li class="header__nav__item">
          <a href="view-products-list.php" class="header__nav__item__link"> العروض</a>
        </li>
        <li class="header__nav__item">
          <a href="view-products-list.php" class="header__nav__item__link"> خربش واكسب</a>
        </li>
        <li class="header__nav__item">
          <a href="view-products-list.php" class="header__nav__item__link">بيع مع بيندولين</a>
        </li>
        <li class="header__nav__item">
          <a href="#" class="header__nav__item__link">المدونة</a>
        </li>
      </ul>
      <select class="select header__nav-list__track-order">
        <option value="0">تتبع الطلب</option>
        <option value="0">تتبع الطلب اولا</option>
      </select>
    </div>
  </div>

</header>


<div class="header__top__mobile__bar">
  <div class="logo-wrapper">
    <img src="assets/images/Brand/logo-white.svg" alt="Logo" />
  </div>
  <a class="open-mobile-menu">
    <i class="fa-solid fa-bars"></i>
  </a>
</div><!-- header__top -->

<div class="top-mobile-menu">

  <div class="header__top__mobile__bar">
    <div class="logo-wrapper">
      <img src="assets/images/Brand/logo-white.svg" alt="Logo" />
    </div>
    <a class="close-mobile-menu">
      <i class="fa fa-times"></i>
    </a>
  </div><!-- header__top -->

  <div class="co-block mb-2">
    <ul class="reset-list">
      <li class="menu-item">
        <a href="view-auth-login.php" class="menu-link d-flex justify-content-between align-items-center p-2">
          <p class="m-0"> <i class="icon icon-user-3 me-1"></i> حسابك </p>
          <i class="icon icon-arrow-Right_2"></i>
        </a>
      </li>
    </ul>


  </div><!-- co-block -->

  <div class="co-block mb-2">
    <ul class="reset-list">

      <li class="menu-item">
        <a href="#" class="menu-link d-flex justify-content-between align-items-center p-2">
          <p class="m-0"> <i class="icon icon-love me-1"></i> المفضلة </p>
          <i class="icon icon-arrow-Right_2"></i>
        </a>
      </li>

      <li class="menu-item">
        <a href="#" class="menu-link d-flex justify-content-between align-items-center p-2">
          <p class="m-0"> <i class="icon icon-cart me-1"></i> عربة التسوق </p>
          <i class="icon icon-arrow-Right_2"></i>
        </a>
      </li>

      <li class="menu-item">
        <a href="#" class="menu-link d-flex justify-content-between align-items-center p-2">
          <p class="m-0"> <i class="icon icon-location-3 me-1"></i> القاهرة </p>
          <i class="icon icon-arrow-Right_2"></i>
        </a>
      </li>

      <li class="menu-item">
        <a href="#" class="menu-link d-flex justify-content-between align-items-center p-2">
          <p class="m-0"> <span class="flag-icon flag-icon-sa"></span> اللغة العربية | ر.س </p>
          <i class="icon icon-arrow-Right_2"></i>
        </a>
      </li>

    </ul>
  </div><!-- co-block -->

  <div class="co-block mb-2">
    <ul class="reset-list">
      <li class="menu-item">
        <a href="#" class="menu-link d-flex justify-content-between align-items-center p-2">
          <p class="m-0"> <i class="fa fa-circle fa-xs me-1"></i> عالم بندولين </p>
          <i class="icon icon-arrow-Right_2"></i>
        </a>
      </li>

      <li class="menu-item">
        <a href="#" class="menu-link d-flex justify-content-between align-items-center p-2">
          <p class="m-0"> <i class="fa fa-circle fa-xs me-1"></i> عالم بندولين </p>
          <i class="icon icon-arrow-Right_2"></i>
        </a>
      </li>

      <li class="menu-item">
        <a href="#" class="menu-link d-flex justify-content-between align-items-center p-2">
          <p class="m-0"> <i class="fa fa-circle fa-xs me-1"></i> البيبي و الام </p>
          <i class="icon icon-arrow-Right_2"></i>
        </a>
      </li>

      <li class="menu-item">
        <a href="#" class="menu-link d-flex justify-content-between align-items-center p-2">
          <p class="m-0"> <i class="fa fa-circle fa-xs me-1"></i> الشعر الكيرلي </p>
          <i class="icon icon-arrow-Right_2"></i>
        </a>
      </li>

      <li class="menu-item">
        <a href="#" class="menu-link d-flex justify-content-between align-items-center p-2">
          <p class="m-0"> <i class="fa fa-circle fa-xs me-1"></i> عرض اليوم </p>
          <i class="icon icon-arrow-Right_2"></i>
        </a>
      </li>
    </ul>
  </div><!-- co-block -->

</div><!-- top-mobile-menu -->


<!-- HEADER SECTION END -->
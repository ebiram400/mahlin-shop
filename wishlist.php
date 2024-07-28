<!doctype html>
<html  class="no-js">
 
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Zakas - Fashion eCommerce Bootstrap 4 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicons -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="assets/img/icon.png">

    <!-- ************************* CSS Files ************************* -->

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="assets/css/vendor.css">

    <!-- style css -->
    <link rel="stylesheet" href="assets/css/main.css">

</head>

<body>

    <!-- Preloader Start -->
    <div class="zakas-preloader active">
        <div class="zakas-preloader-inner h-100 d-flex align-items-center justify-content-center">
            <div class="zakas-child zakas-bounce1"></div>
            <div class="zakas-child zakas-bounce2"></div>
            <div class="zakas-child zuka-bounce3"></div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Main Wrapper Start -->
    <div class="wrapper">
        <!-- Header Start -->
        <header class="header">
            <div class="header-topbar">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-5 text-center text-lg-left">
                            <p class="font-weight-light">به فروشگاه ماهلین خوش آمدید</p>
                        </div>
                        <div class="col-md-7 text-center text-lg-right">
                            <ul class="header-contact-list list-inline">
                                <li class="list-inline-item"><i class="fa fa-phone"></i><a href="tel:0915 696 3070">+98 915 696 3070</a>
                                </li>
                                <li class="list-inline-item"><i class="fa fa-envelope"></i><a
                                        href="mailto:education@email">mahlinmahdoudy@email.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-inner fixed-header bg-color" data-bg-color="#f6ece4">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-10 col-lg-9 col-3">
                            <nav class="main-navigation">
                                <div class="site-branding">
                                    <a href="index.php" class="logo">
                                        <figure class="logo--transparent">
                                            <img src="assets/img/logo/logo-white.png" alt="Logo">
                                        </figure>
                                        <figure class="logo--normal">
                                            <img src="assets/img/logo/logo.png" alt="Logo">
                                        </figure>
                                    </a>
                                </div>
                                <div class="mainmenu-nav d-none d-lg-block">
                                    <ul class="mainmenu">
                                        <li class="mainmenu__item menu-item-has-children active">
                                            <a href="index.php" class="mainmenu__link">
                                                <span class="mm-text">صفحه اصلی</span>
                                            </a>
                                        </li>
                                        <li class="mainmenu__item menu-item-has-children">
                                            <a href="shop.php" class="mainmenu__link">
                                                <span class="mm-text">فروشگاه</span>
                                            </a>
                                        </li>
                                        <li class="mainmenu__item menu-item-has-children">
                                            <a href="Blog.php" class="mainmenu__link">
                                                <span class="mm-text">بلاگ</span>
                                            </a>
                                        </li>
                                        <li class="mainmenu__item">
                                            <a href="contact-us.php" class="mainmenu__link">
                                                <span class="mm-text">درباره ماهلین</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-9 text-right">
                            <ul class="header-toolbar">
                                <li class="header-toolbar__item">
                                    <a href="wishlist.php" class="header-toolbar__btn">
                                        <i class="flaticon flaticon-like"></i>
                                    </a>
                                </li>
                                <li class="header-toolbar__item mini-cart-item">
                                    <a href="#miniCart" class="header-toolbar__btn toolbar-btn mini-cart-btn">
                                        <i class="flaticon flaticon-shopping-cart"></i>
                                            <?php
                                                if(empty($_SESSION['basket'])){
                                                    echo '';
                                                }else{
                                                    echo '<sup class="mini-cart-count">'.$_SESSION['basket'].'</sup>';
                                                }
                                            ?>
                                    </a>
                                </li>
                                <li class="header-toolbar__item user-info">
                                    <a href="" class="header-toolbar__btn">
                                        <i class="flaticon flaticon-user"></i>
                                    </a>
                                    <ul class="user-info-menu">
                                        <li>
                                            <a href="my-account.php">ورود/عضویت</a>
                                        </li>
                                        <li>
                                            <a href="cart.php">صورتحساب من</a>
                                        </li>
                                        <li>
                                            <a href="checkout.php">مشخصات خریدار</a>
                                        </li>
                                        <li>
                                            <a href="wishlist.php">علاقه مندی ها</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="header-toolbar__item">
                                    <a href="#searchForm" class="header-toolbar__btn toolbar-btn">
                                        <i class="flaticon flaticon-search"></i>
                                    </a>
                                </li>
                                <li class="header-toolbar__item d-lg-none">
                                    <a href="#" class="header-toolbar__btn menu-btn">
                                        <i class="fa fa-bars"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header End -->

        <!-- Breadcrumb area Start -->
        <div class="breadcrumb-area bg-color ptb--90" data-bg-color="#f6f6f6">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex justify-content-between align-items-center flex-sm-row flex-column">
                            <h1 class="page-title">علاقه مندی ها</h1>
                            <ul class="breadcrumb" dir="ltr">
                                <li class="current"><span>علاقه مندی ها</span></li>
                                <li><a href="index.php">صفحه اصلی</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb area End -->


        <!-- Main Content Wrapper Start -->
        <div class="main-content-wrapper">
            <div class="page-content-inner ptb--80">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="table-content table-responsive">
                                <table class="table table-style-2 wishlist-table text-center">
                                    <thead>
                                        <tr>
                                            <th>&nbsp;</th>
                                            <th>&nbsp;</th>
                                            <th class="text-left">محصول</th>
                                            <th>وضعیت </th>
                                            <th>قیمت</th>
                                            <th>&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="product-remove text-left"><a href=""><i class="flaticon flaticon-cross"></i></a></td>
                                            <td class="product-thumbnail text-left">
                                                <img src="assets/img/products/prod-10-70x88.jpg" alt="Product Thumnail">
                                            </td>
                                            <td class="product-name text-left wide-column">
                                                <h3>
                                                    <a href="product-details.html">لباس خواب ربدوشامبر زنانه</a>
                                                </h3>
                                            </td>
                                            <td class="product-stock">
                                                موجود
                                            </td>
                                            <td class="product-price">
                                                <span class="product-price-wrapper">
                                                    <span class="money">1100000</span>
                                                </span>
                                            </td>
                                            <td class="product-action-btn">
                                                <a href="cart.php" class="btn btn-small btn-bg-red btn-color-white btn-hover-2">اضافه کردن به سبد خرید</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="product-remove text-left"><a href=""><i class="flaticon flaticon-cross"></i></a></td>
                                            <td class="product-thumbnail text-left">
                                                <img src="assets/img/products/prod-11-70x88.jpg" alt="Product Thumnail">
                                            </td>
                                            <td class="product-name text-left wide-column">
                                                <h3>
                                                    <a href="product-details.html">لباس خواب مردانه</a>
                                                </h3>
                                            </td>
                                            <td class="product-stock">
                                                موجود
                                            </td>
                                            <td class="product-price">
                                                <span class="product-price-wrapper">
                                                    <span class="money">950000</span>
                                                </span>
                                            </td>
                                            <td class="product-action-btn">
                                                <a href="cart.php" class="btn btn-small btn-bg-red btn-color-white btn-hover-2">اضافه کردن به سبد خرید</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="product-remove text-left"><a href=""><i class="flaticon flaticon-cross"></i></a></td>
                                            <td class="product-thumbnail text-left">
                                                <img src="assets/img/products/prod-12-70x88.jpg" alt="Product Thumnail">
                                            </td>
                                            <td class="product-name text-left wide-column">
                                                <h3>
                                                    <a href="product-details.html">لباس خواب راحتی کودک</a>
                                                </h3>
                                            </td>
                                            <td class="product-stock">
                                                موجود
                                            </td>
                                            <td class="product-price">
                                                <span class="product-price-wrapper">
                                                    <span class="money">650000</span>
                                                </span>
                                            </td>
                                            <td class="product-action-btn">
                                                <a href="cart.php" class="btn btn-small btn-bg-red btn-color-white btn-hover-2">اضافه کردن به سبد خرید</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="product-remove text-left"><a href=""><i class="flaticon flaticon-cross"></i></a></td>
                                            <td class="product-thumbnail text-left">
                                                <img src="assets/img/products/prod-13-70x88.jpg" alt="Product Thumnail">
                                            </td>
                                            <td class="product-name text-left wide-column">
                                                <h3>
                                                    <a href="product-details.html">اکسسوری بانوان</a>
                                                </h3>
                                            </td>
                                            <td class="product-stock">
                                               موجود
                                            </td>
                                            <td class="product-price">
                                                <span class="product-price-wrapper">
                                                    <span class="money">250000</span>
                                                </span>
                                            </td>
                                            <td class="product-action-btn">
                                                <a href="cart.php" class="btn btn-small btn-bg-red btn-color-white btn-hover-2">اضافه کردن به سبد خرید</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Content Wrapper Start -->

        <!-- Footer Start-->
        <footer class="footer">
            <div class="footer-top bg-color ptb--50" data-bg-color="#f6f6f6">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-9 text-center">
                            <div class="footer-widget mb--50">
                                <div class="textwidget">
                                    <img src="assets/img/logo/logo.png" alt="Logo">
                                </div>
                            </div>
                            <div class="footer-widget mb--50 pb--1">
                                <ul class="footer-menu" dir="ltr">
                                    <li><a href="./contact-us.php">درباره ماهلین</a></li>
                                    <li><a href="">نوشته های پر بازدید</a></li>
                                    <li><a href="">پیگیری سفارشات</a></li>
                                </ul>
                            </div>
                            <div class="footer-widget">
                                <!-- Social Icons Start Here -->
                                <ul class="social">
                                    <li class="social__item">
                                        <a href="" class="social__link google-plus">
                                            <span>اینستاگرام</span>
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li class="social__item">
                                        <a href="" class="social__link facebook">
                                            <span>تلگرام</span>
                                            <i class="fa fa-telegram"></i>
                                        </a>
                                    </li>
                                    <li class="social__item">
                                        <a href="" class="social__link pinterest">
                                            <span>نماد اعتماد الکترونیک</span>
                                            <i class="fa fa-e"></i>
                                        </a>
                                    </li>
                                </ul>
                                <!-- Social Icons End Here -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer End-->

        <!-- Searchform Popup Start -->
        <div class="searchform__popup" id="searchForm">
            <a href="#" class="btn-close"><i class="flaticon flaticon-cross"></i></a>
            <div class="searchform__body">
                <p>شروع به تایپ کنید و برای جستجو کلیک کنید</p>
                <form class="searchform">
                    <input type="text" name="popup-search" id="popup-search" class="searchform__input" placeholder="Search Entire Store...">
                    <button type="submit" class="searchform__submit"><i class="flaticon flaticon-magnifying-glass-icon"></i></button>
                </form>
            </div>
        </div>
        <!-- Searchform Popup End -->

        <!-- Mini Cart Start -->
        <aside class="mini-cart" id="miniCart">
            <div class="mini-cart-wrapper">
                <a href="" class="btn-close"><i class="flaticon flaticon-cross"></i></a>
                <div class="mini-cart-inner">
                    <h3 class="mini-cart__heading mb--40 mb-lg--30">سبد خرید</h3>
                    <div class="mini-cart__content">
                        <ul class="mini-cart__list">
                            <li class="mini-cart__product">
                                <a href="#" class="remove-from-cart remove">
                                    <i class="flaticon flaticon-cross"></i>
                                </a>
                                <div class="mini-cart__product__image">
                                    <img src="assets/img/products/prod-1-100x100.jpg" alt="products">
                                </div>
                                <div class="mini-cart__product__content">
                                    <a class="mini-cart__product__title" href="product-details.html">لباس خواب  </a>
                                    <span class="mini-cart__product__quantity">1*950000</span>
                                </div>
                            </li>
                            <li class="mini-cart__product">
                                <a href="#" class="remove-from-cart remove">
                                    <i class="flaticon flaticon-cross"></i>
                                </a>
                                <div class="mini-cart__product__image">
                                    <img src="assets/img/products/prod-2-100x100.jpg" alt="products">
                                </div>
                                <div class="mini-cart__product__content">
                                    <a class="mini-cart__product__title" href="product-details.html">لباس خواب مردانه</a>
                                    <span class="mini-cart__product__quantity">1*950000</span>
                                </div>
                            </li>
                            <li class="mini-cart__product">
                                <a href="#" class="remove-from-cart remove">
                                    <i class="flaticon flaticon-cross"></i>
                                </a>
                                <div class="mini-cart__product__image">
                                    <img src="assets/img/products/prod-5-100x100.jpg" alt="products">
                                </div>
                                <div class="mini-cart__product__content">
                                    <a class="mini-cart__product__title" href="product-details.html">لباس خواب کودک</a>
                                    <span class="mini-cart__product__quantity">1*650000</span>
                                </div>
                            </li>
                        </ul>
                        <div class="mini-cart__total">
                            <span>جمع کل</span>
                            <span class="ammount">2550000</span>
                        </div>
                        <div class="mini-cart__buttons">
                            <a href="cart.php" class="btn btn-fullwidth btn-bg-sand mb--20">مشاهده سبد خرید</a>
                            <a href="checkout.php" class="btn btn-fullwidth btn-bg-sand">چک کردن</a>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <!-- Mini Cart End -->

        <!-- Global Overlay Start -->
        <div class="zakas-global-overlay"></div>
        <!-- Global Overlay End -->

        <!-- Qicuk View Modal Start -->
        <div class="modal fade product-modal" id="productModal" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true"><i class="flaticon flaticon-cross"></i></span>
                </button>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="zakas-element-carousel nav-vertical-center"
                        data-slick-options='{
                            "slidesToShow": 1,
                            "slidesToScroll": 1,
                            "arrows": true,
                            "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-double-left" },
                            "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-double-right" }
                        }'
                        >
                            <div class="product-image">
                                <div class="product-image--holder">
                                    <a href="product-details.html">
                                        <img src="assets/img/products/prod-9-1.jpg" alt="Product Image" class="primary-image">
                                    </a>
                                </div>
                                <span class="product-badge sale">فروش</span>
                            </div>
                            <div class="product-image">
                                <div class="product-image--holder">
                                    <a href="product-details.html">
                                        <img src="assets/img/products/prod-9-1.jpg" alt="Product Image" class="primary-image">
                                    </a>
                                </div>
                                <span class="product-badge sale">فروش</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="modal-box product-summary">
                            <div class="product-navigation text-right mb--20">
                                <a href="#" class="prev"><i class="fa fa-angle-double-left"></i></a>
                                <a href="#" class="next"><i class="fa fa-angle-double-right"></i></a>
                            </div>
                            <div class="product-rating d-flex mb--20">
                                <div class="star-rating star-three">
                                    <span>رتبه <strong class="rating">5.00</strong>از 5</span>
                                </div>
                            </div>
                            <h3 class="product-title mb--20">تاپ بلند</h3>
                            <p class="product-short-description mb--25">تاپ بلند با قد استاندارد 85 سانتی متر  است .تن خوری بسیار زیبا وشکیل دارد</p>
                            <div class="product-price-wrapper mb--25">
                                <span class="money">450000</span>
                                <span class="price-separator">-</span>
                                <span class="money">750000</span>
                            </div>
                            <form action="#" class="variation-form mb--30">
                                <div class="product-color-variations d-flex align-items-center mb--20">
                                    <p class="variation-label">رنگ ها:</p>
                                    <div class="product-color-variation variation-wrapper">
                                        <div class="variation">
                                            <a class="product-color-variation-btn red selected" data-toggle="tooltip" data-placement="top" title="Red">
                                                <span class="product-color-variation-label">قرمز</span>
                                            </a>
                                        </div>
                                        <div class="variation">
                                            <a class="product-color-variation-btn black" data-toggle="tooltip" data-placement="top" title="Black">
                                                <span class="product-color-variation-label">مشکی</span>
                                            </a>
                                        </div>
                                        <div class="variation">
                                            <a class="product-color-variation-btn pink" data-toggle="tooltip" data-placement="top" title="Pink">
                                                <span class="product-color-variation-label">صورتی</span>
                                            </a>
                                        </div>
                                        <div class="variation">
                                            <a class="product-color-variation-btn blue" data-toggle="tooltip" data-placement="top" title="Blue">
                                                <span class="product-color-variation-label">آبی</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-size-variations d-flex align-items-center mb--15">
                                    <p class="variation-label">سایز </p>   
                                    <div class="product-size-variation variation-wrapper">
                                        <div class="variation">
                                            <a class="product-size-variation-btn selected" data-toggle="tooltip" data-placement="top" title="S">
                                                <span class="product-size-variation-label">S</span>
                                            </a>
                                        </div>
                                        <div class="variation">
                                            <a class="product-size-variation-btn" data-toggle="tooltip" data-placement="top" title="M">
                                                <span class="product-size-variation-label">M</span>
                                            </a>
                                        </div>
                                        <div class="variation">
                                            <a class="product-size-variation-btn" data-toggle="tooltip" data-placement="top" title="L">
                                                <span class="product-size-variation-label">L</span>
                                            </a>
                                        </div>
                                        <div class="variation">
                                            <a class="product-size-variation-btn" data-toggle="tooltip" data-placement="top" title="XL">
                                                <span class="product-size-variation-label">XL</span>
                                            </a>
                                        </div>
                                        <div class="variation">
                                            <a class="product-size-variation-btn" data-toggle="tooltip" data-placement="top" title="XXL">
                                                <span class="product-size-variation-label">XXL</span>
                                            </a>
                                        </div>


                                    </div>                                 
                                </div>
                                <a href="" class="reset_variations">حذف کردن</a>
                            </form>
                            <div class="product-action d-flex flex-sm-row flex-column align-items-sm-center align-items-start mb--30">
                                <div class="quantity-wrapper d-flex align-items-center mr--30 mr-xs--0 mb-xs--30">
                                    <label class="quantity-label" for="quick-qty">تعداد:</label>
                                    <div class="quantity">
                                        <input type="number" class="quantity-input" name="qty" id="quick-qty" value="1" min="1">
                                    </div>
                                </div>
                                <button type="button" class="btn btn-small btn-bg-red btn-color-white btn-hover-2" onclick="window.location.href='cart.php'">
                                   افزودن به سبد خرید
                                </button>
                            </div>  
                            <div class="product-footer-meta">
                                <p><span>دسته بندی:</span>
                                    <a href="shop.php">لباس خواب زنانه</a>,
                                    <a href="shop.php">لباس خواب مردانه</a>,
                                    <a href="shop.php">لباس راحتی کودک</a>,
                                    <a href="shop.php">اکسسوری بانوان</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Qicuk View Modal End -->
    </div>
    <!-- Main Wrapper End -->
 

    <!-- ************************* JS Files ************************* -->

    <!-- jQuery JS -->
    <script src="assets/js/vendor.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

</body>

</html>
<!doctype html>
<html class="no-js">
<?php
session_start();
if (!isset($_SESSION['id'])) {
    header('Location:login-register.php');
    exit();
}
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ماهلین</title>
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

<body lang="fa">

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
    <div class="wrapper" style="direction: ltr;">
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
                                <li class="list-inline-item"><i class="fa fa-phone"></i><a href="tel:0915 696 3070">+98
                                        915 696 3070</a>
                                </li>
                                <li class="list-inline-item"><i class="fa fa-envelope"></i><a
                                        href="mailto:education@email">mahlin@email.com</a></li>
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
                                    <a href="index.html" class="logo">
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
                                        <sup class="mini-cart-count">2</sup>
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
                            <h1 class="page-title">صفحه کاربری</h1>
                            <ul class="breadcrumb" dir="ltr">
                                <li class="current"><span>اکانت من</span></li>
                                <li><a href="index.html">صفحه اصلی</a></li>
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
                            <div class="user-dashboard-tab flex-column flex-md-row">
                                <div class="user-dashboard-tab__head nav flex-md-column" role="tablist"
                                    aria-orientation="vertical">
                                    <a class="nav-link active" data-toggle="pill" role="tab" href="#dashboard"
                                        aria-controls="dashboard" aria-selected="true">داشبورد</a>
                                    <a class="nav-link" data-toggle="pill" role="tab" href="#orders"
                                        aria-controls="orders" aria-selected="true">سفارش ها</a>
                                    <a class="nav-link" data-toggle="pill" role="tab" href="#addresses"
                                        aria-controls="addresses" aria-selected="true">آدرس ها</a>
                                    <a class="nav-link" data-toggle="pill" role="tab" href="#accountdetails"
                                        aria-controls="accountdetails" aria-selected="true">مشخصات حساب</a>
                                    <a class="nav-link" href="destroy.php">خروج از حساب</a>
                                </div>
                                <div class="user-dashboard-tab__content tab-content">
                                    <div class="tab-pane fade show active" id="dashboard">
                                        <p class="text-right">سلام<strong>

                                            </strong><br>برای دیدن سفارشات قبلی میتونید از منوی سمت راست سفارش ها رو
                                            انتخاب کنید. برای ویرایش مشخصات و آدرستون میتونید از منوی سمت راست اقدام
                                            کنید. برای پیگیری سفارشاتتون هم میتونید از بالای شماره بالای صفحه یا در
                                            پایین صفحه از پیامرسان ها استفاده کنید. امیدوارم خرید خوب و لذت بخشی رو با
                                            ما تجربه کنید</p>
                                    </div>
                                    <div class="tab-pane fade" id="orders">
                                        <div class="table-content table-responsive">
                                            <table class="table text-center">
                                                <thead>
                                                    <tr>
                                                        <th>سفارش</th>
                                                        <th>تاریخ</th>
                                                        <th>وضعیت</th>
                                                        <th>قیمت</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td class="wide-column">September 19, 2018</td>
                                                        <td>Processing</td>
                                                        <td class="wide-column">$49.00 for 1 item</td>
                                                    </tr>

                                                    <?php
                                                    include_once ('conn.php');
                                                    session_start();
                                                    $i = 1;

                                                    $sql = $conn->prepare('SELECT date,status,price FROM transaction WHERE user_id=?');
                                                    $sql->bind_param('i', $_SESSION['id']);
                                                    $sql->execute();
                                                    $result = $sql->get_result();
                                                    if ($result->num_rows > 0) {
                                                        $rows = $result->fetch_all(MYSQLI_ASSOC);

                                                        foreach ($rows as $row) {
                                                            echo '<tr>
                                                                    <td>' . $i . '</td>
                                                                    <td class="wide-column">' . $row['date'] . '</td>
                                                                    <td>' . $row['status'] . '</td>
                                                                    <td class="wide-column">' . $row['price'] . '</td>
                                                                </tr>';
                                                        }

                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade text-right" id="addresses">
                                        <p class="mb--20">آدرس زیر به صورت پیش فرض برای ارسال کالا قرار می گیرند</p>
                                        <div class="row">
                                            <div class="col-md-6 mb-sm--20 ">
                                                <div class="text-block">
                                                    <h4 class="mb--20">آدرس</h4>
                                                    <form action="editaddress.php" method="post">
                                                        <input type="text" name="address" value=<?php if (isset($_SESSION['address'])) {
                                                            echo $_SESSION['address'];
                                                        } else {
                                                            echo '';
                                                        } ?>>
                                                        <button type="submit">ویرایش</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="accountdetails">
                                        <form action="#" class="form form--account">
                                            <div class="row grid-space-30 mb--20">
                                                <div class="col-md-6 mb-sm--20">
                                                    <div class="form__group">
                                                        <label class="form__label form__label--2" for="f_name">نام <span
                                                                class="required">*</span></label>
                                                        <input type="text" name="f_name" id="f_name"
                                                            class="form__input">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form__group">
                                                        <label class="form__label form__label--2" for="l_name">نام
                                                            خانوادگی<span class="required">*</span></label>
                                                        <input type="text" name="l_name" id="l_name"
                                                            class="form__input">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb--20">
                                                <div class="col-12">
                                                    <div class="form__group">
                                                        <label class="form__label form__label--2" for="d_name">نام
                                                            کاربری<span class="required">*</span></label>
                                                        <input type="text" name="d_name" id="d_name"
                                                            class="form__input">
                                                        <span class="suggestion"><em>نامی که در بخش حساب و در بررسی ها
                                                                نمایش داده می شود</em></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb--20">
                                                <div class="col-12">
                                                    <div class="form__group">
                                                        <label class="form__label form__label--2" for="email">آدرس ایمیل
                                                            <span class="required">*</span></label>
                                                        <input type="email" name="email" id="email" class="form__input">
                                                    </div>
                                                </div>
                                            </div>
                                            <fieldset class="form__fieldset mb--20">
                                                <legend class="form__legend">تعویض رمز عبور </legend>
                                                <div class="row mb--20">
                                                    <div class="col-12">
                                                        <div class="form__group">
                                                            <label class="form__label form__label--2"
                                                                for="cur_pass">(خالی بگذارید تا بدون تغییر باقی بماند
                                                                )رمز عبور فعلی</label>
                                                            <input type="password" name="cur_pass" id="cur_pass"
                                                                class="form__input">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb--20">
                                                    <div class="col-12">
                                                        <div class="form__group">
                                                            <label class="form__label form__label--2"
                                                                for="new_pass">(خالی بگذارید تا بدون تغییر باقی بماند
                                                                )رمز عبور جدید</label>
                                                            <input type="password" name="new_pass" id="new_pass"
                                                                class="form__input">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form__group">
                                                            <label class="form__label form__label--2"
                                                                for="conf_new_pass">تکرار رمز عبور جدید</label>
                                                            <input type="password" name="conf_new_pass"
                                                                id="conf_new_pass" class="form__input">
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form__group">
                                                        <input type="submit" value="ذخیره کردن تغییرات"
                                                            class="btn btn-style-1 btn-submit">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
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
                                    <li><a href="./contact-us.html">درباره ماهلین</a></li>
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
                <p>Start typing and press Enter to search</p>
                <form class="searchform">
                    <input type="text" name="popup-search" id="popup-search" class="searchform__input"
                        placeholder="Search Entire Store...">
                    <button type="submit" class="searchform__submit"><i
                            class="flaticon flaticon-magnifying-glass-icon"></i></button>
                </form>
            </div>
        </div>
        <!-- Searchform Popup End -->

        <!-- Mini Cart Start -->
        <aside class="mini-cart" id="miniCart">
            <div class="mini-cart-wrapper">
                <a href="" class="btn-close"><i class="flaticon flaticon-cross"></i></a>
                <div class="mini-cart-inner">
                    <h3 class="mini-cart__heading mb--40 mb-lg--30">Shopping Cart</h3>
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
                                    <a class="mini-cart__product__title" href="product-details.html">Chain print bermuda
                                        shorts </a>
                                    <span class="mini-cart__product__quantity">1 x $49.00</span>
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
                                    <a class="mini-cart__product__title" href="product-details.html">Waxed-effect
                                        pleated skirt</a>
                                    <span class="mini-cart__product__quantity">1 x $49.00</span>
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
                                    <a class="mini-cart__product__title" href="product-details.html">Waxed-effect
                                        pleated skirt</a>
                                    <span class="mini-cart__product__quantity">1 x $49.00</span>
                                </div>
                            </li>
                        </ul>
                        <div class="mini-cart__total">
                            <span>Subtotal</span>
                            <span class="ammount">$98.00</span>
                        </div>
                        <div class="mini-cart__buttons">
                            <a href="cart.html" class="btn btn-fullwidth btn-bg-sand mb--20">View Cart</a>
                            <a href="checkout.html" class="btn btn-fullwidth btn-bg-sand">Checkout</a>
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
                                <div class="zakas-element-carousel nav-vertical-center" data-slick-options='{
                            "slidesToShow": 1,
                            "slidesToScroll": 1,
                            "arrows": true,
                            "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-double-left" },
                            "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-double-right" }
                        }'>
                                    <div class="product-image">
                                        <div class="product-image--holder">
                                            <a href="product-details.html">
                                                <img src="assets/img/products/prod-9-1.jpg" alt="Product Image"
                                                    class="primary-image">
                                            </a>
                                        </div>
                                        <span class="product-badge sale">sale</span>
                                    </div>
                                    <div class="product-image">
                                        <div class="product-image--holder">
                                            <a href="product-details.html">
                                                <img src="assets/img/products/prod-9-1.jpg" alt="Product Image"
                                                    class="primary-image">
                                            </a>
                                        </div>
                                        <span class="product-badge sale">sale</span>
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
                                            <span>Rated <strong class="rating">5.00</strong> out of 5</span>
                                        </div>
                                    </div>
                                    <h3 class="product-title mb--20">Black Blazer</h3>
                                    <p class="product-short-description mb--25">Donec accumsan auctor iaculis. Sed
                                        suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices
                                        justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra, in vehicula
                                        lacus scelerisque. Vestibulum ut sem laoreet, feugiat tellus at, hendrerit arcu.
                                    </p>
                                    <div class="product-price-wrapper mb--25">
                                        <span class="money">$200.00</span>
                                        <span class="price-separator">-</span>
                                        <span class="money">$400.00</span>
                                    </div>
                                    <form action="#" class="variation-form mb--30">
                                        <div class="product-color-variations d-flex align-items-center mb--20">
                                            <p class="variation-label">Color:</p>
                                            <div class="product-color-variation variation-wrapper">
                                                <div class="variation">
                                                    <a class="product-color-variation-btn red selected"
                                                        data-toggle="tooltip" data-placement="top" title="Red">
                                                        <span class="product-color-variation-label">Red</span>
                                                    </a>
                                                </div>
                                                <div class="variation">
                                                    <a class="product-color-variation-btn black" data-toggle="tooltip"
                                                        data-placement="top" title="Black">
                                                        <span class="product-color-variation-label">Black</span>
                                                    </a>
                                                </div>
                                                <div class="variation">
                                                    <a class="product-color-variation-btn pink" data-toggle="tooltip"
                                                        data-placement="top" title="Pink">
                                                        <span class="product-color-variation-label">Pink</span>
                                                    </a>
                                                </div>
                                                <div class="variation">
                                                    <a class="product-color-variation-btn blue" data-toggle="tooltip"
                                                        data-placement="top" title="Blue">
                                                        <span class="product-color-variation-label">Blue</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-size-variations d-flex align-items-center mb--15">
                                            <p class="variation-label">Size:</p>
                                            <div class="product-size-variation variation-wrapper">
                                                <div class="variation">
                                                    <a class="product-size-variation-btn selected" data-toggle="tooltip"
                                                        data-placement="top" title="S">
                                                        <span class="product-size-variation-label">S</span>
                                                    </a>
                                                </div>
                                                <div class="variation">
                                                    <a class="product-size-variation-btn" data-toggle="tooltip"
                                                        data-placement="top" title="M">
                                                        <span class="product-size-variation-label">M</span>
                                                    </a>
                                                </div>
                                                <div class="variation">
                                                    <a class="product-size-variation-btn" data-toggle="tooltip"
                                                        data-placement="top" title="L">
                                                        <span class="product-size-variation-label">L</span>
                                                    </a>
                                                </div>
                                                <div class="variation">
                                                    <a class="product-size-variation-btn" data-toggle="tooltip"
                                                        data-placement="top" title="XL">
                                                        <span class="product-size-variation-label">XL</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="" class="reset_variations">Clear</a>
                                    </form>
                                    <div
                                        class="product-action d-flex flex-sm-row flex-column align-items-sm-center align-items-start mb--30">
                                        <div
                                            class="quantity-wrapper d-flex align-items-center mr--30 mr-xs--0 mb-xs--30">
                                            <label class="quantity-label" for="quick-qty">Quantity:</label>
                                            <div class="quantity">
                                                <input type="number" class="quantity-input" name="qty" id="quick-qty"
                                                    value="1" min="1">
                                            </div>
                                        </div>
                                        <button type="button"
                                            class="btn btn-small btn-bg-red btn-color-white btn-hover-2"
                                            onclick="window.location.href='cart.html'">
                                            Add To Cart
                                        </button>
                                    </div>
                                    <div class="product-footer-meta">
                                        <p><span>Category:</span>
                                            <a href="shop.html">Full Sweater</a>,
                                            <a href="shop.html">SweatShirt</a>,
                                            <a href="shop.html">Jacket</a>,
                                            <a href="shop.html">Blazer</a>
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
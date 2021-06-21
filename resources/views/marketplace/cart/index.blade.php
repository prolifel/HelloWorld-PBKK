<!DOCTYPE html>
<html>

<head>
  <!-- Site made with Mobirise Website Builder v5.3.0, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.3.0, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="{{ asset('assets/images/logo-bumdes-96x85.jpg') }}" type="image/x-icon">
  <meta name="description" content="">

  <title>BUMDes Mina Harapan - Marketplace Cart</title>
  <link rel="stylesheet" href="{{ asset('assets/tether/tether.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap-grid.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap-reboot.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/animatecss/animate.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/dropdown/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/socicon/css/styles.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/theme/css/style.css') }}">
  <link rel="preload" as="style" href="{{ asset('assets/mobirise/css/mbr-additional.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/mobirise/css/mbr-additional.css') }}" type="text/css">

  <link rel="stylesheet" href="{{ asset('ecommerce/vendors/linericon/style.css') }}">
</head>

<style>
  /* Cart Area css============================================================================================ */
  .cart_area {
    padding-top: 100px;
    padding-bottom: 100px;
  }

  .cart_inner .table thead tr th {
    border-top: 0px;
    font-size: 14px;
    font-weight: 500;
    font-family: "Roboto", sans-serif;
    color: #777777;
    border-bottom: 0px !important;
  }

  .cart_inner .table tbody tr td {
    padding-top: 30px;
    padding-bottom: 30px;
    vertical-align: middle;
    align-self: center;
  }

  .cart_inner .table tbody tr td .media .d-flex {
    padding-right: 30px;
  }

  .cart_inner .table tbody tr td .media .d-flex img {
    border: 1px solid #eeeeee;
    border-radius: 3px;
  }

  .cart_inner .table tbody tr td .media .media-body {
    vertical-align: middle;
    align-self: center;
  }

  .cart_inner .table tbody tr td .media .media-body p {
    margin-bottom: 0px;
  }

  .cart_inner .table tbody tr td h5 {
    font-size: 14px;
    color: #222222;
    font-family: "Roboto", sans-serif;
    margin-bottom: 0px;
  }

  .cart_inner .table tbody tr td .product_count {
    margin-bottom: 0px;
  }

  .cart_inner .table tbody tr td .product_count input {
    width: 100px;
    padding-left: 30px;
    height: 40px;
    outline: none;
    box-shadow: none;
  }

  .cart_inner .table tbody tr td .product_count .increase {
    top: -2px;
  }

  .cart_inner .table tbody tr td .product_count .increase:before {
    content: "";
    height: 40px;
    width: 1px;
    position: absolute;
    left: -3px;
    top: 0px;
    background: #eeeeee;
  }

  .cart_inner .table tbody tr td .product_count .increase:after {
    content: "";
    height: 1px;
    width: 30px;
    position: absolute;
    left: -3px;
    top: 22px;
    background: #eeeeee;
  }

  .cart_inner .table tbody tr td .product_count .reduced {
    bottom: -6px;
  }

  .cart_inner .table tbody tr.bottom_button .gray_btn {
    line-height: 38px;
    background: #f9f9ff;
    border: 1px solid #eeeeee;
    border-radius: 3px;
    padding: 0px 40px;
    display: inline-block;
    color: #222222;
    text-transform: uppercase;
    font-weight: 500;
  }

  .cart_inner .table tbody tr.bottom_button td:last-child {
    width: 60px;
  }

  .cart_inner .table tbody tr.bottom_button td .cupon_text {
    margin-left: -446px;
  }

  .cart_inner .table tbody tr.bottom_button td .cupon_text input {
    width: 200px;
    padding: 0px 15px;
    border-radius: 3px;
    border: 1px solid #eeeeee;
    height: 40px;
    font-size: 14px;
    color: #cccccc;
    font-family: "Roboto", sans-serif;
    font-weight: normal;
    margin-right: -3px;
    outline: none;
    box-shadow: none;
  }

  .cart_inner .table tbody tr.bottom_button td .cupon_text input.placeholder {
    font-size: 14px;
    color: #cccccc;
    font-family: "Roboto", sans-serif;
    font-weight: normal;
  }

  .cart_inner .table tbody tr.bottom_button td .cupon_text input:-moz-placeholder {
    font-size: 14px;
    color: #cccccc;
    font-family: "Roboto", sans-serif;
    font-weight: normal;
  }

  .cart_inner .table tbody tr.bottom_button td .cupon_text input::-moz-placeholder {
    font-size: 14px;
    color: #cccccc;
    font-family: "Roboto", sans-serif;
    font-weight: normal;
  }

  .cart_inner .table tbody tr.bottom_button td .cupon_text input::-webkit-input-placeholder {
    font-size: 14px;
    color: #cccccc;
    font-family: "Roboto", sans-serif;
    font-weight: normal;
  }

  .cart_inner .table tbody tr.bottom_button td .cupon_text .main_btn {
    height: 40px;
    line-height: 38px;
    text-transform: uppercase;
    padding: 0px 38px;
    margin-right: -3px;
  }

  .cart_inner .table tbody tr.bottom_button td .cupon_text .gray_btn {
    padding: 0px 40px;
  }

  .cart_inner .table tbody tr.shipping_area td:nth-child(3) {
    vertical-align: top;
  }

  .cart_inner .table tbody tr.shipping_area .shipping_box {
    margin-left: -250px;
    text-align: right;
  }

  .cart_inner .table tbody tr.shipping_area .shipping_box .list li {
    margin-bottom: 12px;
  }

  .cart_inner .table tbody tr.shipping_area .shipping_box .list li:last-child {
    margin-bottom: 0px;
  }

  .cart_inner .table tbody tr.shipping_area .shipping_box .list li a {
    padding-right: 30px;
    font-size: 14px;
    color: #777777;
    position: relative;
  }

  .cart_inner .table tbody tr.shipping_area .shipping_box .list li a:before {
    content: "";
    height: 16px;
    width: 16px;
    border: 1px solid #cdcdcd;
    display: inline-block;
    border-radius: 50%;
    position: absolute;
    right: 0px;
    top: 50%;
    transform: translateY(-50%);
  }

  .cart_inner .table tbody tr.shipping_area .shipping_box .list li a:after {
    content: "";
    height: 10px;
    width: 10px;
    border-radius: 50%;
    background: #1641ff;
    display: inline-block;
    position: absolute;
    right: 3px;
    top: 50%;
    transform: translateY(-50%);
    opacity: 0;
  }

  .cart_inner .table tbody tr.shipping_area .shipping_box .list li.active a:after {
    opacity: 1;
  }

  .cart_inner .table tbody tr.shipping_area .shipping_box h6 {
    font-size: 14px;
    font-weight: normal;
    color: #222222;
    font-family: "Roboto", sans-serif;
    margin-top: 20px;
    margin-bottom: 20px;
  }

  .cart_inner .table tbody tr.shipping_area .shipping_box h6 i {
    color: #777777;
    padding-left: 5px;
  }

  .cart_inner .table tbody tr.shipping_area .shipping_box .shipping_select {
    display: block;
    width: 100%;
    background: #f9f9ff;
    border: 1px solid #eeeeee;
    height: 40px;
    margin-bottom: 20px;
  }

  .cart_inner .table tbody tr.shipping_area .shipping_box .shipping_select .list {
    width: 100%;
    border-radius: 0px;
  }

  .cart_inner .table tbody tr.shipping_area .shipping_box .shipping_select .list li {
    font-size: 14px;
    font-weight: normal;
    color: #777777;
  }

  .cart_inner .table tbody tr.shipping_area .shipping_box input {
    height: 40px;
    outline: none;
    border: 1px solid #eeeeee;
    background: #f9f9ff;
    width: 100%;
    padding: 0px 15px;
    margin-bottom: 20px;
  }

  .cart_inner .table tbody tr.out_button_area .checkout_btn_inner {
    margin-left: -388px;
  }

  .cart_inner .table tbody tr.out_button_area .checkout_btn_inner .main_btn {
    height: 40px;
    padding: 0px 30px;
    line-height: 38px;
    text-transform: uppercase;
  }

  .gray_btn {
    line-height: 38px;
    background: #f9f9ff;
    border: 1px solid #eeeeee;
    border-radius: 3px;
    padding: 0px 25px;
    display: inline-block;
    color: #222222;
    text-transform: uppercase;
    font-weight: 500;
  }

  /* End Cart Area css============================================================================================ */

  /* Main Button Area css ============================================================================================ */
  .main_btn {
    display: inline-block;
    background: #1641ff;
    padding: 0px 30px;
    color: #fff;
    font-family: "Roboto", sans-serif;
    font-size: 14px;
    font-weight: 500;
    line-height: 48px;
    border: 1px solid #1641ff;
    border-radius: 0px;
    outline: none !important;
    box-shadow: none !important;
    text-align: center;
    border: 1px solid #1641ff;
    cursor: pointer;
    transition: all 300ms linear 0s;
    border-radius: 5px;
  }

  .main_btn:hover {
    background: transparent;
    color: #1641ff;
  }

  .main_btn2 {
    display: inline-block;
    background: #1641ff;
    padding: 0px 32px;
    color: #fff;
    font-family: "Roboto", sans-serif;
    font-size: 13px;
    font-weight: 500;
    line-height: 38px;
    border-radius: 0px;
    outline: none !important;
    box-shadow: none !important;
    text-align: center;
    border: 1px solid #1641ff;
    cursor: pointer;
    transition: all 300ms linear 0s;
  }

  .main_btn2:hover {
    background: transparent;
    color: #1641ff;
  }

  .submit_btn {
    display: inline-block;
    background: #1641ff;
    padding: 0px 30px;
    color: #fff;
    font-family: "Roboto", sans-serif;
    font-size: 14px;
    font-weight: 500;
    line-height: 38px;
    border: 1px solid #1641ff;
    border-radius: 0px;
    outline: none !important;
    box-shadow: none !important;
    text-align: center;
    border: 1px solid #1641ff;
    cursor: pointer;
    transition: all 300ms linear 0s;
  }

  .submit_btn:hover {
    background: transparent;
    color: #1641ff;
  }

  .white_bg_btn {
    display: inline-block;
    background: #f9f9ff;
    padding: 0px 35px;
    color: #222222;
    font-family: "Roboto", sans-serif;
    font-size: 13px;
    font-weight: 500;
    line-height: 34px;
    border-radius: 0px;
    outline: none !important;
    box-shadow: none !important;
    text-align: center;
    border: 1px solid #eeeeee;
    cursor: pointer;
    transition: all 300ms linear 0s;
  }

  .white_bg_btn:hover {
    background: #1641ff;
    color: #fff;
    border-color: #1641ff;
  }

  .org_btn {
    padding: 0px 40px;
    background-image: linear-gradient(to right, #f766a5 0%, #f78762 51%, #f766a5 100%);
    background-size: 200% auto;
    z-index: 2;
    display: inline-block;
    transition: all 400ms ease-out;
    text-align: center;
    color: #fff;
    font-size: 14px;
    font-weight: 600;
    text-transform: uppercase;
    font-family: "Poppins", sans-serif;
    line-height: 50px;
    border-radius: 5px;
  }

  .org_btn:hover {
    background-position: right center;
    color: #fff;
  }

  .green_btn {
    padding: 0px 40px;
    background-image: linear-gradient(to right, #73ca96 0%, #98d370 51%, #73ca96 100%);
    background-size: 200% auto;
    z-index: 2;
    display: inline-block;
    transition: all 400ms ease-out;
    text-align: center;
    color: #fff;
    font-size: 14px;
    font-weight: 600;
    text-transform: uppercase;
    font-family: "Poppins", sans-serif;
    line-height: 50px;
    border-radius: 5px;
  }

  .green_btn:hover {
    background-position: right center;
    color: #fff;
  }

  /* End Main Button Area css ============================================================================================ */
</style>

<body>
  <section class="menu menu3 cid-svRmpEMRJR" once="menu" id="menu3-17">
    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
      <div class="container">
        <div class="navbar-brand">
          <span class="navbar-logo">
            <a href="{{ route('homepage') }}">
              <img src="{{ asset('assets/images/logo-bumdes-96x85.jpg') }}" alt="icon-bumdes" style="height: 3rem;">
            </a>
          </span>
          <span class="navbar-caption-wrap"><a class="navbar-caption text-black text-primary display-4" href="{{ route('homepage') }}">BUMDes Mina Harapan</a></span>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </div>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
            <li class="nav-item"><a class="nav-link link text-black display-4" href="{{ route('marketplace.index') }}">Marketplace</a>
            </li>
            <li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="{{ route('marketplace.product') }}">
                Produk</a></li>
            <li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="{{ route('marketplace.list_cart') }}">
                Keranjang</a></li>
          </ul>
          <div class="icons-menu">
            <a class="iconfont-wrapper" href="https://www.facebook.com/Bumdes-Mina-Harapan-Bendiljati-Wetan-122486079540515/" target="_blank">
              <span class="p-2 mbr-iconfont socicon-facebook socicon" style="color: rgb(0, 0, 0); fill: rgb(0, 0, 0);"></span>
            </a>
            <a class="iconfont-wrapper" href="https://api.whatsapp.com/send?phone=6285155337278" target="_blank">
              <span class="p-2 mbr-iconfont socicon-whatsapp socicon"></span>
            </a>
            <a class="iconfont-wrapper" href="https://www.instagram.com/bumdesminaharapan/" target="_blank">
              <span class="p-2 mbr-iconfont socicon-instagram socicon"></span>
            </a>

          </div>

        </div>
      </div>
    </nav>
  </section>

  <!--================ Banner =================-->
  <section class="header12 cid-szDj6naKi8 mbr-parallax-background" id="header12-3b">
    <div class="mbr-overlay" style="opacity: 0.2; background-color: rgb(53, 53, 53);">
    </div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="card col-12 col-md-12 col-lg-9">
          <div class="card-wrapper">
            <div class="card-box align-center">
              <h1 class="card-title mbr-fonts-style mb-3 display-5">
                <strong>Keranjang Belanjamu</strong>
              </h1>
              @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
              @endif

              @if (session('error'))
                  <div class="alert alert-danger">{{ session('error') }}</div>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================ End of Banner =================-->

  <!--================Cart Area =================-->
  <section class="cart_area">
    <div class="container">
      <div class="cart_inner">
        <form action="{{ route('marketplace.update_cart') }}" method="post">
          @csrf
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Product</th>
                  <th scope="col">Price</th>
                  <th scope="col">Quantity</th>
                  <th scope="col">Total</th>
                </tr>
              </thead>
              <tbody>
                @forelse ($carts as $row)
                <tr>
                  <td style="width: 40%">
                    <div class="media">
                      <div class="d-flex">
                        <img src="{{ $row['product_image'] }}" style="width: 30%; margin-right: 1rem" alt="{{ $row['product_name'] }}">
                        <div class="media-body">
                          <p>{{ $row['product_name'] }}</p>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td style="width: 20%">
                    <h5>Rp {{ number_format($row['product_price']) }}</h5>
                  </td>
                  <td style="width: 20%">
                    <div class="product_count">
                      <input type="text" name="qty[]" id="sst{{ $row['product_id'] }}" maxlength="12" value="{{ $row['qty'] }}" title="Quantity:" class="input-text qty">
                      <input type="hidden" name="product_id[]" value="{{ $row['product_id'] }}" class="form-control">
                      <button onclick="var result = document.getElementById('sst{{ $row['product_id'] }}'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;" class="increase items-count" type="button">
                        <i class="lnr lnr-chevron-up"></i>
                      </button>
                      <button onclick="var result = document.getElementById('sst{{ $row['product_id'] }}'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;" class="reduced items-count" type="button">
                        <i class="lnr lnr-chevron-down"></i>
                      </button>
                    </div>
                  </td>
                  <td style="width: 20%">
                    <h5>Rp {{ number_format($row['product_price'] * $row['qty']) }}</h5>
                  </td>
                </tr>
                @empty
                <tr>
                  <td colspan="4">Tidak ada belanjaan</td>
                </tr>
                @endforelse
                <tr class="bottom_button">
                  <td>
                    <button class="gray_btn">Perbarui Keranjang</button>
                  </td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
        </form>
        <tr>
          <td>

          </td>
          <td>

          </td>
          <td>
            <h5>Subtotal</h5>
          </td>
          <td>
            <h5>Rp {{ number_format($subtotal) }}</h5>
          </td>
        </tr>
        <tr class="out_button_area">
          <td></td>
          <td></td>
          <td></td>
          <td>
            <div class="checkout_btn_inner">
              <a class="gray_btn" href="{{ route('marketplace.product') }}">Tambah Produk</a>
              <a class="main_btn" href="{{ route('marketplace.checkout') }}">Lanjut ke Pembayaran</a>
            </div>
          </td>
        </tr>
        </tbody>
        </table>
      </div>
    </div>
    </div>
  </section>
  <!--================End Cart Area =================-->

  <!--================ Footer =================-->
  <section class="footer6 cid-sveapxsNQX" once="footers" id="footer6-3a">
    <div class="container">
      <div class="row content mbr-white">
        <div class="col-12 col-md-3 mbr-fonts-style display-7">
          <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7">
            <strong>Alamat</strong>
          </h5>
          <p class="mbr-text mbr-fonts-style display-7">Desa Bendil Jati Wetan, Kecamatan Sumbergempol, Kabupaten Tulungagung</p> <br>
          <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 mt-4 display-7">
            <strong>Kontak</strong>
          </h5>
          <p class="mbr-text mbr-fonts-style mb-4 display-7">Facebook : Bumdes Mina Harapan Bendiljati Wetan<br>Instagram : bundesminaharapan<br>Whatsapp : 085155337278</p>
        </div>
        <div class="col-12 col-md-3 mbr-fonts-style display-7">
          <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7"></h5>
          <ul class="list mbr-fonts-style mb-4 display-4">
            <li class="mbr-text item-wrap"><br></li>
          </ul>
          <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 mt-5 display-7"></h5>
          <p class="mbr-text mbr-fonts-style mb-4 display-7"></p>
        </div>
        <div class="col-12 col-md-6">
          <div class="google-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCNveGQ9bfpKFwWzQLLftrR9hNiHwdqQG8&amp;q=Balai Desa Bendil Jati Wetan" allowfullscreen=""></iframe></div>
        </div>
        <div class="col-md-6">

        </div>
      </div>
      <div class="footer-lower">
        <div class="media-container-row">
          <div class="col-sm-12">
            <hr>
          </div>
        </div>
        <div class="col-sm-12 copyright pl-0">
          <p class="mbr-text mbr-fonts-style mbr-white display-7">
            © Copyright 2021 Clement &amp; Angga - All Rights Reserved
          </p>
        </div>
      </div>
    </div>
  </section>
  <!--================ End of Footer =================-->

  <section style="background-color: #fff; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Helvetica Neue', Arial, sans-serif; color:#aaa; font-size:12px; padding: 0; align-items: center; display: flex;"><a href="https://mobirise.site/k" style="flex: 1 1; height: 3rem; padding-left: 1rem;"></a>
    <p style="flex: 0 0 auto; margin:0; padding-right:1rem;">Make your own <a href="https://mobirise.site/y" style="color:#aaa;">website</a> with Mobirise</p>
  </section>
  <script src="{{ asset('assets/web/assets/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/popper/popper.min.js') }}"></script>
  <script src="{{ asset('assets/tether/tether.min.js') }}"></script>
  <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/smoothscroll/smooth-scroll.js') }}"></script>
  <script src="{{ asset('assets/viewportchecker/jquery.viewportchecker.js') }}"></script>
  <script src="{{ asset('assets/dropdown/js/nav-dropdown.js') }}"></script>
  <script src="{{ asset('assets/dropdown/js/navbar-dropdown.js') }}"></script>
  <script src="{{ asset('assets/touchswipe/jquery.touch-swipe.min.js') }}"></script>
  <script src="{{ asset('assets/parallax/jarallax.min.js') }}"></script>
  <script src="{{ asset('assets/theme/js/script.js') }}"></script>

  <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
  <input name="animation" type="hidden">
</body>

</html>

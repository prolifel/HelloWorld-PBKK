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

  <title>BUMDes Mina Harapan - Marketplace Produk</title>
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

  <style>
    .product_image_area {
      padding-top: 120px;
    }

    .product_image_area {
      padding-top: 120px;
    }

    .s_product_img .carousel {
      position: relative;
    }

    .s_product_img .carousel .carousel-indicators {
      margin: 0px;
      right: 20px;
      width: auto;
      left: auto;
      bottom: 30px;
    }

    .s_product_img .carousel .carousel-indicators li {
      height: 60px;
      width: 60px;
      background: transparent;
      text-indent: 0;
      margin-right: 10px;
      position: relative;
    }

    .s_product_img .carousel .carousel-indicators li:after {
      display: none;
    }

    .s_product_img .carousel .carousel-indicators li:before {
      content: "";
      background: rgba(197, 50, 45, 0.8);
      position: absolute;
      left: 0px;
      top: 0px;
      width: 100%;
      height: 100%;
      opacity: 0;
    }

    .s_product_img .carousel .carousel-indicators li.active:before {
      opacity: 1;
    }

    .s_product_text {
      margin-left: -15px;
      margin-top: 65px;
    }

    .s_product_text h3 {
      font-size: 24px;
      font-weight: 500;
      color: #222222;
      margin-bottom: 10px;
    }

    .s_product_text h2 {
      font-size: 24px;
      font-weight: bold;
      color: #1641ff;
      margin-bottom: 15px;
    }

    .s_product_text .list li {
      margin-bottom: 5px;
    }

    .s_product_text .list li a {
      font-size: 14px;
      font-family: "Roboto", sans-serif;
      font-weight: normal;
      color: #555555;
    }

    .s_product_text .list li a span {
      width: 90px;
      display: inline-block;
    }

    .s_product_text .list li a span:hover {
      color: #555;
    }

    .s_product_text .list li a.active {
      color: #1641ff;
    }

    .s_product_text .list li a.active span {
      color: #555;
    }

    .s_product_text .list li:last-child {
      margin-bottom: 0px;
    }

    .s_product_text p {
      padding-top: 20px;
      border-top: 1px dotted #d5d5d5;
      margin-top: 20px;
      margin-bottom: 70px;
    }

    .s_product_text .card_area .main_btn {
      line-height: 38px;
      padding: 0px 38px;
      text-transform: uppercase;
      margin-right: 10px;
    }

    .s_product_text .card_area .icon_btn {
      margin-right: 10px;
      background: #f9f9ff;
      border-radius: 3px;
      color: #222222;
      display: inline-block;
      line-height: 40px;
      text-align: center;
      padding: 0px 13px;
      font-size: 14px;
    }

    .s_product_text .card_area .icon_btn:hover {
      background: #fff;
      box-shadow: -14.142px 14.142px 20px 0px rgba(0, 0, 0, 0.1);
    }

    .product_count {
      display: inline-block;
      position: relative;
      margin-bottom: 24px;
    }

    .product_count label {
      font-size: 14px;
      color: #777777;
      font-family: "Roboto", sans-serif;
      font-weight: normal;
      padding-right: 10px;
    }

    .product_count input {
      width: 76px;
      border: 1px solid #eeeeee;
      border-radius: 3px;
      padding-left: 10px;
    }

    .product_count button {
      display: block;
      border: none;
      background: transparent;
      box-shadow: none;
      cursor: pointer;
      position: absolute;
      right: 0px;
      font-size: 14px;
      color: #000000;
      transition: all 300ms linear 0s;
    }

    .product_count button:hover {
      color: #222222;
    }

    .product_count .increase {
      top: -4px;
    }

    .product_count .reduced {
      bottom: -1px;
    }

    .product_description_area {
      padding-bottom: 120px;
      margin-top: 60px;
    }

    .product_description_area .nav.nav-tabs {
      background: #f9f9ff;
      text-align: center;
      display: block;
      border: none;
      padding: 10px 0px;
    }

    .product_description_area .nav.nav-tabs li {
      display: inline-block;
      margin-right: 7px;
    }

    .product_description_area .nav.nav-tabs li:last-child {
      margin-right: 0px;
    }

    .product_description_area .nav.nav-tabs li a {
      padding: 0px;
      border: none;
      line-height: 38px;
      background: #fff;
      border: 1px solid #eeeeee;
      border-radius: 0px;
      padding: 0px 30px;
      color: #222222;
      font-size: 13px;
      font-weight: normal;
    }

    .product_description_area .nav.nav-tabs li a.active {
      background: #1641ff;
      color: #fff;
      border-color: #1641ff;
    }

    .product_description_area .tab-content {
      border-left: 1px solid #eee;
      border-right: 1px solid #eee;
      border-bottom: 1px solid #eee;
      padding: 30px;
    }

    .product_description_area .tab-content .total_rate .box_total {
      background: #f9f9ff;
      text-align: center;
      padding-top: 20px;
      padding-bottom: 20px;
    }

    .product_description_area .tab-content .total_rate .box_total h4 {
      color: #1641ff;
      font-size: 48px;
      font-weight: bold;
    }

    .product_description_area .tab-content .total_rate .box_total h5 {
      color: #222222;
      margin-bottom: 0px;
      font-size: 24px;
    }

    .product_description_area .tab-content .total_rate .box_total h6 {
      color: #222222;
      margin-bottom: 0px;
      font-size: 14px;
      color: #777777;
      font-weight: normal;
    }

    .product_description_area .tab-content .total_rate .rating_list {
      margin-bottom: 30px;
    }

    .product_description_area .tab-content .total_rate .rating_list h3 {
      font-size: 18px;
      color: #222222;
      font-family: "Roboto", sans-serif;
      font-weight: 500;
      margin-bottom: 10px;
    }

    .product_description_area .tab-content .total_rate .rating_list .list li a {
      font-size: 14px;
      color: #777777;
    }

    .product_description_area .tab-content .total_rate .rating_list .list li a i {
      color: #fbd600;
    }

    .product_description_area .tab-content .total_rate .rating_list .list li:nth-child a i:last-child {
      color: #eeeeee;
    }

    .product_description_area .tab-content .table {
      margin-bottom: 0px;
    }

    .product_description_area .tab-content .table tbody tr td {
      padding-left: 65px;
      padding-right: 65px;
      padding-top: 14px;
      padding-bottom: 14px;
    }

    .product_description_area .tab-content .table tbody tr td h5 {
      font-size: 14px;
      font-family: "Roboto", sans-serif;
      font-weight: normal;
      color: #777777;
      margin-bottom: 0px;
      white-space: nowrap;
    }

    .product_description_area .tab-content .table tbody tr:first-child td {
      border-top: 0px;
    }

    .review_item {
      margin-bottom: 15px;
    }

    .review_item:last-child {
      margin-bottom: 0px;
    }

    .review_item .media {
      position: relative;
    }

    .review_item .media .d-flex {
      padding-right: 15px;
    }

    .review_item .media .media-body {
      vertical-align: middle;
      align-self: center;
    }

    .review_item .media .media-body h4 {
      margin-bottom: 0px;
      font-size: 14px;
      color: #222222;
      font-family: "Roboto", sans-serif;
      margin-bottom: 8px;
    }

    .review_item .media .media-body i {
      color: #fbd600;
    }

    .review_item .media .media-body h5 {
      font-size: 13px;
      font-weight: normal;
      color: #777777;
    }

    .review_item .media .media-body .reply_btn {
      border: 1px solid #e0e0e0;
      padding: 0px 28px;
      display: inline-block;
      line-height: 32px;
      border-radius: 16px;
      font-size: 14px;
      font-family: "Roboto", sans-serif;
      color: #222222;
      position: absolute;
      right: 0px;
      top: 14px;
    }

    .review_item .media .media-body .reply_btn:hover {
      background: #1641ff;
      border-color: #1641ff;
      color: #fff;
    }

    .review_item p {
      padding-top: 10px;
      margin-bottom: 0px;
    }

    .review_item.reply {
      padding-left: 28px;
    }

    .review_box h4 {
      font-size: 24px;
      color: #222222;
      margin-bottom: 20px;
    }

    .review_box p {
      margin-bottom: 0px;
      display: inline-block;
    }

    .review_box .list {
      display: inline-block;
      padding-left: 10px;
      padding-right: 10px;
    }

    .review_box .list li {
      display: inline-block;
    }

    .review_box .list li a {
      display: inline-block;
      color: #fbd600;
    }

    .review_box .contact_form {
      margin-top: 15px;
    }
  </style>
</head>

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

  <section class="header6 cid-szDk2Urgp3" id="header6-3c">
    <div class="mbr-overlay" style="opacity: 0.2; background-color: rgb(68, 121, 217);"></div>
    <div class="align-center container">
      <div class="row justify-content-center">
        <div class="col-12 col-lg-10">
          <h1 class="mbr-section-title mbr-fonts-style mbr-white mb-3 display-1"><strong>{{ $product->name }}</strong></h1>
        </div>
    </div>
    </div>
  </section>

  <!--================Single Product Area =================-->
  <div class="product_image_area">
    <div class="container">
      <div class="row s_product_inner">
        <div class="col-lg-6">
          <div class="s_product_img">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="{{ $product->image }}" alt="{{ $product->name }}">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 offset-lg-1">
          <div class="s_product_text">
            <h3>{{ $product->name }}</h3>
            <h2>Rp {{ number_format($product->price) }}</h2>
            <ul class="list">
              <li>
                <p>
                  <span>Kategori</span> : {{ $product->category->name }}</p>
              </li>
            </ul>
            <form action="{{ route('marketplace.cart') }}" method="POST">
              @csrf
              <div class="product_count">
                <label for="qty">Jumlah:</label>
                <input type="text" name="qty" id="sst" maxlength="12" value="1" title="Quantity:" class="input-text qty">
                <input type="hidden" name="product_id" value="{{ $product->id }}" class="form-control">
                <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;" class="increase items-count" type="button">
                  <i class="lnr lnr-chevron-up"></i>
                </button>
                <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;" class="reduced items-count" type="button">
                  <i class="lnr lnr-chevron-down"></i>
                </button>
              </div>
              <div class="card_area">
                <button class="main_btn">Tambahkan ke Keranjang</button>
              </div>

              @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
              @endif

              @if (session('error'))
                  <div class="alert alert-danger">{{ session('error') }}</div>
              @endif
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--================End of Single Product Area =================-->

  <!--================Product Description Area =================-->
  <section class="product_description_area">
    <div class="container">
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active show" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Deskripsi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Detail Produk</a>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab" style="color: black">
          {!! $product->description !!}
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
          <div class="table-responsive">
            <table class="table">
              <tbody>
                <tr>
                  <td>
                    <h5>Berat</h5>
                  </td>
                  <td>
                    <h5>{{ $product->weight }} Kilogram</h5>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h5>Harga</h5>
                  </td>
                  <td>
                    <h5>Rp {{ number_format($product->price) }}</h5>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h5>Kategori</h5>
                  </td>
                  <td>
                    <h5>{{ $product->category->name }}</h5>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Product Description Area =================-->

  <!--================Footer Area =================-->
  <section class="footer6 cid-sveapxsNQX" once="footers" id="footer6-38">
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
          <div class="google-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCZI5F_k6S1k46ujh0SNrapM89f7mJxd30&amp;q=Balai Desa Bendil Jati Wetan" allowfullscreen=""></iframe></div>
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
  <!--================End of Footer Area =================-->

  <section style="background-color: #fff; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Helvetica Neue', Arial, sans-serif; color:#aaa; font-size:12px; padding: 0; align-items: center; display: flex;"><a href="https://mobirise.site/x" style="flex: 1 1; height: 3rem; padding-left: 1rem;"></a>
    <p style="flex: 0 0 auto; margin:0; padding-right:1rem;">Created with <a href="https://mobirise.site/a" style="color:#aaa;">Mobirise</a></p>
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
  <script src="{{ asset('assets/theme/js/script.js') }}"></script>

  <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
  <input name="animation" type="hidden">
</body>

</html>

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

    <title>BUMDes Mina Harapan - Marketplace Cart Checkout</title>
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
</head>

<style>
    .section_gap {
        padding: 120px 0px;
    }

    @media (max-width: 1224px) {
        .section_gap {
            padding: 60px 0px;
        }
    }

    .order_box {
        background: #f9f9f9;
        padding: 30px;
    }

    .order_box h2 {
        border-bottom: 1px solid #dddddd;
        font-size: 18px;
        font-weight: 500;
        color: #222222;
        padding-bottom: 15px;
    }

    .order_box .list li a {
        font-size: 14px;
        color: #777777;
        font-weight: normal;
        border-bottom: 1px solid #eeeeee;
        display: block;
        line-height: 42px;
    }

    .order_box .list li a span {
        float: right;
    }

    .order_box .list li a .middle {
        float: none;
        width: 50px;
        text-align: right;
        display: inline-block;
        margin-left: 30px;
        color: #222222;
    }

    .order_box .list li:nth-child(4) a .middle {
        margin-left: 48px;
    }

    .order_box .list_2 li a {
        text-transform: uppercase;
        color: #222222;
        font-weight: 500;
    }

    .order_box .list_2 li a span {
        color: #777777;
        text-transform: capitalize;
    }

    .order_box .list_2 li:last-child a span {
        color: #222222;
    }

    .order_box .payment_item h4 {
        font-size: 14px;
        text-transform: uppercase;
        color: #222222;
        font-weight: 500;
        padding-left: 22px;
        position: relative;
        margin-bottom: 15px;
        margin-top: 15px;
    }

    .order_box .payment_item h4:before {
        content: "";
        width: 14px;
        height: 14px;
        border-radius: 50%;
        border: 1px solid #cdcdcd;
        background: #fff;
        display: block;
        position: absolute;
        left: 0px;
        top: 50%;
        transform: translateY(-50%);
    }

    .order_box .payment_item h4:after {
        content: "";
        height: 4px;
        width: 4px;
        background: #fff;
        border-radius: 50%;
        display: block;
        position: absolute;
        left: 5px;
        top: 8px;
    }

    .order_box .payment_item h4 img {
        padding-left: 60px;
    }

    .order_box .payment_item p {
        background: #fff;
        padding: 20px;
    }

    .order_box .payment_item.active h4:before {
        background: #1641ff;
        border-color: #1641ff;
    }

    .order_box .creat_account {
        margin-bottom: 15px;
    }

    .order_box .creat_account label {
        padding-left: 10px;
        font-size: 12px;
        color: #222222;
    }

    .order_box .creat_account a {
        color: #1641ff;
    }

    .order_box .main_btn {
        display: block;
        line-height: 38px;
        text-transform: uppercase;
    }
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
                                <strong>Isi Data Anda Secara Detail</strong>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End of Banner =================-->

    <!--================ Checkout Area =================-->
    <section class="checkout_area section_gap">
        <div class="container">
            <div class="billing_details">
                <div class="row">
                    <div class="col-lg-8">
                        <h3>Informasi Pengiriman</h3>

                        @if (session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif

                        <form class="row contact_form" action="{{ route('marketplace.store_checkout') }}" method="post" novalidate="novalidate">
                            @csrf
                            <div class="col-md-12 form-group p_star">
                                <label for="">Nama Lengkap</label>
                                <input type="text" class="form-control" id="first" name="customer_name" required>
                                <small class="text-danger" style="color: rgb(255, 0, 0) !important;">{{ $errors->first('customer_name') }}</small>
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <label for="">No Telp</label>
                                <input type="text" class="form-control" id="number" name="customer_phone" required>
                                <small class="text-danger" style="color: rgb(255, 0, 0) !important;">{{ $errors->first('customer_phone') }}</small>
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <label for="">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                                <small class="text-danger" style="color: rgb(255, 0, 0) !important;">{{ $errors->first('email') }}</small>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <label for="">Alamat Lengkap</label>
                                <input type="text" class="form-control" id="add1" name="customer_address" required>
                                <small class="text-danger" style="color: rgb(255, 0, 0) !important;">{{ $errors->first('customer_address') }}</small>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <label for="">Propinsi</label>
                                <select class="form-control" name="province_id" id="province_id" required>
                                    <option value="">Pilih Propinsi</option>
                                    @foreach ($provinces as $row)
                                    <option value="{{ $row->id }}">{{ $row->name }}</option>
                                    @endforeach
                                </select>
                                <small class="text-danger" style="color: rgb(255, 0, 0) !important;">{{ $errors->first('province_id') }}</small>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <label for="">Kabupaten / Kota</label>
                                <select class="form-control" name="city_id" id="city_id" required>
                                    <option value="">Pilih Kabupaten/Kota</option>
                                </select>
                                <small class="text-danger" style="color: rgb(255, 0, 0) !important;">{{ $errors->first('city_id') }}</small>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <label for="">Kecamatan</label>
                                <select class="form-control" name="district_id" id="district_id" required>
                                    <option value="">Pilih Kecamatan</option>
                                </select>
                                <small class="text-danger" style="color: rgb(255, 0, 0) !important;">{{ $errors->first('district_id') }}</small>
                            </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="order_box">
                            <h2>Ringkasan Pesanan</h2>
                            <ul class="list">
                                <li>
                                    <a href="#">Product
                                        <span>Total</span>
                                    </a>
                                </li>
                                @foreach ($carts as $cart)
                                <li>
                                    <a href="#">{{ \Str::limit($cart['product_name'], 10) }}
                                        <span class="middle">x {{ $cart['qty'] }}</span>
                                        <span class="last">Rp {{ number_format($cart['product_price']) }}</span>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                            <ul class="list list_2">
                                <li>
                                    <a href="#">Subtotal
                                        <span>Rp {{ number_format($subtotal) }}</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Ongkos Kirim
                                        <span id="ongkir">Rp 0</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Total
                                        <span id="total">Rp {{ number_format($subtotal) }}</span>
                                    </a>
                                </li>
                            </ul>
                            <button class="main_btn">Bayar Pesanan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End of Checkout Area =================-->

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

    <script>
        $('#province_id').on('change', function() {
            $.ajax({
                url: "{{ url('/api/city') }}",
                type: "GET",
                data: {
                    province_id: $(this).val()
                },
                success: function(html) {

                    $('#city_id').empty()
                    $('#city_id').append('<option value="">Pilih Kabupaten/Kota</option>')
                    $.each(html.data, function(key, item) {
                        $('#city_id').append('<option value="' + item.id + '">' + item.name + '</option>')
                    })
                }
            });
        })

        $('#city_id').on('change', function() {
            $.ajax({
                url: "{{ url('/api/district') }}",
                type: "GET",
                data: {
                    city_id: $(this).val()
                },
                success: function(html) {
                    $('#district_id').empty()
                    $('#district_id').append('<option value="">Pilih Kecamatan</option>')
                    $.each(html.data, function(key, item) {
                        $('#district_id').append('<option value="' + item.id + '">' + item.name + '</option>')
                    })
                }
            });
        })

        $('#district_id').on('change', function() {
            $('#courier').empty()
            $('#courier').append('<option value="">Loading...</option>')
            $.ajax({
                url: "{{ url('/api/cost') }}",
                type: "POST",
                data: {
                    destination: $(this).val(),
                    weight: $('#weight').val()
                },
                success: function(html) {
                    $('#courier').empty()
                    $('#courier').append('<option value="">Pilih Kurir</option>')
                    $.each(html.data.results, function(key, item) {
                        let courier = item.courier + ' - ' + item.service + ' (Rp ' + item.cost + ')'
                        let value = item.courier + '-' + item.service + '-' + item.cost
                        $('#courier').append('<option value="' + value + '">' + courier + '</option>')
                    })
                }
            });
        })
    </script>
</body>

</html>

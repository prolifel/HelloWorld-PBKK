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


    <title>BUMDes Mina Harapan - Marketplace</title>
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

    <section class="header6 cid-szDfJXiQ9K mbr-fullscreen" id="header6-36">
        <div class="mbr-overlay" style="opacity: 0.2; background-color: rgb(68, 121, 217);"></div>

        <div class="align-center container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <h1 class="mbr-section-title mbr-fonts-style mbr-white mb-3 display-1"><strong>BELI PRODUK KHAS BUMDES MINA HARAPAN</strong></h1>

                    <p class="mbr-text mbr-white mbr-fonts-style display-7">Anda dapat melihat dan membeli produk yang tersedia di Badan Usaha Milik Desa Mina Harapan.<br>Dijamin produknya fresh semua!</p>
                    <div class="mbr-section-btn mt-3"><a class="btn btn-danger display-4" href="{{ route('marketplace.product') }}">Lihat Produk</a></div>
                    @auth
                        <div class="mbr-section-btn mt-3"><a href="{{ route('marketplace.dashboard') }}" class="btn item-btn btn-primary display-7" >Dashboard &gt;</a></div>
                    @endauth
                </div>
            </div>
        </div>
    </section>

    <section class="features10 cid-swHMeHW11w" id="features11-2u">
        <!---->
        <div class="container">
            <div class="title">
                <h3 class="mbr-section-title mbr-fonts-style mb-4 display-2"><strong>Produk Terbaru</strong></h3>

            </div>
            @foreach ($products as $index)
            <div class="card">
                <div class="card-wrapper">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-3">
                            <div class="image-wrapper">
                                <img src="{{ $index->image }}" alt="img-product" title="">
                            </div>
                        </div>
                        <div class="col-12 col-md">
                            <div class="card-box">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="top-line">
                                            <h4 class="card-title mbr-fonts-style display-5" onclick="javascript:location.href='{{route('marketplace.show_product', ['slug' => $index->slug])}}'" style="cursor: pointer;">
                                                <strong>
                                                    {{$index->name}}
                                                </strong>
                                            </h4>
                                            <p class="cost mbr-fonts-style display-7">Rp {{number_format($index->price)}}</p>
                                            <p class="cost mbr-fonts-style display-7">{{number_format($index->weight)}} kg</p>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="bottom-line">
                                            <p class="mbr-text mbr-fonts-style m-0 display-7">
                                                {!!$index->description!!}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <section class="footer6 cid-sveapxsNQX" once="footers" id="footer6-2r">
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
    <section style="background-color: #fff; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Helvetica Neue', Arial, sans-serif; color:#aaa; font-size:12px; padding: 0; align-items: center; display: flex;"><a href="https://mobirise.site/c" style="flex: 1 1; height: 3rem; padding-left: 1rem;"></a>
        <p style="flex: 0 0 auto; margin:0; padding-right:1rem;">Mobirise web creator - <a href="https://mobirise.site/o" style="color:#aaa;">Try it</a></p>
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
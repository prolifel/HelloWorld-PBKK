<!DOCTYPE html>
<html>

<head>
    <!-- Site made with Mobirise Website Builder v5.3.0, https://mobirise.com -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v5.3.0, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo-bumdes-96x85.jpg') }}" type="image/x-icon">
    <meta name="description" content="BUMDes merupakan instrumen pendayagunaan ekonomi lokal dengan berbagai ragam jenis potensi. Pendayagunaan potensi ini terutama bertujuan untuk peningkatan kesejahteran ekonomi warga desa melalui pengembangan usaha ekonomi mereka. ">

    <title>BUMDes Mina Harapan - Home</title>
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
    <section class="menu menu3 cid-suV92wZhtA" once="menu" id="menu3-0">
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
                        <li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="{{ route('article.index') }}">
                                Artikel</a></li>
                        <li class="nav-item dropdown"><a class="nav-link link text-black dropdown-toggle display-4" href="#" data-toggle="dropdown-submenu" aria-expanded="false">
                                Potensi</a>
                            <div class="dropdown-menu"><a class="text-black dropdown-item text-primary display-4" href="{{ route('pariwisata') }}">Pariwisata</a><a class="text-black dropdown-item text-primary display-4" href="{{ route('perikanan') }}" aria-expanded="false">Perikanan</a><a class="text-black dropdown-item text-primary display-4" href="{{ route('pertanian') }}" aria-expanded="false">Pertanian</a></div>
                        </li>
                        <li class="nav-item"><a class="nav-link link text-black display-4" href="{{ route('marketplace.index') }}">Marketplace</a>
                        </li>
                        @auth
                            <li class="nav-item">
                                <form id="logout" method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a href="javascript:{}" onclick="document.getElementById('logout').submit()" class="nav-link link text-black display-4" type="submit">{{ __('Logout') }}</a>
                                </form>
                            </li>
                        @endauth
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

    <section class="header4 cid-suV9bw0AGm mbr-fullscreen mbr-parallax-background" id="header4-1">
        <div class="mbr-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="content-wrap">
                    <h1 class="mbr-section-title mbr-fonts-style mbr-white mb-3 display-1"><strong>Selamat</strong><br><strong>Datang!</strong></h1>
                    <p class="mbr-fonts-style mbr-text mbr-white mb-3 display-7">Membantu terwujudnya masyarakat makmur menuju Desa Bendiljati Wetan, Kabupaten Tulungagung yang mandiri.</p>
                    <div class="mbr-section-btn"><a class="btn btn-primary display-4" href="{{ route('profile') }}">Kenali Kami</a></div>
                </div>
            </div>
        </div>
    </section>

    <section class="content2 cid-sv02Jml1b1" id="content2-7">
        <div class="container">
            <div class="mbr-section-head">
                <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong>Artikel Terbaru</strong></h4>
                <h5 class="mbr-section-subtitle mbr-fonts-style align-center mb-0 mt-2 display-5">Tetap up-to-date dengan artikel terkini</h5>
            </div>
            <div class="row mt-4">
                @foreach ($articles as $article)
                    <div class="item features-image сol-12 col-md-6 col-lg-4">
                        <div class="item-wrapper">
                            <div class="item-img">
                                <img src="{{ $article->image }}" alt="card-artikel-img" title="">
                            </div>
                            <div class="item-content">
                                <h5 class="item-title mbr-fonts-style display-5"><a href="{{ route('article.show', ['id' => $article->id]) }}" class="text-success">{{ $article->title }}</a></h5>
                                @php
                                    setlocale (LC_ALL, 'IND');
                                    $dateBaru = strftime( "%A, %d %B %Y", strtotime($article->created_at));
                                @endphp
                                <h6 class="item-subtitle mbr-fonts-style mt-1 display-7"><strong>Admin</strong><em> {{ $dateBaru }}</em></h6>
                                <p class="mbr-text mbr-fonts-style mt-3 display-7">
                                    @php
                                        $first = strtok($article->content, '.');
                                        echo $first;
                                    @endphp
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2"><a href="{{ route('article.show', ['id' => $article->id]) }}" class="btn item-btn btn-primary display-7">Lanjut Baca &gt;</a></div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="features4 cid-sv02fmy28W" id="features4-2">
        <div class="container">
            <div class="mbr-section-head">
                <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                    <strong>Potensi BUMDes Mina Harapan</strong>
                </h4>
            </div>
            <div class="row mt-4">
                <div class="item features-image сol-12 col-md-6 col-lg-4">
                    <div class="item-wrapper">
                        <div class="item-img">
                            <img src="{{ asset('assets/images/pariwisata-467x281.jpg') }}" alt="card-pariwisata-img" title="">
                        </div>
                        <div class="item-content">
                            <h5 class="item-title mbr-fonts-style display-5"><strong>Pariwisata</strong></h5>
                            <p class="mbr-text mbr-fonts-style mt-3 display-7">Kami menyediakan tempat pariwisata bagi pengunjung yang ingin datang ke BUMDes Mina Harapan.</p>
                        </div>
                        <div class="mbr-section-btn item-footer mt-2"><a href="{{ route('pariwisata') }}" class="btn item-btn btn-primary display-7">Lihat &gt;</a></div>
                    </div>
                </div>
                <div class="item features-image сol-12 col-md-6 col-lg-4">
                    <div class="item-wrapper">
                        <div class="item-img">
                            <img src="{{ asset('assets/images/perikanan-471x386.jpg') }}" alt="card-perikanan-img" title="">
                        </div>
                        <div class="item-content">
                            <h5 class="item-title mbr-fonts-style display-5"><strong>Perikanan</strong></h5>

                            <p class="mbr-text mbr-fonts-style mt-3 display-7">Unit usaha yang paling kami andalkan, karena telah dikenal oleh masyarakat - dari Tulungagung, hingga pulau Bali.</p>
                        </div>
                        <div class="mbr-section-btn item-footer mt-2"><a href="{{ route('perikanan') }}" class="btn item-btn btn-primary display-7">Lihat &gt;</a></div>
                    </div>
                </div>
                <div class="item features-image сol-12 col-md-6 col-lg-4">
                    <div class="item-wrapper">
                        <div class="item-img">
                            <img src="{{ asset('assets/images/pertanian-366x314.jpg') }}" alt="card-pertanian-img" title="">
                        </div>
                        <div class="item-content">
                            <h5 class="item-title mbr-fonts-style display-5"><strong>Pertanian</strong></h5>
                            <p class="mbr-text mbr-fonts-style mt-3 display-7">Kami mengelola pertanian padi dan tebu dengan luas wilayah 2 hektare.&nbsp;</p>
                        </div>
                        <div class="mbr-section-btn item-footer mt-2"><a href="{{ route('pertanian') }}" class="btn item-btn btn-primary display-7">Lihat &gt;</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="footer6 cid-sveapxsNQX" once="footers" id="footer6-n">
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
    <section style="background-color: #fff; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Helvetica Neue', Arial, sans-serif; color:#aaa; font-size:12px; padding: 0; align-items: center; display: flex;"><a href="https://mobirise.site/u" style="flex: 1 1; height: 3rem; padding-left: 1rem;"></a>
        <p style="flex: 0 0 auto; margin:0; padding-right:1rem;">Page was <a href="https://mobirise.site/h" style="color:#aaa;">built with</a> Mobirise</p>
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

{{-- TODO: Show pagination dari controller --}}

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

    <title>BUMDes Mina Harapan - Artikel</title>
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
    <section class="menu menu3 cid-suV92wZhtA" once="menu" id="menu3-9">
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

    <section class="content3 cid-sve1ODFOck" id="content3-j">
        <div class="container">
            <div class="mbr-section-head align-middle">
                <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong>Artikel Terbaru</strong></h4>
                <h5 class="mbr-section-subtitle mbr-fonts-style align-center mb-0 mt-2 display-5">Tetap up-to-date dengan artikel terkini</h5>
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
                @auth
                    <div class="mbr-fonts-style align-center mb-0 mt-2"><a href="{{ route('article.create') }}" class="btn item-btn btn-primary display-7" >Buat Artikel &gt;</a></div>
                @endauth
            </div>
            <div class="row mt-4">
                @foreach ($article as $index)
                    <div class="item features-image сol-12 col-md-6 col-lg-4" style="cursor: default">
                        <div class="item-wrapper">
                            <div class="item-img">
                                <img src="{{ $index->image }}" alt="" title="">
                            </div>
                            <div class="item-content">
                                <h5 class="item-title mbr-fonts-style display-4"><em>
                                @php
                                    setlocale (LC_ALL, 'IND');
                                    $dateBaru = strftime( "%A, %d %B %Y", strtotime($index->created_at));
                                @endphp
                                    {{ $dateBaru }}</em></h5>
                                <h6 class="item-subtitle mbr-fonts-style mt-1 display-7"><strong>{{ $index->title }}</strong></h6>
                                <p class="mbr-text mbr-fonts-style mt-3 display-7">
                                @php
                                    $index->content = html_entity_decode(strip_tags($index->content));
                                    $pos = strpos($index->content, '.');

                                    if($pos === false) {
                                        echo $index->content;
                                    }
                                    else {
                                        echo substr($index->content, 0, $pos+1);
                                    }
                                @endphp</p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2"><a href="{{ route('article.show', ['id' => $index->id]) }}" class="btn item-btn btn-primary display-7" target="_blank">Read More &gt;</a></div>
                            @auth
                                <div class="mbr-section-btn item-footer mt-2">
                                    <form method="post" action="{{ route('article.destroy', ['id' => $index->id]) }}">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn item-btn btn-danger display-7">Hapus</button>
                                    </form>
                                </div>
                            @endauth
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row mt-4">
                {{ $article->links() }}
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
                    <div class="google-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDk89J4FSunMF33ruMVWJaJht_Ro0kvoXs&amp;q=Balai Desa Bendil Jati Wetan" allowfullscreen=""></iframe></div>
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
    <section style="background-color: #fff; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Helvetica Neue', Arial, sans-serif; color:#aaa; font-size:12px; padding: 0; align-items: center; display: flex;"><a href="https://mobirise.site/m" style="flex: 1 1; height: 3rem; padding-left: 1rem;"></a>
        <p style="flex: 0 0 auto; margin:0; padding-right:1rem;">Start a site - <a href="https://mobirise.site/v" style="color:#aaa;">Visit site</a></p>
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
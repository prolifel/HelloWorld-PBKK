{{-- TODO: Perbaiki front end nya --}}
<!DOCTYPE html>
<html>
<head>
    <!-- Site made with Mobirise Website Builder v5.3.0, https://mobirise.com -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v5.3.0, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo-bumdes-96x85.jpg" type="image/x-icon') }}">
    <meta name="description" content="">

    <title>BUMDes Mina Harapan - Menyunting Artikel</title>
    <link rel="stylesheet" href="{{ asset('assets/tether/tether.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap-grid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap-reboot.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/animatecss/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dropdown/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/formstyler/jquery.formstyler.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/formstyler/jquery.formstyler.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/datepicker/jquery.datetimepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/socicon/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/theme/css/style.css') }}">
    <link rel="preload" as="style" href="{{ asset('assets/mobirise/css/mbr-additional.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/mobirise/css/mbr-additional.css') }}" type="text/css">

    <script src="https://cdn.tiny.cloud/1/j0q97i7aeybfwwcpwgh68zkaeywcycebwzr7u6sdbdz72xrh/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
        tinymce.init({
            selector: '#mytextarea',
            height: 500,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste imagetools wordcount'
            ],
            toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }',
            relative_urls: false,
            images_upload_handler: function (blobInfo, success, failure) {
                let data = new FormData();
                data.append('image', blobInfo.blob(), blobInfo.filename());
                axios.post('/article/store-image', data)
                    .then(function (res) {
                        success(res.data.location);
                    })
                    .catch(function (err) {
                        failure('HTTP Error: ' + err.message);
                    });
            }
        });
    </script>
</head>

<body>
    <section class="menu menu3 cid-suV92wZhtA" once="menu" id="menu3-31">

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
                        <li class="nav-item dropdown"><a class="nav-link link text-black dropdown-toggle display-4" href="#" data-toggle="dropdown-submenu" aria-expanded="true">
                                Potensi</a>
                            <div class="dropdown-menu"><a class="text-black dropdown-item text-primary display-4" href="{{ route('pariwisata') }}">Pariwisata</a><a class="text-black dropdown-item text-primary display-4" href="{{ route('perikanan') }}" aria-expanded="false">Perikanan</a><a class="text-black dropdown-item text-primary display-4" href="{{ route('pertanian') }}" aria-expanded="false">Pertanian</a></div>
                        </li>
                        <li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="{{ route('marketplace.index') }}">Marketplace</a>
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

    <section class="form5 cid-syfed4Wsni" id="form5-34">
        <div class="container">
            <div class="mbr-section-head">
                <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                    <strong>Artikel</strong>
                </h3>

            </div>
            <div class="row justify-content-center mt-4">
                <div class="col-lg-8 mx-auto mbr-form">
                    <form action="{{ route('article.update', ['id' => $article->id]) }}" method="POST" enctype="multipart/form-data" class="mbr-form form-with-styler">
                        @csrf
                        <div class="dragArea row">
                            <div class="col-md col-sm-12 form-group" data-for="name">
                                <label for="title">Judul</label>
                                <input type="text" name="title" data-form-field="title" class="form-control" value="{{ $article->title }}" id="title">
                            </div>
                            <div class="col-md col-sm-12 form-group" data-for="email">
                                <label for="subtitle">Subjudul</label>
                                <input type="text" name="subtitle" data-form-field="email" class="form-control" value="{{ $article->subtitle }}" id="subtitle">
                            </div>
                            <div class="col-12 form-group" data-for="image">
                                <label for="image">Foto Utama</label>
                                <input type="file" name="image" class="form-control" value="" id="image">
                                <small>
                                    Tidak perlu upload jika tidak ingin mengganti gambar.
                                </small>
                            </div>
                            <div class="col-12 form-group" data-for="url">
                                <label for="content">Deskripsi Artikel</label>
                                <textarea class="form-control" id="mytextarea" name="content">{!!$article->content!!}</textarea>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 align-center mbr-section-btn"><button type="submit" class="btn btn-primary display-4">Perbarui Artikel</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="footer6 cid-sveapxsNQX" once="footers" id="footer6-32">
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
    <section style="background-color: #fff; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Helvetica Neue', Arial, sans-serif; color:#aaa; font-size:12px; padding: 0; align-items: center; display: flex;"><a href="https://mobirise.site/f" style="flex: 1 1; height: 3rem; padding-left: 1rem;"></a>
        <p style="flex: 0 0 auto; margin:0; padding-right:1rem;">Made with Mobirise - <a href="https://mobirise.site/k" style="color:#aaa;">Learn more</a></p>
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
    <script src="{{ asset('assets/formstyler/jquery.formstyler.js') }}"></script>
    <script src="{{ asset('assets/formstyler/jquery.formstyler.min.js') }}"></script>
    <script src="{{ asset('assets/datepicker/jquery.datetimepicker.full.js') }}"></script>
    <script src="{{ asset('assets/theme/js/script.js') }}"></script>
    <script src="{{ asset('assets/formoid/formoid.min.js') }}"></script>


    <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
    <input name="animation" type="hidden">
</body>

</html>

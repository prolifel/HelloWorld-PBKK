@extends('layouts.ecommerce')

{{-- <style>
	.fill {
		background : url(../img/banner/banner-bg.jpg) no-repeat center bottom;
		position: relative;
		display: flex;
		justify-content: center;
		align-items: center;
		overflow: hidden;
		flex-shrink: 0;
		min-width: 100%;
		min-height: 100%;
	}
	/* .fill img {
		flex-shrink: 0;
		min-width: 100%;
		min-height: 100%
	} */
</style> --}}

@section('title')
    <title>BUMDes Mina Harapan - Jual Beli</title>
@endsection

@section('content')
    <!--================Home Banner Area =================-->
	<section class="home_banner_area">
		<div class="overlay"></div>
		<div class="banner_inner d-flex align-items-center">
			<div class="container">
				<div class="banner_content row">
					<div class="offset-lg-2 col-lg-8">
						<h3>Daftar
							<br />Produk</h3>
						<p>Anda dapat melihat dan membeli produk yang tersedia di Badan Usaha Milik Desa Mina Harapan.
							<br>Dijamin produknya fresh semua!</p>
						<a class="white_bg_btn" href="#">Lihat Produk</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Home Banner Area =================-->

	<!--================Feature Product Area =================-->
	<section class="feature_product_area section_gap">
		<div class="main_box">
			<div class="container-fluid">
				<div class="row">
					<div class="main_title">
						<h2>Produk Tersedia</h2>
						<p>Nikmati produk fresh yang kami miliki.</p>
					</div>
				</div>
				<div class="row">
                    @forelse($products as $row)
					<div class="col col1">
						<div class="f_p_item">
							<div class="f_p_img">
                                <img class="img-fluid" src="{{ asset('storage/products/' . $row->image) }}" alt="{{ $row->name }}">
								<div class="p_icon">
									<a href="{{ url('/product/' . $row->slug) }}">
										<i class="lnr lnr-cart"></i>
									</a>
								</div>
							</div>
                            <a href="{{ url('/product/' . $row->slug) }}">
                                <h4>{{ $row->name }}</h4>
							</a>
                            <h5>Rp {{ number_format($row->price) }}</h5>
						</div>
					</div>
                    @empty
                    
                    @endforelse
				</div>

				<div class="row">
					{{ $products->links() }}
				</div>
			</div>
		</div>
	</section>
	<!--================End Feature Product Area =================-->
@endsection
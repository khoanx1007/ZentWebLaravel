@extends('frontend.layouts.client')
@section('content')
<div class="blog pt-5">
	<div class="container">
		<div class="row d-flex flex-row-reverse">
			<div class="col-xl-9 col-lg-9 col-12">
				@foreach ($posts as $post )
					<div class="bar-info pb-3"> 
						<div class="row ">
							<div class="cate-top bg-white news">
								<div class="cate-top_img">
									<img class="product-img" src="{{ $post->my_image }}">
									<div>
										@foreach($post->tags as $tag)
                              				<div class="tag-label badge p-1 badge-warning">{{ $tag->name }}</div>
                            			@endforeach	
									</div>
								</div>
								<div class="cate-des text-dark">
									<h4 class="font-weight-bold text-rated">{{ $post->title }}</h4>
									<h6 class="font-weight-bolder text-secondary pt-2 pb-2 ">
										<span class="bytime"><i class="far fa-calendar"></i> {{ $post->created_at }}</span>
										<span class="bytime"><i class="far fa-user"></i> {{ $post->user->name }}</span>
									</h6>
									<p>{{ $post->description }} </p>
									<div class="buy-shop2 mt-4">
											<a href="blog-detail.html">Read More</a>
									</div>
								</div>
							</div>
						</div>
					</div>  
				@endforeach 
				<div class="d-flex justify-content-center">
					{{$posts->links()}}
				</div>        
			</div>
			
			<div class="col-xl-3 col-lg-3 col-md-12 col-12">
				<div class="leftcon">
					<div class="sidebar-1 pb-3">
						<h5 class="sidebar-tit">CUSTOM MENU</h5>
						<ul class="sidebar-text">
							<li><a href="#">Search Terms</a></li>
							<li><a href="#">Advanced Search</a></li>
							<li><a href="#">Helps &amp; Faqs</a></li>
							<li><a href="#">Store Location</a></li>
							<li><a href="#">Orders &amp; Returns</a></li>
							<li><a href="#">Deliveries</a></li>
							<li><a href="#">Refund &amp; Returns</a></li>
						</ul>
					</div>
					<div class="sidebar-2 pb-5">
						<img src="/frontend/img/banner-shop.jpg" class="w-100">
					</div>
					</div><div class="sidebar-2 pb-3">
						<h5 class="sidebar-tit">RECENT</h5>
						<div class="topgame d-flex flex-column">
							<div class="cate-top bg-white">
								<div class="cate-product_img">
									<img class="product-img" src="/frontend/img/poster1.jpg">
								</div>
								<div class="cate-product_text text-dark">
									<h6 class="font-weight-bold text-rated">God of War 4 GOTY</h6>
									<div class="star-icon mt-2">
									  <label for="rating1" class="fa fa-star"></label>
									  <label for="rating2" class="fa fa-star"></label>
									  <label for="rating3" class="fa fa-star"></label>
									  <label for="rating4" class="fa fa-star"></label>
									  <label for="rating5" class="fa fa-star"></label>
									</div>
									<span class="font-weight-bolder">$60.00</span>
								</div>
							</div>
							<div class="cate-top bg-white">
								<div class="cate-product_img">
									<img class="product-img" src="/frontend/img/poster4.jpg">
								</div>
								<div class="cate-product_text text-dark">
									<h6 class="font-weight-bold text-rated">The Last of Us Part 2</h6>
									<div class="star-icon mt-2">
									  <label for="rating1" class="fa fa-star"></label>
									  <label for="rating2" class="fa fa-star"></label>
									  <label for="rating3" class="fa fa-star"></label>
									  <label for="rating4" class="fa fa-star"></label>
									  <label for="rating5" class="fa fa-star"></label>
									</div>
									<span class="font-weight-bolder">$60.00</span>
								</div>
							</div>
							<div class="cate-top bg-white ">
								<div class="cate-product_img">
									<img class="product-img" src="/frontend/img/poster3.jpg">
								</div>
								<div class="cate-product_text text-dark">
									<h6 class="font-weight-bold text-rated">Sekiro: Shadow Die Twice</h6>
									<div class="star-icon mt-2">
									  <label for="rating1" class="fa fa-star"></label>
									  <label for="rating2" class="fa fa-star"></label>
									  <label for="rating3" class="fa fa-star"></label>
									  <label for="rating4" class="fa fa-star"></label>
									  <label for="rating5" class="fa fa-star"></label>
									</div>
									<span class="font-weight-bolder">$60.00</span>
								</div>
							</div>
						</div>
					</div>
					<div class="sidebar-2 pb-3 pt-3">
						<h5 class="sidebar-tit">TAGS</h5>
						<ul class="sidebar-text3 d-flex flex-wrap">
							<li><a href="#">#GOW</a></li>
							<li><a href="#">#GOTY</a></li>
							<li><a href="#">#Best</a></li>
							<li><a href="#">#ProVip</a></li>
							<li><a href="#">#Lửa Chùa</a></li>
						</ul>
					</div>
			</div>
		</div>
	</div>
</div>
@endsection
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>TheQuest - Gaming Magazine Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="TheQuest Gaming Magazine Template">
	<meta name="keywords" content="gaming, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

	<!-- Stylesheets -->
	<link href="{{asset('css/bootstrap.min.css') }}" rel="stylesheet" media="screen" />
	<link href="{{asset('css/font-awesome.min.css') }}" rel="stylesheet" media="screen" />
	<link href="{{asset('css/magnific-popup.css') }}" rel="stylesheet" media="screen" />
	<link href="{{asset('css/owl.carousel.min.css') }}" rel="stylesheet" media="screen" />
	<link href="{{asset('css/animate.css') }}" rel="stylesheet" media="screen" />
	<link href="{{asset('css/slicknav.min.css') }}" rel="stylesheet" media="screen" />

	<!-- Main Stylesheets -->
	<link href="{{asset('css/style.css') }}" rel="stylesheet" media="screen" />


	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	@extends('componets.navbar')

	<!-- Header section end -->

	<!-- Hero section -->
	@extends('componets.heder')
	<!-- Hero section end -->

	<!-- Blog section -->
	<section class="blog-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 blog-posts">
					<div class="blog-post featured-post">
						
						@yield('content')
					</div>

				</div>
				<div class="col-lg-4 sidebar">
					<div class="sb-widget">
						<form class="sb-search">
							<input type="text" placeholder="Search">
						</form>
					</div>
					<div class="sb-widget">
						<h2 class="sb-title">Categories</h2>
						<ul class="sb-cata-list">
							<li><a href="">Games<span>20</span></a></li>
							<li><a href="">Gaming Tips & Tricks<span>23</span></a></li>
							<li><a href="">Online Games<span>25</span></a></li>
							<li><a href="">Team Games<span>17</span></a></li>
							<li><a href="">Community<span>15</span></a></li>
							<li><a href="">Uncategorized<span>22</span></a></li>
						</ul>
					</div>
					<div class="sb-widget">
						<h2 class="sb-title">Latest News</h2>
						<div class="latest-news-widget">
							<div class="ln-item">
								<img src="img/blog-thumbs/1.jpg" alt="">
								<div class="ln-text">
									<div class="ln-date">April 1, 2019</div>
									<h6>10 Amazing new games</h6>
									<div class="ln-metas">
										<div class="ln-meta">By Admin</div>
										<div class="ln-meta">in <a href="#">Games</a></div>
										<div class="ln-meta">3 Comments</div>
									</div>
								</div>
							</div>
							<div class="ln-item">
								<img src="img/blog-thumbs/2.jpg" alt="">
								<div class="ln-text">
									<div class="ln-date">April 1, 2019</div>
									<h6>10 Amazing new games</h6>
									<div class="ln-metas">
										<div class="ln-meta">By Admin</div>
										<div class="ln-meta">in <a href="#">Games</a></div>
										<div class="ln-meta">3 Comments</div>
									</div>
								</div>
							</div>
							<div class="ln-item">
								<img src="img/blog-thumbs/3.jpg" alt="">
								<div class="ln-text">
									<div class="ln-date">April 1, 2019</div>
									<h6>10 Amazing new games</h6>
									<div class="ln-metas">
										<div class="ln-meta">By Admin</div>
										<div class="ln-meta">in <a href="#">Games</a></div>
										<div class="ln-meta">3 Comments</div>
									</div>
								</div>
							</div>
							<div class="ln-item">
								<img src="img/blog-thumbs/4.jpg" alt="">
								<div class="ln-text">
									<div class="ln-date">April 1, 2019</div>
									<h6>10 Amazing new games</h6>
									<div class="ln-metas">
										<div class="ln-meta">By Admin</div>
										<div class="ln-meta">in <a href="#">Games</a></div>
										<div class="ln-meta">3 Comments</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="sb-widget">
						<a href="#" class="add">
							<img src="img/add-2.jpg" alt="">
						</a>
					</div>
					<div class="sb-widget">
						<h2 class="sb-title">Latest Comments</h2>
						<div class="latest-comments-widget">
							<div class="lc-item">
								<img src="img/author-thumbs/1.jpg" alt="">
								<div class="lc-text">
									<h6>Jane Smith<span> In </span><a href="">The best 2019 Games</a></h6>
									<div class="lc-date">April 1,2019</div>
								</div>
							</div>
							<div class="lc-item">
								<img src="img/author-thumbs/2.jpg" alt="">
								<div class="lc-text">
									<h6>Michael James<span> In </span><a href="">The best 2019 Games</a></h6>
									<div class="lc-date">April 1,2019</div>
								</div>
							</div>
							<div class="lc-item">
								<img src="img/author-thumbs/3.jpg" alt="">
								<div class="lc-text">
									<h6>Jane Smith<span> In </span><a href="">The best 2019 Games</a></h6>
									<div class="lc-date">April 1,2019</div>
								</div>
							</div>
							<div class="lc-item">
								<img src="img/author-thumbs/4.jpg" alt="">
								<div class="lc-text">
									<h6>Michael James<span> In </span><a href="">The best 2019 Games</a></h6>
									<div class="lc-date">April 1,2019</div>
								</div>
							</div>
							<div class="lc-item">
								<img src="img/author-thumbs/1.jpg" alt="">
								<div class="lc-text">
									<h6>Jane Smith<span> In </span><a href="">The best 2019 Games</a></h6>
									<div class="lc-date">April 1,2019</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Blog section end -->

	<!-- Blog list section -->
	<section class="blog-list-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="small-blog-list">
						<div class="sb-item">
							<img src="img/blog-thumbs/6.jpg" alt="">
							<div class="sb-text">
								<div class="sb-date">April 1,2019</div>
								<h6>10 Amazing new games</h6>
								<div class="sb-metas">
									<div class="sb-meta">By Admin</div>
									<div class="sb-meta">in <a href="#">Games</a></div>
									<div class="sb-meta">3 Comments</div>
								</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo. </p>
							</div>
						</div>
						<div class="sb-item">
							<img src="img/blog-thumbs/7.jpg" alt="">
							<div class="sb-text">
								<div class="sb-date">April 1,2019</div>
								<h6>10 Amazing new games</h6>
								<div class="sb-metas">
									<div class="sb-meta">By Admin</div>
									<div class="sb-meta">in <a href="#">Games</a></div>
									<div class="sb-meta">3 Comments</div>
								</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo. </p>
							</div>
						</div>
						<div class="sb-item">
							<img src="img/blog-thumbs/8.jpg" alt="">
							<div class="sb-text">
								<div class="sb-date">April 1,2019</div>
								<h6>10 Amazing new games</h6>
								<div class="sb-metas">
									<div class="sb-meta">By Admin</div>
									<div class="sb-meta">in <a href="#">Games</a></div>
									<div class="sb-meta">3 Comments</div>
								</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo. </p>
							</div>
						</div>
						<div class="sb-item">
							<img src="img/blog-thumbs/9.jpg" alt="">
							<div class="sb-text">
								<div class="sb-date">April 1,2019</div>
								<h6>10 Amazing new games</h6>
								<div class="sb-metas">
									<div class="sb-meta">By Admin</div>
									<div class="sb-meta">in <a href="#">Games</a></div>
									<div class="sb-meta">3 Comments</div>
								</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo. </p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="sb-widget">
						<h2 class="sb-title">Top 5 this week</h2>
						<div class="latest-news-widget top-five">
							<div class="ln-item">
								<div class="ln-index">01</div>
								<img src="img/blog-thumbs/1.jpg" alt="">
								<div class="ln-text">
									<div class="ln-date">April 1, 2019</div>
									<h6>10 Amazing new games</h6>
									<div class="ln-metas">
										<div class="ln-meta">By Admin</div>
										<div class="ln-meta">in <a href="#">Games</a></div>
										<div class="ln-meta">3 Comments</div>
									</div>
								</div>
							</div>
							<div class="ln-item">
								<div class="ln-index">02</div>
								<img src="img/blog-thumbs/2.jpg" alt="">
								<div class="ln-text">
									<div class="ln-date">April 1, 2019</div>
									<h6>10 Amazing new games</h6>
									<div class="ln-metas">
										<div class="ln-meta">By Admin</div>
										<div class="ln-meta">in <a href="#">Games</a></div>
										<div class="ln-meta">3 Comments</div>
									</div>
								</div>
							</div>
							<div class="ln-item">
								<div class="ln-index">03</div>
								<img src="img/blog-thumbs/3.jpg" alt="">
								<div class="ln-text">
									<div class="ln-date">April 1, 2019</div>
									<h6>10 Amazing new games</h6>
									<div class="ln-metas">
										<div class="ln-meta">By Admin</div>
										<div class="ln-meta">in <a href="#">Games</a></div>
										<div class="ln-meta">3 Comments</div>
									</div>
								</div>
							</div>
							<div class="ln-item">
								<div class="ln-index">04</div>
								<img src="img/blog-thumbs/4.jpg" alt="">
								<div class="ln-text">
									<div class="ln-date">April 1, 2019</div>
									<h6>10 Amazing new games</h6>
									<div class="ln-metas">
										<div class="ln-meta">By Admin</div>
										<div class="ln-meta">in <a href="#">Games</a></div>
										<div class="ln-meta">3 Comments</div>
									</div>
								</div>
							</div>
							<div class="ln-item">
								<div class="ln-index">05</div>
								<img src="img/blog-thumbs/5.jpg" alt="">
								<div class="ln-text">
									<div class="ln-date">April 1, 2019</div>
									<h6>10 Amazing new games</h6>
									<div class="ln-metas">
										<div class="ln-meta">By Admin</div>
										<div class="ln-meta">in <a href="#">Games</a></div>
										<div class="ln-meta">3 Comments</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Blog list section end -->

	<!-- Video section -->
	<div class="video-section">
		<div class="container">
			<div class="video-logo">
				<img src="img/logo-2.png" alt="">
				<p>2018’s Best Game</p>
			</div>
			<div class="video-popup-warp">
				<img src="img/video-bg.jpg" alt="">
				<a href="https://www.youtube.com/watch?v=xzCEdSKMkdU" class="video-play"><i class="fa fa-play"></i></a>
			</div>
		</div>
	</div>
	<!-- Video section end -->

	<!-- Footer section -->
		@extends('componets.footer')
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
		</div>
		<div class="social-links-warp">
			<div class="container">
				<div class="social-links">
					<a href="#"><i class="fa fa-instagram"></i><span>instagram</span></a>
					<a href="#"><i class="fa fa-pinterest"></i><span>pinterest</span></a>
					<a href="#"><i class="fa fa-facebook"></i><span>facebook</span></a>
					<a href="#"><i class="fa fa-twitter"></i><span>twitter</span></a>
					<a href="#"><i class="fa fa-youtube"></i><span>youtube</span></a>
					<a href="#"><i class="fa fa-tumblr-square"></i><span>tumblr</span></a>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer section end -->

	<!--====== Javascripts & Jquery ======-->
	<script src="{{asset('js/jquery-3.2.1.min.js') }}"></script>
	<script src="{{asset('js/bootstrap.min.js') }}"></script>
	<script src="{{asset('js/jquery.slicknav.js') }}"></script>
	<script src="{{asset('js/owl.carousel.min.js') }}"></script>
	<script src="{{asset('js/circle-progress.min.js') }}"></script>
	<script src="{{asset('js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{asset('js/main.js') }}"></script>

	</body>
</html>

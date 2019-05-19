<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>@yield("title")</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CMuli:400,700" rel="stylesheet">

	<!-- Bootstrap -->
    <link href="{{ asset("bootstrap-rtl/css/bootstrap.css") }}" rel="stylesheet" />
	<!--link type="text/css" rel="stylesheet" href="{{ asset("callie/css/bootstrap.min.css") }}" /-->
    <!--link type="text/css" rel="stylesheet" href="{{ asset("callie/css/bootstrap.css") }}" /-->
    
	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="{{ asset("callie/css/font-awesome.min.css") }}">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="{{ asset("callie/css/style.css") }}" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<style>
        .contact   {color: #ee4266;}
    </style>
	@yield("css")
</head>

<body>
	<!-- HEADER -->
	<header id="header">
		<!-- NAV -->
		<div id="nav">
			<!-- Top Nav -->
			<div id="nav-top">
				<div class="container">
					<!-- social -->
					<ul class="nav-social">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
					</ul>
					<!-- /social -->

					<!-- logo -->
					<div class="nav-logo">
						<a href="index.html" class="logo"><img src="callie/img/logo.png" alt=""></a>
					</div>
					<!-- /logo -->

					<!-- search & aside toggle -->
					<div class="nav-btns">
						<button class="aside-btn"><i class="fa fa-bars"></i></button>
						<button class="search-btn"><i class="fa fa-search"></i></button>
						<div id="nav-search">
							<form>
								<input class="input" name="search" placeholder="أدخل كلمة البحث...">
							</form>
							<button class="nav-close search-close">
								<span></span>
							</button>
						</div>
					</div>
					<!-- /search & aside toggle -->
				</div>
			</div>
			<!-- /Top Nav -->

			<!-- Main Nav -->
			<div id="nav-bottom">
				<div class="container">
					<!-- nav -->
					<ul class="nav-menu">
						<li >
							<a href="{{ asset('/home') }}">الرئيسية</a>
						</li>
						<li class="has-dropdown megamenu">
							<a href="#">التصنيفات</a>
							<div class="dropdown tab-dropdown">
								<div class="row">
									<div class="col-md-2">
										<ul class="tab-nav">
											<?php $i=0; ?>
										@foreach($categories as $category)
											<li class="{{ $i==0?'active':'' }}"><a data-toggle="tab" href="#tab{{$i++}}">{{$category->name}}</a></li>
											@endforeach
										</ul>
									</div>
									<div class="col-md-10">
										<div class="dropdown-body tab-content">
											<?php $i=0; ?>
											@foreach($categories as $category)
											<div id="tab{{$i++}}" class="tab-pane fade in active">
												<div class="row">
													<?php
														$catArticles = $category->articles()->take(3)->get();
													?>
													@foreach($catArticles as $a)
													<div class="col-md-4">
														<div class="post post-sm">
															<a class="post-img" href="{{ asset('article/' . $a->id ) }}" class="thumbnail"><img src="{{ asset('thumb.php?size=350x230&src=storage/images/' . $a->photos->file) }}" alt="{{ $a->title }}"></a>
															<div class="post-body">
																<div class="post-category">
																	<a href="{{ asset('/articles?category='.$a->category->id) }}">{{$category->name}}</a>
																</div>
																<h3 class="post-title title-sm"><a href="{{ asset('article/' . $a->id ) }}">{{ $a->summary }}</a></h3>
																<ul class="post-meta">
																	<li><a href="author.html">{{ $a->writer->name}}</a></li>
																	<li>{{ $a->created_at }}</li>
																</ul>
															</div>
														</div>
													</div>
													@endforeach
												</div>
											</div>
											@endforeach

										</div>
									</div>
								</div>
							</div>
						</li>
						@foreach($categories as $category)
						<li> <a href="#">{{$category->name}}</a></li>
						@endforeach
						<li><a href="{{ asset('/contact') }}">اتصل بنا</a></li>
					</ul>
					<!-- /nav -->
				</div>
			</div>
			<!-- /Main Nav -->

			<!-- Aside Nav -->
			<div id="nav-aside">
				<ul class="nav-aside-menu">
					<li><a href="index.html">Home</a></li>
					<li class="has-dropdown"><a>Categories</a>
						<ul class="dropdown">
							<li><a href="#">Lifestyle</a></li>
							<li><a href="#">Fashion</a></li>
							<li><a href="#">Technology</a></li>
							<li><a href="#">Travel</a></li>
							<li><a href="#">Health</a></li>
						</ul>
					</li>
					<li><a href="about.html">About Us</a></li>
					<li><a href="contact.html">Contacts</a></li>
					<li><a href="#">Advertise</a></li>
				</ul>
				<button class="nav-close nav-aside-close"><span></span></button>
			</div>
			<!-- /Aside Nav -->
		</div>
		<!-- /NAV -->
	</header>
	<!-- /HEADER -->
	@yield("content")

                <div class="col-md-4">
                    

                    <!-- social widget -->
                    <div class="aside-widget">
                        <div class="section-title">
                            <h2 class="title">الشبكات الاجتماعية</h2>
                        </div>
                        <div class="social-widget">
                            <ul>
                                <li>
                                    <a href="#" class="social-facebook">
                                        <i class="fa fa-facebook"></i>
                                        <span>21.2K<br>Followers</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="social-twitter">
                                        <i class="fa fa-twitter"></i>
                                        <span>10.2K<br>Followers</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="social-google-plus">
                                        <i class="fa fa-google-plus"></i>
                                        <span>5K<br>Followers</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /social widget -->

                    <!-- category widget -->
                    <div class="aside-widget">
                        <div class="section-title">
                            <h2 class="title">التصنيفات</h2>
                        </div>
                        <div class="category-widget">
                            <ul>
                                @foreach($categories as $category)
                                    <li><a href="#">{{$category->name}}<span>{{  $category->articles->count() }}</span></a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!-- /category widget -->

                    <!-- newsletter widget -->
                    <div class="aside-widget">
                        <div class="section-title">
                            <h2 class="title">القائمة البريدية</h2>
                        </div>
                        <div class="newsletter-widget">
                            <form>
                                <p>الرجاء ادخال بريدك الالكتروني للحصول على اخر الاخبار</p>
                                <input class="input" name="newsletter" placeholder="أدخل البريد الالكتروني">
                                <button class="primary-button">اشتراك</button>
                            </form>
                        </div>
                    </div>
                    <!-- /newsletter widget -->

                    <!-- post widget -->
                    <div class="aside-widget">
                        <div class="section-title">
                            <h2 class="title">الأكثر شيوعا</h2>
                        </div>
                        <!-- post -->
                        
                        @foreach($Artitems as $item)
                        <div class="post post-widget">
                            <a class="post-img" href="{{ asset('article/' . $item->id ) }}"><img src="{{ asset('thumb.php?size=400x300&src=storage/images/' . $item->photos->file) }}" alt=""></a>
                            <div class="post-body">
                                <div class="post-category">
                                    <a href="category.html">{{$item->category->name}}</a>
                                </div>
                                <h3 class="post-title"><a href="{{ asset('article/' . $item->id ) }}">{{$item->title}}</a></h3>
                            </div>
                        </div>
                        @endforeach
                        <!-- /post -->

                    </div>
                    <!-- /post widget -->
                </div>
              
	<!-- FOOTER -->
	<footer id="footer">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-3">
					<div class="footer-widget">
						<div class="footer-logo">
							<a href="index.html" class="logo"><img src="callie/img/logo-alt.png" alt=""></a>
						</div>
						<h4 class="contact">اتصل بنا او راسلنا</h4>
							
					 <p>
								<i class="icon-phone"></i> <a href='tel:(123) 456-7890'>(123) 456-7890</a> - <a href='tel:(123) 555-7891'>(123) 555-7891</a> <br>
								<i class="icon-envelope-alt"></i> <a href='mailto:email@domainname.com'>email@domainname.com</a>
							</p>
						<ul class="contact-social">
							<li><a href="#" class="social-facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="social-twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="social-google-plus"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#" class="social-instagram"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3">
					<div class="footer-widget">
						<h3 class="footer-title">التصنيفات</h3>
						<div class="category-widget">
							<ul>
							@foreach($categories as $category)
								<li><a href="#">{{$category->name}}<span>{{  $category->articles->count() }}</span></a></li>
								@endforeach
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="footer-widget">
						<h3 class="footer-title">Tags</h3>
						<div class="tags-widget">
							<ul>
								<li><a href="#">Social</a></li>
								<li><a href="#">Lifestyle</a></li>
								<li><a href="#">Blog</a></li>
								<li><a href="#">Travel</a></li>
								<li><a href="#">Technology</a></li>
								<li><a href="#">Fashion</a></li>
								<li><a href="#">Life</a></li>
								<li><a href="#">News</a></li>
								<li><a href="#">Magazine</a></li>
								<li><a href="#">Food</a></li>
								<li><a href="#">Health</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="footer-widget">
						<h3 class="footer-title">القائمة البريدية</h3>
						<div class="newsletter-widget">
							<form>
								<p>الرجاء ادخال بريدك الالكتروني للحصول على اخر الاخبار</p>
								<input class="input" name="newsletter" placeholder="أدخل البريد الالكتروني">
								<button class="primary-button">اشتراك</button>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- /row -->

			<!-- row -->
			<div class="footer-bottom row">
				<div class="col-md-6 col-md-push-6">
					<ul class="footer-nav">
						<li><a href="index.html">Home</a></li>
						<li><a href="about.html">About Us</a></li>
						<li><a href="contact.html">Contacts</a></li>
						<li><a href="#">Advertise</a></li>
						<li><a href="#">Privacy</a></li>
					</ul>
				</div>
				<div class="col-md-6 col-md-pull-6">
					<div class="footer-copyright">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</div>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</footer>
	<!-- /FOOTER -->

	<!-- jQuery Plugins -->
	<script src="{{ asset("callie/js/jquery.min.js") }}"></script>
	<script src="{{ asset("callie/js/bootstrap.min.js") }}"></script>
	<script src="{{ asset("callie/js/jquery.stellar.min.js") }}"></script>
	<script src="{{ asset("callie/js/main.js") }}"></script>
@yield("js")
</body>

</html>

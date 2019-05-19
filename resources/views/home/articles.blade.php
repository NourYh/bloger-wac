@extends('layouts._callie')

@section("title",'التصنيفات')
@section('content')
<div class="container">
    <!-- PAGE HEADER -->
		<div class="page-header">
			<div class="page-header-bg" style="background-image: url('./callie/img/header-2.jpg');" data-stellar-background-ratio="0.5"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-offset-1 col-md-10 text-center">
					<?php //echo $catName  ?>
						<h1 class="text-uppercase">{{$latest->category->name}}</h1>
					</div>
				</div>
			</div>
		</div>
        <!-- /PAGE HEADER -->
        	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-8">
					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="blog-post.html"><img src="{{ asset('thumb.php?size=400x300&src=storage/images/' . $latest->photos->file) }}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">{{$latest->category->name}}</a>
							
							</div>
							<h5 class="post-title title-lg"><a href="blog-post.html">{{ $latest->summary }}</a></h5>
							<ul class="post-meta">
								<li><a href="author.html">{{$latest->writer->name}}</a></li>
								<li>{{$latest->created_at}}</li>
							</ul>
						</div>
					</div>
					<!-- /post -->

					<div class="row">
						<!-- post -->
						@foreach($Artitems as $article)
						<div class="col-md-6">
							<div class="post">
								<a class="post-img" href="blog-post.html"><img src="{{ asset('thumb.php?size=360x240&src=storage/images/' . $article->photos->file) }}" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										<a href="category.html">{{$article->category->name}}</a>
									</div>
									<h3 class="post-title"><a href="blog-post.html">{{$article->title}}</a></h3>
									<ul class="post-meta">
										<li><a href="author.html">{{$article->writer->name}}</a></li>
										<li>{{$article->created_at}}</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /post -->
						@endforeach
						<div class="clearfix visible-md visible-lg"></div>

				
					</div>

					<!-- post -->
					@foreach($Artitems as $article)
					<div class="post post-row">
						<a class="post-img" href="blog-post.html"><img src="{{ asset('thumb.php?size=300x200&src=storage/images/' . $article->photos->file) }}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">{{$article->category->name}}</a>
							</div>
							<h3 class="post-title"><a href="blog-post.html">{{$article->title}}</a></h3>
							<ul class="post-meta">
								<li><a href="author.html">{{$article->writer->name}}</a></li>
								<li>{{$article->created_at}}</li>
							</ul>
							<p>{{$article->summary}}</p>
						</div>
					</div>
					<!-- /post -->
					@endforeach

				

				

					

					

					<div class="section-row loadmore text-center">
						<a href="#" class="primary-button">Load More</a>
					</div>
				</div>

				<div class="col-md-4">
					<!-- ad widget-->
					<div class="aside-widget text-center">
						<a href="#" style="display: inline-block;margin: auto;">
							<img class="img-responsive" src="./callie/img/ad-3.jpg" alt="">
						</a>
					</div>
					<!-- /ad widget -->
	<!-- category widget -->
	<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">التصنيفات</h2>
						</div>
						<div class="category-widget">
							<ul>
							<?php
										$articleCategories = \App\Models\Category::where("deleted",0)->orderBy("name")->take(10)->get();
									?>
									@foreach($articleCategories as $category)
									<li><a href="{{ asset('/articles?category='.$category->id) }}">{{ $category->name }}<span>{{  $category->articles->count() }}</span></a></li>
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
						
						@foreach($latestitems as $item)
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

					<!-- galery widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Instagram</h2>
						</div>
						<div class="galery-widget">
							<ul>
								<li><a href="#"><img src="./callie/img/galery-1.jpg" alt=""></a></li>
								<li><a href="#"><img src="./callie/img/galery-2.jpg" alt=""></a></li>
								<li><a href="#"><img src="./callie/img/galery-3.jpg" alt=""></a></li>
								<li><a href="#"><img src="./callie/img/galery-4.jpg" alt=""></a></li>
								<li><a href="#"><img src="./callie/img/galery-5.jpg" alt=""></a></li>
								<li><a href="#"><img src="./callie/img/galery-6.jpg" alt=""></a></li>
							</ul>
						</div>
					</div>
					<!-- /galery widget -->

					<!-- Ad widget -->
					<div class="aside-widget text-center">
						<a href="#" style="display: inline-block;margin: auto;">
							<img class="img-responsive" src="./callie/img/ad-1.jpg" alt="">
						</a>
					</div>
					<!-- /Ad widget -->
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->
</div>
@endsection
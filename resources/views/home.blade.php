@extends('layouts._callie')

@section('content')
	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div id="hot-post" class="row hot-post">
				<div class="col-md-8 hot-post-left">
					<!-- post -->
                    @foreach($articles as $article)
					<div class="post post-thumb">
						<a class="post-img" href="{{ asset('article/' . $article->id ) }}" class="thumbnail"><img src="{{ asset('thumb.php?size=760x500&src=storage/images/' . $article->photos->file) }}" alt="{{ $article->title }}"></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">{{$article->category->name}}</a>
							</div>
							<h3 class="post-title title-lg"><a href="blog-post.html">{{ $article->summary }}</a></h3>
							<ul class="post-meta">
                                <li><small><a href="author.html">{{$article->writer->name}}</a></small></li>
                                <li><small>{{ $article->created_at }}</small></li>
							</ul>
						</div>
					</div>
                    @endforeach
					<!-- /post -->
				</div>
				<div class="col-md-4 hot-post-right">
					<!-- post -->
                     @foreach($articlescat as $article)
					<div class="post post-thumb">
						<a class="post-img" href="{{ asset('article/' . $article->id ) }}" class="thumbnail"><img src="{{ asset('thumb.php?size=350x230&src=storage/images/' . $article->photos->file) }}" alt="{{ $article->title }}"></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">{{$article->category->name}}</a>
							</div>
							<h3 class="post-title"><a href="blitleog-post.html">{{$article->summary}}</a></h3>
							<ul class="post-meta">
                                <li><small><a href="author.html">{{ $article->writer->name }}</a></small></li>
                                <li><small>{{ $article->created_at }}</small></li>
							</ul>
						</div>
					</div>
					
                    @endforeach
                    <!-- /post -->
					<!-- post -->
                    @foreach($articles as $article)
					<div class="post post-thumb">
						<a class="post-img" href="{{ asset('article/' . $article->id ) }}" class="thumbnail"><img src="{{ asset('thumb.php?size=350x230&src=storage/images/' . $article->photos->file) }}" alt="{{ $article->title }}"></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">{{$article->category->name}}</a>
							<h3 class="post-title"><a href="blitleog-post.html">{{$article->summary}}</a></h3>
							<ul class="post-meta">
							   <li><small><a href="author.html">{{ $article->writer->name }}</a></small></li>
                                <li><small>{{ $article->created_at }}</small></li>
							</ul>
						</div>
					</div>
                     @endforeach
					<!-- /post -->
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-8">
					<!-- row -->
					<div class="row">
						<div class="col-md-12">
							<div class="section-title">
								<h1 class="title">جـديدنا</h1>
							</div>
						</div>
                        <!-- post -->
                       @foreach($articlesgroup as $article)
						
						<div class="col-md-6">
							<div class="post">
								<a class="post-img" href="{{ asset('article/' . $article->id ) }}" class="thumbnail"><img src="{{ asset('thumb.php?size=400x300&src=storage/images/' . $article->photos->file) }}" alt=""></a>
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
                         @endforeach  
						<!-- /post -->
                          
						
						<div class="clearfix visible-md visible-lg"></div>

						
					</div>
					<!-- /row -->

					<!-- row -->
                    @foreach($categories as $category)
					<div class="row">
						<div class="col-md-12">
							<div class="section-title">
								<h2 class="title">{{$category->name}}</h2>
							</div>
						</div>
						<!-- post -->
						<?php
							$catArticles = $category->articles()->take(3)->get();
						?>
						@foreach($catArticles as $a)
						<div class="col-md-4">
							<div class="post post-sm">
								<a class="post-img" href="{{ asset('article/' . $a->id ) }}"><img src="{{ asset('thumb.php?size=400x300&src=storage/images/' . $a->photos->file) }}" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										<a href="category.html">{{$a->category->name}}</a>
									</div>
									<h3 class="post-title title-sm"><a href="blog-post.html">{{$a->title}}</a></h3>
									<ul class="post-meta">
										<li><a href="author.html">{{$a->writer->name}}</a></li>
										<li>{{$a->created_at}}</li>
									</ul>
								</div>
							</div>
						</div>
						
						@endforeach
						
						</div>
						
                    @endforeach
					<!-- /row -->

					
				</div>
				<div class="col-md-4">
					<!-- ad widget-->
					<div class="aside-widget text-center">
						<a href="#" style="display: inline-block;margin: auto;">
							<img class="img-responsive" src="callie/img/ad-3.jpg" alt="">
						</a>
					</div>
					<!-- /ad widget -->

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
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- ad -->
				<div class="col-md-12 section-row text-center">
					<a href="#" style="display: inline-block;margin: auto;">
						<img class="img-responsive" src="callie/img/ad-2.jpg" alt="">
					</a>
				</div>
				<!-- /ad -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	

@endsection

@extends('layouts._callie')

@section("title",'التفاصيل')
@section('content')
<!-- PAGE HEADER -->
<div id="post-header" class="page-header">
	
			<div class="page-header-bg" style="background-image: url('{{ asset('thumb.php?size=1200x600&src=storage/images/' . $item->photos->file) }}');" data-stellar-background-ratio="0.5"></div>
			<div class="container">
			<div class="row">
                    <div class="col-md-10">
                        <div class="post-category">
                            <a href="category.html">{{$item->category->name}}</a>
                        </div>
                        <h3 style="color:white " >{{$item->summary}}</h3>
                        <ul class="post-meta">
                            <li><a href="author.html">{{$item->writer->name}}</a></li>
                            <li>{{$item->created_at}}</li>
                            <li><i class="fa fa-comments"></i> 3</li>
                            <li><i class="fa fa-eye"></i> 807</li>
                        </ul>
                    </div>
                </div>

			</div>
		</div>
		<!-- /PAGE HEADER -->
        <!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-8">
					<!-- post share -->
					<div class="section-row">
						<div class="post-share">
							<a href="#" class="social-facebook"><i class="fa fa-facebook"></i><span>Share</span></a>
							<a href="#" class="social-twitter"><i class="fa fa-twitter"></i><span>Tweet</span></a>
							<a href="#" class="social-pinterest"><i class="fa fa-pinterest"></i><span>Pin</span></a>
							<a href="#" ><i class="fa fa-envelope"></i><span>Email</span></a>
						</div>
					</div>
					<!-- /post share -->

					<!-- post content -->
					<div class="section-row">
						<h3>{{$item->title}}</h3>
						<p>{{$item->summary}}</p>
						<p>{{$item->details}}</p>
						<figure class="pull-right">
							<img src="{{ asset('thumb.php?size=400x300&src=storage/images/' . $item->photos->file) }}" alt="">
							<figcaption>{{$item->title}}</figcaption>
						</figure>
						<p>{{$item->details}}</p>
						<p>{{$item->details}}</p>
						<blockquote class="blockquote">
							<p>{{$item->summary}}</p>
							<footer class="blockquote-footer">نور أبو الجبين</footer>
						</blockquote>
						<p>{{$item->summary}}</p>
						<figure>
							<img src="{{ asset('thumb.php?size=300x200&src=storage/images/' . $item->photos->file) }}" alt="">
						</figure>
						<h3>{{$item->title}}</h3>
						<p>{{$item->summary}}</p>
						<p>{{$item->summary}}</p>
					</div>
					<!-- /post content -->

				
					

					<!-- /related post -->
					<div>
						<div class="section-title">
							<h3 class="title">مقالات مشابهة</h3>
						</div>
						<div class="row">
							@foreach($otherArticles as $other)
						<div class="col-md-4">
                                <div class="post post-sm">
                                    <a class="post-img" href="{{ asset('article/' . $other->id ) }}"><img src="{{ asset('thumb.php?size=400x300&src=storage/images/' . $other->photos->file) }}" alt=""></a>
                                    <div class="post-body">
                                        <div class="post-category">
                                            <a href="category.html">{{$other->category->name}}</a>
                                        </div>
                                        <h3 class="post-title title-sm"><a href="blog-post.html">{{$other->title}}</a></h3>
                                        <ul class="post-meta">
                                            <li><a href="author.html">{{$other->writer->name}}</a></li>
                                            <li>{{$other->created_at}}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
							@endforeach
							
						</div>
					</div>
					<!-- /related post -->

					

					
				</div>
				<div class="col-md-4">
					<!-- ad widget -->
					<div class="aside-widget text-center">
						<a href="#" style="display: inline-block;margin: auto;">
							<img class="img-responsive" src="../callie/img/ad-3.jpg" alt="">
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

					<!-- galery widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Instagram</h2>
						</div>
						<div class="galery-widget">
							<ul>
								<li><a href="#"><img src="../callie/img/galery-1.jpg" alt=""></a></li>
								<li><a href="#"><img src="../callie/img/galery-2.jpg" alt=""></a></li>
								<li><a href="#"><img src="../callie/img/galery-3.jpg" alt=""></a></li>
								<li><a href="#"><img src="../callie/img/galery-4.jpg" alt=""></a></li>
								<li><a href="#"><img src="../callie/img/galery-5.jpg" alt=""></a></li>
								<li><a href="#"><img src="../callie/img/galery-6.jpg" alt=""></a></li>
							</ul>
						</div>
					</div>
					<!-- /galery widget -->

					<!-- Ad widget -->
					<div class="aside-widget text-center">
						<a href="#" style="display: inline-block;margin: auto;">
							<img class="img-responsive" src="../callie/img/ad-1.jpg" alt="">
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


@endsection
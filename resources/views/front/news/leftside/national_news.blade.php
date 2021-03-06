<div class="highlights-posts gn-animation" data-animation="fadeInUp" data-animation-delay="0" data-animation-offset="75%">
		<div class="gn-line"></div>
		<div class="section-title">
			<h4><a href="{{route('national.index')}}">National</a></h4>
		</div>
	
		@forelse($national_news as $national_new)
		@if($national_new->id%2==0)
		<article class="post">
			<div class="thumb">
			<a href="{{URL::to($national_new->image)}}">
					<img  src="{{URL::to($national_new->image)}}" class="national" alt="img">
					</a>
			</div>
			<div class="cat">
				<a href="#">{{$national_new->media}}</a>
			</div>
			<h3><a href="{{route('new.single',$national_new->id)}}">{{$national_new->heading}}</a></h3>
			<span style="text-align:justify"><p class="excerpt-entry">@php echo str_limit($national_new->description,250) @endphp<a href="{{route('new.single',$national_new->id)}}"> Read more</a></p></span>
			
<div class="activity">
  <span class="views">{{$national_new->views()}}</span>
  <span class="comment"><a>{{$national_new->comments()->count()}}</a></span>
</div>

						</article><!--  /.post -->
						@else
						<article class="post last">
							<div class="thumb">
							<a href="{{URL::to($national_new->image)}}">
									<img  src="{{URL::to($national_new->image)}}" class="national" alt="img">
									</a>
							</div>
							<div class="cat">
							<a href="#">{{$national_new->media}}</a>
							</div>
							<h3><a href="{{route('new.single',$national_new->id)}}">{{$national_new->heading}}</a></h3>
							<span style="text-align:justify"><p class="excerpt-entry">@php echo str_limit($national_new->description,250) @endphp<a href="{{route('new.single',$national_new->id)}}"> Read more</a></p></span>
						
							@include('front.include.comment.national')

						</article><!--  /.post -->
						@endif
						@empty
						<article class="post">
							<div class="thumb">
								<a href="#"><img src="images/thumbs/" alt="img"></a>
							</div>
							<div class="cat">
								<a href="#"></a>
							</div>
							<h3><a href="#">No News</a></h3>
							<div class="activity">
								<span class="views">12</span><span class="comment"><a href="#">0</a></span>
							</div>
						</article><!--  /.post -->
                      @endforelse
					</div><!-- /.highlights-posts -->
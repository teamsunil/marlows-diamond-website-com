@extends('layouts.front.app')
@section('content')



<!--  Bread Crumb of blog start-->
<?php 

//$cateName[] = $data->cat_name->name;

$cateName = chnageColumnAccordingToLanguage($data, 'langPostCategory', ['name'], session()->get('language'));

?>
<div class="container">
	<div class="breadcrumb-navs">
		<ul><?php //dd($data); ?>
			<li>
				<a href="{{env('APP_URL')}}">Home</a>
			</li>
			<li>
				<a href="{{ asset($data->cat_name->slug) }}">
					@if (isset($cateName->langPosts[0]->cat_name->name))
						@php
							echo $cateName->langPosts[0]->cat_name->name;
						@endphp
					@elseif(isset($data->cat_name->name))
						@php
							echo $data->cat_name->name;
						@endphp
					@else
						@php
							echo 'Uncategorized';
						@endphp
					@endif
				</a>
			</li>
			<li>
				{{--  Change after SEO discuss 05Jan2023 seo_change --}}
				<a href="{{asset('blog/'.$data->slug)}}">{{isset($data->title)?$data->title:'Title'}}</a>
			</li>

		</ul>
	</div>
</div>

<!--  Bread Crumb of blog end-->
<div class="blogdetails-wrap">
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
				<div class="blogdetails-left">
					<div class="blog-title">
						<h1>{{$data->title}}</h1>
					</div>
					<div class="blos-list-date">
							<span>Published by</span>
							<span><i class="fa fa-user" aria-hidden="true"></i>   MarlowsDiamonds at </span>
							<span><i class="fa fa-clock-o" aria-hidden="true"></i> {{isset($data->created_at)?$data->created_at->format('M d, Y'):""}}</span>
						</div>
					<div class="blog-main-img">
						@if(!empty(($data->image)))
                           <img src="{{ env('APP_IMAGE_URL').'/storage/'.$data->image }}" alt="{{$data->title}}">
                        @endif
					</div>
					<div class="blogdetail-desc">
						<?php echo html_entity_decode($data->description);?>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="blog-search-field">
					<div class="formgroup blog-detail-search-field">
						{{-- <form> --}}
							<input type="text" name="search" class="blog-search-input blog-details-search-input" placeholder="Search for blog.." autocomplete="off">
							<button class="seach-btn blog-detail-search-button"  type="button">
								<img class="search-icon" src="{{ env('APP_IMAGE_URL').'/assets/images/search.png' }}" alt="search">
							</button>
						{{-- </form> --}}
					</div>
				</div>

				<div class="blogdetails-sidebar">
					<div class="blogall-categ">
						<div class="sidebar-title">
							All Categories
						</div>
						<ul>
							@php
								$getCategories = getCategories();
								$getCategories = chnageColumnAccordingToLanguage($getCategories, 'langPostCategory', ['name','description'], session()->get('language'));

							@endphp
							@foreach($getCategories as $category)
							{{--  Change after SEO discuss 05Jan2023 seo_change --}}
							<li><a href="{{ route('blog_list', $category->slug) }}">{{isset($category->name)?$category->name:""}}</a></li>
							{{-- <li><a href="{{ url( 'blog/' . (isset($category->slug)?$category->slug:"")) }}">{{isset($category->name)?$category->name:""}}</a></li> --}}
							@endforeach
						</ul>
					</div>
					<div class="blogall-latest-resc">
						<div class="sidebar-title">
							Latest Resources
						</div>
						<ul>
							@php
								$getRecentPosts = getRecentPosts();
								$getRecentPosts = chnageColumnAccordingToLanguage($getRecentPosts, 'langPosts', ['title', 'subtitle', 'short_description', 'description', 'image'], session()->get('language'));
							@endphp
							@foreach($getRecentPosts as $post)
							{{--  Change after SEO discuss 05Jan2023 seo_change --}}
							<li><a href="{{  url('/blog/'. (isset($post->slug)? $post->slug : "") ) }}">{{isset($post->title)?$post->title:""}}</a></li>
							{{-- <li><a href="/blog/{{isset($post->slug)?$post->slug:""}}">{{isset($post->title)?$post->title:""}}</a></li> --}}
							@endforeach
						</ul>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

<!-- Related Blog Section start -->

<div class="related-post-blog">
	<div class="container">
		<div class="head-para-three">
			<div class="heading-h-three">
				Related Posts
			</div>
		</div>
		<div class="related-post-slider">
			<div class="owl-carousel owl-theme related-post st-arrows">
				@php
					$getRelatedPosts = getRelatedPosts();
					$getRelatedPosts = chnageColumnAccordingToLanguage($getRelatedPosts, 'langPosts', ['title', 'subtitle', 'short_description', 'description', 'image'], session()->get('language'));
				@endphp
				@foreach($getRelatedPosts as $post)
				<div class="item">
			    	<div class="blos-listbox">
						<div class="blos-listbox-img">
							{{--  Change after SEO discuss 05Jan2023 seo_change --}}
							{{-- <a href="/blog/{{isset($post->slug)?$post->slug:""}}"> --}}
							<a href="{{ url('/blog/' . (isset($post->slug)?$post->slug:"")) }}">
								{{-- <img src="{{ env('APP_IMAGE_URL').'/storage/'.$post->image }}" alt="{{$post->title}}"> --}}
								@if(!empty(($post->image)))
									<img src="{{ env('APP_IMAGE_URL').'/storage/'.$post->image }}"  alt="{{$post->title}}">
								@else 
									<img src="{{ env('APP_IMAGE_URL').'/images/marlowsdiamonds-logo.png' }}"  alt="{{$post->title}}">
								@endif
							</a>
						</div>
						<div class="blos-listbox-text">
							<div class="blos-list-date">
								<span><i class="fa fa-user" aria-hidden="true"></i> MarlowsDiamonds at </span>
								<span><i class="fa fa-clock-o" aria-hidden="true"></i> {{isset($post->created_at)?$post->created_at->format('M d, Y'):""}} </span>
							</div>
							<div class="blos-list-title">
								{{--  Change after SEO discuss 05Jan2023 seo_change --}}
								<a href="{{ url('/blog/' . (isset($post->slug)?$post->slug:"")) }}">{{isset($post->title)?$post->title:""}}</a>
								{{-- <a href="/blog/{{isset($post->slug)?$post->slug:""}}">{{isset($post->title)?$post->title:""}}</a> --}}
							</div>
							<div class="blos-list-desc">
								{{isset($post->short_description)?$post->short_description:""}}
							</div>
							<div class="blog-readmore">
								{{--  Change after SEO discuss 05Jan2023 seo_change --}}
								<a class="btn-bg-small" href="{{ url('/blog/' . (isset($post->slug)?$post->slug:"")) }}">Read More</a>
								{{-- <a class="btn-bg-small" href="/blog/{{isset($post->slug)?$post->slug:""}}">Read More</a> --}}
							</div>
						</div>
					</div>
			    </div>
				@endforeach
			</div>
		</div>
	</div>
</div>

<!-- Related Blog Section End -->


@endsection


@section('js')
<script>
	const searchRedirect = "{{ url('blog') }}";
	$(document).ready(function() {
		$(document).on('click','.blog-detail-search-button', function(){
			redirectToBlog();
		});

		$(".blog-details-search-input").keyup(function(event) {
			if (event.keyCode === 13) { redirectToBlog(); }
		});

	});


	function redirectToBlog(){
		const searchKeyword = $(".blog-details-search-input").val();
		if(typeof searchKeyword!='undefined' && searchKeyword && searchKeyword!=''){
			const fullUrl = searchRedirect + '?searchKeyword=' + searchKeyword;
			window.location = fullUrl;
		}
	}

</script>
@endsection

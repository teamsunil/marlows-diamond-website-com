@foreach($posts as $post)

<div class="col-lg-4 col-sm-6">
				<div class="blos-listbox">
					<div class="blos-listbox-img">
						{{--  Change after SEO discuss 05Jan2023 seo_change --}}
						<a href="{{url('/blog/'.$post->slug)}}">
						 @if(!empty(($post->image)))
                           <img src="{{ env('APP_IMAGE_URL').'/storage/'.$post->image }}"  alt="{{$post->title}}">
                         @else <img src="{{ env('APP_IMAGE_URL').'/images/marlowsdiamonds-logo.png' }}"  alt="{{$post->title}}">
						 @endif
						</a>
					</div>
					<div class="blos-listbox-text">
						<div class="blos-list-date">
							<span><i class="fa fa-user" aria-hidden="true"></i> MarlowsDiamonds at </span>
							<span><i class="fa fa-clock-o" aria-hidden="true"></i> {{isset($post->created_at)?$post->created_at->format('M d, Y'):""}}</span>
						</div>
						<div class="blos-list-title">
							{{--  Change after SEO discuss 05Jan2023 seo_change --}}
							<a href="{{url('/blog/'.$post->slug)}}">{{isset($post->title)?$post->title:""}}</a>
						</div>
						<div class="blos-list-desc">
							<p>{{isset($post->short_description)?$post->short_description:""}}</p>
						</div>
						<div class="blog-readmore">
							{{--  Change after SEO discuss 05Jan2023 seo_change --}}
							<a class="btn-bg-small" href="{{url('/blog/'.$post->slug)}}">Read More</a>
						</div>
					</div>
				</div>
			</div>
@endforeach



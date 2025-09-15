@extends('layouts.front.app')
@section('content')



<!-- category header banner start -->
<div class="category-banner" style="background-image:url(assets/images/Marlows-Lab-Grown-Diamonds-Banner.png)">
	<div class="container">
		<div class="category-banner-text">
			<h1>{{$data->title}}</h1>
			<p>{!!$data->subtitle!!}</p>
		</div>
	</div>
</div>
{!!$data->description!!}

<!-- FAQ Section start here -->
<div class="faq-section engagement-ring-faq">
	<div class="container">
		<div class="head-para-three">
			<div class="heading-h-three">
				{{ __('labGroundTemplate.labGroundTitle') }}
			</div>
			<p>{{ __('labGroundTemplate.labGroundSubtitle') }}</p>
		</div>
		<div class="faq-list">
			<div class="accordion" id="accordionExample">
				@php
				$getEngagementFaqs = getFaqByCategory(7);
				@endphp
 <?php 
 $getEngagementFaqs = chnageColumnAccordingToLanguage($getEngagementFaqs, 'langFaq', ['title', 'description'], session()->get('language'));
 ?>
			  @foreach($getEngagementFaqs as $key => $faq)
					<div class="accordion-item">
						<h2 class="accordion-header" id="{{$faq->id}}">
							@if($key == 0)
								<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$faq->id}}" aria-expanded="true" aria-controls="collapse{{$faq->id}}">
							@else
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$faq->id}}" aria-expanded="true" aria-controls="collapse{{$faq->id}}">
							@endif
							{{isset($faq->title)?$faq->title:""}}
						  </button>
						</h2>
						@if($key == 0)
							<div id="collapse{{$faq->id}}" class="accordion-collapse collapse show" aria-labelledby="{{$faq->id}}" data-bs-parent="#accordionExample">
						@else
							<div id="collapse{{$faq->id}}" class="accordion-collapse collapse" aria-labelledby="{{$faq->id}}" data-bs-parent="#accordionExample">
						@endif
						  <div class="accordion-body">
						   {!! isset($faq->description)?$faq->description:"" !!}
						  </div>
						</div>
					</div>
				@endforeach

			</div>
			</div>
		</div>
	</div>
</div>


<!-- FAQ Section start here -->
<div class="faq-section engagement-ring-faq">
    <div class="container">
        <div class="head-para-three">
            <div class="heading-h-three">
				{{ __('labGroundTemplate.engagementTitle') }}
            </div>
            <p>{{ __('labGroundTemplate.engagementSubtitle') }}</p>
        </div>
        <div class="faq-list">
            <div class="accordion" id="accordionExample">
                @php
                $getEngagementFaqs = getEngagementFaqs();
                @endphp
			<?php 
			$getEngagementFaqs = chnageColumnAccordingToLanguage($getEngagementFaqs, 'langFaq', ['title', 'description'], session()->get('language'));
			?>	
                @foreach($getEngagementFaqs as $key => $faq)
                <div class="accordion-item">
                    <h2 class="accordion-header" id="{{$faq->id}}">
                        @if($key == 0)
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$faq->id}}" aria-expanded="true" aria-controls="collapse{{$faq->id}}">
                        @else
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$faq->id}}" aria-expanded="true" aria-controls="collapse{{$faq->id}}">
                        @endif
                        {{isset($faq->title)?$faq->title:""}}
                        </button>
                    </h2>
                    @if($key == 0)
                    <div id="collapse{{$faq->id}}" class="accordion-collapse collapse show" aria-labelledby="{{$faq->id}}" data-bs-parent="#accordionExample">
                        @else
                        <div id="collapse{{$faq->id}}" class="accordion-collapse collapse" aria-labelledby="{{$faq->id}}" data-bs-parent="#accordionExample">
                            @endif
                            <div class="accordion-body">
                                {!! isset($faq->description)?$faq->description:"" !!}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>


<!-- FAQ Section end here -->

<!-- Section Reviews -->
<div class="container">
<div class="rating-review-block">
				<div class="owl-carousel owl-theme slider-review">
				@include('front.pages.reviews')
				</div>
			</div>
</div>


<!-- insta photos section start -->
@include('front.includes.instagram-section')


<!-- insta photos section end -->



@endsection

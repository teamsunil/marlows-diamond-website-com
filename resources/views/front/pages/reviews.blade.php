@php
	$getReviews = getReviews();
	$getReviews1 = chnageColumnAccordingToLanguage($getReviews, 'langReview', ['title', 'description'],session()->get('language'));
@endphp
@foreach($getReviews1 as $review)
<div class="item">
	<div class="reviews-cont">
		<div class="reviewr-name">
			
			{{isset($review->title)?$review->title:""}}
		
		</div>
		<div class="reviewr-star">
			<img src="{{ env('APP_IMAGE_URL').'/assets/images/stars.png' }}" alt="star">
		</div>
		<div class="reviewr-review-text">
			{!! isset($review->description)?$review->description:"" !!}<a class="show-more" href="javascript:void(0)">Read more</a>
		</div>
	</div>
</div>
@endforeach
@extends('layouts.front.app')

@section('css')
	<style>
		.thumbnail{position:relative;padding:0;margin-bottom:20px}
		.thumbnail img{width:80%}
		.thumbnail .caption{margin:7px}
		.main-section{background-color:#f8f8f8}
		.dropdown{float:right;padding-right:30px}
		.btn{border:0;margin:10px 0;box-shadow:none !important}
		.dropdown .dropdown-menu{padding:20px;top:30px !important;width:350px !important;left:-110px !important;box-shadow:0 5px 30px #000}
		.total-header-section{border-bottom:1px solid #d2d2d2}
		.total-section p{margin-bottom:20px}
		.cart-detail{padding:15px 0}
		.cart-detail-img img{width:100%;height:100%;padding-left:15px}
		.cart-detail-product p{margin:0;color:#000;font-weight:500}
		.cart-detail .price{font-size:12px;margin-right:10px;font-weight:500}
		.cart-detail .count{color:#c2c2dc}
		.checkout{border-top:1px solid #d2d2d2;padding-top:15px}
		.checkout .btn-primary{border-radius:50px;height:50px}
		.dropdown-menu:before{content:" ";position:absolute;top:-20px;right:50px;border:10px solid transparent;border-bottom-color:#fff}
		.disabledAnchor a{pointer-events:none !important;cursor:default;color:#fff}span.price-not-found{font-size:14px;color:#8e2e65;font-weight:700}
		.error{color:#e74c3c !important}div#finaldiamondprice del{font-size:20px}


        .hide-items{ display: none; }
        .show-items{  display: flex;flex-wrap: wrap; }
		.metaltypeval{font-size: 15px;font-weight: bold;color:black}
		.tableheading{font-size: 17px; font-weight: bold;color:#fff !important;background:#8e2e65 }
		.tablehover:hover {background-color: #8e2e65; color: #fff}

		div.type-variations-row1 .type-variations-col label.label {
			display: inline-block;
		}
		div.type-variations-row1 .type-variations-col .diamond-filter-quote {
			display: inline-block;
			/* float: right; */
		}
		.quote-icon-pop .ma-info-icon img {
			max-width: 12px;
			position: absolute;
			top: -15px;
		}
		div.type-variations-row1 .type-variations-col select {
			margin: 8px 0 0;
		}
		.policy0icon{border: 1px solid #8e2e65;padding: 10px 15px 0px;width: 24%;text-align: center;border-radius: 10px;}
		.policysection{margin-top: 20px;display: flex;flex-wrap: wrap;justify-content: space-between;}
		.policyheading{color: #8e2e65;font-weight: bold;text-transform: capitalize;font-size: 13px;}
    	.policy0icon{border: 1px solid #8e2e65;padding: 7px 1px 0px;width: 24%;text-align: center;border-radius: 10px;}
		.policyimg{width: 40px;margin: 0 0 11px;}
		.policysection a {color: #8e2e65;}
		@media only screen and (max-width: 600px) {.policy0icon{border: 1px solid #8e2e65;padding: 10px 15px 0px;width: 48%;text-align: center;border-radius: 10px;margin-top: 10px;}}
</style>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.4/jquery.fancybox.css" rel="stylesheet" />

@endsection

@section('content')

<!-- product info and media -->

<div class="product-detail-wraper">
@php
$curr =  currencySymbol();
$MY_CURRENCY_SYMBOL = $curr['MY_CURRENCY_SYMBOL'];

@endphp
	<div class="container">
		<div class="product-detail-row flexed flex-flex-wrap">
			<div class="product-info-media">
				<a href="#" class="product-gallery__trigger"><i class="fa fa-search" aria-hidden="true"></i></a>

					<div id="carousel" class="owl-carousel">

						@if($prodImages)

							@foreach($prodImages as $key=>$images)
								@php
									$explode = explode('/',$images->image_url);
									$explode1 = explode('.',$explode[1]);
								@endphp
								<div class="item @if($key==0) active @endif"  >
									<a data-fancybox="gallery1" href="{{asset('/storage/'.$images->image_url)}}" data-caption="{{$explode1[0]}}"></a>
								</div>
							@endforeach
						@endif

					</div>

				<video id="variationVideo" style="width: 100%;" loop autoplay muted="1" playsinline>
					@if(isset($data->getProductVariation) && !empty($data->getProductVariation[0]->vari_video))
						<source src="{{ asset('storage/'.$data->getProductVariation[0]->vari_video)}}" type="video/mp4" type="video/mp4" />
					@else
						<source src="" type="video/mp4" type="video/mp4" />
					@endif
				</video>
				<div id="myDivChanges"></div>
			</div>
			
			<?php 
				// $getParentCategoryArray = explode(',',$data->cat_details);
				// $getParentCategory = '';
				// if(in_array('Engagement Rings',$getParentCategoryArray)){
				// 	$getParentCategory = $getParentCategoryArray[0];
				// 	$regular_price = $data->AdditionalPriceMetalType['regular_price'];
				// 	$lab_price = $data->AdditionalPriceMetalType['lab_price'];
				// }
			?>
			{{-- <input type="hidden" name="lab_price" id="lab_price" value="{{isset($lab_price)?$lab_price:742}}"> --}}
			
			<div class="product-info-main">
				<div class="product-title-name">
					<h1>{{isset($data->title)?$data->title:''}}</h1>
				</div>

				<div class="diamond-type">
					<label>Diamond Type</label>
					<div class="d-type-input">
						<input type="radio" name="attribute_choose-your-diamond" value="mined_diamond"  id="mined_item" class="diamond_type">
						<span>Mined Diamond</span>
					</div>
					<div class="d-type-input">
						<input type="radio" name="attribute_choose-your-diamond" value="lab_grown" id="lab_item" class="diamond_type" checked>
						<span>Lab Grown Diamond</span>
					</div>
				</div>
                <?php $default = "lab_grown"; ?>


				<div class="product-type-variations" id="filterDataDesign">
					<div class="type-variations-row">
					</div>
				</div>
                @if($plainbandMulti==false)

				{{-- Show items for lab grown only --}}
				<div id="apiCustomDesign">
					<div class="type-variations-row1 lab_item mined_lab_items {{ $default == "lab_grown" ? 'show-items' : 'hide-items' }}">
						<div class="type-variations-col">
							<label for="lab_grown_carat" class="label"> Central Diamond Weight </label>
							<div class="diamond-filter-quote">
								<div class="quote-icon-pop helping-text-container ">
									<a class="ma-info-icon" href="javascript:void(0)"><img src="{{asset('assets/images/marlows-info-icon.png')}}" alt="marlows-info-icon"></a>
									<div class="m-quote-pop" style="display: none;">
										THIS IS THE WEIGHT OF THE CENTRAL MAIN STONE OF YOUR ENGAGEMENT RING.ONE CARAT IS EQUAL TO 1/5 OF A GRAM MAKING DIAMONDS THE MOST EXPENSIVE MINERAL FOUND ON EARTH.
									</div>
								</div>
							</div>
							<select class="form-control lab_price_update_items " name="carat" id="lab_grown_carat">
								<option value="0.30-0.39" selected="selected">0.30-0.39</option>
								<option value="0.50-0.59">0.50-0.59</option>
								<option value="0.70-0.79">0.70-0.79</option>
								<option value="1.00-1.19" selected>1.00-1.19</option>
								<option value="1.50-1.69">1.50-1.69</option>
								<option value="2.00-2.49">2.00-2.49</option>
								<option value="3.00-3.99">3.00-3.99</option>
							</select>
						</div>
						<div class="type-variations-col">
							<label for="lab_grown_colour" class="label"> Colour </label>
							<div class="diamond-filter-quote">
								<div class="quote-icon-pop helping-text-container ">
									<a class="ma-info-icon" href="javascript:void(0)"><img src="{{asset('assets/images/marlows-info-icon.png')}}" alt="marlows-info-icon"></a>
									<div class="m-quote-pop" style="display: none;">
										SCALE REFLECTS NO PRESENCE OF COLOUR (D-F) BEING THE BEST, TINY HINT OF COLOUR (G-I) AND "WHITISH LOOKING" COLOURS (J-K). L-Z COLOURS ON GIA GRADING WILL SHOW SOME COLOUR IN THE DIAMOND TO THE NAKED EYE.
									</div>
								</div>
							</div>
							<select class="form-control lab_price_update_items " name="diamond-colour" id="lab_grown_colour">
								<option value="D" selected="selected">D - Exceptional White +</option>
								<option value="E">E - Exceptional White</option>
								<option value="F">F - Rare White +</option>
							</select>
						</div>
					</div>
				</div>

				{{-- Show items for lab grown only --}}
				<div class="type-variations-row1 lab_item mined_lab_items {{ $default == "lab_grown" ? 'show-items' : 'hide-items' }}">
					<div class="type-variations-col">
						<label for="lab_grown_clarity" class="label"> Clarity </label>
						<div class="diamond-filter-quote">
							<div class="quote-icon-pop helping-text-container ">
								<a class="ma-info-icon" href="javascript:void(0)"><img src="{{asset('assets/images/marlows-info-icon.png')}}" alt="marlows-info-icon"></a>
								<div class="m-quote-pop" style="display: none;">
									SCALE SHOWS THE PRESENCE OF BLEMISHES OR MARKS IN OR ON THE DIAMOND, IF BEING ABSOLUTELY NO BLEMISHES AND SI2 BEING SOME BLEMISHES SEEN WITH THE NAKED EYE.
								</div>
							</div>
						</div>
						<select class="form-control lab_price_update_items " name="diamond-clarity" id="lab_grown_clarity">
							<option value="VS1">VS1 - Very Small Inclusions</option>
							<option value="VS2" selected>VS2 - Very Small Inclusions</option>
							<option value="VVS1">VVS1 - Minute Inclusions</option>
							<option value="VVS2">VVS2 - Minute Inclusions</option>
						</select>
					</div>
				</div>

				{{-- Show items for mined only --}}
				<div id="apiCustomDesign">
					<div class="type-variations-row1 mined_item mined_lab_items {{ $default == "mined" ? 'show-items' : 'hide-items' }}">
						<div class="type-variations-col">
							<label for="carat" class="label"> Central Diamond Weight </label>
							<div class="diamond-filter-quote">
								<div class="quote-icon-pop helping-text-container ">
									<a class="ma-info-icon" href="javascript:void(0)"><img src="{{asset('assets/images/marlows-info-icon.png')}}" alt="marlows-info-icon"></a>
									<div class="m-quote-pop" style="display: none;">
										THIS IS THE WEIGHT OF THE CENTRAL MAIN STONE OF YOUR ENGAGEMENT RING.ONE CARAT IS EQUAL TO 1/5 OF A GRAM MAKING DIAMONDS THE MOST EXPENSIVE MINERAL FOUND ON EARTH.
									</div>
								</div>
							</div>
							<select class="form-control" name="carat" id="carat">
								<!-- <option value="">Choose an option</option> -->
								<option value="0.30-0.39" selected="selected">0.30-0.39</option>
								<option value="0.40-0.49">0.40-0.49</option>
								<option value="0.50-0.59">0.50-0.59</option>
								<option value="0.60-0.69">0.60-0.69</option>
								<option value="0.70-0.79">0.70-0.79</option>
								<option value="0.80-0.89">0.80-0.89</option>
								<option value="0.90-0.99">0.90-0.99</option>
								<option value="1.00-1.19">1.00-1.19</option>
								<option value="1.20-1.49">1.20-1.49</option>
								<option value="1.50-1.69">1.50-1.69</option>
								<option value="1.70-1.99">1.70-1.99</option>
								<option value="2.00-2.49">2.00-2.49</option>
								<option value="2.50-2.99">2.50-2.99</option>
								<option value="3.00-3.99">3.00-3.99</option>
							</select>
						</div>
						<div class="type-variations-col">
							<label for="diamond-colour" class="label"> Colour </label>
							<div class="diamond-filter-quote">
								<div class="quote-icon-pop helping-text-container ">
									<a class="ma-info-icon" href="javascript:void(0)"><img src="{{asset('assets/images/marlows-info-icon.png')}}" alt="marlows-info-icon"></a>
									<div class="m-quote-pop" style="display: none;">
										SCALE REFLECTS NO PRESENCE OF COLOUR (D-F) BEING THE BEST, TINY HINT OF COLOUR (G-I) AND "WHITISH LOOKING" COLOURS (J-K). L-Z COLOURS ON GIA GRADING WILL SHOW SOME COLOUR IN THE DIAMOND TO THE NAKED EYE.
									</div>
								</div>
							</div>
							<select class="form-control" name="diamond-colour" id="diamond-colour">
								<!-- <option value="">Choose an option</option> -->
								<option value="D" selected="selected">D - Exceptional White +</option>
								<option value="E">E - Exceptional White</option>
								<option value="F">F - Rare White +</option>
								<option value="G">G - Rare White</option>
								<option value="H">H - White</option>
								<option value="I">I - Slightly Tinted White</option>
								<option value="J">J - Slightly Tinted White</option>
								<option value="K">K - Tinted White</option>
							</select>
						</div>
					</div>

					<div class="type-variations-row1 mined_item mined_lab_items {{ $default == "mined" ? 'show-items' : 'hide-items' }}">
						<div class="type-variations-col">
							<label for="diamond-clarity" class="label"> Clarity </label>
							<div class="diamond-filter-quote">
								<div class="quote-icon-pop helping-text-container ">
									<a class="ma-info-icon" href="javascript:void(0)"><img src="{{asset('assets/images/marlows-info-icon.png')}}" alt="marlows-info-icon"></a>
									<div class="m-quote-pop" style="display: none;">
										SCALE SHOWS THE PRESENCE OF BLEMISHES OR MARKS IN OR ON THE DIAMOND, IF BEING ABSOLUTELY NO BLEMISHES AND SI2 BEING SOME BLEMISHES SEEN WITH THE NAKED EYE.
									</div>
								</div>
							</div>
							<select class="form-control" name="diamond-clarity" id="diamond-clarity">
								<!-- <option value="">Choose an option</option> -->
								<option value="IF">IF - Internally Flawless</option>
								<option value="VVS1">VVS1 - Minute Inclusions</option>
								<option value="VVS2">VVS2 - Minute Inclusions</option>
								<option value="VS1">VS1 - Very Small Inclusions</option>
								<option value="VS2">VS2 - Very Small Inclusions</option>
								<option value="SI1">SI1 - Small Inclusions</option>
								<option value="SI2" selected="selected">SI2 - Small Inclusions</option>
							</select>
						</div>
                        @if(isset($data->diamond_shape) && $data->diamond_shape == 'ROUND')
                            <div class="type-variations-col">
                                <label for="diamond-grade" class="label"> Cut Grade </label>
								<div class="diamond-filter-quote">
									<div class="quote-icon-pop helping-text-container ">
										<a class="ma-info-icon" href="javascript:void(0)"><img src="{{asset('assets/images/marlows-info-icon.png')}}" alt="marlows-info-icon"></a>
										<div class="m-quote-pop" style="display: none;">
											SCALE SHOWS THE OVERALL BRILLIANCE AND LIGHT REFLECTION (SPARKLE FACTOR) OF A DIAMOND. HEARTS & ARROWS AND IDEAL (EXCELLENT CUT) BEING THE BEST AND GOOD BEING AVERAGE. CUT GRADES ARE ONLY SHOWN FOR ROUND BRILLIANT CUT DIAMONDS.
										</div>
									</div>
								</div>
                                <select class="form-control" name="diamond-grade" id="diamond-grade">
                                    <!-- <option value="">Choose an option</option> -->
                                    <option value="EX" selected="selected">Excellent</option>
                                    <option value="VG">Very Good</option>
                                    <option value="GD">Good</option>
                                </select>
                            </div>
                        @endif
                        <div class="type-variations-col{{($data->diamond_shape == 'ROUND')?'-one':''}}">
							<label for="diamond-certificate" class="label"> Certificate </label>
							<div class="diamond-filter-quote">
								<div class="quote-icon-pop helping-text-container ">
									<a class="ma-info-icon" href="javascript:void(0)"><img src="{{asset('assets/images/marlows-info-icon.png')}}" alt="marlows-info-icon"></a>
									<div class="m-quote-pop" style="display: none;">
										THE LABORATORY THAT GRADES THE DIAMOND. WE STOCK ONLY THE BEST, GIA BEING THE FOREMOST FOLLOWED BY IGI AND HRD WHICH HAVE EQUALLY ACCEPTABLE STANDARDS OF GRADING.
									</div>
								</div>
							</div>
							<select class="form-control" name="diamond-certificate" id="diamond-certificate">
								<!-- <option value="">Choose an option</option> -->
								<option value="GIA" selected="selected">GIA</option>
								<option value="IGI">IGI</option>
							</select>
						</div>
					</div>
					<div class="type-variations-row1 mined_item mined_lab_items {{ $default == "mined" ? 'show-items' : 'hide-items' }}">
					</div>
					<div class="view-diamond-sec mined_item_block mined_lab_items {{ $default == "mined" ? 'show-items' : 'hide-items' }}">
						<div class="viewall-diamond-btn"><a class="btn-bg-large viewdiamond-btn"
								href="javascript:void(0)">View Available Diamonds</a></div>
						<div class="diamond-table">
							<div class="refine-heading">Refine Your Search</div>
							<div class="diamond-table-outer">
								<table width="100%" class="diamond-table-items">
									<thead>
										<tr>	
											<th>Shape</th>
											<th>Carat</th>
											<th>Colour</th>
											<th>Clarity</th>
                                            @if(isset($data->diamond_shape) && $data->diamond_shape == 'ROUND')
											<th class="cut_grade_th" style="display: block;">Cut</th>
                                            @endif
											<th>Cert</th>
											<th>Price</th>
											<th>Certificate</th>
											<th>Image</th>
											<th>Select</th>
										</tr>
									</thead>
									<tbody id="refineSearchData">
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
                @endif


				<div class="product-decriptions product-description-common product-description-common_mined_item" style="display: none;">
					{!!$data->description ? $data->description : $data->description!!}

				</div>
				<div class="product-decriptions product-description-common product-description-common_lab_item">
					{!! $data->lab_description ? $data->lab_description.'<br>'.$data->description :  $data->description  !!}
				</div>
				<div class="price-section">
					<div style="display: flex;">
						<h4><del style="color:#000" id="shopPrice"> </del> </h4>
						<div class="product-finder-price" id="finaldiamondprice" style="">
						</div>
					</div>
					<p><span style="color:green">You Save : <span id="savePrice"></span></span> |  <del id="rrpPrice"> </del> </p>
				</div>
				
				
				<input type="hidden" id="getLabDiamondPrices" name="getLabDiamondPrices" value="">


				<input type="hidden" id="certificate_url" name="certificate_url" value="">
				<input type="hidden" name="selected_variation_price" id="selected_variation_price" value="{{isset($variationDetails->regular_price)?$variationDetails->regular_price:$variationDetails->sale_price}}">
				<input type="hidden" name="selected_setting_price" id="selected_setting_price" value="0.00">
				<input type="hidden" name="selected_discounted_price" id="selected_discounted_price" value="0.00">
				<input type="hidden" name="selected_diamond_price" id="selected_diamond_price" value="0.00">
				<input type="hidden" name="selected_final_price" id="selected_final_price" value="0.00">
				<input type="hidden" name="selected_diamond_shape" id="selected_diamond_shape" value="{{$data->diamond_shape}}">
				<input type="hidden" name="selected_diamond_certno" id="selected_diamond_certno" value="">

				<div class="product-add-cart">
					<div class="product-to-wishlist">
						@php
							$wishlist = session()->get('wishlist', []);

							$wishListClass = "fa-heart-o";
							if(array_key_exists($data->id,$wishlist)){
								$wishListClass = "fa-heart";
							}
						@endphp
						<a href="javascript:void(0);" id="productWishList"><i class="fa {{$wishListClass}} wishcount" aria-hidden="true"></i></a>
					</div>
					<div class="product-to-basket">
						<!-- <a class="btn-bg-small" href="#">Add to basket</a> -->
						<!-- <a id="addtobasket" href="{{ route('add.to.cart', $data->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to basket</a> </p> -->
						<a id="addtobasket" href="javascript:void(0);" class="btn-bg-small" role="button">Add to basket</a>
					</div>
					<div class="product-req-appointment">
						<a type="button" class="btn-bg-small" onclick="if (!window.__cfRLUnblockHandlers) return false; $('label.error').css('display', 'none');return false;" data-bs-toggle="modal" data-bs-target="#requestAppointment">
						Request an Appointment
						</a>
					</div>
				</div>
				<div class="product-postactions">
					<a href="https://www.google.com/search?q=marlows+diamond+google+review&amp;oq=marlows+diamond+google+review&amp;aqs=chrome..69i57.8073j0j1&amp;sourceid=chrome&amp;ie=UTF-8#lrd=0x4870bcedd24f2c3d:0x1dc68827b10987fa,1,,," class="review-action" target="_blank">
						Reviews
					</a>
					<!-- <a target="_blank" class="review-action" href="#">Reviews</a> -->
					<a class="store-locator store-locator-border-right" href="{{asset('visit-us')}}">Store Locator</a>
					<!-- <a target="_blank" id="productCertificateLink" class="view-certificate mined-certificate" href="#">View Certificate</a> -->
				</div>
				{{-- <div class="finance-available" ng-controller="DekopayController">
					<a href="javascript:void(0)" ng-click="financeOptions()">
						<i class="fa fa-credit-card" aria-hidden="true"></i>
						<p>Finance Available
							<span>see options</span>
						</p>
					</a>
					<div class="doko-img">
						<img src="{{ env('APP_IMAGE_URL').'/assets/images/Deko_square_colour_whiteBG200px_wide.png' }}" alt="doko">
					</div>
				</div> --}}
				<div class="policysection">
					<div class="policy0icon"><img src="{{env('APP_IMAGE_URL').'/images/warranty.png'}}" class="policyimg"><h6 class="policyheading"><a href="/terms">Lifetime <br> Warranty (T&C)</a> </h6></div>
					<div class="policy0icon"><img src="{{env('APP_IMAGE_URL').'/images/shipped.png'}}"class="policyimg"><h6 class="policyheading"><a href="/terms">Free Delivery & <br> Collection </a> </h6></div>
					<div class="policy0icon" ><img src="{{env('APP_IMAGE_URL').'/images/certificate.png'}}"class="policyimg"><h6 class="policyheading"> <a href="/terms">Diamond Quality <br> Certificate</a> </h6></div>
					<div class="policy0icon"><img src="{{env('APP_IMAGE_URL').'/images/return.jpg'}}"class="policyimg"><h6 class="policyheading"><a href="/terms">30 Days<br> Return </a> </h6></div>
				</div>

			</div>
		</div>
	</div>
</div>

<!-- Related Product start heRe -->
<div class="related-products-section">
	<div class="container">
		<div class="head-para-three">
			<div class="heading-h-three">
				{!! __('productDetailsDNO.reletedProductTitle') !!}
			</div>
		</div>
		<div class="related-products-list">
			<div id="relatedProductData" class="related-product">

			</div>

		</div>
	</div>
</div>
<!-- Related Product end heRe -->

<!-- FAQ Section start here -->
<div class="faq-section">
	<div class="container">
		<div class="head-para-three">
			<div class="heading-h-three">
				{!! __('productDetailsDNO.mainHeading') !!}
			</div>
			<p>{!! __('productDetailsDNO.subheading') !!}</p>
		</div>
		<div class="faq-list">
			<div class="accordion" id="accordionExample">
				<div class="accordion-item">
					<h2 class="accordion-header" id="headingOne">
						<button class="accordion-button" type="button" data-bs-toggle="collapse"
							data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							{!! __('productDetailsDNO.accTitle_0') !!}
						</button>
					</h2>
					<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
						data-bs-parent="#accordionExample">
						<div class="accordion-body">
						{!! __('productDetailsDNO.accText_0') !!}
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 class="accordion-header" id="headingTwo">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
							data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							{!! __('productDetailsDNO.accTitle_1') !!}
						</button>
					</h2>
					<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
						data-bs-parent="#accordionExample">
						<div class="accordion-body">
							{!! __('productDetailsDNO.accText_1') !!}
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 class="accordion-header" id="headingThree">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
							data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							{!! __('productDetailsDNO.accTitle_2') !!}
						</button>
					</h2>
					<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
						data-bs-parent="#accordionExample">
						<div class="accordion-body">
							{!! __('productDetailsDNO.accText_2') !!}
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 class="accordion-header" id="headingFour">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
							data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
							{!! __('productDetailsDNO.accTitle_3') !!}
						</button>
					</h2>
					<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
						data-bs-parent="#accordionExample">
						<div class="accordion-body">
							{!! __('productDetailsDNO.accText_3') !!}
							<div class="vew-tc-btn">
								<a class="btn-bg-small" href="/terms">{!! __('productDetailsDNO.button_3') !!}</a>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
<!-- FAQ Section end here -->

<!-- image and text start here -->
<div class="product-image-text-sec">
	<div class="container">
		<div class="leftright-img-text-wraper">
			<div class="leftright-imt-rows flexed flex-flex-wrap flex-items-center">
				<div class="leftright-imt-col leftright-text">
					<div class="leftright-heading heading-h-three">
						{!! __('productDetailsDNO.imageandTextTitle') !!}
					</div>
					<p>{!! __('productDetailsDNO.imageandTextText') !!}</p>
					<div class="viewguide-btn">
						<a class="btn-bg-small" href="#">{!! __('productDetailsDNO.imageandTextButton') !!}</a>
					</div>
				</div>
				<div class="leftright-imt-col leftright-img">
					<img src="{{ env('APP_IMAGE_URL').'/assets/images/perfect-ring.jpg' }}" alt="perfect-ring">
				</div>

			</div>
		</div>
	</div>
</div>
<!-- image and text end here -->

<!-- Section Reviews -->
<div class="container">
	<div class="rating-review-block">
		<div class="owl-carousel owl-theme slider-review">
		@include('front.pages.reviews')
		</div>
	</div>
</div>


<!-- Modal -->
<div class="modal fade" id="requestAppointment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Request an appointment</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="col-lg-12">
			<!-- Success message -->
			@if(Session::has('success'))
				<div class="alert alert-success">
					{{Session::get('success')}}
				</div>
			@endif
				<div class="visit-form">

					<form id="contactForm">
					@csrf
                        <input type="hidden" name="custom_url" id="custom_url" value="{{url()->full()}}">
						<div class="form-controls">
							<input type="text" name="title" id="title" class="{{ $errors->has('title') ? 'error' : '' }}" placeholder="Your Name">
							<!-- Error -->
							@if ($errors->has('name'))
							<div class="error">
								{{ $errors->first('name') }}
							</div>
							@endif
						</div>
						<div class="form-controls">
							<input type="email" name="email" id="email" class="{{ $errors->has('email') ? 'error' : '' }}" placeholder="Your Email Address">
							@if ($errors->has('email'))
							<div class="error">
								{{ $errors->first('email') }}
							</div>
							@endif
						</div>
						<div class="form-controls">
							<input type="text" name="phone" id="phone" class="{{ $errors->has('phone') ? 'error' : '' }}" placeholder="Your Contact No.">
							@if ($errors->has('phone'))
							<div class="error">
								{{ $errors->first('phone') }}
							</div>
							@endif
						</div>
						<div class="form-controls">
							<textarea name="description" id="description" class="{{ $errors->has('description') ? 'error' : '' }}"  placeholder="Your Message"></textarea>
							@if ($errors->has('description'))
							<div class="error">
								{{ $errors->first('description') }}
							</div>
							@endif
						</div>
						<div class="action-submit">
							<button type="submit" name="send" value="Submit">Send Message</button>
						</div>
					</form>

				</div>
		</div>
      </div>

    </div>
  </div>
</div>


<!-- Modal -->
{{-- @include('front.includes.dekopay-finance-options') --}}



@endsection

@section('js')

	<script src="{{$url}}"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.4/jquery.fancybox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
	<script>

		function changeDiamondType(classToPerform="") {

			if(classToPerform == 'mined_item'){
				$(".mined-certificate").removeAttr('style');
				$(".store-locator-border-right").css('border-right','1px solid #B0B0B0');
				$("#selected_diamond_price").val($('.refinedata').first().data('price'));
			}else{
				$(".mined-certificate").css('display','none');
				$(".store-locator-border-right").css('border-right','none');

			}
			$(".mined_lab_items").css('display','none');
			$("." + classToPerform).css('display','flex');
			$("." + classToPerform + "_block").css('display','block');

			/** show and hide description */
			$(".product-description-common").css('display','none');
			$(".product-description-common_"+classToPerform).css('display','block');

			// getFinalPrice();
		}
       

		$(".lab_price_update_items").on('change', function() {
			changeDiamondType($('.diamond_type:checked').attr("id"));
		});


		$(document).on('change', '.diamond_type' , function(event) {
			getCustomFilter();
			setTimeout(function(){
				changeDiamondType($(event.target).attr("id"));
				
			}, 500);
			// getCustomPriceFinalFunction();
			let getDiamondType = $(this).val();
			getSelectedDataVariation();
			if(getDiamondType == 'lab_grown'){
				getProdVideo('onChange',' 9ct White Gold ');
			}else if(getDiamondType == 'mined_diamond'){
				getProdVideo('onChange','Platinum');
			}
		});

		
        function blankForm(){
            $('input[name="title"]').val('');
            $('input[name="email"]').val('');
            $('input[name="phone"]').val('');
            $('textarea[name="description"]').val('');
            $("button[type='submit']").prop('disabled',false);
            $('#requestAppointment').modal('hide');
            // grecaptcha.reset();
        }

		$.validator.addMethod("phoneno", function(phone_number, element) {
			phone_number = phone_number.replace(/\s+/g, "");
			return phone_number.length > 9 ;
		}, "Please specify a valid phone number");

		jQuery.validator.addMethod("lettersonly", function(value, element) {
			return this.optional(element) || /^[a-z," "]+$/i.test(value);
		}, "Letters and spaces only please"); 

		$(document).ready(function(){
		    toastr.options = {
    			"preventDuplicates": true,
    			"preventOpenDuplicates": true
    		};
            $('form#contactForm').validate({
                rules: {
                    title: {
                        required: true,
						lettersonly: true
                    },
                    email: {
                        required: true,
                        email: true
                    },
					phone: {
						digits: true,
						phoneno:true
					},
                    description: {
                        required: true,
                    }
                },
                messages: {
                    title: {
                        required: 'Name is required',
                    },
                    email: {
                        required: 'Email is required',
                        email: 'Valid email is required',
                    },
                    phone: {
                        required: 'Phone is required',
						digits: 'Phone is only Digits',
                    },
                    description: {
                        required: 'Description is required',
                    }
                },
                submitHandler: function (form) {
                    // if (grecaptcha.getResponse()) {
                        var form_data = new FormData(form);
                        $(form).find("button[type='submit']").prop('disabled',true);
                        $("button[type='submit']").text("Please Wait...");
                        $.ajax({
                            url: "{{ route('contact') }}",
                            method: "POST",
                            cache:false,
                            contentType:false,
                            processData: false,
                            data: form_data,
                            success: function (response) {
                                $("button[type='submit']").text("Send Message");
                                if(response.status == 200){
                                    toastr.success(response.success);
                                }else{
                                    toastr.info(response.error);
                                }
                                blankForm();
                            }
                        });
                    // } else {
                    //     alert('Please confirm captcha to proceed')
                    // }
                }
            });

            getRelatedProduct();
			getCustomFilter();

			$(".viewdiamond-btn").click(function(){
				$(".diamond-table").toggle();
			});

			// TODO: getSelectedAttributePrice();

			$(document).on('change', "#metal-type,#finger-size,#lab_grown_carat,#lab_grown_colour,#lab_grown_clarity,#carat,#diamond-colour,#diamond-clarity,#diamond-certificate", function(){
				getSelectedAttributePrice();
				getProdVideo();
				getCustomPriceFinalFunction();
				getSelectedDataVariation();
			});

			$('#addtobasket').on('click',function(){
				addtobasketFunction('{{route("add.to.cart")}}','{{$data->slug}}','');
			});

			$("#productWishList").on('click',function(){
				addtobasketFunction('{{route("set-product-wishlist")}}','{{$data->slug}}','');
			});
			$(document).on('change','#metal-type',function(){
				getProdVideo('onChange');
			});

			$(document).on('click','.refinedata',function(){
				// console.log($(this).data('price'));
				getCustomPriceFinalFunction(getNumberFromCurrency($(this).data('price')));
				// $("#selected_diamond_price").val($(this).data('price'));
				// $("#certificate_url").val($(this).data('certurl'));
				// $("#productCertificateLink").attr('href',$(this).data('certurl'));
				// getFinalPrice();
			});
		});

		function getCustomFilter(){

			$.ajax({
                type: 'POST',
                url: '{{route("custom-filter")}}',
                data: {
                    '_token': "{{csrf_token()}}",
					'slug' : '{{$data->slug}}',
					'diamond_type': $('.diamond_type:checked').val(),
                    'metal-type' : '{{ isset($requestData["metal-type"]) ? $requestData["metal-type"] : "" }}',
                },
                success: function (res) {
					$('#filterDataDesign .type-variations-row').html(res);
					getCustomPriceFinalFunction();
					getSelectedDataVariation();
                }
            });
		}

		function getProdVideo(action=null,metalType=null){
			if(metalType == null){
				var metal_type = $('#metal-type :selected').val();
			}else{
				var metal_type = metalType;
			}
			$.ajax({
				type: 'POST',
				url: '{{route("get-product-video")}}',
				data: {
					'_token': "{{csrf_token()}}",
					'slug' : '{{$data->slug}}',
					'metal_color' : metal_type,
					'diamond_type' : $('.diamond_type:checked').attr("value"),
				},
				success: function (res) {
					if(res.vari_video){
						var videoUrl = "{{ asset('storage/')}}/"+res.vari_video;
						$('#variationVideo').attr('src', videoUrl);
						$("#variationVideo")[0].play();
					}
				}
			});
		}
		function getNumberFromCurrency(currency) {
			return Number(currency.replace(/[$,]/g,''))
		}

		function getCustomPriceFinalFunction(selectedDiamondPrice=null){
			$('#price-section').html('{{$MY_CURRENCY_SYMBOL}} Pending...');
			$('#getLabDiamondPrices').val('');
			var variations = [];
			$('.type-variations-row select').each(function(i, sel){
				if($(sel).attr('name')!='finger-size')
					variations.push($(sel).val());
			});

			let diamondCaratWeight;
			let diamondColour;
			var diamondShape;
			let diamondGrade;
			let diamondClarity;
			let diamondCertificate;
			if($('.diamond_type:checked').val() == 'mined_diamond'){
				diamondCaratWeight = $('#carat').val();
				diamondColour = $('#diamond-colour').val();
				diamondShape = $('#selected_diamond_shape').val();
				diamondGrade = $('#diamond-grade').val();
				diamondClarity = $('#diamond-clarity').val();
				diamondCertificate = $('#diamond-certificate').val();
			}else if($('.diamond_type:checked').val() == 'lab_grown'){
				diamondCaratWeight = $('#lab_grown_carat').val();
				diamondColour = $('#lab_grown_colour').val();
				diamondShape = $('#selected_diamond_shape').val();
				diamondGrade = '';
				diamondClarity = $('#lab_grown_clarity').val();
				diamondCertificate = '';
			}

			$.ajax({
                type: 'POST',
                url: '{{route("get-product-variation-prices")}}',
                dataType: 'json',
                data: {
                    '_token': "{{csrf_token()}}",
					'metal_type' : $('#metal-type').val(),
					'variations' : variations,
					'carat' : diamondCaratWeight,
					'color' : diamondColour,
					'grade' : diamondGrade,
					'clarity' : diamondClarity,
					'certificate' : diamondCertificate,
					'shape' : diamondShape,
					'selectedDiamondPrice' : selectedDiamondPrice,
					'slug': '{{$data->slug}}',
					'type': 1, 
					'diamond_type' : $('.diamond_type:checked').val()
                },
                success: function (res) {
					if(res.status == 200){
						$('#rrpPrice').html('RRP: {{$MY_CURRENCY_SYMBOL}} ' + res.allPrices.rrp_price.toFixed(2));
						if(res.allPrices.shop_price == res.allPrices.discounted_price){
						    $('#shopPrice').html('');
						}else{
						    $('#shopPrice').html('{{$MY_CURRENCY_SYMBOL}} ' + res.allPrices.shop_price.toFixed(2));
						}
						$('#finaldiamondprice').html('<span class="price" >{{$MY_CURRENCY_SYMBOL}} '+res.allPrices.discounted_price.toFixed(2)+' </span>');
						$('#savePrice').html('{{$MY_CURRENCY_SYMBOL}} ' + (parseFloat(res.allPrices.rrp_price) - parseFloat(res.allPrices.discounted_price)).toFixed(2));
						$('#getLabDiamondPrices').val(res.getLabDiamondPrices.toFixed(2));
					}else if(res.status == 500){
						$('#price-section').html('{{$MY_CURRENCY_SYMBOL}} Pending...');
						$('#getLabDiamondPrices').val('');
					}
                }
            });
		}

		$(document).on('click', "[id^=productWishListRelated]", function () {
			var index = parseInt($(this).attr("id").replace("productWishListRelated", ''));
			var product_slug = $('#productWishListRelated'+index).data('productslug');
			addtobasketFunction('{{route("set-product-wishlist")}}',product_slug,index);
		});

		function addtobasketFunction(getUrl,product_slug=null,index=null){

			let lab_grown_price = $("#finaldiamondprice .price").text().replace("£", "");
			
			let diamondCaratWeight;
			let diamondColour;
			var diamondShape;
			let diamondGrade;
			let diamondClarity;
			let diamondCertificate;
			if($('.diamond_type:checked').val() == 'mined_diamond'){
				diamondCaratWeight = $('#carat').val();
				diamondColour = $('#diamond-colour').val();
				diamondShape = $('#selected_diamond_shape').val();
				diamondGrade = $('#diamond-grade').val();
				diamondClarity = $('#diamond-clarity').val();
				diamondCertificate = $('#diamond-certificate').val();
			}else if($('.diamond_type:checked').val() == 'lab_grown'){
				diamondCaratWeight = $('#lab_grown_carat').val();
				diamondColour = $('#lab_grown_colour').val();
				diamondShape = $('#selected_diamond_shape').val();
				diamondGrade = '';
				diamondClarity = $('#lab_grown_clarity').val();
				diamondCertificate = '';
			}

			var variations = [];
			$('.type-variations-row select').each(function(i, sel){

				if($(sel).attr('name')!='finger-size')
					variations.push($(sel).val());
			});
			$.ajax({
                type: 'POST',
                url: getUrl,
                data: {
                    '_token': "{{csrf_token()}}",
					'carat' : diamondCaratWeight,
					'variations' : variations,
					'color' : diamondColour,
					'clarity' : diamondClarity,
					'grade' : diamondGrade,
					'fingersize' : $('#finger-size').val(),
					'metal_type' : $('#metal-type').val(),
					'certificate' : diamondCertificate,
					'slug' : product_slug,
					'setting_price': lab_grown_price, //parseFloat($('#price').val()) || 0;
					'price': lab_grown_price, //parseFloat($('#price').val()) || 0;
					'selectedDiamondPrice' : $('#getLabDiamondPrices').val(),
					'certificatelink': $('#certificate_url').val() || '',
					'shape': diamondShape,
					'type': 1,
					'certificate': $('#selected_diamond_certno').val() || '',
					'diamond_type' : $(".diamond_type:checked").val(),
                    'jsondata' : $('input[name="selectrefinedata"]:checked').data('jsonvalue'),

                },
                success: function (res) {
					// console.log(res);
					if(res.success != '' && typeof res.success !== "undefined"){
						if(res.cartcount){
							$(".cartcount").text(res.cartcount);
						}
						if(res.wishcount){
							if(index>0){
								$('#productWishListRelated'+index).children('i').addClass('fa-heart');
								$('#productWishListRelated'+index).children('i').removeClass('fa-heart-o');
							}else{
								$('#productWishList'+index).children('i').removeClass('fa-heart-o');
								$('#productWishList'+index).children('i').addClass('fa-heart');
							}
						}
						toastr.success(res.success);
					}else{
						if(res.error){
							if(index>0){
								$('#productWishListRelated'+index).children('i').removeClass('fa-heart');
								$('#productWishListRelated'+index).children('i').addClass('fa-heart-o');
							}else{
								$('#productWishList'+index).children('i').removeClass('fa-heart');
								$('#productWishList'+index).children('i').addClass('fa-heart-o');
							}
						}
						toastr.info(res.error);
					}
                }
            });
		}

        getSelectedAttributePrice();
		var triggerLab = true;
		function getSelectedAttributePrice(){

			$('#finaldiamondprice').html('<span class="price" >{{$MY_CURRENCY_SYMBOL}} Pending... </span>');
			$('#addtobasket').addClass('disabledAnchor');

			var caratVal = $('#carat').val();
			var diamondColor = $('#diamond-colour').val();
			var diamondClarity = $('#diamond-clarity').val();
			var diamondGrade = $('#diamond-grade').val();
			var diamondCertificate = $('#diamond-certificate').val();
			var diamondShape = $('#selected_diamond_shape').val();
			var variation_price = $('#selected_variation_price').val();
			
			$.ajax({
                type: 'POST',
                url: '{{route("custom-api-filter-data")}}',
                data: {
                    '_token': "{{csrf_token()}}",
					'carat' : caratVal,
					'color' : diamondColor,
					'clarity' : diamondClarity,
					'grade' : diamondGrade,
					'certificate' : diamondCertificate,
					'shape' : diamondShape,
					'slug': '{{$data->slug}}'
                },
                success: function (res) {

					$('#refineSearchData').html("");
					if(res.html != ''){
						$('#refineSearchData').html(res.html);
						//getCustomPrice();
						$("#selected_diamond_price").val($('.refinedata').first().data('price'));
					}else{
						$('#refineSearchData').html("No Data Found");
					}
                }
            });
		}

		function getSelectedDataVariation(){
          
			let designTable = `<table class="table  table-bordered  table-responsive">
						<tr class="tableheading text-white tablehover">
						<th>Type</th>
						<th>Selected</th>
						</tr>`;


			$('.type-variations-col').each(function() { 
				// var caret=document.getElementById('lab_grown_carat').val();
				let forId = $(this).find('label').attr('for');
				console.log(forId);
				let forText = $(this).find('label').text();
				const diamondType = $('.diamond_type:checked').val();
				if ((diamondType === 'lab_grown') && (forId === 'diamond-certificate' || forId === 'diamond-colour' || forId === 'diamond-clarity' || forId === 'carat')) {
				} else if ((diamondType === 'mined_diamond') && (forId === 'lab_grown_carat' || forId === 'lab_grown_colour' || forId === 'lab_grown_clarity')) {
				} else {
			  designTable += `
				<tr>
				<td>${forText}</td>
				<td>${$('#'+forId).val()}</td>
				</tr>
			`;
			}			
			});
			designTable += `</table>`;
			$('#myDivChanges').html(designTable);
			}

        function getRelatedProduct(){
            $.ajax({
                url: "{{ route('get.related.product.list') }}",
                method: "POST",
                data: {
                    _token: '{{ csrf_token() }}',
                    catid: '{{$data->categories}}',
                },
                success: function (response) {
                    // console.log(response.html);
                    $('#relatedProductData').html(" ");
                    if(response.html){
                        $('#relatedProductData').append(response.html);
                    }
                    // return false;
                    // window.location.reload();
                }
            });
        }
        $(document).on('click','.product-gallery__trigger',function(e){
			e.preventDefault();
			$('#carousel .item.active a').click();
		});

		var popElement = document.getElementsByClassName("helping-text-container");
		document.addEventListener('click', function(event) {
			for(i=0; i < popElement.length; i++){
				popEl = popElement[i];
				var isClickInside = popEl.contains(event.target);

				$('.m-quote-pop').css('display','none');

				if (!isClickInside) {
					$(popEl).find(".m-quote-pop").css('display','none');
				} else {
					if($(popEl).find('.m-quote-pop').is(':visible')){
						$(popEl).find('.m-quote-pop').css('display','none');
					}else{
						$(popEl).find(".m-quote-pop").css('display','block');
					}

					break;
				}
			}
		});


    </script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
@endsection

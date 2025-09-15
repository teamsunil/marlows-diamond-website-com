@extends('layouts.front.app')

@section('css')
	<style>
		.thumbnail {position: relative;padding: 0px;margin-bottom: 20px;}
		.thumbnail img {width: 80%;}
		.thumbnail .caption{margin: 7px;}
		.main-section{background-color: #F8F8F8;}
		.dropdown{float:right;padding-right: 30px;}
		.btn{border:0px;margin:10px 0px;box-shadow:none !important;}
		.dropdown .dropdown-menu{padding:20px;top:30px !important;width:350px !important;left:-110px !important;box-shadow:0px 5px 30px black;}
		.total-header-section{border-bottom:1px solid #d2d2d2;}
		.total-section p{margin-bottom:20px;}
		.cart-detail{padding:15px 0px;}
		.cart-detail-img img{width:100%;height:100%;padding-left:15px;}
		.cart-detail-product p{margin:0px;color:#000;font-weight:500;}
		.cart-detail .price{font-size:12px;margin-right:10px;font-weight:500;}
		.cart-detail .count{color:#C2C2DC;}
		.checkout{border-top:1px solid #d2d2d2;padding-top: 15px;}
		.checkout .btn-primary{border-radius:50px;height:50px;}
		.dropdown-menu:before{content: " ";position:absolute;top:-20px;right:50px;border:10px solid transparent;border-bottom-color:#fff;}span.price-not-found {font-size: 14px;color: #8e2e65;font-weight: bold;}
		.error {color: #e74c3c !important;}
		div#finaldiamondprice span del {font-size: 20px;}
		.metaltypeval{font-size: 15px;font-weight: bold;color:black}
		.tableheading{font-size: 17px; font-weight: bold;color:#fff !important;background:#8e2e65 }
		.tablehover:hover {background-color: #8e2e65; color: #fff}
		.policy0icon{border: 1px solid #8e2e65;padding: 10px 15px 0px;width: 24%;text-align: center;border-radius: 10px;}
		.policysection{margin-top: 20px;display: flex;flex-wrap: wrap;justify-content: space-between;}
		.policyheading{color: #8e2e65;font-weight: bold;text-transform: capitalize;font-size: 13px;}
    	.policy0icon{border: 1px solid #8e2e65;padding: 7px 1px 0px;width: 24%;text-align: center;border-radius: 10px;}
		.policyimg{width: 40px;margin: 0 0 11px;}
		.policysection a {color: #8e2e65;}
		@media only screen and (max-width: 600px) {.policy0icon{border: 1px solid #8e2e65;padding: 10px 15px 0px;width: 48%;text-align: center;border-radius: 10px;margin-top: 10px;}}
		/* .carousel-thumbnails li{ -webkit-filter: brightness(80%); filter:brightness(80%); border: 1px solid transparent;}
		.carousel-thumbnails li.active {filter: brightness(100%); border: 1px solid #8e2e65; border-radius: 1px;} */
	</style>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
	<link href="{{ asset('assets/vendors/fancybox-master/dist/jquery.fancybox.min.css') }}" rel="stylesheet" />


@endsection

@section('content')


<div class="product-detail-wraper">

@php
$curr =  currencySymbol();
$MY_CURRENCY_SYMBOL = $curr['MY_CURRENCY_SYMBOL'];

	$categorySlug = '';
	if(in_array('wedding-rings',$all_categories_slug)){
		$categorySlug = 'wedding-rings';
	}
@endphp
	<div class="container">
		<div class="product-detail-row flexed flex-flex-wrap">

			<div class="product-info-media">

				<a href="#" class="product-gallery__trigger"><i class="fa fa-search" aria-hidden="true"></i></a>

			@if($plainbandMulti==false)
				<div id="carousel" class="owl-carousel">
							@if($variationImages)
								@foreach($variationImages as $images)
									<div class="item product-items-carousel">
										<a data-fancybox="gallery2" href="{{asset('/storage/'.$images->vari_image)}}" data-caption="{{isset($data->title)?$data->title:''}}">
										<img class="thumbnail-src" src="{{ env('APP_IMAGE_URL').'/storage/'.$images->vari_image }}" alt="{{isset($data->title)?$data->title:''}}">
										</a>
									</div>
								@endforeach
							@endif

							@if(isset($prodImages) && $prodImages)
								@foreach($prodImages as $images)
									@if(isset($images->image_url) && !empty($images->image_url))
										@php
											$explode = explode('/',$images->image_url);
											$explode1 = explode('.',$explode[1]);
											$ext = pathinfo($images->image_url, PATHINFO_EXTENSION);
											$video_extensions = ['mp4'];
										@endphp

										@if(isset($images->is_featured) && $images->is_featured != 1)
											<div class="item product-items-carousel">
												<a data-fancybox="gallery2" href="{{asset('/storage/'.$images->image_url)}}" data-caption="{{isset($data->title)?$data->title:''}}">
													<?php if(in_array($ext,$video_extensions)){ ?>
														<video style="width: 100%;" loop autoplay muted="1" playsinline>
															<source class="thumbnail-src" src="{{env('APP_IMAGE_URL').'/storage/'.$images->image_url}}"  type="video/mp4" type="video/mp4" />
														</video>
													<?php }else{ ?>
														<img class="thumbnail-src" src="{{env('APP_IMAGE_URL').'/storage/'.$images->image_url}}" alt="{{isset($data->title)?$data->title:''}}">
													<?php } ?>
												</a>
											</div>
										@endif
									@endif
								@endforeach
							@endif
						</div>
						<?php
							$thumbailsAllowed =	getMasterValuesByType('slider_thumbnails');
							if(in_array($data->id, $thumbailsAllowed)){
						?>
							<ol class="carousel-indicators list-inline carousel-thumbnails" style="d-none">
							</ol>
						<?php } ?>
					@else
						<div id="carousel1" class="owl-carousel1"> 
							@if($prodImages)
								@foreach($prodImages as $key => $images)
									@if(isset($images->image_url) && !preg_match("/\.(mp4)$/", $images->image_url))
										<div class="item product-items-carousel @if($key == 0) active @endif">
											<a data-fancybox="gallery2" href="{{asset('/storage/'.$images->image_url)}}" data-caption="{{isset($data->title)?$data->title:''}}">
											</a>
										</div>
									@endif
								@endforeach
							@endif
						</div>
						<video id="variationVideo" style="width: 100%;" loop autoplay muted="1" playsinline>
							@if(isset($data->getProductVariation) && !empty($data->getProductVariation[0]->vari_video))
								<source src="{{env('APP_IMAGE_URL').'/storage/'.$data->getProductVariation[0]->vari_video}}" type="video/mp4" type="video/mp4" />
							@else
								<source src="" type="video/mp4" type="video/mp4" />
							@endif
						</video>
					@endif
                   <div id="myDivChanges"></div> 
			
			</div>
			<div class="product-info-main">
				<div class="product-title-name">
					<h1>{{isset($data->title)?$data->title:''}}</h1>
				</div>

				@if($plainband==false)
					@if(!in_array('exclusive-to-marlows', $all_categories_slug))
					<div class="diamond-type">
						<label>Choose Your Diamond</label>
						@if(isset($requestData["diamond_type"]) && $requestData["diamond_type"] == 'mined')
							<div class="d-type-input">
								<input type="radio" name="attribute_choose-your-diamond" class="diamond_type"  checked value="mined_diamond">
								<span>Mined Diamond</span>
							</div>
							<div class="d-type-input">
								<input type="radio" name="attribute_choose-your-diamond" class="diamond_type" value="lab_grown">
								<span>Lab Grown Diamond</span>
							</div>
						@else
							<div class="d-type-input">
								<input type="radio" name="attribute_choose-your-diamond" class="diamond_type" value="mined_diamond">
								<span>Mined Diamond</span>
							</div>
							<div class="d-type-input">
								<input type="radio" name="attribute_choose-your-diamond" checked class="diamond_type" value="lab_grown">
								<span>Lab Grown Diamond</span>
							</div>
						@endif
					</div>
					@endif
				@endif

				<div class="product-type-variations" id="filterDataDesign">
					<div class="type-variations-row">
					</div>
				</div>
				<div id="apiCustomDesign">
				</div>

				@if($plainband==false)
					<div class="product-decriptions product-description-common product-description-common_mined" style="display: none;">
						{!!$data->description ? $data->description : $data->description!!}
					</div>
					<div class="product-decriptions product-description-common product-description-common_lab_grown">
                        @if($plainbandMulti)
                            @php
                                $data->description = $data->lab_description ? $data->lab_description.'<br>'.$data->description :  $data->description ;
                            @endphp
							{!!$data->description ? $data->description : $data->description!!}
							@else
								@if(isset($data->lab_description) && !empty($data->lab_description) && strip_tags($data->lab_description))
									{!! $data->lab_description !!}
								@else
									{!! $data->description !!}
								@endif
						 @endif
					</div>
				@else
					<div class="product-decriptions product-description-common product-description-common_mined">
						{!!$data->description ? $data->description : $data->description!!}
					</div>
				@endif

			

				<div style="display: flex;">
					<h4><del style="color:#000" class="shopPriceval"id="shopPrice"> </del> </h4>
					<div class="product-finder-price" id="finaldiamondprice" style="">
					</div>
				</div>
				<p><span style="color:green"> <span id="savePrice" class="save"></span></span> <del id="rrpPrice" class="rrpPriceval"> </del> </p>

				{{-- <div class="product-finder-price">
					<span class="price">{{MY_CURRENCY_SYMBOL}} <span id="finaldiamondprice">0.00</span> </span>
				</div> --}}

				<input type="hidden" name="selected_variation_price" id="selected_variation_price" value="{{isset($data->getProductVariation[0]->regular_price)?$data->getProductVariation[0]->regular_price:0.00}}">
                <input type="hidden" name="selected_discounted_price" id="selected_discounted_price" value="0.00">
				<input type="hidden" name="selected_diamond_price" id="selected_diamond_price" value="0.00">
				<input type="hidden" name="selected_final_price" id="selected_final_price" value="0.00">

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

						<a id="addtobasket" href="javascript:void(0);" class="btn-bg-small" role="button">Add to basket</a>
					</div>
					<div class="product-req-appointment">
						<a type="button" class="btn-bg-small" onclick="if (!window.__cfRLUnblockHandlers) return false; $('label.error').css('display', 'none');return false;" data-bs-toggle="modal" data-bs-target="#requestAppointment">
							Request an Appointment
						</a>
					</div>
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
						{{-- <div class="google-capatcha form-controls">
						<div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_DATA_SITEKEY') }}">
						</div>
						@if ($errors->has('g-recaptcha-response'))
							<div class="error">
								{{ $errors->first('g-recaptcha-response') }}
							</div>
							@endif
						</div> --}}
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
<?php
    if($plainbandMulti){
        $plainbandMulti = 1;
    }else{
        $plainbandMulti = 0;
    }
?>
@endsection

@section('js')
	<script src="{{$url}}"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
	<script src="{{ asset('assets/vendors/fancybox-master/dist/jquery.fancybox.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
	<script>
		const imagesPath = "{{asset('/storage/')}}/";
		const customSlider = "{{ !empty($customSlider) ? $customSlider : '0'  }}";

        function blankForm(){
            $('input[name="title"]').val('');
            $('input[name="email"]').val('');
            $('input[name="phone"]').val('');
            $('textarea[name="description"]').val('');
            $("button[type='submit']").prop('disabled',false);
            $('#requestAppointment').modal('hide');
            // grecaptcha.reset();
        }


		const totalDescription = $(".product-description-common");

		function changeDescription($element=null){
			if($element){
				const selectedElement = $element.val();
				if(selectedElement == 'mined' || selectedElement == 'lab_grown'){
					$(".product-description-common").css('display','none');
					$(".product-description-common_"+selectedElement).css('display','block');
				}
			}
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

			getCustomFilter();

            getRelatedProduct();

			$(".viewdiamond-btn").click(function(){
				$(".diamond-table").toggle();
			});
			//getFinalPrice();

			$('#addtobasket').on('click',function(){
				addtobasketFunction('{{route("add.to.cart")}}','{{$data->slug}}','');
			});

			$("#productWishList").on('click',function(){
				addtobasketFunction('{{route("set-product-wishlist")}}','{{$data->slug}}','');
			});
			$(document).on('change','.type-variations-col select, .d-type-input input',function(){
				changeDescription($(this));
				getCustomPriceFinalFunction();
				getSelectedDataVariation();
			});

            $(document).on('change','#metal-type',function(){
				getSelectedVariationsData();
			});
		})
	
		function getSelectedVariationsData(){
			var diamond_type = $('input[name="attribute_choose-your-diamond"]:checked').val();

			var variations = [];
			$('.type-variations-row select').each(function(i, sel){

				if($(sel).attr('name')!='finger-size')
					variations.push($(sel).val());
			});
            var multistone = '{{$plainbandMulti}}';
            var jewellery = '{{$plainbandJewellery}}';
			var data_slug = '{{url("/")}}';
			$.ajax({
				type: 'POST',
				url: '{{route("get-variations-data")}}',
				dataType: 'JSON',
				data: {
					'_token': "{{csrf_token()}}",
					'slug' : '{{$data->slug}}',
					'diamond_type' : diamond_type,
					'variations' : variations,
				},
				success: function (res) {

					if(typeof res.multi_vari_img !='undefined' && res.multi_vari_img && res.multi_vari_img!='' && 0){
						const multipleImages = res.multi_vari_img.split(',');
						const carouselItem = $('#carousel');
						itemToAddInCarousel = "";
						multipleImages.forEach((element,index) => {
							itemToAddInCarousel += `<div class="item product-items-carousel custom-item-carousel" data-position="${index+1}">
														<a data-fancybox="gallery2" href="${imagesPath + element}" data-caption="${element}">
															<img src="${imagesPath + element}" alt="${element}">
														</a>
												</div>`;
						});
						carouselItem
						.trigger('replace.owl.carousel',itemToAddInCarousel)
						.trigger('refresh.owl.carousel');
					}else if( parseInt(customSlider) && typeof res.vari_image!='undefined' && res.vari_image && res.vari_image!=null){
						const items = $('#carousel').find('.owl-item');
						const itemToAddInCarousel = `<div class="item product-items-carousel custom-item-carousel" data-position="${items.length+1}">
															<a data-fancybox="gallery2" href="${imagesPath + res.vari_image}" data-caption="${res.vari_image}">
																<img src="${imagesPath + res.vari_image}" alt="${res.vari_image}">
															</a>
													</div>`;
						$('#carousel').find('.owl-item').each((index, element)=>{
							if($(element).find('.custom-item-carousel').length){
								$('#carousel').trigger('remove.owl.carousel',index);
							}
						});

						const pendingItems = $('#carousel').find('.owl-item');
						$('#carousel')
						.trigger('add.owl.carousel', [itemToAddInCarousel])
						.trigger('refresh.owl.carousel')
						.trigger('to.owl.carousel', [pendingItems.length, 0])
						.trigger('refresh.owl.carousel')
						.trigger('stop.owl.autoplay')
						.trigger('play.owl.autoplay',[7000, 300])
					}else if(res.vari_image!='' && res.vari_image!=null){

						const items = $('#carousel').find('.owl-item');
						items.each((index, element)=>{
							$(element).find('.product-items-carousel').attr('data-position', index);
						});
						if(res.vari_image!='' && res.vari_image!=null){
							variation_image = data_slug+'/storage/'+res.vari_image;
							var $speed = 0;
							$('#carousel').trigger('to.owl.carousel', [$("#carousel .owl-stage .owl-item").find('a[href*="'+variation_image+'"]').parent().data( 'position' ), $speed])
						}

					}else if(typeof res.vari_video!='undefined' && res.vari_video && res.vari_video!=''){
						if($('#variationVideo').length){
							var videoUrl = res.vari_video;
							$('#variationVideo').attr('src', videoUrl);
							$("#variationVideo")[0].play();
						}
					}
					
					/** TODO: remove in carousel */
					/** TODO: Add image in carousel */
					// if(res.vari_image!='' && res.vari_image!=null){
					// 	variation_image = data_slug+'/storage/'+res.vari_image;
					// 	var $speed = 0;
					// 	$('#carousel').trigger('to.owl.carousel', [$("#carousel .owl-stage .owl-item").find('a[href*="'+variation_image+'"]').parent().data( 'position' ), $speed])
					// }
				}
			});
		}
		function getCustomFilter(){

			$('#finaldiamondprice').html('<span class="price" >{{$MY_CURRENCY_SYMBOL}} Pending... </span>');
			$.ajax({
                type: 'POST',
                url: '{{route("custom-filter")}}',
                data: {
                    '_token': "{{csrf_token()}}",
					'slug' : '{{$data->slug}}',
					'categorySlug': '{{$categorySlug}}',
                    'type' : '{{$plainbandMulti}}',
                    'typeName' : '{{$plainband}}',
                    'metal-type' : '{{ isset($requestData["metal-type"]) ? $requestData["metal-type"] : "" }}',
                    'carat' : '{{ isset($requestData["carat"]) ? $requestData["carat"] : "" }}',
                    'width-mm': '{{ isset($requestData["width-mm"]) ? $requestData["width-mm"] : "" }}',
                    'total-diamond-weight': '{{ isset($requestData["total-diamond-weight"]) ? $requestData["total-diamond-weight"] : "" }}',
                },
                success: function (res) {

					$('#filterDataDesign .type-variations-row').html(res);
					getCustomPriceFinalFunction();
					getSelectedDataVariation();
                    return false;
                }
            });
		}
		
		$(document).on('click', "[id^=productWishListRelated]", function () {
			var index = parseInt($(this).attr("id").replace("productWishListRelated", ''));
			var product_slug = $('#productWishListRelated'+index).data('productslug');
			addtobasketFunction('{{route("set-product-wishlist")}}',product_slug,index);
		});

		function addtobasketFunction(getUrl,product_slug=null,index=null){
            var trdata = $('#finaldiamondprice .price').text().replace(/[^\0-9.-]+/g, '');
			var rrpPrice = $('#rrpPrice.rrpPriceval').text().replace(/[^\0-9.-]+/g, '');
			var savePriceval = $('#savePrice.save').text().replace(/[^\0-9.-]+/g, '');
			var shopPricedata= $('#shopPrice.shopPriceval').text().replace(/[^\0-9.-]+/g, '');

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
					'carat' : $('#carat').val(),
					'variations' : variations,
					'total-diamond-weight' : $('#total-diamond-weight').val(),
					'color' : $('#diamond-colour').val(),
					'clarity' : $('#diamond-clarity').val(),
					'width-mm' : $('#width-mm').val(),
					'grade' : $('#diamond-grade').val(),
					'fingersize' : $('#finger-size').val(),
					'metal_type' : $('#metal-type').val(),
					'certificate' : $('#diamond-certificate').val(),
                    'choose_diamond': $('input[name="attribute_choose-your-diamond"]:checked').val(),
					'slug' : product_slug,
					'price':parseInt(trdata) || 0,
					'rrpPrice':parseInt(rrpPrice) || 0,
					'savePrice':parseInt(savePriceval) || 0,
					'shopPrice':parseInt(shopPricedata) || 0,
					'diamond_type' : $(".diamond_type:checked").val(),
					'discounted_price':parseInt($('#selected_discounted_price').val()) || 0, 
					'final_price':parseInt($('#selected_final_price').val()) || 0, 
                    'setting_price': parseInt(trdata) || 0, 
                },
                success: function (res) {
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

		function getSelectedDataVariation(){
			let designTable = `<table class="table  table-bordered  table-responsive">
						<tr class="tableheading text-white tablehover">
						<th>Type</th>
						<th>Selected</th>
						</tr>`;
			$('.type-variations-col').each(function() { 
				let forId = $(this).find('label').attr('for');
				let forText = $(this).find('label').text();
				designTable += `
				<tr>
					<td>`+forText+`</td>
					<td>`+$('#'+forId).val()+`</td>
				</tr>
				`;
				
			});
			designTable += `</table>`;
			$('#myDivChanges').html(designTable);
		}
		function getCustomPriceFinalFunction(selectedDiamondPrice=null){
			
			let diamondCaratWeight;
			let diamondColour;
			var diamondShape;
			let diamondGrade;
			let diamondClarity;
			let diamondCertificate;

			var variations = [];
			$('.type-variations-row select').each(function(i, sel){

				if($(sel).attr('name')!='finger-size')
					variations.push($(sel).val());
			});

			if($('.diamond_type:checked').val() == 'mined_diamond'){
				diamondCaratWeight = $('#carat').val();
				diamondColour = $('#diamond-colour').val();
				diamondShape = $('#selected_diamond_shape').val();
				diamondGrade = $('#diamond-grade').val();
				diamondClarity = $('#diamond-clarity').val();
				diamondCertificate = $('#diamond-certificate').val();
				$('.product-description-common_lab_grown').css('display','none');
				$('.product-description-common_mined').css('display','block');
				console.log("mined_diamond");
			}else if($('.diamond_type:checked').val() == 'lab_grown'){
				diamondCaratWeight = $('#lab_grown_carat').val();
				diamondColour = $('#lab_grown_colour').val();
				diamondGrade = '';
				diamondClarity = $('#lab_grown_clarity').val();
				diamondCertificate = '';
				$('.product-description-common_lab_grown').css('display','block');
				$('.product-description-common_mined').css('display','none');
				console.log("Lab grown ");
			}

			$.ajax({
                type: 'POST',
                url: '{{route("get-product-variation-prices")}}',
                dataType: 'json',
                data: {
                    '_token': "{{csrf_token()}}",
					'productMetalType' : $('#metal-type').val(),
					'variations' : variations,
					'productCarat' : $('#Carat').val(),
					'productWidthMM' : $('#width-mm').val(),
					'productTotalDiamondWeight' : $('#total-diamond-weight').val(),
					'diamondCaratWeight' : diamondCaratWeight,
					'diamondColour' : diamondColour,
					'diamondGrade' : diamondGrade,
					'diamondClarity' : diamondClarity,
					'diamondCertificate' : diamondCertificate,
					'diamondShape' : diamondShape,
					'selectedDiamondPrice' : selectedDiamondPrice,
					'type': 0,
					'slug': '{{$data->slug}}',
					'diamond_type' : $('.diamond_type:checked').val()
                },
                success: function (res) {
					if(res.status == 200){

						if(res.allPrices.rrp_price != res.allPrices.discounted_price){
							$('#rrpPrice').html('RRP:  {{$MY_CURRENCY_SYMBOL}} ' + res.allPrices.rrp_price.toFixed(2));
							$('#savePrice').html('You Save : {{$MY_CURRENCY_SYMBOL}} ' + (parseFloat(res.allPrices.rrp_price) - parseFloat(res.allPrices.discounted_price)).toFixed(2) + ' | ');
						}

						if(res.allPrices.shop_price == res.allPrices.discounted_price){
						    $('#shopPrice').html('');
						}else{
						    $('#shopPrice').html('{{$MY_CURRENCY_SYMBOL}} ' + res.allPrices.shop_price.toFixed(2));
							$('#savePrice').html('You Save : {{$MY_CURRENCY_SYMBOL}} ' + (parseFloat(res.allPrices.rrp_price) - parseFloat(res.allPrices.discounted_price)).toFixed(2) + ' | ');
						}
						$('#finaldiamondprice').html(' <span class="price" >{{$MY_CURRENCY_SYMBOL}} '+res.allPrices.discounted_price.toFixed(2)+' </span>');
						
						// $('#shopPrice').html('{{$MY_CURRENCY_SYMBOL}} ' + res.allPrices.shop_price.toFixed(2));
						// $('#finaldiamondprice').html('<span class="price" >{{$MY_CURRENCY_SYMBOL}} '+res.allPrices.discounted_price.toFixed(2)+' </span>');
						
						// $('#getLabDiamondPrices').val(res.getLabDiamondPrices);
					}else if(res.status == 500){
						$('#finaldiamondprice').html('<span class="price" >{{$MY_CURRENCY_SYMBOL}} Pending... </span>');
						$('#rrpPrice').html('{{$MY_CURRENCY_SYMBOL}} Pending...');
						$('#shopPrice').html('{{$MY_CURRENCY_SYMBOL}} Pending...');
						$('#savePrice').html('{{$MY_CURRENCY_SYMBOL}} Pending...');
						$('#getLabDiamondPrices').val('');
					}
                }
            });

		}

        $(document).ready(function() {
	      	var $owl = $('#carousel');
			$owl.children().each( function( index ) {
			  $(this).attr( 'data-position', index ); // NB: .attr() instead of .data()
			});
	        $owl.owlCarousel({
			  autoplay: true,
			  rewind: true,
			  responsiveClass: true,
			  autoplayTimeout: 7000,
			  smartSpeed: 300,
			  nav: true,
			  items : 1,
			  	onInitialized: function() {
					$owl.find('.owl-item').each((index, element)=>{
						const src = $(element).find('.thumbnail-src').attr('src');
						const video_extensions = ['mp4'];
						const extension = src.split(/[#?]/)[0].split('.').pop().trim();
						let thumbnailItem = `<li class="list-inline-item ${ index ? '' : 'active' }">`;
						thumbnailItem += `<a href="javascript:;" id="carousel-selector-${index}" class="carousel-thumbnail-item ${ index ? '' : 'selected' }" data-slide-to="${index}" data-target="#carousel">`;

						if(video_extensions.includes(extension)){
							thumbnailItem += `<video muted class="img-fluid" style="height:100px; width:100px;">`;
							thumbnailItem += `<source src="${src}" type="video/mp4" type="video/mp4" />`;
							thumbnailItem += `</video>`;
						}else{
							thumbnailItem += `<img src="${src}" class="img-fluid" style="height:100px; width:100px;">`;
						}
						thumbnailItem += `</li>`;

						$(".carousel-thumbnails").append(thumbnailItem);

					})
    			},
			}).on("changed.owl.carousel", function(el) {
				var index = el.item.index;
				$('.carousel-thumbnail-item').closest('li').removeClass('active');
				$('#carousel-selector-'+index).closest('li').addClass('active');
			});
			
            $(document).on('click','.product-gallery__trigger',function(e){
				e.preventDefault();
				$('#carousel .owl-item.active a').click();
            });

			$(document).on('click','.carousel-thumbnail-item', function(){
				const itemPosition = $(this).data('slide-to');
				$owl
				.trigger('to.owl.carousel', [itemPosition, 0])
				.trigger('stop.owl.autoplay')
				.trigger('play.owl.autoplay',[7000, 300]);
			});
	    });
	</script>
<script src='https://www.google.com/recaptcha/api.js'></script>
@endsection

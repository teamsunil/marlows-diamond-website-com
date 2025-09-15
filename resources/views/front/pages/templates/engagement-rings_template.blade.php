@extends('layouts.front.app')
@section('content')
    <!-- header banner start -->
    <div class="category-banner" style="background-image:url({{ asset('storage/' . $data->image) }})">
        <div class="container">
            <div class="category-banner-text">
                <h1>{!! isset($data->subtitle) ? $data->subtitle : '' !!}</h1>
                <p>{!! isset($data->short_description) ? $data->short_description : '' !!}</p>
            </div>
        </div>
    </div>
    <!-- header banner end -->

    <!-- CHoose a dreamy start here-->
    <div class="choosedreamy-wrap">
        <div class="container">
            <div class="head-para-three">
                <h2 class="heading-h-three">{{ __('engagementPage.heading') }}</h2>
            </div>
            <div class="rings-grid-wrap">
                <div class="row">
					
                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <div class="ring-pr-items">
                            <div class="ring-pr-image">
                                <a href="/product-category/engagement-rings/solitaire/"><img
                                        src="{{ env('APP_IMAGE_URL').'/assets/images/CR10-SE45_0003.jpg' }}" alt="SOLITAIRE ENGAGEMENT RINGS"></a>
                            </div>
                            <div class="ring-pr-details">
                                <h3 class="ring-pr-title">
                                    {{ __('engagementPage.repeatTitle1') }}
                                </h3>
                                <div class="ring-pr-desc">
                                    <p> {{ __('engagementPage.repeatText1') }}</p>
                                </div>
                                <div class="ring-pr-shop-btn">
                                    <a class="btn-bg-small" href="/product-category/engagement-rings/solitaire/">{{ __('engagementPage.button') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <div class="ring-pr-items">
                            <div class="ring-pr-image">
                                <a href="/product-category/engagement-rings/halo/"><img
                                        src="{{ env('APP_IMAGE_URL').'/assets/images/DSR21-Images_0003.jpg' }}" alt="HALO ENGAGEMENT RINGS"></a>
                            </div>
                            <div class="ring-pr-details">
                                <h3 class="ring-pr-title">
                                    {{ __('engagementPage.repeatTitle2') }}
                                </h3>
                                <div class="ring-pr-desc">
                                    <p>{{ __('engagementPage.repeatText2') }}</p>
                                </div>
                                <div class="ring-pr-shop-btn">
                                    <a class="btn-bg-small" href="/product-category/engagement-rings/halo/">{{ __('engagementPage.button') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <div class="ring-pr-items">
                            <div class="ring-pr-image">
                                <a href="/product-category/engagement-rings/shoulder-set/"><img
                                        src="{{ env('APP_IMAGE_URL').'/assets/images/CX9-SL28_00003-1.jpg' }}" alt="SHOULDER SET ENGAGEMENT RINGS"></a>
                            </div>
                            <div class="ring-pr-details">
                                <h3 class="ring-pr-title">
                                    {{ __('engagementPage.repeatTitle3') }}
                                </h3>
                                <div class="ring-pr-desc">
                                    <p>{{ __('engagementPage.repeatText3') }}</p>
                                </div>
                                <div class="ring-pr-shop-btn">
                                    <a class="btn-bg-small" href="/product-category/engagement-rings/shoulder-set/">{{ __('engagementPage.button') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <div class="ring-pr-items">
                            <div class="ring-pr-image">
                                <a href="/product-category/engagement-rings/multi-stone/"><img
                                        src="{{ env('APP_IMAGE_URL').'/assets/images/R3-143_0003.jpg' }}" alt="MULTI-STONE ENGAGEMENT RINGS"></a>
                            </div>
                            <div class="ring-pr-details">
                                <h3 class="ring-pr-title">
                                    {{ __('engagementPage.repeatTitle4') }}
                                </h3>
                                <div class="ring-pr-desc">
                                    <p>{{ __('engagementPage.repeatText4') }}</p>
                                </div>
                                <div class="ring-pr-shop-btn">
                                    <a class="btn-bg-small" href="/product-category/engagement-rings/multi-stone/">{{ __('engagementPage.button') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



    <!-- CHoose a dreamy end here-->

    <!-- Banner Text Section-->
    <div class="findmatch-wrap">
        <div class="container">
            <div class="leftright-img-text-wraper">
                <div class="leftright-imt-rows flexed flex-flex-wrap flex-items-center">
                    <div class="leftright-imt-col leftright-img">
                        <img src="{{ env('APP_IMAGE_URL').'/assets/images/banner-hand.jpg' }}" alt="banner-hand">
                    </div>
                    <div class="leftright-imt-col leftright-text">
						
                        <h2 class="leftright-heading heading-h-three">
							
                            {{ __('engagementPage.title') }}
                        </h2>
                        {!! __('engagementPage.content') !!}
                        <div class="viewguide-btn">
                            <a class="btn-bg-small" href="/product-category/engagement-rings/shoulder-set/">{{ __('engagementPage.button') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Best Selling Marlow's Diamond Jewellery start here -->
    @include('front.includes.featuredproduct')
    <!-- Best Selling Marlow's Diamond Jewellery end here -->

    <!-- two banner section end -->

    <!-- Your Journery of a lifetime start here start-->
    <div class="journery-life-wraper">
        <div class="container">
            {!! isset($data->description) ? $data->description : '' !!}


        </div>
    </div>
    <!-- Your Journery of a lifetime start here end-->


    <!-- FAQ Section start here -->
    <div class="faq-section engagement-ring-faq">
        <div class="container">
            <div class="head-para-three">
                <h2 class="heading-h-three">
					
                   {!! __('engagementPage.mainFaqTitle') !!}
                </h2>
                <h3 style="font-size: 15px;">{!! __('engagementPage.mainFaqSubTitle') !!}</h3>
            </div>
            <div class="faq-list">
                <div class="accordion" id="accordionExample">

                    @php
                        $getEngagementFaqs = getEngagementFaqs();
                    @endphp
                    <?php
                    $getEngagementFaqs = chnageColumnAccordingToLanguage($getEngagementFaqs, 'langFaq', ['title', 'description'], session()->get('language'));
                    ?>
                    @foreach ($getEngagementFaqs as $key => $faq)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="{{ $faq->id }}">
                                @if ($key == 0)
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse{{ $faq->id }}" aria-expanded="true"
                                        aria-controls="collapse{{ $faq->id }}">
                                    @else
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse{{ $faq->id }}" aria-expanded="true"
                                            aria-controls="collapse{{ $faq->id }}">
                                @endif
                                {{ isset($faq->title) ? $faq->title : '' }}
                                </button>
                            </h2>
                            @if ($key == 0)
                                <div id="collapse{{ $faq->id }}" class="accordion-collapse collapse show"
                                    aria-labelledby="{{ $faq->id }}" data-bs-parent="#accordionExample">
                                @else
                                    <div id="collapse{{ $faq->id }}" class="accordion-collapse collapse"
                                        aria-labelledby="{{ $faq->id }}" data-bs-parent="#accordionExample">
                            @endif
                            <div class="accordion-body">
                                {!! isset($faq->description) ? $faq->description : '' !!}
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

    @include('front.includes.instagram-section')
    <!-- insta photos section start -->


    <!-- insta photos section end -->
@endsection

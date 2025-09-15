<!-- Best Selling Marlow's Diamond Jewellery start here -->
@php
    $product_data = getFeaturedProducts();
@endphp
<?php
$product_data = chnageColumnAccordingToLanguage($product_data, 'langProducts', ['title', 'description'], session()->get('language'));
?>
@if (count($product_data))
    <div class="best-selling-marlows">
        <div class="container">
            <div class="head-para-three">
                <h2 class="heading-h-three"> <?php 
                if(session()->get('language')=='EN'){ ?>
                    Best Selling Marlow's Diamond Jewellery
                    <?php }else{?>{!! __('featuredProduct.title') !!}
                    <?php }?>
                </h2>


            </div>
            <div class="product-item-slider">
                <div class="owl-carousel owl-theme owlslidertwo st-arrows">
                    @foreach ($product_data as $key => $product)
                        @if ($product->ProductVariationMinMaxPrice->MaxPrice > 0)
                            <div class="item">
                                <div class="product-info">
                                    <div class="product-image">
                                        <a href="{{ asset('product/' . $product->slug) }}">
                                            @if (isset($product->getProductImages) && !empty($product->getProductImages->thumb_image_url))
                                                <img src="{{ env('APP_IMAGE_URL').'/storage/'.$product->getProductImages->thumb_image_url }}"
                                                    alt="{{ $product->title }}">
                                            @elseif(isset($product->getProductImages) && !empty($product->getProductImages->image_url))
                                                <img src="{{ env('APP_IMAGE_URL').'/storage/'.$product->getProductImages->image_url }}"
                                                    alt="{{ $product->title }}">
                                            @endif
                                        </a>
                                    </div>
                                    <div class="product-item-details">
                                        <div class="product-titles-small">
                                            <a href="{{ asset('product/' . $product->slug) }}">
                                                {{ $product->title }}</a>
                                        </div>
                                        {{-- <div class="product-price">
                                        {{MY_CURRENCY_SYMBOL}}
                                        {{isset($product->ProductVariationMinMaxPrice->MaxPrice)?$product->ProductVariationMinMaxPrice->MaxPrice:0.00}}
                                    </div> --}}
                                        <div class="product-action-btn">
                                            <a class="btn-bg-small" href="{{ asset('product/' . $product->slug) }}">
                                                <?php 
                                               if(session()->get('language')=='EN'){ ?>
                                                Select Options
                                                <?php }else{?>{!! __('featuredProduct.button') !!}
                                                <?php }?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endif
<!-- Best Selling Marlow's Diamond Jewellery end here -->

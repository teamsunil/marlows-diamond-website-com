@extends('layouts.front.app')

@section('content')

    <div class="category-banner" style="background-image:url(../assets/images/cart-bg.jpg)">
        <div class="container">
            <div class="category-banner-text">
                <h1>
                    {{ __('checkout.thankYou') }} <a href="{{ url('/') }}"> {{ __('checkout.here') }}</a>.
                </h1> 
            </div>
        </div>
    </div>

<?php if(!empty($response)){ ?>
    <div class="orders-warp order-cancel-page">
        <div class="container">
            <div class="order-data">{{$response}}</div>
            <a href="{{ url('product-category/engagement-rings') }}" class="grey-btn-large"> {{ __('checkout.continueShopping') }}</a>
        </div>
    </div>
<?php } ?>

@endsection

@section('js')
@endsection

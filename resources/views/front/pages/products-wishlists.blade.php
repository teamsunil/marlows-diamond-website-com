@extends('layouts.front.app')

@section('content')
<div class="category-banner" style="background-image:url(../assets/images/wishlist-bg.jpg)">
    <div class="container">
        <div class="category-banner-text">
            <h1> {{ __('wishlist.heading') }}</h1>
        </div>

    </div>
</div>
@php
$curr =  currencySymbol();
$MY_CURRENCY_SYMBOL = $curr['MY_CURRENCY_SYMBOL'];
@endphp
<div class="wishlist-wraper">
    @if(session('wishlist'))
    <div class="container">
        <div class="wishlist-heading">
            {{ __('wishlist.title') }}
        </div>
        <div class="wishlist-items-list">
            <form>
                <div class="wishlist-table-wraper">
                    <table class="wishlist-table" border-collapse="collapse">
                        <thead>
                            <tr>
                                <!-- <th class="wish-product-cb"><input type="checkbox" class="global-cb" -->
                                        <!-- title="Select all for bulk action"></th> -->
                                <!-- <th class="wish-product-remove"></th> -->
                                <th class="wish-product-thumbnail"></th>
                                <th class="wish-product-name">{{ __('wishlist.productName') }} </th>
                                <!-- <th class="wish-product-price">Unit Price</th> -->
                                <th class="wish-product-date">{{ __('wishlist.date') }}</th>
                                <th class="wish-product-stock">{{ __('wishlist.stockStatus') }}</th>
                                <th class="wish-product-add"></th>
                            </tr>
                        </thead>
                        <tbody>

                                @foreach(session('wishlist') as $id => $details)
                                   
                                    <tr data-id="{{ $id }}">
                                        <!-- <td class="wish-product-cb-col"><input type="checkbox" class="product-cb"></td> -->
                                        <!-- <td class="wish-product-remove-col">
                                            <button class="removew-items-td"><i class="fa fa-times"
                                                    aria-hidden="true"></i></button>
                                        </td> -->
                                        <td class="wish-product-thumbnail-col">
                                            <a href="#"><img src="{{ env('APP_IMAGE_URL').'/assets/images/RC2019B_00003-225x225.jpg' }}" alt="image"></a>
                                        </td>
                                        <td class="wish-product-name-col">
                                            <a href="{{ asset('product/'.$details['titleSlug']) }}">{{ $details['titleName'] }}</a>

                                            <dl class="variation">
                                                <dt class="variation-MetalColour">Metal Colour :
                                                </dt>
                                                <dd class="variation-MetalColour">18ct White Gold</dd>
                                                <dt class="variation-FingerSize">Finger Size :
                                                </dt>
                                                <dd class="variation-FingerSize">I</dd>
                                            </dl>
                                            <dl class="variation">
                                                <dt class="variation-diamond-shape">diamond-shape :
                                                </dt>
                                                <dd class="variation-diamond-shape">MARQUISE</dd>
                                                <dt class="variation-carat">carat :
                                                </dt>
                                                <dd class="variation-carat">0.30</dd>
                                                <dt class="variation-diamond-colour">diamond-colour :
                                                </dt>
                                                <dd class="variation-diamond-colour">D</dd>
                                                <dt class="variation-diamond-clarity">diamond-clarity :
                                                </dt>
                                                <dd class="variation-diamond-clarity">SI2</dd>
                                                <dt class="variation-diamond-grade">diamond-grade :
                                                </dt>
                                                <dd class="variation-diamond-grade">GD</dd>
                                                <dt class="variation-diamond-certificate">diamond-certificate :
                                                </dt>
                                                <dd class="variation-diamond-certificate">GIA</dd>
                                                <dt class="variation-diamond_type">diamond_type :
                                                </dt>
                                                <dd class="variation-diamond_type">white</dd>
                                                <dt class="variation-diamond_cost">diamond_cost :
                                                </dt>
                                                <dd class="variation-diamond_cost">362.25</dd>
                                                <dt class="variation-diamond-carat">diamond-carat :
                                                </dt>
                                                <dd class="variation-diamond-carat">0.3</dd>
                                                <dt class="variation-diamond-certificate-link">diamond-certificate-link :
                                                </dt>
                                                <dd class="variation-diamond-certificate-link">
                                                    https://diamanti.s3.amazonaws.com/certificates/5413157001.jpg</dd>
                                                <dt class="variation-diamond-stock-no">diamond-stock-no :
                                                </dt>
                                                <dd class="variation-diamond-stock-no">1954785</dd>
                                                <dt class="variation-diamond-image-link">diamond-image-link :
                                                </dt>
                                                <dd class="variation-diamond-image-link">
                                                    https://diamanti.s3.amazonaws.com/images/diamond/213262-119.jpg</dd>
                                                <dt class="variation-diamond-certificate-no">diamond-certificate-no :
                                                </dt>
                                                <dd class="variation-diamond-certificate-no">5413157001</dd>
                                            </dl> -->

                                        </td>
                                        <!-- <td class="wish-product-price-col">
                                            <span> {{MY_CURRENCY_SYMBOL}} {{isset($details['price'])?$details['price']:''}} </span>
                                        </td> -->
                                        <td class="wish-product-date-col">
                                            <span>{{isset($details['added_date'])?$details['added_date']:''}}</span>
                                        </td>
                                        <td class="wish-product-stock-col">
                                            <i class="fa fa-check" aria-hidden="true"></i>
                                            <span>{{ __('wishlist.stock') }}</span>
                                        </td>
                                        <td class="wish-product-add-col">
                                            <button class="btn btn-danger btn-sm remove-from-cart"><i class="fa fa-trash-o"></i></button>
                                        </td>
                                    </tr>
                                @endforeach
                        </tbody>

                    </table>
                </div>
            </form>
        </div>
    </div>
    @else
    <div class="container">
        <div class="tinv-message ">
            <div class="tinv-header">
                <h2>{{ __('wishlist.title') }}</h2>
            </div>
            <p class="cart-empty woocommerce-info"> 
                {{ __('wishlist.wishlistEmptyText') }}</p>
            <div class="return-to-shop">
                <a class="btn-bg-small" href="{{ url('/diamond-engagement-rings') }}">{{ __('wishlist.returnToShop') }}</a>
            </div>
        </div>
    </div>
    @endif
</div>


@endsection

@section('js')
<script>

    $(".remove-from-cart").click(function (e) {
        e.preventDefault();

        var ele = $(this);

        if(confirm("Are you sure want to remove?")) {
            $.ajax({
                url: '{{ route("remove.from.wishlist") }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("tr").attr("data-id")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });

</script>
@endsection

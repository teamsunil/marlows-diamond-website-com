<div class="vieworderd-list ">
    <p> {!! __('myaccount.orderDetailss') !!} <strong>#{{ $getOrderDetails->custom_order_id }}</strong> {!! __('myaccount.placedonDetails') !!}
        <strong>{{ $getOrderDetails->created_at->format('M d, Y') }}</strong> {!! __('myaccount.currentlyDetails') !!}
        <strong>{{ $getOrderDetails->status_details }}.</strong>
    </p>


    <div class="view-order-details">
        <h4>{!! __('myaccount.orderDetails') !!}</h4>
        <div class="vieworderd-table">
            <table border-collapse="collapse">
                <thead>
                    <tr>
                        <th>{!! __('myaccount.productDetails') !!}</th>
                        <th>{!! __('myaccount.totalDetails') !!}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($getOrderDetails->getOrderDetailsFunction as $key => $value)
                        <?php
                        $productData = chnageColumnAccordingToLanguage($value->product_details, 'langProducts', ['title', 'description', 'short_description', 'lab_description'], session()->get('language'));
                        // echo "<pre>";
                         //print_r($value->product_details);
                        // // print_r($value->order_product_details);
                        // die;
                        ?>
                        <?php
                        $detailsDecode = (array) json_decode($value->order_product_details);
                        // $new_value = $getDataProduct['title'];
                        // unset($getDataProduct['title']);
                        // array_unshift($getDataProduct, $new_value);
                        ?>
                        <tr>
                            <td>
                                @if (isset($value->product_details) && !empty($value->product_details))
                                    <a class="order-pr-name"
                                        href="{{ asset('product/') }}/{{ isset($value->product_details) ? $value->product_details->slug : '' }}">
                                        <strong
                                            class="product-quantity">{{ isset($value->product_details->title) ? $productData->title : 'Custom Diamond' }}×{{ $value->quantity }}</strong>
                                    </a>
                                @elseif(isset($getDataProduct['0']) && $getDataProduct['0'] == 'Custom Diamond')
                                    <a class="order-pr-name" href="javascript:void(0);">
                                        <strong
                                            class="product-quantity">{{ isset($getDataProduct['0']) ? $getDataProduct['0'] : 'Custom Diamond' }}×{{ $value->quantity }}</strong>
                                    </a>
                                @endif
                                <ul class="wc-item-meta">
                                    @if (isset($detailsDecode['choose_diamond']) && !empty($detailsDecode['choose_diamond']))
                                        <li><strong class="wc-item-meta-label">{!! __('myaccount.diamondDetails') !!}:</strong>
                                            <p> {{ $detailsDecode['choose_diamond'] == 'lab_grown' ? 'Lab Grown' : 'Mined' }}
                                            </p>
                                        </li>
                                    @endif
                                    @if (isset($detailsDecode['metalcolor']) && !empty($detailsDecode['metalcolor']))
                                        <li><strong class="wc-item-meta-label">{!! __('myaccount.metalDetails') !!}:</strong>
                                            <p> {{ $detailsDecode['metalcolor'] }}</p>
                                        </li>
                                    @endif
                                    @if (isset($detailsDecode['fingersize']) && !empty($detailsDecode['fingersize']))
                                        <li><strong class="wc-item-meta-label">{!! __('myaccount.fingerSizeDetails') !!}:</strong>
                                            <p> {{ $detailsDecode['fingersize'] }}</p>
                                        </li>
                                    @endif
                                    @if (isset($detailsDecode['width-mm']) && !empty($detailsDecode['width-mm']))
                                        <li><strong class="wc-item-meta-label">{!! __('myaccount.widthMMDetails') !!}:</strong>
                                            <p> {{ $detailsDecode['width-mm'] }}</p>
                                        </li>
                                    @endif
                                    @if (isset($detailsDecode['total-diamond-weight']) && !empty($detailsDecode['total-diamond-weight']))
                                        <li><strong class="wc-item-meta-label">{!! __('myaccount.diamondWeightDetails') !!}:</strong>
                                            <p> {{ $detailsDecode['total-diamond-weight'] }}</p>
                                        </li>
                                    @endif
                                    @if (isset($detailsDecode['Carat']) && !empty($detailsDecode['Carat']))
                                        <li><strong class="wc-item-meta-label">{!! __('myaccount.diamondCaratDetails') !!}:</strong>
                                            <p> {{ $detailsDecode['Carat'] }}</p>
                                        </li>
                                    @elseif(isset($detailsDecode['carat']) && !empty($detailsDecode['carat']))
                                        <li><strong class="wc-item-meta-label">{!! __('myaccount.diamondCaratDetails') !!}:</strong>
                                            <p> {{ $detailsDecode['carat'] }}</p>
                                        </li>
                                    @endif
                                    @if (isset($detailsDecode['Color']) && !empty($detailsDecode['Color']))
                                        <li><strong class="wc-item-meta-label">{!! __('myaccount.diamondColorDetails') !!}:</strong>
                                            <p> {{ $detailsDecode['Color'] }}</p>
                                        </li>
                                    @endif
                                    @if (isset($detailsDecode['Clarity']) && !empty($detailsDecode['Clarity']))
                                        <li><strong class="wc-item-meta-label">{!! __('myaccount.diamondClarityDetails') !!}:</strong>
                                            <p> {{ $detailsDecode['Clarity'] }}</p>
                                        </li>
                                    @endif
                                    @if (isset($detailsDecode['Lab']) && !empty($detailsDecode['Lab']))
                                        <li><strong class="wc-item-meta-label">{!! __('myaccount.diamondCertificateDetails') !!}:</strong>
                                            <p> {{ $detailsDecode['Lab'] }}</p>
                                        </li>
                                    @endif
                                    @if (isset($detailsDecode['shape']) && !empty($detailsDecode['shape']))
                                        <li><strong class="wc-item-meta-label">{!! __('myaccount.diamondShapeDetails') !!}:</strong>
                                            <p> {{ $detailsDecode['shape'] }}</p>
                                        </li>
                                    @endif
                                    @if (isset($detailsDecode['Stock_NO']) && !empty($detailsDecode['Stock_NO']))
                                        <li><strong class="wc-item-meta-label"> {!! __('myaccount.diamondStockNoDetails') !!}:</strong>
                                            <p> {{ $detailsDecode['Stock_NO'] }}</p>
                                        </li>
                                    @endif
                                    @if (isset($detailsDecode['CERT_NO']) && !empty($detailsDecode['CERT_NO']))
                                        <li><strong class="wc-item-meta-label">{!! __('myaccount.diamondCertificateNoDetails') !!}:</strong>
                                            <p> {{ $detailsDecode['CERT_NO'] }}</p>
                                        </li>
                                    @endif

                                    {{-- @foreach ($getDataProduct as $keyR => $valnew)

                                        @if ($keyR != 0)
                                            @if ($keyR == 'certificatelink')
                                                <li><strong class="wc-item-meta-label">{{ucfirst($keyR)}}:</strong><a href="{{$valnew}}" target="_blank">View</a>
                                                </li>
                                            @elseif($keyR == "imagelink")
                                                <li><strong class="wc-item-meta-label">{{ucfirst($keyR)}}:</strong><a href="{{$valnew}}" target="_blank">View</a>
                                                </li>
                                            @else
                                                <li><strong class="wc-item-meta-label">{{ucfirst($keyR)}}:</strong>
                                                    <p>{{ucfirst($valnew)}}</p>
                                                </li>
                                            @endif
                                        @endif
                                    @endforeach --}}
                                </ul>
                            </td>
                            <td>
                                @if ($getOrderDetails->currency_symbol)
                                    {{ $getOrderDetails->currency_symbol }}
                                @else
                                    {{ MY_CURRENCY_SYMBOL }}
                                @endif {{ $value->product_price * $value->quantity }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th scope="row">{!! __('myaccount.subtotalDetails') !!}:</th>
                        <td><span class="woocommerce-Price-amount amount"><span
                                    class="woocommerce-Price-currencySymbol">
                                    @if ($getOrderDetails->currency_symbol)
                                        {{ $getOrderDetails->currency_symbol }}
                                    @else
                                        {{ MY_CURRENCY_SYMBOL }}
                                    @endif
                                </span>{{ $getOrderDetails->final_price }}</span></td>
                    </tr>
                    <tr>
                        <th scope="row">{!! __('myaccount.paymentDetails') !!}:</th>
                        <td>{{ $getOrderDetails->payment_type }}</td>
                    </tr>
                    <tr>
                        <th scope="row">{!! __('myaccount.totalDetails') !!}:</th>
                        <td><span class="woocommerce-Price-amount amount"><span
                                    class="woocommerce-Price-currencySymbol">
                                    @if ($getOrderDetails->currency_symbol)
                                        {{ $getOrderDetails->currency_symbol }}
                                    @else
                                        {{ MY_CURRENCY_SYMBOL }}
                                    @endif
                                </span>{{ $getOrderDetails->final_price }}</span>
                            {{-- <small
                                class="includes_tax">(includes <span class="woocommerce-Price-amount amount"><span
                                        class="woocommerce-Price-currencySymbol">@if ($getOrderDetails->currency_symbol)
                                        {{$getOrderDetails->currency_symbol}}
                                        @else
                                        {{MY_CURRENCY_SYMBOL}}
                                        @endif</span>64.80</span> VAT)</small> --}}
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

    <div class="view-order-billing-details">
        <h4>{!! __('myaccount.billingaddressDetails') !!}</h4>
        <div class="woocommerce-customer-details">
            <address>
                {{ isset($getOrderDetails->order_address->first_name) ? $getOrderDetails->order_address->first_name . ' ' : '' }}{{ isset($getOrderDetails->order_address->last_name) ? $getOrderDetails->order_address->last_name : '' }}
                <br>
                {{ isset($getOrderDetails->order_address->company_name) ? $getOrderDetails->order_address->company_name : '' }}
                <br>
                {{ isset($getOrderDetails->order_address->street_address_l1) ? $getOrderDetails->order_address->street_address_l1 : '' }}<br>{{ isset($getOrderDetails->order_address->street_address_l2) ? $getOrderDetails->order_address->street_address_l2 : '' }}<br>{{ isset($getOrderDetails->order_address->town_city) ? $getOrderDetails->order_address->town_city : '' }}
                {{ isset($getOrderDetails->order_address->state) ? $getOrderDetails->order_address->state : '' }}<br><br>{{ isset($getOrderDetails->order_address->pin_code) ? $getOrderDetails->order_address->pin_code : '' }}
                <p class="woocommerce-customer-details--phone">
                    {{ isset($getOrderDetails->order_address->mobile) ? $getOrderDetails->order_address->mobile : '' }}
                </p>

                <p class="woocommerce-customer-details--email">
                    {{ isset($getOrderDetails->order_address->email) ? $getOrderDetails->order_address->email : '' }}</p>
            </address>
        </div>
    </div>
</div>

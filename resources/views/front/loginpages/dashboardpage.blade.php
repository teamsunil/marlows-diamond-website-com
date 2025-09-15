@extends('layouts.front.app')

@section('content')
    <?php
        if(isset($getUserDetails->getCustomerAddressFunction) && !empty($getUserDetails->getCustomerAddressFunction->first_name)){
            $firstName = $getUserDetails->getCustomerAddressFunction->first_name;
            $lastName = isset($getUserDetails->getCustomerAddressFunction->last_name)?$getUserDetails->getCustomerAddressFunction->last_name:'';
            $fullName = $firstName. " " . $lastName;
        }else{
            $fullName = isset($getUserDetails->username)?$getUserDetails->username:'No Name';
        }

    ?>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <li style="color:red;">{{$error}}</li>
        @endforeach
    @endif

    <div class="my-account-wrap">
        <div class="container">
            <div class="accounts-heading text-center">
                {!! __('myaccount.dashboardPageTitle') !!}
            </div>
            <div class="account-dashboard">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="account-sidebar">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a href="javascript:void(0)" class="nav-link active" id="dashboard-tab" data-bs-toggle="tab" data-bs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="true">{!! __('myaccount.dsashboard') !!}</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a href="javascript:void(0)" class="nav-link" id="orders-tab" data-bs-toggle="tab" data-bs-target="#orders" type="button" role="tab" aria-controls="orders" aria-selected="false">{!! __('myaccount.orders') !!}</a>
                                </li>
                                <!-- <li class="nav-item" role="presentation">
                                    <a href="javascript:void(0)" class="nav-link" id="downloads-tab" data-bs-toggle="tab" data-bs-target="#downloads" type="button" role="tab" aria-controls="downloads" aria-selected="false">Downloads</a>
                                </li> -->
                                <li class="nav-item" role="presentation">
                                    <a href="javascript:void(0)" class="nav-link" id="address-tab" data-bs-toggle="tab" data-bs-target="#address" type="button" role="tab" aria-controls="address" aria-selected="false">{!! __('myaccount.address') !!}</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a href="javascript:void(0)" class="nav-link" id="accountd-tab" data-bs-toggle="tab" data-bs-target="#accountd" type="button" role="tab" aria-controls="accountd" aria-selected="false">{!! __('myaccount.accountDetails') !!}</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('products.wishlist')}}">{!! __('myaccount.wishlist') !!}</a>
                                </li>
                                <!-- <li class="nav-item" role="presentation">
                                    <a href="javascript:void(0)" class="nav-link" id="auctions-tab" data-bs-toggle="tab" data-bs-target="#auctions" type="button" role="tab" aria-controls="auctions" aria-selected="false">Auctions settings</a>
                                </li> -->
                                <li class="nav-item">
                                    <a href="{{route('logout-customer')}}">{!! __('myaccount.logout') !!}</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="account-main-content">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                                    <div class="account-dashboard-page">
                                        <p>{!! __('myaccount.hello') !!} <strong>{{$fullName}}</strong> ({!! __('myaccount.not') !!} <strong>{{$fullName}}</strong>? <a href="{{route('logout-customer')}}">{!! __('myaccount.logout') !!}</a>)</p>
                                        <!-- <p>From your account dashboard you can view your <a href="javascript:void(0);" >recent orders</a>, manage your <a href="javascript:void(0);">edit your password and account details</a>.</p> -->
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                                    <div class="account-order-page">
                                        <button id="backListingButton" style="display:none;" class="btn-bg-small">{!! __('myaccount.backDetails') !!}</button>
                                        <div class="scrollable-table" id="orderDataTableSection">
                                            <table id="orderDataTable" border-collapse="collapse">
                                                <thead>{!! __('myaccount.ordersDetails') !!}
                                                   
                                                </thead>
                                                <tbody id="updateOrderDesign">

                                                </tbody>
                                            </table>
                                        </div>

                                        <!-- order view-->
                                        <div id="showOrderDetailsPage">

                                        </div>

                                    </div>
                                </div>
                                <div class="tab-pane fade" id="downloads" role="tabpanel" aria-labelledby="downloads-tab">
                                    <div class="account-downloads-page">
                                        <p>{!! __('myaccount.noDownloadsAvailable') !!} </p>
                                        <a class="btn-bg-small" href="#">{!! __('myaccount.browseProducts') !!}</a>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="address" role="tabpanel" aria-labelledby="address-tab">
                                    <div class="account-address-page">
                                        <p> {!! __('myaccount.addressescheckoutpagedefault') !!}</p>
                                        <div class="addresbox row">
                                            <div class="col-md-12">
                                                <div class="addresbox-head">

                                                     <a href="javascript:void(0);" id="showBillingAddress">{!! __('myaccount.edit') !!}</a>
                                                     <a href="javascript:void(0);" id="hideBillingAddress" style="display:none;">{!! __('myaccount.show') !!}</a>
                                                </div>
                                                <div class="addresbox-block">
                                                    <h3>{!! __('myaccount.billingAddress') !!}</h3>
                                                    <address>{{isset($getUserDetails->getCustomerAddressFunction->street_address_l1)?$getUserDetails->getCustomerAddressFunction->street_address_l1:''}}<br>{{isset($getUserDetails->getCustomerAddressFunction->street_address_l2)?$getUserDetails->getCustomerAddressFunction->street_address_l2:''}}<br>{{isset($getUserDetails->getCustomerAddressFunction->state)?$getUserDetails->getCustomerAddressFunction->state:''}} {{isset($getUserDetails->getCustomerAddressFunction->state)?$getUserDetails->getCustomerAddressFunction->state:''}}<br>{{isset($getUserDetails->getCustomerAddressFunction->state)?$getUserDetails->getCustomerAddressFunction->state:''}} {{isset($getUserDetails->getCustomerAddressFunction->country_name)?$getUserDetails->getCustomerAddressFunction->country_name:''}} {{isset($getUserDetails->getCustomerAddressFunction->pin_code)?$getUserDetails->getCustomerAddressFunction->pin_code:''}}</address>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Edit Address box-->
                                        <div class="editaddress-box" style="display:none;">
                                              <h2>{!! __('myaccount.editAddress') !!}</h2>
                                              <form action="{{route('users.customer.address')}}" method="POST">
                                                  @csrf
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="checkout-form-group">
                                                            <label class="input-label">{!! __('myaccount.firstName') !!}<abbr class="required">*</abbr></label>
                                                            <input required="required" type="text" name="first_name" class="form-control" value="{{isset($getUserDetails->getCustomerAddressFunction->first_name)?$getUserDetails->getCustomerAddressFunction->first_name:''}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="checkout-form-group">
                                                            <label class="input-label">{!! __('myaccount.lastName') !!} <abbr class="required">*</abbr></label>
                                                            <input required="required" type="text" name="last_name" class="form-control" value="{{isset($getUserDetails->getCustomerAddressFunction->first_name)?$getUserDetails->getCustomerAddressFunction->first_name:''}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="checkout-form-group">
                                                    <label class="input-label">{!! __('myaccount.companyName') !!}<span class="optional">(Optional)</span></label>
                                                    <input type="text" name="company_name" class="form-control" value="{{isset($getUserDetails->getCustomerAddressFunction->company_name)?$getUserDetails->getCustomerAddressFunction->company_name:''}}">
                                                </div>
                                                <div class="checkout-form-group">
                                                    <label class="input-label">{!! __('myaccount.countryRegion') !!} <abbr class="required">*</abbr></label>
                                                    <select required="required" name="country_id" class="form-control">
                                                        @foreach($getCountries as $key => $country)
                                                            @if(isset($getUsersDetails->getCustomerAddressFunction->country_id) && $getUsersDetails->getCustomerAddressFunction->country_id == $country->shortname)
                                                                <option value="{{$country->shortname}}" selected>{{$country->name}}</option>
                                                            @else
                                                                <option value="{{$country->shortname}}">{{$country->name}}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="checkout-form-group">
                                                    <label class="input-label">{!! __('myaccount.streetAddress') !!}  <abbr class="required">*</abbr></label>
                                                    <input required="required" type="text" class="form-control" name="street_address_l1" value="{{isset($getUserDetails->getCustomerAddressFunction->street_address_l1)?$getUserDetails->getCustomerAddressFunction->street_address_l1:''}}">
                                                    <input type="text" class="form-control" name="street_address_l2" value="{{isset($getUserDetails->getCustomerAddressFunction->street_address_l2)?$getUserDetails->getCustomerAddressFunction->street_address_l2:''}}" placeholder="Apartment, suite, unit, etc. (optional)">
                                                </div>
                                                <div class="checkout-form-group">
                                                    <label class="input-label">{!! __('myaccount.townCity') !!}  <abbr class="required">*</abbr></label>
                                                    <input required="required" type="text" class="form-control" name="town_city" value="{{isset($getUserDetails->getCustomerAddressFunction->town_city)?$getUserDetails->getCustomerAddressFunction->town_city:''}}">
                                                </div>
                                                <div class="checkout-form-group">
                                                    <label class="input-label">{!! __('myaccount.state') !!} <span class="optional">({!! __('myaccount.optional') !!})</span></label>
                                                    <input type="text" class="form-control" name="state" value="{{isset($getUserDetails->getCustomerAddressFunction->state)?$getUserDetails->getCustomerAddressFunction->state:''}}">
                                                </div>
                                                <div class="checkout-form-group">
                                                    <label class="input-label">{!! __('myaccount.postcode') !!} <abbr class="required">*</abbr></label>
                                                    <input required="required" type="text" class="form-control" name="pin_code" value="{{isset($getUserDetails->getCustomerAddressFunction->pin_code)?$getUserDetails->getCustomerAddressFunction->pin_code:''}}">
                                                </div>
                                                <div class="checkout-form-group">
                                                    <label class="input-label">{!! __('myaccount.phone') !!}  <abbr class="required">*</abbr></label>
                                                    <input required="required" type="text" class="form-control" name="mobile" value="{{isset($getUserDetails->getCustomerAddressFunction->mobile)?$getUserDetails->getCustomerAddressFunction->mobile:''}}">
                                                </div>
                                                <div class="checkout-form-group">
                                                    <label class="input-label">{!! __('myaccount.emailAddresss') !!}   <abbr class="required">*</abbr></label>
                                                    <input required="required" type="text" class="form-control" name="email" value="{{isset($getUserDetails->getCustomerAddressFunction->email)?$getUserDetails->getCustomerAddressFunction->email:''}}">
                                                </div>
                                                <div class="checkout-form-group">
                                                    <label class="input-label">{!! __('myaccount.otherNotes') !!} <abbr class="required">*</abbr></label>
                                                    <textarea required="required" name="order_notes" class="form-control" id="order_notes" cols="30" rows="10">{{isset($getUserDetails->getCustomerAddressFunction->order_notes)?$getUserDetails->getCustomerAddressFunction->order_notes:''}}</textarea>
                                                </div>
                                                <div class="save-changes">
                                                    <button class="btn-bg-small" type="submit">{!! __('myaccount.saveAddress') !!}</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="accountd" role="tabpanel" aria-labelledby="accountd-tab">
                                    <div class="account-accountd-page">
                                        <form action="{{route('update.customer.account.details')}}" method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="checkout-form-group">
                                                        <label class="input-label">{!! __('myaccount.dsName') !!} <abbr class="required">*</abbr></label>
                                                        <input type="text" class="form-control" name="name" value="{{isset($getUserDetails->name)?$getUserDetails->name:''}}">
                                                    </div>
                                                </div>
                                                <!-- <div class="col-md-6">
                                                    <div class="checkout-form-group">
                                                        <label class="input-label">Last Name <abbr class="required">*</abbr></label>
                                                        <input type="text" class="form-control" value="Sharma">
                                                    </div>
                                                </div> -->
                                            </div>
                                            <div class="checkout-form-group">
                                                <label class="input-label">{!! __('myaccount.displayName') !!}<abbr class="required">*</abbr></label>
                                                <input type="text" class="form-control" name="nicename" value="{{isset($getUserDetails->nicename)?$getUserDetails->nicename:''}}">
                                                <p><i> {!! __('myaccount.displayedReviews') !!}</i></p>
                                            </div>
                                            <div class="checkout-form-group">
                                                <label class="input-label">{!! __('myaccount.dsemailAddress') !!}<abbr class="required">*</abbr></label>
                                                <input type="text" class="form-control" disable readonly name="email" value="{{isset($getUserDetails->email)?$getUserDetails->email:''}}">
                                            </div>
                                            <div class="checkout-form-group">
                                                <label class="input-label">{!! __('myaccount.username') !!}<abbr class="required">*</abbr></label>
                                                <input type="text" readonly="readonly" disabled class="form-control" name="username" value="{{isset($getUserDetails->username)?$getUserDetails->username:''}}">
                                            </div>
                                            <div class="checkout-form-group">
                                                <label class="input-label">{!! __('myaccount.passwordChange') !!}</label>
                                                <label class="input-label">{!! __('myaccount.currentPassword') !!}</label>
                                                <input type="password" name="old_password" class="form-control">
                                            </div>
                                            <div class="checkout-form-group">
                                                <label class="input-label">{!! __('myaccount.newPassword') !!}</label>
                                                <input type="password" name="new_password" class="form-control">
                                            </div>
                                            <div class="checkout-form-group">
                                                <label class="input-label">{!! __('myaccount.confirmPassword') !!}</label>
                                                <input type="password" name="confirm_password" class="form-control">
                                            </div>
                                            <div class="addressaccount-action">
                                                <button class="btn-bg-small" type="submit">{!! __('myaccount.saveChanges') !!}</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="auctions" role="tabpanel" aria-labelledby="auctions-tab">
                                    <div class="account-aacutions-page">
                                        <div class="getmail">
                                            <input type="checkbox"><label>{!! __('myaccount.getEmail') !!}</label>
                                        </div>
                                        <div class="save-btn">
                                            <button class="btn-bg-small">{!! __('myaccount.saveChangess') !!}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection

@section('js')
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function(){


        $(document).on('click', "[id^=viewOrderDetails]", function () {
            var index = parseInt($(this).attr("id").replace("viewOrderDetails",''));
            getOrderDetailsPage($(this).data('token'));
        });

        $('#showBillingAddress').on('click',function(){
            $('.addresbox-block').hide();
            $(this).hide();
            $('#hideBillingAddress').show();
            $('.editaddress-box').show();
        });
        $('#hideBillingAddress').on('click',function(){
            $('.editaddress-box').hide();
            $('.addresbox-block').show();
            $(this).hide();
            $('#showBillingAddress').show();
        });

        getOrderList();

        $('#backListingButton').on('click',function(){
            $('#showOrderDetailsPage').html("");
            $('#orderDataTableSection').show();
            $('#backListingButton').hide();
        });
    });

    function getOrderDetailsPage(datatoken){
        $('#showOrderDetailsPage').html("");
        $.ajax({
            type: 'POST',
            url: '{{route("get.order.details.pages")}}',
            data: {
                '_token': "{{csrf_token()}}",
                'token':datatoken,
            },
            success: function (res) {
                if(res.html){
                    $('#showOrderDetailsPage').append(res.html);
                    $('#orderDataTableSection').hide();
                    $('#backListingButton').show();
                }
            }
        });
    }

    function getOrderList(){
        $.ajax({
            type: 'POST',
            url: '{{route("get.order.details")}}',
            data: {
                '_token': "{{csrf_token()}}",
            },
            success: function (res) {
                if(res.html){
                    $('#updateOrderDesign').append(res.html);
                    $('#orderDataTable').DataTable();
                }
            }
        });
    }
</script>


@endsection

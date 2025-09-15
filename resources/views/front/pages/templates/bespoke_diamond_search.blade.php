@extends('layouts.front.app')
@section('content')
@section('css')
<link href="{{ asset('assets/css/nouislider.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/loading-placeholder.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/ui-lightness/jquery-ui.css">

<style>
	.ui-slider-handle{
		width: 35px !important;
		font-size: small !important;
		color: #FF0000 !important;
		text-align: center !important;
	}

	.ui-slider .ui-slider-handle{
        height: 1.5em; color: #8e2e65 !important;}
.ui-widget-header{background: #8e2e65 !important;}
.ui-state-hover, .ui-widget-content .ui-state-hover, .ui-widget-header .ui-state-hover, .ui-state-focus, .ui-widget-content .ui-state-focus, .ui-widget-header .ui-state-focus{
    border-color: #8e2e65 !important; outline: none; box-shadow: none; background: #fff !important;
    }
	.error {
		color: #e74c3c !important;
	}
</style>

@endsection

@php
$curr =  currencySymbol();
$MY_CURRENCY_SYMBOL = $curr['MY_CURRENCY_SYMBOL'];

@endphp
<div class="perfect-certified-wrap" id="diamondMainController" ng-controller="DiamondSearchController"  ng-init="getDiamondResults()"  ng-cloak>
	<div class="container">
		<div class="perfect-certified-head">
			<h1>{!!$data->subtitle!!}</h1>
			@if ($data->slug == "live-diamond-search")
			{!!$data->short_description!!}
			@else
			<h2>{!!$data->short_description!!}</h2>
			@endif
		</div>
		<?php
		$checkDepositPercentage = $data->deposit;
		?>
		<div class="row">
			<div class="col-lg-4">
				<div class="chooseyour-diamond-side">
					<div class="diamond-heaing-two">
						Choose your Diamond
					</div>
					<form class="cart my-cart-form" name="search" action="" method="post" encytype="mulipart/form-data">
						<div class="choose-diamnond-filter">
							<div class="diamond-shapes row align-items-center">
								<div class="diamond-field-labels col-lg-3">
									Shape
								</div>
								<div class="diamond-field-contens col-lg-9">
									<div class="shape-list">

										<ul>
											<li class="active-diamond">

												<button type="button" class="btn active-diamond  shape_btn">
													<img src="assets/images/round-1.png" alt="">
													<span>Round</span>
													<input checked="checked" value="ROUND" class="" type="radio" name="shape" ng-model="shape"  ng-change="getDiamondResults()">
												</button>
											</li>
											<li>
												<button type="button" class="btn  shape_btn">
													<img src="assets/images/pear-1.png" alt="pearl">
													<span>Pear</span>
													<input value="PEAR" class="" type="radio" name="shape" ng-model="shape"  ng-change="getDiamondResults()">
												</button>
											</li>
											<li>
												<button type="button" class="btn  shape_btn">
													<img src="assets/images/marquee-1.png" alt="marquise">
													<span>Marquise </span>
													<input value="MARQUISE" class="" type="radio" name="shape" ng-model="shape"  ng-change="getDiamondResults()">
												</button>
											</li>
											<li>
												<button type="button" class="btn  shape_btn">
													<img src="assets/images/heart-1.png" alt="heart">
													<span>Heart</span>
													<input value="HEART" class="" type="radio" name="shape" ng-model="shape"  ng-change="getDiamondResults()">
												</button>
											</li>
											<li>
												<button type="button" class="btn  shape_btn">
													<img src="assets/images/asscher.png" alt="Asscher">
													<span>Asscher</span>
													<input value="ASSCHER" class="" type="radio" name="shape" ng-model="shape"  ng-change="getDiamondResults()">
												</button>
											</li>
											<li>
												<button type="button" class="btn  shape_btn">
													<img src="assets/images/priceless-1.png" alt="priceless">
													<span>Princess</span>
													<input value="PRINCESS" class="" type="radio" name="shape" ng-model="shape"  ng-change="getDiamondResults()">
												</button>
											</li>
											<li>
												<button type="button" class="btn  shape_btn">
													<img src="assets/images/radiant.png" alt="radiant">
													<span>Radiant</span>
													<input value="RADIANT" class="" type="radio" name="shape" ng-model="shape"  ng-change="getDiamondResults()">
												</button>
											</li>
											<li>
												<button type="button" class="btn  shape_btn">
													<img src="assets/images/emerald-1.png" alt="Emerald">
													<span>Emerald</span>
													<input value="EMERALD" class="" type="radio" name="shape" ng-model="shape"  ng-change="getDiamondResults()">
												</button>
											</li>
											<li>
												<button type="button" class="btn  shape_btn">
													<img src="assets/images/oval-1.png" alt="Oval">
													<span>Oval</span>
													<input value="OVAL" class="" type="radio" name="shape" ng-model="shape"  ng-change="getDiamondResults()">
												</button>
											</li>
											<li>
												<button type="button" class="btn  shape_btn">
													<img src="assets/images/cushion.png" alt="cushion">
													<span>Cushion</span>
													<input value="CUSHION" class="" type="radio" name="shape" ng-model="shape"  ng-change="getDiamondResults()">
												</button>
											</li>
										</ul>
									</div>
								</div>
							</div>

							<div class="choose-diaond-fields row diamond-carat">
								<div class="diamond-field-labels col-lg-3">
									Carat
								</div>
								<div class="diamond-field-contens col-lg-9">
									<div class="diamond-field-inner-bar">
										<div class="range_carat_wap">

											<div class="srchniput-fil">
												<div class="minrange">
													<span>Min Carat</span>
													<input id="sliderRangeSetMin" disabled data-index="0" class="sliderValue" value="0.5"/>
												</div>
												<div class="maxrange">
													<span>Max Carat</span>
													<input id="sliderRangeSetMax" disabled data-index="1" class="sliderValue" value="2.5"/>
												</div>
											</div>

											<div id="slider"></div>

											{{-- <div id="min"></div>
                                        <div id="max"></div> --}}
											{{-- <div id="range-slider"></div> --}}
											<div class="srchniput-fil">
												<input type="hidden" class="sliderValue" data-index="0" value="0.5" id="input-carat-min" name="carat">
												<input type="hidden" class="sliderValue" data-index="1" value="2.5" id="input-carat-max" name="carat-max">
											</div>
										</div>
										<div class="diamond-filter-quote">
											<div class="quote-icon-pop helping-text-container">
												<a class="ma-info-icon" href="javascript:void(0)"><img src="assets/images/marlows-info-icon.png" alt="marlows-info-icon"></a>
												<div class="m-quote-pop">
													{{CARAT_TOOLTIP}}
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="choose-diaond-fields row diamond-colour">
								<div class="diamond-field-labels col-lg-3">
									Colour
								</div>
								<div class="diamond-field-contens col-lg-9">
									<div class="diamond-field-inner-bar">
										<div class="diamond-fil-cols">
											<div class="diamond-values-in">
												<ul>
													@foreach (range('D', 'K') as $alphabet)
													<li class="selected-this">
														<button type="button" class="btn">
															{{$alphabet}}
															<input value="{{$alphabet}}" class="diamond-colour" name="colour[]" type="checkbox" ng-click="getDiamondResults()">
														</button>
													</li>
													@endforeach

												</ul>
											</div>
										</div>
										<div class="diamond-filter-quote">
											<div class="quote-icon-pop helping-text-container ">
												<a class="ma-info-icon" href="javascript:void(0)"><img src="assets/images/marlows-info-icon.png" alt="marlows-info-icon"></a>
												<div class="m-quote-pop">
													{{COLOUR_TOOLTIP}}
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>


							<div class="choose-diaond-fields row diamond-clarity">
								<div class="diamond-field-labels col-lg-3">
									Clarity
								</div>
								<div class="diamond-field-contens col-lg-9">
									<div class="diamond-field-inner-bar">
										<div class="diamond-fil-cols">
											<div class="diamond-values-in">
												<ul>
													<li>
														<button type="button" class="btn">
															IF
															<input value="IF" class="diamond-clarity" name="clarity[]" type="checkbox" ng-click="getDiamondResults()">
														</button>
													</li>
													<li>

														<button type="button" class="btn">
															VVS1
															<input value="VVS1" class="diamond-clarity" name="clarity[]" type="checkbox" ng-click="getDiamondResults()">
														</button>
													</li>
													<li>

														<button type="button" class="btn">
															VVS2
															<input value="VVS2" class="diamond-clarity" name="clarity[]" type="checkbox" ng-click="getDiamondResults()">
														</button>
													</li>
													<li>

														<button type="button" class="btn">
															VS1
															<input value="VS1" class="diamond-clarity" name="clarity[]" type="checkbox" ng-click="getDiamondResults()">
														</button>
													</li>
													<li>

														<button type="button" class="btn">
															VS2
															<input value="VS2" class="diamond-clarity" name="clarity[]" type="checkbox" ng-click="getDiamondResults()">
														</button>
													</li>
													<li>

														<button type="button" class="btn">
															SI1
															<input value="SI1" class="diamond-clarity" name="clarity[]" type="checkbox" ng-click="getDiamondResults()">
														</button>
													</li>
													<li>

														<button type="button" class="btn">
															SI2
															<input value="SI2" class="diamond-clarity" name="clarity[]" type="checkbox" ng-click="getDiamondResults()">
														</button>
													</li>
												</ul>
											</div>
										</div>
										<div class="diamond-filter-quote">
											<div class="quote-icon-pop helping-text-container ">
												<a class="ma-info-icon" href="javascript:void(0)"><img src="assets/images/marlows-info-icon.png" alt="marlows-info-icon"></a>
												<div class="m-quote-pop">
													{{CLARITY_TOOLTIP}}
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>


							<div class="choose-diaond-fields row diamond-cut-grade">
								<div class="diamond-field-labels col-lg-3">
									Cut Grade
								</div>
								<div class="diamond-field-contens col-lg-9">
									<div class="diamond-field-inner-bar">
										<div class="diamond-fil-cols">
											<div class="diamond-values-in">
												<ul>
													<li>
														<button type="button" class="btn">
															Excellent
															<input value="EX" class="diamond-grade" name="grade[]" type="checkbox" ng-click="getDiamondResults()">
														</button>
													</li>
													<li>
														<button type="button" class="btn">
															Very Good
															<input value="VG" class="diamond-grade" name="grade[]" type="checkbox" ng-click="getDiamondResults()">
														</button>
													</li>
													<li>
														<button type="button" class="btn">
															Good
															<input value="GD" class="diamond-grade" name="grade[]" type="checkbox" ng-click="getDiamondResults()">
														</button>
													</li>

												</ul>
											</div>
										</div>
										<div class="diamond-filter-quote">
											<div class="quote-icon-pop helping-text-container ">
												<a class="ma-info-icon" href="javascript:void(0)"><img src="assets/images/marlows-info-icon.png" alt="marlows-info-icon"></a>
												<div class="m-quote-pop">
													{{CUT_GRADE_TOOLTIP}}
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="choose-diaond-fields row diamond-polish">
								<div class="diamond-field-labels col-lg-3">
									Polish
								</div>
								<div class="diamond-field-contens col-lg-9">
									<div class="diamond-field-inner-bar">
										<div class="diamond-fil-cols">
											<div class="diamond-values-in">
												<ul>
													<li>
														<button type="button" class="btn">
															Excellent
															<input value="EX" class="diamond-polish" name="polish[]" type="checkbox" ng-click="getDiamondResults()">
														</button>
													</li>
													<li>
														<button type="button" class="btn">
															Very Good
															<input value="VG" class="diamond-polish" name="polish[]" type="checkbox" ng-click="getDiamondResults()">
														</button>
													</li>
													<li>
														<button type="button" class="btn">
															Good
															<input value="GD" class="diamond-polish" name="polish[]" type="checkbox" ng-click="getDiamondResults()">
														</button>
													</li>

												</ul>
											</div>
										</div>
										<div class="diamond-filter-quote">
											<div class="quote-icon-pop helping-text-container ">
												<a class="ma-info-icon" href="javascript:void(0)"><img src="assets/images/marlows-info-icon.png" alt="marlows-info-icon"></a>
												<div class="m-quote-pop">
													{{POLISH_TOOLTIP}}
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="choose-diaond-fields row diamond-symmetry">
								<div class="diamond-field-labels col-lg-3">
									Symmetry
								</div>
								<div class="diamond-field-contens col-lg-9">
									<div class="diamond-field-inner-bar">
										<div class="diamond-fil-cols">
											<div class="diamond-values-in">
												<ul>
													<li>
														<button type="button" class="btn">
															Excellent
															<input value="EX" class="diamond-symmetry" name="symmetry[]" type="checkbox" ng-click="getDiamondResults()">
														</button>
													</li>
													<li>
														<button type="button" class="btn">
															Very Good
															<input value="VG" class="diamond-symmetry" name="symmetry[]" type="checkbox" ng-click="getDiamondResults()">
														</button>
													</li>
													<li>
														<button type="button" class="btn">
															Good
															<input value="GD" class="diamond-symmetry" name="symmetry[]" type="checkbox" ng-click="getDiamondResults()">
														</button>
													</li>

												</ul>
											</div>
										</div>
										<div class="diamond-filter-quote">
											<div class="quote-icon-pop helping-text-container ">
												<a class="ma-info-icon" href="javascript:void(0)"><img src="assets/images/marlows-info-icon.png" alt="marlows-info-icon"></a>
												<div class="m-quote-pop">
													{{SYMMETRY_TOOLTIP}}
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>


							<div class="choose-diaond-fields row diamond-fluorescence">
								<div class="diamond-field-labels col-lg-3">
									Fluorescence
								</div>
								<div class="diamond-field-contens col-lg-9">
									<div class="diamond-field-inner-bar">
										<div class="diamond-fil-cols">
											<div class="diamond-values-in">
												<ul>
													<li>
														<button type="button" class="btn">
															None
															<input value="N" class="diamond-fluorescence" name="fluorescence[]" type="checkbox" ng-click="getDiamondResults()">
														</button>
													</li>
													<li>
														<button type="button" class="btn">
															Faint
															<input value="F" class="diamond-fluorescence" name="fluorescence[]" type="checkbox" ng-click="getDiamondResults()">
														</button>
													</li>
													<li>
														<button type="button" class="btn">
															Medium
															<input value="M" class="diamond-fluorescence" name="fluorescence[]" type="checkbox" ng-click="getDiamondResults()">
														</button>
													</li>
													<li>
														<button type="button" class="btn">
															Strong
															<input value="ST" class="diamond-fluorescence" name="fluorescence[]" type="checkbox" ng-click="getDiamondResults()">
														</button>
													</li>
													<li>
														<button type="button" class="btn">
															V Strong
															<input value="VS" class="diamond-fluorescence" name="fluorescence[]" type="checkbox" ng-click="getDiamondResults()">
														</button>
													</li>

												</ul>
											</div>
										</div>
										<div class="diamond-filter-quote">
											<div class="quote-icon-pop helping-text-container ">
												<a class="ma-info-icon" href="javascript:void(0)"><img src="assets/images/marlows-info-icon.png" alt="marlows-info-icon"></a>
												<div class="m-quote-pop">
													{{FLUORESCENCE_TOOLTIP}}
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="choose-diaond-fields row">
								<div class="diamond-field-labels col-lg-3">
									Certificate
								</div>
								<div class="diamond-field-contens col-lg-9">
									<div class="diamond-field-inner-bar">
										<div class="diamond-fil-cols">
											<div class="diamond-values-in">
												<ul>
													<li>
														<button type="button" class="btn">
															GIA
															<input value="GIA" class="diamond-certificate" name="certificate[]" type="checkbox" ng-click="getDiamondResults()">
														</button>
													</li>
													<li>
														<button type="button" class="btn">
															IGI
															<input value="IGI" class="diamond-certificate" name="certificate[]" type="checkbox" ng-click="getDiamondResults()">
														</button>
													</li>
												</ul>
											</div>
										</div>
										<div class="diamond-filter-quote">
											<div class="quote-icon-pop helping-text-container ">
												<a class="ma-info-icon" href="javascript:void(0)"><img src="assets/images/marlows-info-icon.png" alt="marlows-info-icon"></a>
												<div class="m-quote-pop">
													{{CERTIFICATE_TOOLTIP}}
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- <div class="chooseshop-btn text-center">
							<a class="btn-bg-small" href="#">Search</a>
						</div> -->
						</div>

					</form>
				</div>
			</div>
			<div class="col-lg-8">
				<div class="live-diamond-search">
					<div class="diamond-heaing-two">
						{!!$data->description!!}
					</div>
					<div class="diamond-search-tb-wrap">
						<div class="diamond-search-table">
							<table cellpadding="0" cellpadding="0" border="0">
								<thead>
									<tr>
										<th>Shape</th>
										<th>Carat</th>
										<th>Colour</th>
										<th>Clarity</th>
										<th ng-if="shape=='ROUND'">Cut</th>
										<th>Cert</th>
										<th>Diamond Price</th>
										<th>Certificate</th>
										<th>Image</th>
										<th>Select</th>
									</tr>
								</thead>
								<tbody>
									<tr ng-if="data.length>0 && loader==false" ng-repeat="records in data" class="<%$index%>" id="selectedDiamondRow<%$index%>">
										<td id="tdShape<%$index%>"><%records.Shape%></td>
										<td id="tdCarat<%$index%>"><%records.Carat | number : 2%></td>
										<td id="tdColor<%$index%>"><%records.Color%></td>
										<td id="tdClarity<%$index%>"><%records.Clarity%></td>
										<td id="tdCut<%$index%>" ng-if="shape=='ROUND'"><%records.Cut%></td>
										<td id="tdLab<%$index%>"><%records.Lab%></td>
										<td id="tdAmount<%$index%>">{{$MY_CURRENCY_SYMBOL}} <%records.Amount | number : 2 %></td>

										<td id="tdCertiLink<%$index%>"> <a target="_block" class="table-view-btn" href="<%records.CertificateLink%>">View</a> </td>

										<td id="tdImgLink<%$index%>"><a ng-if="records.ImageLink" href="<%records.ImageLink%>" class="diamond_image" target="_blank">View Diamond</a></td>

										<td><input id="selectedDiamondCheckBox<%$index%>" data-certno="<%records.CERT_NO%>" data-stockno="<%records.Stock_NO%>" type="radio" name="selectedDiamond" value="<%records.Amount%>" ng-checked="$index==0" ng-click="updateDiamondPrice(records.Amount)" ng-model="selectedDiamond"></td>
									</tr>

									<tr ng-if="data.length==0">
										<td colspan="10">No Record Found.</td>
									</tr>

								</tbody>
							</table>
							<div class="timeline-wrapper" ng-if="loader">
								<div class="timeline-item">
									@for($i=1;$i<=5;$i++)
									<div class="animated-background">
										<div class="background-masker content-first-end"></div>
									</div>
									@endfor
							</div>
						</div>
						<div data-pagination=""
							ng-if="isPagignationShow"
							data-num-pages="totalPages"
							data-current-page="currentPage"
							data-max-size="maxSize"
							data-boundary-links="false" 
							ng-click="pageChanged()">
						</div>
					</div>
					<input type="hidden" id="addtobasketselectedrowid" value="0">
					<input type="hidden" id="addCertificateNo" value="0">
					<input type="hidden" id="addStockNumber" value="0">
					<input type="hidden" id="total_amount" value="<%firstDiamondAmount | number : 2 %>">
					<input type="hidden" id="partial_amount" value="<%partial_deposit_payment | number : 2 %>">
					<div class="table-bottom-content tabel-payment">
						<input type="radio" class="form-control" id="full_payment" name="payment_mode" checked="true" value="100" ng-model="payment_mode" ng-change="getDiamondResults()"> <span>Full Payment</span>
						<input type="radio" class="form-control" id="partial_deposit_payment" name="payment_mode" value="{{$checkDepositPercentage}}" ng-model="payment_mode" ng-change="getDiamondResults()">
						<span>{{$checkDepositPercentage}}% Payment </span>
						<div class="pay-amtrest" style="display: none !important;"><span id="deposited_message"> 
						Reserve diamond for {{$checkDepositPercentage}}%. Balance in store after viewing.	
						</span></div>
						<div class="diamond-total-subtotal">
							<p ng-if="firstDiamondAmount"> <strong>Diamond Price:</strong> {{$MY_CURRENCY_SYMBOL}} <%firstDiamondAmount | number : 2 %></p>
							<div ng-switch="payment_mode">
								<div ng-switch-when="10"><strong style="color: #8e2e65;">Partial Diamond Price:</strong> {{$MY_CURRENCY_SYMBOL}} <%partial_deposit_payment | number : 2 %></div>
								<div ng-switch-default><strong style="color: #8e2e65;">Partial Diamond Price:</strong> {{$MY_CURRENCY_SYMBOL}} <%firstDiamondAmount | number : 2 %></div>
							</div>
						</div>
						<div class="addbasket-req-btns">
							<a id="addtobasket" href="javascript:void(0);" class="btn-bg-small" role="button">
								Add to basket
							</a>
							<a type="button" class="btn-bg-small" data-bs-toggle="modal" data-bs-target="#requestAppointment">
								Request an Appointment
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
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
                            <div class="g-recaptcha" data-sitekey="6LfQrxUgAAAAAFD1c2BmyaKHy1F20WUJEloRiyie">
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
@section('js')
{{-- <script src="{{ asset('assets/js/nouislider.js?').env('VERSION') }}"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>

<script>

	function blankForm(){
		$('input[name="title"]').val('');
		$('input[name="email"]').val('');
		$('input[name="phone"]').val('');
		$('textarea[name="description"]').val('');
		$("button[type='submit']").prop('disabled',false);
		$('#requestAppointment').modal('hide');
		grecaptcha.reset();
	}

	function touchHandler(event) {
		var touch = event.changedTouches[0];

		var simulatedEvent = document.createEvent("MouseEvent");
		simulatedEvent.initMouseEvent({
				touchstart: "mousedown",
				touchmove: "mousemove",
				touchend: "mouseup"
			}[event.type], true, true, window, 1,
			touch.screenX, touch.screenY,
			touch.clientX, touch.clientY, false,
			false, false, false, 0, null);

		touch.target.dispatchEvent(simulatedEvent);
		event.preventDefault();
	}


	jQuery(document).ready(function($){

		$('form#contactForm').validate({
			rules: {
				title: {
					required: true
				},
				email: {
					required: true,
					email: true
				},
				phone: {
					required: true,
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
							blankForm();
							$("button[type='submit']").text("Send Message");
							if(response.status == 200){
								toastr.success(response.success);
							}else{
								toastr.info(response.error);
							}
						}
					});
				// } else {
				// 	alert('Please confirm captcha to proceed')
				// }
			}
		});

		$(function () {
			$('input[name="shape"]:radio').change(function () {
				if($(this).val() == 'ROUND'){
					$('.diamond-cut-grade').show();
				}else{
					$('.diamond-cut-grade').hide();
				}
			});
		});

		function init() {
			document.addEventListener("touchstart", touchHandler, true);
			document.addEventListener("touchmove", touchHandler, true);
			document.addEventListener("touchend", touchHandler, true);
			document.addEventListener("touchcancel", touchHandler, true);
		}


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


		$("#slider").slider({
			range: true,
			min: 0.3,
			max: 5.0,
			step: 0.1,
			values: [0.5, 2.5],
			slide: function(event, ui) {
				var value1 = $("#slider").slider("values", 0);
				var value2 = $("#slider").slider("values", 1);
				$("#sliderRangeSetMin").val(value1);
				$("#sliderRangeSetMax").val(value2);


				for (var i = 0; i < ui.values.length; ++i) {
					$("input.sliderValue[data-index=" + i + "]").val(ui.values[i]);
				}

			},
			change: function(){

				var value1 = $("#slider").slider("values", 0);
				var value2 = $("#slider").slider("values", 1);

				angular.element(document.getElementById('diamondMainController')).scope().getDiamondResults();
			},
		});

		$("#sliderRangeSetMin").change(function (event) {
			var value1 = parseFloat($("#sliderRangeSetMin").val());
			var highVal = value1 * 2;
			$("#slider").slider("option", {"max": highVal, "value": value1});
		});

		$("#sliderRangeSetMax").change(function (event) {
			var value1 = parseFloat($("#sliderRangeSetMax").val());
			var highVal = value1 * 2;
			$("#slider").slider("option", {"max": highVal, "value": value1});
		});

		var stepsSlider = document.getElementById('range-slider');
		var input0 = document.getElementById('input-carat-min');
		var input1 = document.getElementById('input-carat-max');
		var inputs = [input0, input1];


		$(document).on('click','input[type="checkbox"]',function(){
			if($(this).is(":checked")==true){
				$(this).parent().parent().addClass('active-diamond');
			}else{
				$(this).parent().parent().removeClass('active-diamond');
			}
		});
		$(document).on('click','input[name="shape"]',function(){
			$('.shape-list li').removeClass('active-diamond')
			$(this).parent().parent().addClass('active-diamond');
		});

		$(document).on('change', "[id^=selectedDiamondCheckBox]", function() {
			var index = parseInt($(this).attr("id").replace("selectedDiamondCheckBox",''));
			$('#addtobasketselectedrowid').val(index);
			setPartialPaymentAmount(index);
		});

		$('#addtobasket').on('click',function(){
			addtobasketFunction($('#addtobasketselectedrowid').val());
		});


		$("input[name='payment_mode']").on('change',function(){
			var mode_value = $(this).val();
			var mode_check_value = '{{$checkDepositPercentage}}';
			$('.pay-amtrest').attr("style", "display: none !important");
			if($(this).val() == '{{$checkDepositPercentage}}'){
				$(".pay-amtrest").removeAttr("style");
			}

			
		});
		

		function setPartialPaymentAmount() {

			$('#total-diamond-price').html("<strong>Partial Diamond Price:</strong> {{$MY_CURRENCY_SYMBOL}} "+$('#partial_amount').val());
			
		}



	});

	function getNumberFromCurrency(currency) {
		return Number(currency.replace(/,/g , ''))
	}

	function getParameterByName(name, url) {
		if (!url) url = window.location.href;
		name = name.replace(/[\[\]]/g, "\\$&");
		var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
			results = regex.exec(url);
		if (!results) return null;
		if (!results[2]) return '';
		return decodeURIComponent(results[2].replace(/\+/g, " "));
	}

	function isNullAndUndef(variable) {
		return (variable !== null && variable !== undefined);
	}

	function addtobasketFunction(index){
		console.log(index);
		var cert_number = $('#tdCertiLink'+index).find('a').attr('href');

		var reportno = getParameterByName('reportno',cert_number);
		var certNumber;
		if(reportno !== null && reportno !== undefined){
			certNumber = reportno;
		}else{
			var reportno = getParameterByName('r',cert_number);
			if(reportno !== null && reportno !== undefined){
				certNumber = reportno;
			}else{
				var tarr = cert_number.replace(/^.*\/\/[^\/]+/, '').split('/');
				certNumber = tarr[2].replace(/\.[^/.]+$/, "");
			}
		}


		var certificatenumber = $('#selectedDiamondCheckBox'+index).data('certno');
		var stockno = $('#selectedDiamondCheckBox'+index).data('stockno');
		console.log(certificatenumber);

		if(certificatenumber != '' && certificatenumber !== null && certificatenumber !== undefined){
			certNumber = certificatenumber;
		}else{
			certNumber = '';
		}

		if(stockno != '' && stockno !== null && stockno !== undefined){
			stockno = stockno;
		}else{
			stockno = stockno;
		}

		$.ajax({
			type: 'POST',
			url: '{{route("add.to.cart.diamond")}}',
			data: {
				'_token': "{{csrf_token()}}",
				'Carat' : $('#tdCarat'+index).text(),
				'Color' : $('#tdColor'+index).text(),
				'Clarity' : $('#tdClarity'+index).text(),
				'Cut' : $('#tdCut'+index).text(),
				'Lab' : $('#tdLab'+index).text(),
				'CERT_NO' : certNumber,
				'Stock_NO' : stockno,
				'deposit' : $("input[name=payment_mode]").val(),
				'total_amount' : $("#total_amount").val(),
				'partial_amount' : $("#partial_amount").val(),
				'price': getNumberFromCurrency($('#tdAmount'+index).text()) || 0,
				'setting_price': getNumberFromCurrency($('#tdAmount'+index).text()) || 0,
				'CertificateLink': $('#tdCertiLink'+index).find('a').attr('href') || '',
				'Shape': $('#tdShape'+index).text() || '',
				'ImageLink': $('#tdImgLink'+index).find('a').attr('href') || '',
			},
			success: function (res) {
				if(res.success != '' && typeof res.success !== "undefined"){
					if(res.cartcount){
						$(".cartcount").text(res.cartcount);
					}
					if(res.wishcount){
						$(".wishcount").removeClass('fa-heart-o');
						$(".wishcount").addClass('fa-heart');
					}
					toastr.success(res.success);
				}else{
					toastr.info(res.error);
				}
			}
		});
	}


</script>
<script src='https://www.google.com/recaptcha/api.js'></script>
@endsection

@endsection

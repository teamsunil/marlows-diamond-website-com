@extends('layouts.front.app')
@section('content')

<!-- guide main -->
<div class="buying-engagementguide-page">
	<div class="main-guide-blok">
		<div class="container">
			<h1>{!!isset($data->title)?$data->title:""!!}</h1>
				{!!isset($data->short_description)?$data->short_description:""!!}
		</div>
	</div>

	<!-- Newsletter -->
	<div class="buying-guuides-newsletter">
		<div class="container">
			<!-- Join our mailing list section start -->
			<div class="joinour-mailing">
				<div class="joinour-wraper">
					<div class="joinour-heading">
						<div class="heading-h-two white-text">
							{{ __('buying-engagement-ring.formTitle') }}
						</div>
						<p>{{ __('buying-engagement-ring.formSubTitle') }}</p>
					</div>
					<div class="joinour-mailing-form">
						<form method="post" action="{{ route('maillist') }}">
							@csrf
							<div class="form-rows flexed flex-flex-wrap">
								<div class="form-col width-50">
									<label>	{{ __('buying-engagement-ring.formName') }}<sup>*</sup></label>
									<input required class="input-control {{ $errors->has('title') ? 'error' : '' }}" type="text" name="title" placeholder="{{ __('buying-engagement-ring.formName') }}">
									<!-- Error -->
									@if ($errors->has('title'))
									<div class="error">
										{{ $errors->first('title') }}
									</div>
									@endif
								</div>
								<div class="form-col width-50">
									<label>	{{ __('buying-engagement-ring.formEmail') }}<sup>*</sup></label>
									<input required class="input-control {{ $errors->has('email') ? 'error' : '' }}" type="text" name="email" placeholder="{{ __('buying-engagement-ring.formEmail') }}">
									@if ($errors->has('email'))
									<div class="error">
										{{ $errors->first('email') }}
									</div>
									@endif
								</div>
							</div>
							<div class="form-rows flexed flex-flex-wrap">
								<div class="form-col">
									<label>	{{ __('buying-engagement-ring.formMessage') }}</label>
									<textarea name="description" class="input-control {{ $errors->has('description') ? 'error' : '' }}" placeholder="{{ __('buying-engagement-ring.formMessage') }}"></textarea>

								</div>
							</div>
							<div class="action-btn">
								<button class="white-bg-btn">	{{ __('buying-engagement-ring.formButton') }}</button>

							</div>
						</form>

					</div>
					<!-- @if(Session::has('success'))
						<div class="alert alert-success">
							{{Session::get('success')}}
						</div>
					@endif !-->
				</div>
			</div>

		</div>
	</div>
		<!-- Join our mailing list section End -->

	<!-- should buy --->
	<div class="should-buy-wraper">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="should-buy-col">
						<h2>{{ __('buying-engagement-ring.Should-You') }}</h2>
					</div>
				</div>
				<div class="col-md-6">
					<div class="should-buy-col">
						<p>{{ __('buying-engagement-ring.We-understand') }}</p>
						<p>{{ __('buying-engagement-ring.This-guide') }}</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- guides even odd list of image text -->
	<div class="buying-guides-img-text">
		<div class="container">
			<!-- list -->
			<div class="buying-guide-listss">
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<div class="buying-guidelist-text">
							
							<h3>{{ __('buying-engagement-ring.Is-Buying_title') }}</h3>
							<p>{{ __('buying-engagement-ring.Is-Buying_Subtitle') }}</p>
						</div>
					</div>
					<div class="col-lg-6  col-md-6">
						<div class="buying-guidelist-img">
							<img src="{{ env('APP_IMAGE_URL').'/assets/images/Marlows-06.jpg' }}" alt="img guide">
						</div>
					</div>
				</div>
			</div>
			<!-- list end -->
			<!-- list -->
			<div class="buying-guide-listss">
				<div class="row">
					<div class="col-lg-6  col-md-6">
						<div class="buying-guidelist-img">
							<img src="{{ env('APP_IMAGE_URL').'/assets/images/Marlows-04.jpg' }}" alt="img guide">
						</div>
					</div>
					<div class="col-lg-6  col-md-6">
						<div class="buying-guidelist-text">
							<h3>{{ __('buying-engagement-ring.Planning_title') }}</h3>
							<p>{{ __('buying-engagement-ring.Planning_Subtitle') }}</p>
							
						</div>
					</div>
				</div>
			</div>
			<!-- list end -->
			<!-- list -->
			<div class="buying-guide-listss ">
				<div class="row">
					<div class="col-lg-6  col-md-6">
						<div class="buying-guidelist-text">
							<h3>{{ __('buying-engagement-ring.Things_title') }}</h3>
							<p>{{ __('buying-engagement-ring.Things_Subtitle') }}</p>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="buying-guidelist-img">
							<img src="{{ env('APP_IMAGE_URL').'/assets/images/Marlows-05.jpg' }}" alt="img guide">
						</div>
					</div>
				</div>
			</div>
			<!-- list end -->
			<!-- list -->
			<div class="buying-guide-listss">
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<div class="buying-guidelist-img">
							<img src="{{ env('APP_IMAGE_URL').'/assets/images/Marlows-03.jpg' }}" alt="img guide">
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="buying-guidelist-text">
							<h3>{{ __('buying-engagement-ring.Should_title') }}</h3>
							<p>{{ __('buying-engagement-ring.Should_Subtitle') }}</p>
						</div>
					</div>
				</div>
			</div>
			<!-- list end -->
			<!-- list -->
			<div class="buying-guide-listss">
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<div class="buying-guidelist-text">
							<h3>{{ __('buying-engagement-ring.What-Should') }}</h3>
							<p>{{ __('buying-engagement-ring.This-custom') }}</p>
							<p>{{ __('buying-engagement-ring.There’s-no') }}</p>
							<p>{{ __('buying-engagement-ring.This-custom') }}</p>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="buying-guidelist-img">
							<img src="{{ env('APP_IMAGE_URL').'/assets/images/Marlows-02.jpg' }}" alt="img guide">
						</div>
					</div>
				</div>
			</div>
			<!-- list end -->
			<!-- list -->
			<div class="buying-guide-listss">
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<div class="buying-guidelist-img">
							<img src="{{ env('APP_IMAGE_URL').'/assets/images/Marlows-01.jpg' }}" alt="img guide">
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="buying-guidelist-text">
							<h3>{{ __('buying-engagement-ring.Ring-Size') }}</h3>
							<p>{!! __('buying-engagement-ring.Ring-SizeContent') !!}</p>
						</div>
					</div>
				</div>
			</div>
			<!-- list end -->
		</div>
	</div>

	<!--How To Buy An Engagement Ring Without Knowing Size? -->
	<div class="howtobuy-engage-ring">
		<div class="container">
			<h3>{{ __('buying-engagement-ring.How-To-Buy') }}</h3>
			<p>{{ __('buying-engagement-ring.How-To-BuyContent') }}</p>
				<div class="download-btn">
					<a href="{{asset('')}}files/Marlows1-Engagement-Ring-Guide-4.3.pdf">{{ __('buying-engagement-ring.DownloadGuide') }}</a>
				</div>
				<p>{{ __('buying-engagement-ring.And-if') }}</p>

		</div>
	</div>

	<!--What Diamond Setting To Go For? -->
	<div class="whatdiamond-to">
		<div class="container">
			<h3> {{ __('buying-engagement-ring.What-Diamond-Setting') }}</h3>
			<p>{{ __('buying-engagement-ring.There-are-four') }}</p>
			<div class="whatdiamond-list">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="whatdimond-cols">
							<div class="whatdimond-cols-img">
								<img src="{{ env('APP_IMAGE_URL').'/assets/images/pasted-image-0-1-300x300.png' }}" alt="image1">
							</div>
							<div class="whatdimond-cols-text">
								{{ __('buying-engagement-ring.Solitaire-Diamond ') }}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="whatdimond-cols">
							<div class="whatdimond-cols-img">
								<img src="{{ env('APP_IMAGE_URL').'/assets/images/unnamed-300x300.png' }}" alt="image1">
							</div>
							<div class="whatdimond-cols-text">
								{{ __('buying-engagement-ring.Halo-Diamond-Engagement') }}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="whatdimond-cols">
							<div class="whatdimond-cols-img">
								<img src="{{ env('APP_IMAGE_URL').'/assets/images/pasted-image-0-300x300.png' }}" alt="image1">
							</div>
							<div class="whatdimond-cols-text">
								{{ __('buying-engagement-ring.Shoulder-Set-Diamond') }}
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="whatdimond-cols">
							<div class="whatdimond-cols-img">
								<img src="{{ env('APP_IMAGE_URL').'/assets/images/unnamed-1-300x300.png' }}" alt="image1">
							</div>
							<div class="whatdimond-cols-text">
								{{ __('buying-engagement-ring.Multistone-Diamond-Engagement-Ringsr') }}
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- What Diamond Quality To Choose? -->
	<div class="whatdiamond-quality">
		<div class="container">
			<div class="center-head-para text-center">
				<h3> {{ __('buying-engagement-ring.What-Diamond-Quality') }}</h3>
				<p>{{ __('buying-engagement-ring.Choosing-diamond') }}</p>
			</div>
			<div class="before-heading">
				<span>{{ __('buying-engagement-ring.The-4') }}</span>
			</div>
			<div class="cfour-explained-one">
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<div class="whatdiamond-cols">
							<div class="whatdimond-cols-text">
								{{ __('buying-engagement-ring.Diamond-Clarity') }}
							</div>
							<p>
								{{ __('buying-engagement-ring.Diamond-Clarity-content') }}
							</p>
							<div class="whatdiamond-imgs">
								<img src="{{ env('APP_IMAGE_URL').'/assets/images/diamond-clarity.png' }}" alt="diamond-clarity">
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="whatdiamond-cols">
							<div class="whatdimond-cols-text">
								{{ __('buying-engagement-ring.Diamond-Cut') }}
							</div>
							<p>
								{{ __('buying-engagement-ring.Diamond-Cut-content') }}
							</p>
							<ul>
								<li>{!! __('buying-engagement-ring.Brightness') !!}</li>
								<li>{!! __('buying-engagement-ring.Fire') !!} </li>
								<li>{!! __('buying-engagement-ring.Scintillation') !!}</li>
							</ul>
							<div class="whatdiamond-imgs">
								<img src="{{ env('APP_IMAGE_URL').'/assets/images/diamond-cut.png' }}" alt="diamond-cut">
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="cfour-explained-one">
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<div class="whatdiamond-cols">
							<div class="whatdimond-cols-text">
								{{ __('buying-engagement-ring.Diamond-Carat-Weight') }}
							</div>
							<p>
							{{ __('buying-engagement-ring.Diamond-Carat-Weight-Content') }}
							</p>
							<div class="whatdiamond-tables">
								<table border-collpase="collapse">
									<thead>
									<tr>
										{!! __('buying-engagement-ring.Diamond-Carat-Weight-Content-text') !!}
										
										</tr>
									</thead>
									<tbody>

										<tr>
											<td>1/10</td>
											<td>.09-.11</td>
										</tr>
										<tr>
											<td>1/8</td>
											<td>.12-.13</td>
										</tr>
										<tr>
											<td>1/7</td>
											<td>.14-.15</td>
										</tr>
										<tr>
											<td>1/6</td>
											<td>.16-.17</td>
										</tr>
										<tr>
											<td>1/5</td>
											<td>..18-.22</td>
										</tr>
										<tr>
											<td>1/4</td>
											<td>.23-.28</td>
										</tr>
										<tr>
											<td>1/3</td>
											<td>.29-.36</td>
										</tr>
										<tr>
											<td>3/8</td>
											<td>.37-.44</td>
										</tr>
										<tr>
											<td>1/2</td>
											<td>..45-.58</td>
										</tr>
										<tr>
											<td>5/8</td>
											<td>.59-.68</td>
										</tr>
										<tr>
											<td>3/4</td>
											<td>.69-.82</td>
										</tr>
										<tr>
											<td>7/8</td>
											<td>.83-.94</td>
										</tr>
										<tr>
											<td>1.0</td>
											<td>.95-1.05</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="whatdiamond-cols">
							<div class="whatdimond-cols-text">
								{{ __('buying-engagement-ring.Diamond-Colour') }}
							</div>
							<p>
								{{ __('buying-engagement-ring.Diamond-Colour-content') }}
							</p>
							<div class="whatdiamond-imgs">
								<img src="{{ env('APP_IMAGE_URL').'/assets/images/marlows-diamond-colour.png' }}" alt="diamond-cut">
							</div>
							<p>
								{{ __('buying-engagement-ring.The-colour') }}
							</p>
							<p>
								{{ __('buying-engagement-ring.Tip') }}
							</p>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="whichring-metal-wrap">
		<div class="container">
			<div class="whichring-rows">
				<div class="row">
					<div class="col-lg-5 col-md-5">
						<div class="whichring-col">
							<div class="whatdimond-cols-text">
								{{ __('buying-engagement-ring.MetalColourToChoose') }}
							</div>
							<p>{{ __('buying-engagement-ring.Choosingtheband') }}</p>
						</div>
					</div>
					<div class="col-lg-7 col-md-7">
						<div class="whichring-col">
							<div class="whichring-table">
								{!! __('buying-engagement-ring.metalColour') !!}
								

							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="whichring-rows">
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<div class="whichring-col">
							<img src="{{ env('APP_IMAGE_URL').'/assets/images/metal-colours.png' }}" alt="">
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="whichring-col">
							{!! __('buying-engagement-ring.So-there-are') !!}

						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

	<!--Does Lifestyle Affect Choice Of Engagement Ring? -->
	<div class="doeslifestyle-wraper">
		<div class="container">
			<div class="lifestyle-heading">
				{{ __('buying-engagement-ring.Does-Lifestyle') }}
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="lifestyle-text">
						<p>{{ __('buying-engagement-ring.Indeed') }}</p>
				
					</div>
				</div>
				<div class="col-md-6">
					<div class="lifestyle-text">
						<p>{{ __('buying-engagement-ring.fiance-to-be') }}</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Does Style & Personality Affect Choice Of Engagement Rings? -->
	<div class="doesstyle-wraper">
		<div class="container">
			<div class="center-head-para text-center">
					<h3>{{ __('buying-engagement-ring.Does-Style') }}</h3>
					<p>	{{ __('buying-engagement-ring.When-looking-at') }}
					</p>
				</div>
			<div class="doesstyle-blocks">
				<div class="whatdimond-cols-text">
					{{ __('buying-engagement-ring.Which-Ring') }}
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<div class="whatsdoes-col">
							<p>	{{ __('buying-engagement-ring.This-can-give') }}</p>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="whatsdoes-col">
							<p>{{ __('buying-engagement-ring.Someone-who') }}</p>
						</div>
					</div>
				</div>
			</div>

			<div class="doesstyle-blocks">
				<div class="whatdimond-cols-text">
					{{ __('buying-engagement-ring.omeone-with') }}
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<div class="whatsdoes-col">
							<p>	{{ __('buying-engagement-ring.Settings-Symbolise') }}</p>
							<p>{{ __('buying-engagement-ring.dditiontotheclothes') }}</p>
							<p>	{{ __('buying-engagement-ring.RoundBrilliantCutDiamond') }}</p>
							<p>{{ __('buying-engagement-ring.Square-Princess') }}</p>
							<p>{{ __('buying-engagement-ring.EmeraldCutDiamond') }}</p>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="whatsdoes-col">
							<p>{{ __('buying-engagement-ring.HeartCutDiamond') }}</p>
							<p>{{ __('buying-engagement-ring.PearCutDiamond') }}</p>
							<p>{{ __('buying-engagement-ring.MarquiseCutDiamond') }}</p>
							<p>{{ __('buying-engagement-ring.CushionCutDiamond') }}</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- What Is Their Hand Type? -->
	<div class="whatsthere-wraper">
		<div class="container">
			<div class="whatsthere-rows">
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<div class="whatsthere-cols">
							<div class="whatdimond-cols-text">
								{{ __('buying-engagement-ring.HandType') }}
							</div>
							<p>{{ __('buying-engagement-ring.Choosingdiamondengagement') }}</p>
							<p>{{ __('buying-engagement-ring.Allhands') }}</p>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="whatsthere-cols">
							<div class="whatdiamond-tables">
								{!! __('buying-engagement-ring.handTypeSection') !!}
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="whatsthere-rows">
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<div class="whatsthere-cols text-center">
							<img src="{{ env('APP_IMAGE_URL').'/assets/images/unnamed-2.png' }}" alt="image">
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="whatsthere-cols">
							<div class="whatdimond-cols-text">
								{!! __('buying-engagement-ring.buyingAnEngagements') !!}
							</div>
						
							<p>{{ __('buying-engagement-ring.Ifyouareworried') }}</p>
						</div>
					</div>

				</div>
			</div>

		</div>
	</div>

	<!-- Diamond Terms Explained -->
	<div class="diamondterms-wraper">
		<div class="container">
			<div class="center-head-para text-center">
				<h3>{{ __('buying-engagement-ring.diamondTermsTitle') }}</h3>
				</p>
			</div>
			<div class="diamondterm-faq">
			<div class="faq-list">
					<div class="accordion" id="accordionExample">
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingAe">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAe" aria-expanded="true" aria-controls="collapseAe">
								A - E
							</button>
							</h2>
							<div id="collapseAe" class="accordion-collapse collapse" aria-labelledby="headingAe" data-bs-parent="#accordionExample">
								{!! __('buying-engagement-ring.diamondTermstab1') !!}
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingFj">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFj" aria-expanded="true" aria-controls="collapseFj">
								F - J
							</button>
							</h2>
							<div id="collapseFj" class="accordion-collapse collapse" aria-labelledby="headingFj" data-bs-parent="#accordionExample">
								{!! __('buying-engagement-ring.diamondTermstab2') !!}
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingPz">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePz" aria-expanded="true" aria-controls="collapsePz">
								P - Z
							</button>
							</h2>
							<div id="collapsePz" class="accordion-collapse collapse" aria-labelledby="headingPz" data-bs-parent="#accordionExample">
								{!! __('buying-engagement-ring.diamondTermstab3') !!}
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>


</div>
<!-- main end of page middle text-->


<!-- Section Reviews -->
<div class="container">
<div class="rating-review-block">
				<div class="owl-carousel owl-theme slider-review">
				@include('front.pages.reviews')
				</div>
			</div>
</div><!-- insta photos section start -->
@include('front.includes.instagram-section')
<!-- insta photos section end -->

@endsection

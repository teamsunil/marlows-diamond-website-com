@extends('layouts.front.app')
@section('content')
<!-- category header banner start -->
<div class="category-banner" style="background-image:url(assets/images/blog-main-bg.jpg)">
   <div class="container">
      <div class="category-banner-text">
         <h1>{!!isset($data->title)?$data->title:""!!}</h1>
         <h2>{!!isset($data->subtitle)?$data->subtitle:""!!}</h2>
         <p>{!!isset($data->short_description)?$data->short_description:""!!}</p>
      </div>
   </div>
</div>
<!-- category header banner end -->
<div class="faq-main-list">
   <div class="container">
      <div class="row">
         @php
         $getFaqs = getFaqs();
         @endphp
         @foreach($getFaqs as $key => $faqcat)
         <div class="col-lg-6">
            <div class="faq-list-inner">
               <div class="faqin-head">{{isset($faqcat->title)?$faqcat->title:""}}</div>
               <div class="faq-list">
                  <div class="accordion" id="accordionExample">
                     <?php 
                     $temp_faqs = chnageColumnAccordingToLanguage($faqcat->getFAQData, 'langFaq', ['title', 'description'], session()->get('language'));
                     ?>
                     @foreach($temp_faqs as $key1 => $faq)
                     <div class="accordion-item">
                        <h2 class="accordion-header" id="faqheadingThree">
                           @if($key1 == 0)
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$faq->id}}" aria-expanded="true" aria-controls="collapse{{$faq->id}}">
                              @else
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$faq->id}}" aria-expanded="true" aria-controls="collapse{{$faq->id}}">
                                 @endif
                                 <!--<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqcollapseThree" aria-expanded="true" aria-controls="faqcollapseThree"> -->
                                 {{$faq->title}}
                              </button>
                        </h2>
                        @if($key1 == 0)
                        <div id="collapse{{$faq->id}}" class="accordion-collapse collapse" aria-labelledby="{{$faq->id}}" data-bs-parent="#accordionExample">
                           @else
                           <div id="collapse{{$faq->id}}" class="accordion-collapse collapse" aria-labelledby="{{$faq->id}}" data-bs-parent="#accordionExample">
                              @endif
                              <!--<div id="faqcollapseThree" class="accordion-collapse collapse" aria-labelledby="faqheadingThree" data-bs-parent="#accordionExample">-->
                              <div class="accordion-body">
                                 {!!$faq->description!!}
                              </div>
                           </div>
                        </div>
                        @endforeach
                     </div>
                  </div>
               </div>
            </div>


            @endforeach
         </div>
      </div>
   </div>
</div>
</div>





<!-- Section Reviews -->
<div class="container">
   <div class="rating-review-block">
      <div class="owl-carousel owl-theme slider-review">
         @include('front.pages.reviews')
      </div>
   </div>
</div>
<!-- insta photos section start -->
@include('front.includes.instagram-section')
<!-- insta photos section end -->
@endsection
@extends('layouts.front.app')
@section('content')
    <style>
        .ajax-load {
            background: #e1e1e1;
            padding: 10px 0px;
            width: 100%;
        }
    </style>
    <!-- header banner start -->
    <?php
    $customImage = isset($data->image) ? $data->image : '';
    $title = '';
    $customSubTitle = '';
    $customShortDescription = '';
    
    if (isset($data->blog_title_details) && !empty($data->blog_title_details)) {
        $title = $data->name;
        $customSubTitle = $data->blog_title_details->subtitle;
        $customShortDescription = $data->blog_title_details->short_description;
        $customImage = isset($data->blog_title_details->image) ? $data->blog_title_details->image : '';
        $titles = chnageColumnAccordingToLanguage($data, 'langPostCategory', ['name'], session()->get('language'));
        $catTitle = $titles->name;
        $data = chnageColumnAccordingToLanguage($data->blog_title_details, 'langPages', ['title', 'subtitle', 'short_description', 'description'], session()->get('language'));
    }
    ?>
    <div class="category-banner" style="background-image:url({{ asset('storage/' . $customImage) }})">
        <div class="container">
            <div class="category-banner-text">

                <h1>

                    @if (isset($catTitle))
                        @php
                            echo $catTitle;
                        @endphp
                    @else
                        @php
                            echo $data->title;
                            
                        @endphp
                    @endif

                </h1>

                <h2>{{ isset($data->subtitle) ? $data->subtitle : $customSubTitle }}</h2>
                <p><?php echo html_entity_decode(isset($data->short_description) ? $data->short_description : $customShortDescription); ?></p>
            </div>
        </div>
    </div>

    <!-- header banner end -->
    <!-- Blog Listing -->
    <div class="bloglist-wraper">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div id="post-data" class="post-data-col"></div>
                    <div class="ajax-load text-center" style="display:none">
                        <p><img alt="Loader image" src="{{ env('APP_IMAGE_URL').'/images/spinner.gif' }}">Loading More post</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="blog-search-field">
                        <div class="formgroup">
                            <input value="{{ request()->searchKeyword }}" type="text" name="search"
                                class="blog-search-input" placeholder="Search for blog.." autocomplete="off">
                            <button class="seach-btn" type="button">
                                <img class="search-icon" src="{{ env('APP_IMAGE_URL').'/assets/images/search.png' }}"
                                    alt="search"></button>
                        </div>
                    </div>

                    <div class="blogdetails-sidebar blog-list-sidebar blog-list-sidebar-first mobile-sidebar">
                        <div class="blogall-latest-resc">
                            <div class="accordion" id="accordion_categoreis">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            All Categories
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse hide"
                                        aria-labelledby="headingOne" data-bs-parent="#accordion_categoreis">
                                        <div class="accordion-body">
                                            <ul>
                                                @php
                                                    $getCategories = getCategories();
                                                @endphp
                                                @foreach ($getCategories as $category)
                                                    <li><a
                                                            href="{{ route('blog_list', $category->slug) }}">{{ isset($category->name) ? $category->name : '' }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="blogdetails-sidebar blog-list-sidebar blog-list-sidebar-first mobile-sidebar">
                        <div class="blogall-latest-resc">
                            <div class="accordion" id="accordion_posts">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Latest Resources
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse hide"
                                        aria-labelledby="headingOne" data-bs-parent="#accordion_posts">
                                        <div class="accordion-body">
                                            <ul>
                                                @php
                                                    $getRecentPosts = getRecentPosts();
                                                @endphp
                                                @foreach ($getRecentPosts as $post)
                                                    <li><a
                                                            href="{{ url('/blog/' . (isset($post->slug) ? $post->slug : '')) }}">{{ isset($post->title) ? $post->title : '' }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="blogdetails-sidebar blog-list-sidebar blog-list-sidebar-first desktop-sidebar">
                        <div class="blogall-latest-resc">
                            <div class="sidebar-title">
                                All Categories
                            </div>
                            <ul>
                                @php
                                    $getCategories = getCategories();
                                    $getCategories = chnageColumnAccordingToLanguage($getCategories, 'langPostCategory', ['name', 'description'], session()->get('language'));
                                    
                                @endphp
                                @foreach ($getCategories as $category)
                                    <li><a
                                            href="{{ route('blog_list', $category->slug) }}">{{ isset($category->name) ? $category->name : '' }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="blogdetails-sidebar blog-list-sidebar desktop-sidebar">
                        <div class="blogall-latest-resc">
                            <div class="sidebar-title">
                                Latest Resources
                            </div>
                            <ul>
                                @php
                                    $getRecentPosts = getRecentPosts();
                                    $getRecentPosts = chnageColumnAccordingToLanguage($getRecentPosts, 'langPosts', ['title', 'subtitle', 'short_description', 'description', 'image'], session()->get('language'));
                                @endphp
                                @foreach ($getRecentPosts as $post)
                                    <li><a
                                            href="{{ url('/blog/' . (isset($post->slug) ? $post->slug : '')) }}">{{ isset($post->title) ? $post->title : '' }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <input type="hidden" id="sectionHeight" value="">
            <input type="hidden" id="scrollFlag" value="">
            <input type="hidden" id="nextPage" value="1">
        </div>
    </div>
    {{-- <div class="ajax-load text-center" style="display:none">
	<p><img alt="Loader image" src="{{ env('APP_IMAGE_URL').'/images/spinner.gif' }}">Loading More post</p>
</div> --}}
    <!-- Section Reviews -->
    <div class="container">
        <div class="rating-review-block">
            <div class="owl-carousel owl-theme slider-review">
                @include('front.pages.reviews')
            </div>
        </div>
    </div>





    <script>
        const searchIcon = "{{ env('APP_IMAGE_URL').'/assets/images/search.png' }}";
        const searchLoadingIcon = "{{ env('APP_IMAGE_URL').'/assets/images/blog_data_loading.gif' }}";
        const loadingDataImg = "{{ env('APP_IMAGE_URL').'/images/spinner.gif' }}";

        const slugForData = "<?php echo !empty($blogCategorySlug) ? $blogCategorySlug : request()->segment(1); ?>"
        var page = 1;
        $(document).ready(function() {
            loadMoreData(page);
        });

        $(window).scroll(function() {
            var scroll = $('#scrollFlag').val();
            if (scroll == 0 && ($(window).scrollTop() >= parseInt($('#sectionHeight').val() - 300))) {
                page++;
                loadMoreData(page);
                $('#scrollFlag').val(1);
            }
        });


        var typingTimer; //timer identifier
        var doneTypingInterval = 1000; //time in ms, 5 seconds for example
        var $input = $(".blog-search-input");

        //on keyup, start the countdown
        $input.on('keyup', function() {
            $(".search-icon").attr('src', searchLoadingIcon);
            clearTimeout(typingTimer);
            typingTimer = setTimeout(doneTyping, doneTypingInterval);
        });

        //on keydown, clear the countdown 
        $input.on('keydown', function() {
            $(".search-icon").attr('src', searchLoadingIcon);
            clearTimeout(typingTimer);
        });

        //user is "finished typing," do something
        function doneTyping() {
            $("#nextPage").val('1');
            loadMoreData(1, true);
        }

        // $(".blog-search-input").on('keyup', function() {
        // 	const searchKeyword = $(this).val().replace(/\s+/g, ' ').trim();
        // 	$(".search-icon").attr('src',searchLoadingIcon);
        // 	loadMoreData(1, true);
        // 	// if(searchKeyword.length > 3){
        // 	// 	loadMoreData(1, true);
        // 	// }
        // })

        function loadMoreData(page, isSearch = false) {
            const pageTogetData = $("#nextPage").val();
            $.ajax({
                url: '{{ url('post/get-data') }}',
                type: "post",
                data: {
                    '_token': "{{ csrf_token() }}",
                    'page': parseInt(pageTogetData),
                    'slug': slugForData,
                    'searchKeyword': $(".blog-search-input").val(),
                    // 'slug':'{{ request()->segment(1) }}'
                },
                beforeSend: function() {
                    $('.ajax-load').show();
                }
            }).done(function(data) {

                const nextPage = parseInt(pageTogetData) + 1;
                $("#nextPage").val(nextPage);

                if (isSearch) {
                    $("#post-data").empty();
                }

                $(".search-icon").attr('src', searchIcon);
                if (data.html == "") {
                    $('.ajax-load').html("No more records found");
                    return;
                } else {
                    $('.ajax-load').html(`<p><img src="${loadingDataImg}">Loading More post</p>`)
                }



                $('.ajax-load').hide();
                $("#post-data").append(data.html);
                $('#sectionHeight').val($('#post-data').height());
                $('#scrollFlag').val(0);
            }).fail(function(jqXHR, ajaxOptions, thrownError) {
                alert('server not responding...');
                $(".search-icon").attr('src', searchIcon);
            });
        }
    </script>
@endsection

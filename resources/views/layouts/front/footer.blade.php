<?php $selectedLanguage = session()->get('language');
if($selectedLanguage == 'EN'){?>
@inject('footer_settingss', 'App\Models\Settings') 
<?php }else{?>
@inject('footer_settingss', 'App\Models\SettingsLang')
<?php }?>

<!-- Footer start here -->
<footer class="footer-main">
    <div class="container">
        <div class="footer-wraper">
            <div class="footer-links-row flexed flex-flex-wrap">
                <div class="column-one-fifth about-footer">
                    <div class="footer-title">
                        <h4>{!!$footer_settingss->get_options('footer_sec1-title')!!}</h4>
                    </div>
                    <div class="footerabout-col footer-inn-text">
                        <p>{!!$footer_settingss->get_options('about')!!}</p>
                        <div class="footer-social">
                            @if($footer_settingss->get_options('facebook')!='')
                                <a href="{{$footer_settingss->get_options('facebook')}}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            @endif
                            @if($footer_settingss->get_options('twitter')!='')
                                <a href="{{$footer_settingss->get_options('twitter')}}"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            @endif
                            @if($footer_settingss->get_options('instagram')!='')
                                <a href="{{$footer_settingss->get_options('instagram')}}"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            @endif
                            @if($footer_settingss->get_options('pinterest')!='')
                                <a href="{{$footer_settingss->get_options('pinterest')}}"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            @endif
                            @if($footer_settingss->get_options('youtube')!='')
                                <a href="{{$footer_settingss->get_options('youtube')}}"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                            @endif
                            @if($footer_settingss->get_options('linkedin')!='')
                                <a href="{{$footer_settingss->get_options('linkedin')}}"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="column-one-fifth">
                    <div class="footer-title">
                        <h4 class="accordian-toggle">{!!$footer_settingss->get_options('footer_sec2-title')!!}</h4>
                    </div>
                    <div class="footerlinks-col footer-inn-text">
                        {!!$footer_settingss->get_options('catalogue')!!}
                    </div>
                </div>
                <div class="column-one-fifth">
                    <div class="footer-title">
                        <h4 class="accordian-toggle">{!!$footer_settingss->get_options('footer_sec3-title')!!}</h4>
                    </div>
                    <div class="footerlinks-col footer-inn-text">
                        {!!$footer_settingss->get_options('resources')!!}
                    </div>
                </div>
                <div class="column-one-fifth">
                    <div class="footer-title">
                        <h4 class="accordian-toggle">{!!$footer_settingss->get_options('footer_sec4-title')!!}</h4>
                    </div>
                    <div class="footerlinks-col footer-inn-text">
                        {!!$footer_settingss->get_options('sec-resources')!!}
                    </div>
                </div>

                <div class="column-one-fifth">
                    <div class="footer-title">
                        <h4 class="accordian-toggle">{!!$footer_settingss->get_options('footer_sec5-title')!!}</h4>
                    </div>
                    <div class="footerlinks-col footer-inn-text">
                        {!!$footer_settingss->get_options('policies')!!}
                    </div>
                </div>
            </div>

            <div class="footer-content-wrap flexed flex-flex-wrap">
                <div class="fcontent-column icon-payment">
                    {!!$footer_settingss->get_options('footer-left')!!}
                </div>
                <div class="fcontent-column disclaimer-content">
                    {!!$footer_settingss->get_options('footer-center')!!}
                </div>
                <div class="fcontent-column disclaimer-content">
                    {!!$footer_settingss->get_options('footer-right')!!}
                </div>

            </div>
        </div>
    </div>

    <!-- Bottom to top -->
    <div class="botto-to-top">
        <div class="container">
            <span id="scroll-to-top"><i class="fa fa-angle-up" aria-hidden="true"></i></span>
        </div>
    </div>
</footer>
<!-- Footer end here -->
<div class="multidropdown">
    @php
        
        $location = Session::get('location');
        $currency = Session::get('currency');
        $oldCurrency = Session::get('old_currency');
        $language = Session::get('language');
        $currencyTopDes = Session::get('currencyTopDes');
        //print_r($currency);
    @endphp
    <?php
    if($language == null){
        $language = env('DEFULT_LANG_CODE');
    }

    ?>
    @if (empty($location))
        @php
            $browserData = getIpInfos();
            $browserData['countryName'];
            $location = $browserData['countryCode'];
            $currency = $browserData['currencyCode'];
            //dd($currency);
        @endphp
    @endif

    <span id="ctl00_Header2019_CurrencySelection_lblcode" class="lblcode">
        @if ($location || $currency)
            @php echo $location .' / '. $currency @endphp
        @else
            @php echo $browserData['countryCode'] .' / '. $browserData['currencyCode'] @endphp
        @endif
        

    </span>

    <div class="listDropdown" id="listDropdownId"  style="display: none;">
        
        <form id="convertLang" name="convertLang" method="post" action="/globalConvert">
            {!! csrf_field() !!}

            <label for="language">Location:</label>
            <?php
            $countiesList = countiesList();
            $languageList = languageList();
            $currencyList = currencyList();
            ?>
            <select name="location" id="location" onchange="this.form.submit()">
                @if (!empty($countiesList))

                    @foreach ($countiesList as $countriesItem)
                        @if ($location == $countriesItem['shortname'])
                            @php
                                
                                $selected = 'selected';
                            @endphp
                        @else
                            @php
                                
                                $selected = 'false';
                            @endphp
                        @endif

                        <option value='{!! $countriesItem['shortname'] !!}' {{ $selected }}>
                            {!! $countriesItem['text'] !!}</option>
                    @endforeach
                @endif
            </select>
            <label for="language">Currency:</label>
            <select name="currency" id="currency" onchange="this.form.submit()">
                @if (!empty($currencyList))
                    @foreach ($currencyList as $countriesItem)
                        @if ($currency == $countriesItem['text'])
                            @php
                                
                                $selected = 'selected';
                            @endphp
                            @elsif ($currency == $countriesItem['text'])
                            @php
                                
                                $selected = 'selected';
                            @endphp
                        @else
                            @php
                                
                                $selected = 'false';
                            @endphp
                        @endif




                        <option value='{!! $countriesItem['text'] !!}' {{ $selected }}>
                            {!! $countriesItem['text'] !!}</option>
                    @endforeach
                @endif
            </select>
            <label for="language">Language:</label>
            <select name="language" id="language" onchange="this.form.submit()">
                @if (!empty($languageList))
                    @foreach ($languageList as $countriesItem)
                        @if ($language == $countriesItem['language_code'])
                            @php
                                
                                $selected = 'selected';
                            @endphp
                        @else
                            @php
                                
                                $selected = 'false';
                            @endphp
                        @endif

                        <option value='{!! $countriesItem['language_code'] !!}'{{ $selected }}>
                            {!! $countriesItem['text'] !!}</option>
                    @endforeach
                @endif

            </select>
            <input type="hidden" name="currenturl" value='{{app('url')->current()}}'>
            <input type="hidden" name="old_currency" value="{{$currency}}">
        </form>
    </div>
    <div id="backgroundOverlaylistDropdownId" style="display: none;"></div>
</div>

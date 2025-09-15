<?php

/**
 * Created by PhpStorm.
 * User: shehbaz
 * Date: 1/21/19
 * Time: 12:19 PM
 */


use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Models\Reviews;
use App\Models\PostCategory;
use App\Models\Posts;
use App\Models\Faqs;
use App\Models\FaqCategory;
use App\Models\HKDiamondStock;
use App\Models\Products;
use App\Models\InstagramData;
use App\Models\Masters;
use App\Models\Category;
use App\Models\Popups;
use App\Models\DiscountRange;
use App\Models\ProductVariations;
use App\Models\ProductVariationDetails;
use App\Models\ProductThumbVideos;
use App\Models\UrlRedirects;
use App\Models\Country;
use App\Models\Language;
use App\Models\Currency;
use App\Models\Attributes;
use App\Models\LabPricesList;
use Illuminate\Support\Facades\Session;


//use SoapClient;
use billythekid\dekopay\Core\DekoPayApiClient;
use Illuminate\Support\Facades\DB;

if (!function_exists("helper_test")) {
    function helper_test()
    {
        echo "it is working";
    }
}
if (!function_exists("getVAT")) {
    function getVAT()
    {
        return 1.2;
    }
}

if (!function_exists("single_image_upload")) {
    function single_image_upload($imageUrl, $folderName, $height = null, $width = null)
    {
        if (!file_exists(storage_path('app/public/' . $folderName))) {
            mkdir(storage_path('app/public/' . $folderName), 0777);
        }
        $uploadpath = public_path() . '\images\\' . $folderName;
        if (is_array($imageUrl)) {
            foreach ($imageUrl as $file) {

                $filenameWithExt = $file->getClientOriginalName();
                //Get just filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Get just ext
                $extension = $file->getClientOriginalExtension();
                // Filename to store
                $fileNameToStore = $folderName . '/' . $filename . '_' . time() . '.' . $extension;
                // Upload Image
                $path = $file->storeAs('public', $fileNameToStore);
                // return $fileNameToStore;

                // $original_name = $file->getClientOriginalName();
                // $filename = $folderName.'/'.rand().time() . '_' . $file->getClientOriginalName();
                // $file->move($uploadpath, $filename);
                $data[] = $fileNameToStore;
            }
        } else {

            $filenameWithExt = $imageUrl->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $imageUrl->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $folderName . '/' . $filename . '_' . time() . '.' . $extension;
            // Upload Image
            $path = $imageUrl->storeAs('public', $fileNameToStore);

            // $original_name = $imageUrl->getClientOriginalName();
            // $filename = $folderName.'/'.rand().time() . '_' . $imageUrl->getClientOriginalName();
            // $imageUrl->move($uploadpath, $filename);
            $data['f2'] = $fileNameToStore;
        }
        return $data;
    }
}

if (!function_exists("single_storage_image_upload")) {
    function single_storage_image_upload($imageUrl, $folderName, $height = 0, $width = 0)
    {
        if (!file_exists(storage_path('app/public/' . $folderName))) {
            mkdir(storage_path('app/public/' . $folderName), 0777);
        }
        // $height = 200;
        // $width = 200;
        $image = $imageUrl;
        // echo '<pre>';print_r($image); die;
        $imageName = $image->getClientOriginalName();

        if (!empty($height) && !empty($width)) {
            $fileName =  $folderName . '/' . time() . '-' . $height . 'x' . $width . $imageName;
            Image::make($image)->resize($height, $width)->save(storage_path('app/public/' . $fileName));
        } else {
            $fileName =  $folderName . '/' . time() . $imageName;
            Image::make($image)->save(storage_path('app/public/' . $fileName));
        }


        return $fileName;
    }
}



if (!function_exists("product_image_upload")) {
    function product_image_upload($imageUrl, $folderName)
    {

        $filenameWithExt = $imageUrl->getClientOriginalName();
        //Get just filename
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        // Get just ext
        $extension = $imageUrl->getClientOriginalExtension();
        // Filename to store
        $fileNameToStore = $folderName . '/' . $filename . '_' . time() . '.' . $extension;
        // Upload Image
        $path = $imageUrl->storeAs('public', $fileNameToStore);

        return  $fileNameToStore;

        // return $data;
    }
}
if (!function_exists("product_video_upload")) {
    function product_video_upload($imageUrl, $folderName)
    {
        $filenameWithExt = $imageUrl->getClientOriginalName();
        //Get just filename
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        // Get just ext
        $extension = $imageUrl->getClientOriginalExtension();
        // Filename to store
        $fileNameToStore = $folderName . '/' . $filename . '_' . time() . '.' . $extension;
        // Upload Image
        $path = $imageUrl->storeAs('public', $fileNameToStore);

        return  $fileNameToStore;

        // return $data;
    }
}

if (!function_exists("multiple_image_upload")) {
    function multiple_image_upload()
    {
        echo "it is working multiple";
    }
}


if (!function_exists("populate_breadcrumb")) {
    /**
     * popular data to layouts.admin.app when send from controller
     *
     *<h1> controller example </h1>
     * <pre>
     *  $data = [
     * ["name" => "Dashboard1", "url" => route("admin.dashboard")],
     * ["name" => "Products1", "url" => request()->fullUrl()]
     * ];
     *
     * populate_breadcrumb($data)
     * </pre>
     *
     * @param $data
     * @return void
     */
    function populate_breadcrumb($data)
    {
        $validated = validate_breadcrumb($data);
        if ($validated["valid"] === true) {
            view()->composer([
                "layouts.admin.app"
            ], function ($view) use ($data) {
                $view->with(
                    [
                        "breadcrumbs" => $data
                    ]
                );
            });
        }
    }
}

if (!function_exists('validate_breadcrumb')) {

    /**
     * validate breadcrumb data
     * @param $data
     * @return array
     */
    function validate_breadcrumb($data)
    {
        $validated = false;
        $errors = [];
        foreach ($data as $key => $item) {
            $messages = [
                'required' => "The :attribute field is required at index: $key.",
                "url" => "The :attribute format is invalid at index: $key"

            ];
            $validator = Validator::make($item, [
                'name' => 'required',
                'url' => "required|url",
                // "icon" => ""
            ], $messages);
            if ($validator->fails()) {
                $validated = false;
                $errors[] = $validator->errors();
            } else {
                $validated = true;
            }
        }
        return ["errors" => $errors, "valid" => $validated];
    }
}

if (!function_exists('in_array_r')) {
    // Function to iteratively search for a given value
    function in_array_r($item, $array)
    {
        return preg_match('/"' . preg_quote($item, '/') . '"/i', json_encode($array));
    }
}


if (!function_exists("getReviews")) {
    function getReviews()
    {
        $reviews = Reviews::all();
        return ($reviews);
    }
}

if (!function_exists("getCategories")) {
    function getCategories()
    {
        $postcategories = PostCategory::all();
        return ($postcategories);
    }
}

if (!function_exists("getRecentPosts")) {
    function getRecentPosts()
    {
        $recentposts = Posts::take(5)->orderBy('id', 'DESC')->where('status', 1)->get();
        return ($recentposts);
    }
}
if (!function_exists("getRelatedPosts")) {
    function getRelatedPosts()
    {
        $relatedposts = Posts::take(5)->orderBy('id', 'DESC')->where('status', 1)->get();
        return ($relatedposts);
    }
}
if (!function_exists("getFaqs")) {
    function getFaqs()
    {
        $faqs = FaqCategory::with('getFAQData')->take(5)->get();
        return ($faqs);
    }
}

if (!function_exists("getEngagementFaqs")) {
    function getEngagementFaqs()
    {
        $faqs = Faqs::take(50)->orderBy('id', 'DESC')->where('categories', 0)->get();
        return ($faqs);
    }
}

if (!function_exists("getFeaturedProducts")) {
    function getFeaturedProducts()
    {
        $featured = Products::with(['getProductImages'])->where('is_featured', 1)->limit(10)->get();
        return $featured;
    }
}

function getFaqByCategory($category = "", $in_array = false)
{
    $category = empty($category) ? 0 : $category;
    $faqs = Faqs::where(['categories' => $category])->get();

    if ($in_array && $faqs->count()) {
        return $faqs->toArray();
    }
    return $faqs;
}

/*
    ** Hari Krishna API function
    * @params : data as array
    */
    if (!function_exists("getHKApiRecords")) {

        function getHKApiRecords($data = array())
        {
            $results = HKDiamondStock::where('Shape', 'LIKE', $data['shape'])
                ->whereBetween('Carat', [$data['caratFrom'], $data['caratTo']])
                ->orderBy('Amount', 'ASC');

            if (!empty($data['colour'])) {
                $results = $results->whereIn('Color', $data['colour']);
            }

            if (!empty($data['clarity'])) {
                $results = $results->whereIn('Clarity', $data['clarity']);
            }

            if (!empty($data['grade'])) {
                $results = $results->whereIn('Cut', $data['grade']);
            }

            if (!empty($data['polish'])) {
                $results = $results->whereIn('Polish', $data['polish']);
            }

            if (!empty($data['symmetry'])) {
                $results = $results->whereIn('Symmetry', $data['symmetry']);
            }

            if (!empty($data['fluorescence'])) {
                $results = $results->whereIn('Flourescent', $data['fluorescence']);
            }

            if (!empty($data['certificate'])) {
                $results = $results->whereIn('Lab', $data['certificate']);
            }

            $results = $results->orderBy('id', 'ASC');

            if (isset($data['paging']))
                $results = $results->paginate($data['paging']);
            else if (isset($data['num_of_row']))
                $results = $results->take($data['num_of_row'])->get();
            else
               $results = $results->get();

            return $results->toArray();
        }
    }
/*
    ** Rapnet API function
    * @params : data as array
    */
    if (!function_exists("getRapnetApiRecords")) {

        function getRapnetApiRecords($data = array(), $pageNumber = null)
        {

            $client = new SoapClient("https://technet.rapaport.com/WebServices/RetailFeed/Feed.asmx?WSDL", array("trace" => 1, "exceptions" => 0, "cache_wsdl" => 0));

            $params = array('Username' => '95503', 'Password' => '@diamond1');
            $client->__soapCall("Login", array($params), NULL, NULL, $output_headers);

            $ticket = $output_headers["AuthenticationTicketHeader"]->Ticket;

           // $client1 = new SoapClient("https://technet.rapaport.com/WebServices/RetailFeed/Feed.asmx?WSDL", array( "trace" => 1, "exceptions" => 0, "cache_wsdl" => 0) );

            $rapnetData = $rapnetAllData = array();

            $ns = "http://technet.rapaport.com/";
            $headerBody = array("Ticket" => $ticket);
            $header = new \SoapHeader($ns, 'AuthenticationTicketHeader', $headerBody);
            $client->__setSoapHeaders($header);

            if (isset($data['gradeFrom'])) {
                if ($data['gradeFrom'] == 'EX') { 
                    $gradeFrom = 'EXCELLENT';
                } elseif ($data['gradeFrom'] == 'VG') { 
                    $gradeFrom = 'VERY_GOOD';
                } elseif ($data['gradeFrom'] == 'GD') { 
                    $gradeFrom = 'GOOD';
                }
            }
            if (isset($data['gradeTo'])) {
                if ($data['gradeTo'] == 'EX') {
                    $gradeTo = 'EXCELLENT';
                } elseif ($data['gradeTo'] == 'VG') { 
                    $gradeTo = 'VERY_GOOD';
                } elseif ($data['gradeTo'] == 'GD') { 
                    $gradeTo = 'GOOD';
                }
            }
            if (isset($data['symmetryFrom'])) {
                if ($data['symmetryFrom'] == 'EX') { 
                    $symmetryFrom = 'Excellent';
                } elseif ($data['symmetryFrom'] == 'VG') { 
                    $symmetryFrom = 'Very_Good';
                } elseif ($data['symmetryFrom'] == 'GD') { 
                    $symmetryFrom = 'Good';
                }
            }
            if (isset($data['symmetryTo'])) {
                if ($data['symmetryTo'] == 'EX') {
                     $symmetryTo = 'Excellent';
                } elseif ($data['symmetryTo'] == 'VG') { 
                    $symmetryTo = 'Very_Good';
                } elseif ($data['symmetryTo'] == 'GD') { 
                    $symmetryTo = 'Good';
                }
            }
            if (isset($data['polishFrom'])) {
                if ($data['polishFrom'] == 'EX') { 
                    $polishFrom = 'Excellent';
                } elseif ($data['polishFrom'] == 'VG') { 
                    $polishFrom = 'Very_Good';
                } elseif ($data['polishFrom'] == 'GD') { 
                    $polishFrom = 'Good';
                }
            }
            if (isset($data['polishTo'])) {
                if ($data['polishTo'] == 'EX') { 
                    $polishTo = 'Excellent';
                } elseif ($data['polishTo'] == 'VG') { 
                    $polishTo = 'Very_Good';
                } elseif ($data['polishTo'] == 'GD') { 
                    $polishTo = 'Good';
                }
            }


            $searchParams = array(
                "ShapeCollection" => array($data['shape']),
                "LabCollection" => $data['certificate'],
                "ColorFrom" => $data['colorFrom'],
                "ColorTo" => $data['colorTo'],
                "ClarityFrom" => $data['clarityFrom'],
                "ClarityTo" => $data['clarityTo'],
                "SizeFrom" => $data['caratFrom'],
                "SizeTo" => $data['caratTo'],
                "CutFrom" => $gradeFrom,
                "CutTo" => $gradeTo,
                "SymmetryFrom" => $symmetryFrom,
                "SymmetryTo" => $symmetryTo,
                "PolishFrom" => $polishFrom,
                "PolishTo" => $polishTo,
                "FluorescenceIntensityCollection" => $data['fluorescence'],
                "PriceFrom" => "1",
                "PriceTo" => "999999",
                "PageNumber" => $pageNumber,
                "PageSize" => $data['PageSize'],
                "SortDirection" => "ASC",
                "SortBy" => "PRICE"
            );


            $params1 = array("SearchParams" => $searchParams, "DiamondsFound" => 0);

            $results = $client->__soapCall("GetDiamonds", array($params1), NULL, NULL, $output_headers);

            if (isset($results->GetDiamondsResult) && !empty($results->GetDiamondsResult->any)) {
                $apiXmlResponse = simplexml_load_string($results->GetDiamondsResult->any);
                $object = json_decode(json_encode($apiXmlResponse->NewDataSet));
            } else {
                $object = new \stdclass;
                $object->Table1 = '';
            }

            if (isset($object->Table1) && !empty($object->Table1)) {
                $allData[] = $object->Table1;
            } else {
                $allData = [
                    '0' => '',
                ];
            }

            if (!empty($allData)) {
                $rapnetAllData = array_merge($rapnetData, $allData);
            }

            return $rapnetAllData;
        }
    }

/*
    ** Rapnet API function
    * @params : data as array
    */
    if (!function_exists("getRapnetApiRecordsDiamondSearch")) {

        function getRapnetApiRecordsDiamondSearch($data = array(), $pageNumber = null)
        {

            $client = new SoapClient("https://technet.rapaport.com/WebServices/RetailFeed/Feed.asmx?WSDL", array("trace" => 1, "exceptions" => 0, "cache_wsdl" => 0));

            $params = array('Username' => '95503', 'Password' => '@diamond1');
            $client->__soapCall("Login", array($params), NULL, NULL, $output_headers);
            $ticket = $output_headers["AuthenticationTicketHeader"]->Ticket;

            // $client1 = new SoapClient("https://technet.rapaport.com/WebServices/RetailFeed/Feed.asmx?WSDL", array( "trace" => 1, "exceptions" => 0, "cache_wsdl" => 0) );

            $rapnetData = $rapnetAllData = array();

            $ns = "http://technet.rapaport.com/";
            $headerBody = array("Ticket" => $ticket);
            $header = new \SoapHeader($ns, 'AuthenticationTicketHeader', $headerBody);
            $client->__setSoapHeaders($header);

            if (isset($data['gradeFrom'])) {
                if ($data['gradeFrom'] == 'EX') {
                    $gradeFrom = 'EXCELLENT';
                } elseif ($data['gradeFrom'] == 'VG') {
                    $gradeFrom = 'VERY_GOOD';
                } elseif ($data['gradeFrom'] == 'GD') {
                    $gradeFrom = 'GOOD';
                }
            }
            if (isset($data['gradeTo'])) {
                if ($data['gradeTo'] == 'EX') {
                    $gradeTo = 'EXCELLENT';
                } elseif ($data['gradeTo'] == 'VG') {
                    $gradeTo = 'VERY_GOOD';
                } elseif ($data['gradeTo'] == 'GD') {
                    $gradeTo = 'GOOD';
                }
            }
            if (isset($data['symmetryFrom'])) {
                if ($data['symmetryFrom'] == 'EX') {
                    $symmetryFrom = 'Excellent';
                } elseif ($data['symmetryFrom'] == 'VG') {
                    $symmetryFrom = 'Very_Good';
                } elseif ($data['symmetryFrom'] == 'GD') {
                    $symmetryFrom = 'Good';
                }
            }
            if (isset($data['symmetryTo'])) {
                if ($data['symmetryTo'] == 'EX') {
                    $symmetryTo = 'Excellent';
                } elseif ($data['symmetryTo'] == 'VG') {
                    $symmetryTo = 'Very_Good';
                } elseif ($data['symmetryTo'] == 'GD') {
                    $symmetryTo = 'Good';
                }
            }
            if (isset($data['polishFrom'])) {
                if ($data['polishFrom'] == 'EX') {
                    $polishFrom = 'Excellent';
                } elseif ($data['polishFrom'] == 'VG') {
                    $polishFrom = 'Very_Good';
                } elseif ($data['polishFrom'] == 'GD') {
                    $polishFrom = 'Good';
                }
            }
            if (isset($data['polishTo'])) {
                if ($data['polishTo'] == 'EX') {
                    $polishTo = 'Excellent';
                } elseif ($data['polishTo'] == 'VG') {
                    $polishTo = 'Very_Good';
                } elseif ($data['polishTo'] == 'GD') {
                    $polishTo = 'Good';
                }
            }

            $dataNew['request']['header'] = [
                "username" => "cdf1xxse9ynns85lwkxl7heviq8vlo",
                "password" => "zoDi5QNW"
            ];

            $fluroscenceArray = [
                "F" => "Faint",
                "M" => "Medium",
                "ST" => "Strong",
                "VS" => "Very Strong",
                "N" => "None"
            ];

            $fluroscenceNewArray = [];
            foreach ($data['fluorescence'] as $newKey => $valuePass) {
                $getFluValue = $fluroscenceArray[$valuePass];
                $fluroscenceNewArray[] = $getFluValue;
            }

            $dataNew['request']['body'] = array(
                "shapes" => array($data['shape']),
                "labs" => isset($data['certificate']) && count($data['certificate']) ? $data['certificate'] : ['GIA', 'IGI'],
                "fluorescence_intensities" => $fluroscenceNewArray,
                "color_from" => $data['colorFrom'],
                "color_to" => $data['colorTo'],
                "clarity_from" => $data['clarityFrom'],
                "clarity_to" => $data['clarityTo'],
                "size_from" => $data['caratFrom'],
                "size_to" => $data['caratTo'],
                "cut_from" => $gradeFrom,
                "cut_to" => $gradeTo,
                "symmetry_from" => $symmetryFrom,
                "symmetry_to" => $symmetryTo,
                "polish_from" => $polishFrom,
                "polish_to" => $polishTo,
                "price_from" => "1",
                "price_to" => "999999",
                "page_number" => $pageNumber,
                "page_number" => $data['PageSize'],
                "sort_direction" => "ASC",
                "sort_by" => "PRICE",
                'search_type' => 'White',
                'page_size' => '5',
            );

            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://technet.rapaport.com/HTTP/JSON/RetailFeed/GetDiamonds.aspx',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => json_encode($dataNew),
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: Application/x-www-form-urlencoded',
                    'Authorization: Basic Y2RmMXh4c2U5eW5uczg1bHdreGw3aGV2aXE4dmxvOnpvRGk1UU5X',
                    'Cookie: ASP.NET_SessionId=y3dkpr4cgnpf3mvs2w314du4'
                ),
            ));

            $response = curl_exec($curl);
            $response = json_decode($response);

            if (isset($response->response->header) && !empty($response->response->body->diamonds)) {
                $response = $response->response->body->diamonds;
            } else {
                $response = '';
            }
            return $response;
        }
    }


if (!function_exists("getInstagramDataDetails")) {
    function getInstagramDataDetails()
    {
        $getInstaData = InstagramData::where('media_type', '!=', 'VIDEO')->get();
        return $getInstaData;
    }
}

if (!function_exists("getDekoPayFormulaURL")) {
    function getDekoPayFormulaURL()
    {
        $dekoEnabled = true;
        $client = new DekoPayApiClient('', '', env('DEKOPAY_API_KEY'));
        $pay_url =  env('DEKOPAY_MODE');

        if ($dekoEnabled) {
            $url = $pay_url == 'live' ? 'https://secure.dekopay.com/js_api/FinanceDetails.js.php?api_key=' . env('DEKOPAY_API_KEY')  : 'https://test.dekopay.com/js_api/FinanceDetails.js.php?api_key=' . env('DEKOPAY_API_KEY');
        }

        return $url;
    }
}

if (!function_exists("getVATPriceFunction")) {
    function getVATPriceFunction($getTotal)
    {
        // return $getTotal - ($getTotal/1.2);
        return number_format($getTotal - ($getTotal / 1.2), 2);
    }
}
if (!function_exists("prefunc")) {
    function prefunc($getData)
    {
        echo "<pre>";
        print_r($getData);
        die;
    }
}

if (!function_exists("getPromotionalPOPup")) {
    function getPromotionalPOPup()
    {
        return Popups::where('status', 1)->first();
    }
}

// if (!function_exists("final_image_upload_single_function")) {
//     function final_image_upload_single_function($imageUrl,$modelName,$modelId,$height=null,$width=null)
//     {
//         $modelId = base64_encode($modelId);
//         if (!file_exists(storage_path('app/public/' . $modelName.'/'.$modelId.'/thumb'))) {
//             mkdir(storage_path('app/public/' . $modelName.'/'.$modelId.'/thumb'), 777, true);
//         }

//         $imageName = $imageUrl->getClientOriginalName();
//         $fileName =  rand().$imageName;
//         $fileNameThumb =  'thumbnail_'. rand() . '- '.$height.'x'.$width.''. $imageName;

//         Image::make($imageUrl)->save(storage_path('app/public/' . $modelName.'/'.$modelId.'/'.$fileName));
//         Image::make($imageUrl)->resize($height,$width)->save(storage_path('app/public/' . $modelName.'/'.$modelId.'/'.'thumb'.'/'.$fileNameThumb));

//         $data['f2']['R'] = $modelName.'/'.$modelId.'/'.$fileName;
//         $data['f2']['T'] = $modelName.'/'.$modelId.'/'.'thumb'.'/'.$fileNameThumb;

//         return $data;
//     }
// }

if (!function_exists("final_image_upload_single_function")) {
    function final_image_upload_single_function($imageUrl, $modelName, $modelId, $height = null, $width = null)
    {
        $imagePath = 'app/public/' . $modelName . '/';
        $modelId = base64_encode($modelId);
        if (!file_exists(storage_path($imagePath))) {
            mkdir(storage_path($imagePath), 777, true);
        }

        $imageName = $imageUrl->getClientOriginalName();
        $fileName =  rand() . slugify($imageName);
        $fileNameThumb =  'thumbnail_' . rand() . '- ' . $height . 'x' . $width . '' . $imageName;

        Image::make($imageUrl)->save(storage_path($imagePath . $fileName));
        Image::make($imageUrl)->resize($height, $width)->save(storage_path($imagePath . $fileNameThumb));

        $data['f2']['R'] = $modelName . '/' . $fileName;
        $data['f2']['T'] = $modelName . '/' . $fileNameThumb;

        return $data;
    }
}

// if (!function_exists("final_image_upload_array_function")) {
//     function final_image_upload_array_function($imageUrlArray,$modelName,$modelId,$height=null,$width=null)
//     {
//         $modelId = base64_encode($modelId);
//         if (!file_exists(storage_path('app/public/' . $modelName.'/'.$modelId.'/thumb'))) {
//             mkdir(storage_path('app/public/' . $modelName.'/'.$modelId.'/thumb'), 777, true);
//         }

//         if(is_array($imageUrlArray)){
//             $data= [];
//             foreach($imageUrlArray as $key => $file) {
//                 $imageName = $file->getClientOriginalName();
//                 $fileName =  rand().$imageName;
//                 $fileNameThumb =  'thumbnail_'. rand() . '- '.$height.'x'.$width.''. $imageName;

//                 Image::make($file)->save(storage_path('app/public/' . $modelName.'/'.$modelId.'/'.$fileName));
//                 Image::make($file)->resize($height,$width)->save(storage_path('app/public/' . $modelName.'/'.$modelId.'/'.'thumb'.'/'.$fileNameThumb));

//                 $data[$key]['R'] = $modelName.'/'.$modelId.'/'.$fileName;
//                 $data[$key]['T'] = $modelName.'/'.$modelId.'/'.'thumb'.'/'.$fileNameThumb;
//             }
//         }
//         return $data;
//     }
// }

if (!function_exists("final_image_upload_array_function")) {

    function final_image_upload_array_function($imageUrlArray, $modelName, $modelId, $height = null, $width = null)
    {
        $modulePath = 'app/public/' . $modelName . '/';
        $modelId = base64_encode($modelId);
        $video_extensions = ['mp4'];
        $file_extensions = [];
        if (!file_exists(storage_path($modulePath))) {
            mkdir(storage_path($modulePath), 777, true);
        }
        if (is_array($imageUrlArray)) {
            $data = [];
            foreach ($imageUrlArray as $key => $file) {
                $extension = $file->getClientOriginalExtension();
                $file_extensions[] = $extension;
                $imageName = $file->getClientOriginalName();
                $fileName =  rand() . slugify($imageName);
                $fileNameThumb =  'thumbnail_' . rand() . '- ' . $height . 'x' . $width . '' . $imageName;



                if (in_array($extension, $video_extensions)) {

                    $fileName = product_video_upload($file, $modelName);
                    $data[$key]['R'] = $fileName;
                    $data[$key]['T'] = '';
                    // Storage::disk('public')->put($modulePath. $fileName . '.'.$extension, $file);
                    // $data[$key]['R'] = $modelName .'/'. $fileName . '.'.$extension;
                    // $data[$key]['T'] = '';
                    // Image::save(storage_path($modulePath . $fileName));
                    // $file->store($modulePath .$fileName.'.'.$extension );
                    // Image::make($file)->resize($height,$width)->save(storage_path( $modulePath .$fileNameThumb));
                } else {
                    Image::make($file)->save(storage_path($modulePath . $fileName));
                    Image::make($file)->resize($height, $width)->save(storage_path($modulePath . $fileNameThumb));
                    $data[$key]['R'] = $modelName . '/' . $fileName;
                    $data[$key]['T'] = $modelName . '/' . $fileNameThumb;
                }
            }
        }
        // print_r($file_extensions);die;
        return $data;
    }
}


function generateSlug($title = "", $table = "", $keyName = "slug", $number = 0)
{
    $slug = slugify($title);
    $slug = $number ? $slug . '-' . $number : $slug;
    $isSlugExists = $table::where($keyName, $slug)->first();
    if (!empty($isSlugExists)) {
        $number = $number + 1;
        return generateSlug($title, $table, $keyName, $number);
    } else {
        return $slug;
    }
}


function generateSlugProductPurpose($title = "", $table = "", $keyName = "slug", $skip_id = "", $number = 0)
{
    $slug = slugify($title);
    $slug = $number ? $slug . '-' . $number : $slug;

    $queryToCheck = $table::where($keyName, $slug);
    if (!empty($skip_id)) {
        $queryToCheck = $queryToCheck->where('id', '!=', $skip_id);
    }
    $isSlugExists = $queryToCheck->first();

    if (!empty($isSlugExists)) {
        $number = $number + 1;
        return generateSlugProductPurpose($title, $table, $keyName, $skip_id, $number);
    } else {
        return $slug;
    }
}


function slugify($text, string $divider = '-')
{
    $text = preg_replace('~[^\pL\d]+~u', $divider, $text);
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
    $text = preg_replace('~[^-\w]+~', '', $text);
    $text = trim($text, $divider);
    $text = preg_replace('~-+~', $divider, $text);
    $text = strtolower($text);
    if (empty($text)) {
        return 'n-a';
    }
    return $text;
}


function prd($data = '')
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
    die();
}



function getMasterById($id = '')
{
    return  Masters::where('id', $id)->first()->toArray();
}

function getMasterValuesByType($type = '')
{
    $data =  Masters::where('type', $type)->pluck('value');
    if ($data->count()) {
        return $data->toArray();
    } else {
        return [];
    }
}


function getFilter($table, $query, $filter = [])
{
    if (count($filter)) {
        foreach ($filter as $key => $value) {
            if (Schema::hasColumn(app($table)->getTable(), $key)) {
                $query = $query->where($key, 'like', '%' . $filter[$key] . '%');
            }
        }
    }
    return $query;
}


function unique_code($limit = 30)
{
    return substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $limit);
}

function in_array_multi($needle, $haystack, $strict = false)
{
    foreach ($haystack as $item) {
        if (($strict ? $item === $needle : $item == $needle) || (is_array($item) && in_array_r($needle, $item, $strict))) {
            return true;
        }
    }

    return false;
}


function getThumbnailGif($productId = "")
{
    $image = ProductThumbVideos::where([
        'status' => 1,
        'type' => 'thumbnail_rotation_image',
        'product_id' => $productId
    ])->first();

    if (!empty($image)) {
        return $image;
    } else {
        return null;
    }
}


function getProductVariationImage($productId = "", $request = [])
{

    $getProductVariationId = ProductVariations::where('product_id', $productId)->pluck('id');
    if (!empty($getProductVariationId) && $getProductVariationId->count()) {
        $getProductVariationId = $getProductVariationId->toArray();

        // Statement 2
        // $getVariDetails = ProductVariationDetails::groupBy('value')
        //                     ->whereIn('variation_id', $getProductVariationId)
        //                     ->whereIn('value', $request['variations'])
        //                     ->get();
        // if(!empty($getVariDetails) && $getVariDetails->count()){
        //     $getVariDetails = $getVariDetails->toArray();
        // }
        // // endof statement 2

        $variationDetails = [];
        $attributeCount = count($request->variations);
        foreach ($getProductVariationId as $key1 => $productVariationId) {
            $variationDetails = array();
            foreach ($request->variations as $key2 => $variations) {
                $getVariDetails =   ProductVariationDetails::where('variation_id', $productVariationId)
                    ->where('value', $variations)
                    ->get()
                    ->toArray();

                if (!empty($getVariDetails))
                    $variationDetails[] = $getVariDetails;
            }
            if ($attributeCount == count($variationDetails)) {
                break;
            }
        }


        $getSelectedVariationVideoImages = ProductVariations::where('id', $variationDetails[0][0]['variation_id'])
            ->select(DB::raw('(regular_price) as regular_price_without_vat'), DB::raw('(sale_price) as sale_price_without_vat'), 'vari_image', 'multi_vari_img', 'multi_vari_video', 'vari_video', 'regular_price', 'sale_price')
            ->first();

        return $getSelectedVariationVideoImages->toArray();
    } else {
        return null;
    }
}

function getCategoriesTree($exsitingCategories = [], $parentId = 0)
{


    //return Category::with(['childCategories'])->get()->toArray();

    // if(!count($exsitingCategories)){
    //     $parent_categories = Category::where('parent_id',0)->where(['status'=>1])->get();
    //     if($parent_categories->count()){

    //         /** Check if child category exists */
    //         $isChildExists = false;
    //         foreach ($parent_categories as $key => $value) {
    //             $childCount = Category::where('parent_id',$value->id)->where(['status'=>1])->count();
    //             if($childCount){
    //                 $isChildExists = true;
    //                 break;
    //             }
    //         }
    //         if($isChildExists){
    //             return getCategoriesTree($parent_categories->toArray());
    //         }else{
    //             return $parent_categories->toArray();
    //         }
    //     }
    // }else{


    //     foreach ($exsitingCategories as $key => $value) {
    //         # code...
    //     }


    // }

    // $parent_categories = Category::where('parent_id',$parentId)->where(['status'=>1])->get();
    // foreach ($parent_categories as $key => $value) {
    //     $childExist = Category::where('parent_id',$value->id)->where(['status'=>1])->count();
    //     if($childExist){
    //         $parent_categories->child = Category::where('parent_id',$value->id)->where(['status'=>1])->get();
    //     }
    // }
}


function upload_file($file, $path = "")
{

    try {
        $originalName = $file->getClientOriginalName();
        $size = $file->getSize();
        $extension = $file->getClientOriginalExtension();
        $mimeType = $file->getMimeType();

        $fileName = time() . uniqid() . '_' . $originalName;

        $destinationPath = 'uploads/' . $path . '/';
        $toReturn = $file->move($destinationPath, $fileName);
        return [
            'name' => $path . '/' . $fileName,
            'size' => $size,
            'extension' => $extension,
            'mimeType' => $mimeType,
            'original_name' => $originalName,
        ];
    } catch (\Throwable $th) {
        return null;
    }
}

function show_dots($in, $length = 30)
{
    return strlen($in) > $length ? substr($in, 0, $length) . "..." : $in;
}

/**
 * details about currency
 */
function currency($query = [])
{
    return [
        'symbol' => '£'
    ];
} // endof currency

/** format of price how it shows */
function formatPrice($amount = '')
{
    $currency = currency();

    $symbol = "£";
    if (!empty($currency['symbol'])) {
        $symbol = $currency['symbol'];
    }

    return $currency['symbol'] . " " . number_format($amount, 2);
} // endof formatPrice

/**
 * Function is use to return number of items that will need to show on products list page
 */
function defaultProductPagination()
{
    return 20;
} // endof defaultProductPagination

/**
 * getPercentage
 * function is use to get amount after percentage
 */
function getPercentage($total, $percentage = 0, $decimal = 0)
{
    $percentageAmount = ($percentage / 100) * $total;
    return  round($total - $percentageAmount, $decimal);
} // endof getPercentage

/**
 * getPercentageValue
 * function is use to get amount after percentage
 */
function getPercentageValue($total, $percentage = 0, $decimal = 0)
{
    $percentageAmount = ($percentage / 100) * $total;
    return  round($percentageAmount);
} // endof getPercentageValue


function duplicateProductRemoveIds()
{
    $productIdsToRemoveImages = Masters::where(['is_deleted' => 0, 'is_active' => 1, 'type' => 'product_duplicate_image_remove'])->pluck('value');
    if (!empty($productIdsToRemoveImages) && $productIdsToRemoveImages->count()) {
        return $productIdsToRemoveImages->toArray();
    } else {
        return [];
    }
}


function show_percentage($amount = 0, $pricing_data = [], $type = "show")
{

    if (empty($pricing_data)) {
        return $amount;
    }
    $percentageValue = getPercentageValue($amount, $pricing_data->percentage);
    switch ($type) {
        case 'show': {
                $toReturn = $amount;
                if (!empty($pricing_data)) {
                    if ($pricing_data->type == 'increase') {
                        $toReturn .= " + $percentageValue ($pricing_data->percentage%)";
                    } else {
                        $toReturn .= " - $percentageValue ($pricing_data->percentage%)";
                    }
                }
                return $toReturn;
                break;
            }
        case 'action': {
                if ($pricing_data->type == 'increase') {
                    return $amount + $percentageValue;
                } else {
                    return $amount - $percentageValue;
                }
                break;
            }

        default: {
                return 'N/A';
                break;
            }
    }
}

/**
 * check extension of file type
 */
function extensionChecker($extension = 'jpeg')
{

    $validImageExtensions = ['jpeg', 'jpg', 'JPEG', 'JPG', 'png', 'PNG', 'webp', 'WEBP', 'gif', 'GIF'];
    $validVideoExtensions = ['mp4', 'MP4'];
    $validAudioExtensions = ['mp3', 'MP3'];

    if (in_array($extension, $validImageExtensions)) {
        return 'image';
    } else if (in_array($extension, $validVideoExtensions)) {
        return 'video';
    } else if (in_array($extension, $validAudioExtensions)) {
        return 'audio';
    } else {
        return null;
    }
} //endof extensionChecker

/**
 * convert bytes to human readable file size
 */
function humanFileSize($bytes, $dec = 2)
{
    $size   = array('B', 'kB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB');
    $factor = floor((strlen($bytes) - 1) / 3);

    return sprintf("%.{$dec}f", $bytes / pow(1024, $factor)) . ' ' . @$size[$factor];
} //endof humanFileSize

/**
 *
 */
function show_image($file_url = "")
{

    if (file_exists(public_path('/uploads/')  . $file_url)) {
        return true;
    } else {
        return false;
    }
} // endof file_get_url


function pageRedirects($path = "")
{
    $path = $path[0] == '/' ? $path : '/' . $path;
    $path = urlencode($path);

    $dataToRedirect = UrlRedirects::where(['old_url' => $path, 'is_deleted' => 0])->first();
    if (!empty($dataToRedirect) && !empty($dataToRedirect->new_url)) {
        return urldecode($dataToRedirect->new_url);
    }
    return null;
}


function isValidJson($string = "")
{
    json_decode($string);
    return json_last_error() === JSON_ERROR_NONE;
}

function getProductListing($queryString = null, $requestData = [])
     {
   
         /** generate custom query for categories */
         $category_custom_query = "";
         $is404 = false;
         $categoryData = null;
         $getAjaxResponses = true;
         $page = 12;
 
         if (isset($requestData['category']) && count($requestData['category']) == 1 && in_array('diamonds-rings', $requestData['category'])) {
             $requestData['category'] = [
                 'engagement-rings',
                 'eternity-rings',
                 'wedding-rings'
             ];
         }
 
         if (isset($requestData['category']) && !empty($requestData['category'])) {
            foreach ($requestData['category'] as $queryString_key => $queryString_value_new) {
                $slugCategory = Category::where('slug', $queryString_value_new)->first();
                if (!empty($slugCategory)) {
                    if (!$queryString_key) {
                        $category_custom_query .= '( ';
                    }
                    // $category_custom_query .= '( ';
                    $category_custom_query .= " find_in_set('" . $slugCategory->id . "',categories) ";
                    if ($queryString_key + 1 != count($requestData['category'])) {
                        $category_custom_query .= " OR ";
                    } else {
                        $category_custom_query .= ' ) ';
                    }
                }
            }
            $getAjaxResponses = false;
            $page = '';
        } elseif (!empty($queryString)) {
            $conditions = 'AND';
            if (isset($queryString[1]) && !empty($queryString[1])) {
                if (isset($queryString[2]) && $queryString[1] == 'womens') {
                    $queryString[2] = $queryString[2] . '-' . $queryString[1];
                    $queryString = Category::whereIn('slug', $queryString)->orderBy('id', 'asc')->pluck('slug')->toArray();

                    if (isset($queryString) && count($queryString) != 3) {
                        $is404 = true;
                    }
                    $conditions = 'AND';
                } else {

                    $getQueryStringCount = count($queryString);
                    $queryString = Category::whereIn('slug', $queryString)->orderBy('id', 'asc')->pluck('slug')->toArray();

                    $conditions = 'AND';
                    if ($getQueryStringCount != count($queryString)) {
                        $is404 = true;
                    }
                }
            }

            if (isset($queryString[0]) && $queryString[0] == 'diamond-engagement-rings') {
                $queryString = [
                    'diamond-engagement-rings',
                    'engagement-rings',
                ];
                $conditions = 'OR';
            }
            if (isset($queryString[0]) && $queryString[0] == 'diamonds-rings') {
                $queryString = [
                    'engagement-rings',
                    'eternity-rings',
                    'wedding-rings'
                ];
                $conditions = 'OR';
            }

            foreach ($queryString as $queryString_key => $queryString_value) {
                $slugCategory = Category::where('slug', $queryString_value)->first();

                if (!empty($slugCategory)) {
                    if (!$queryString_key) {
                        $category_custom_query .= '( ';
                    }
                    $category_custom_query .= " find_in_set('" . $slugCategory->id . "',categories) ";
                    if ($queryString_key + 1 != count($queryString)) {
                        $category_custom_query .= " $conditions ";
                    } else {
                        $category_custom_query .= ' ) ';
                    }
                } else {
                    $is404 = true;
                }
                if (current($queryString) == $queryString_value) {
                    $categoryData = $slugCategory;
                } elseif (last($queryString) == $queryString_value) {
                    $categoryData = $slugCategory;
                }
            }
        } else {
            $category_custom_query = "(find_in_set('8',categories)) OR (find_in_set('45',categories)) OR (find_in_set('47',categories))";
        }
        if (isset($requestData['style-categories']) && !empty($requestData['style-categories'])) {
            foreach ($requestData['style-categories'] as $queryString_key => $queryString_value_new) {
                $slugCategory = Category::where('slug', $queryString_value_new)->first();
                if (!empty($slugCategory)) {
                    if (!$queryString_key) {
                        $category_custom_query .= 'AND ( ';
                    }
                    // $category_custom_query .= '( ';
                    $category_custom_query .= " find_in_set('" . $slugCategory->id . "',categories) ";
                    if ($queryString_key + 1 != count($requestData['style-categories'])) {
                        $category_custom_query .= "  ";
                    } else {
                        $category_custom_query .= ' ) ';
                    }
                }
            }
        }

        if (isset($requestData['ring-categories']) && !empty($requestData['ring-categories'])) {



            foreach ($requestData['ring-categories'] as $queryString_key => $queryString_value_new) {

                if ($requestData['style-categories'][0] == 'womens') {
                    $queryString_value_new = $queryString_value_new . '-' . $requestData['style-categories'][0];
                }
                $slugCategory = Category::where('slug', $queryString_value_new)->first();
                if (!empty($slugCategory)) {
                    if (!$queryString_key) {
                        $category_custom_query .= 'AND ( ';
                    }
                    // $category_custom_query .= '( ';
                    $category_custom_query .= " find_in_set('" . $slugCategory->id . "',categories) ";
                    if ($queryString_key + 1 != count($requestData['ring-categories'])) {
                        $category_custom_query .= "  ";
                    } else {
                        $category_custom_query .= ' ) ';
                    }
                }
            }
        }
        if (isset($requestData['jewellery-categories']) && !empty($requestData['jewellery-categories'])) {
            foreach ($requestData['jewellery-categories'] as $queryString_key => $queryString_value_new) {
                $slugCategory = Category::where('slug', $queryString_value_new)->first();
                if (!empty($slugCategory)) {
                    if (!$queryString_key) {
                        $category_custom_query .= 'AND ( ';
                    }
                    // $category_custom_query .= '( ';
                    $category_custom_query .= " find_in_set('" . $slugCategory->id . "',categories) ";
                    if ($queryString_key + 1 != count($requestData['jewellery-categories'])) {
                        $category_custom_query .= "  ";
                    } else {
                        $category_custom_query .= ' ) ';
                    }
                }
            }
        }

        if ($is404) {
            return null;
        }
        if (empty($category_custom_query)) {
            return null;
        }

        $pageNo = !empty($requestData['page']) ? $requestData['page'] : 1;

        if(isset($requestData['per_page_product']) && !empty($requestData['per_page_product'])){
            $page = $requestData['per_page_product'];
        }
        $query = Products::where('status', 1)->whereRaw(DB::raw($category_custom_query));

        /** Search filter */
        if (!empty($requestData['keyword'])) {
            $keyword = $requestData['keyword'];
            $query = $query->where('title', 'LIKE', "%$keyword%");
        }

        if (!empty($requestData['metal_type']) && $requestData['metal_type'] != 'undefined') {
            $metal_type = $requestData['metal_type'];
            $query->whereHas('getProductVariation.variDetails', function ($query) use ($metal_type) {
                $query->whereIn('value', $metal_type);
            });
        }



        if (!empty($requestData['price-min']) && !empty($requestData['price-max'])) {
            $query->whereHas('getProductVariation', function ($query) use ($requestData) {
                $query->whereBetween('regular_price', array($requestData['price-min'][0], $requestData['price-max'][0]));
            });
        }

        /** Search filter */
        if (!empty($requestData['filter-by-shape'])) {
            $shape = $requestData['filter-by-shape'];
            $query = $query->whereIn('diamond_shape', $shape);
        }

        if (!empty($requestData['sorting'])) {
            $sort = $requestData['sorting'];
            $query = $query->orderBy('title', $sort);
         }else{
            $query = $query->orderBy('title', 'asc');
         }

        // echo "checked ".$query->toSql();die;
        $getProductListFinal = $query->paginate($page, ['*'], 'page', $pageNo);
        $getProductListFinal = chnageColumnAccordingToLanguage($getProductListFinal, 'langProducts', ['title', 'description', 'short_description', 'lab_description'], session()->get('language'));

        $productItems = "";
        if ($getProductListFinal->count()) {
            $productItems = view('front.ajax.productlistajax', compact('getProductListFinal', 'getAjaxResponses'))->render();
        }
        $isNextPage = $getProductListFinal->hasMorePages();
        $nextPage = $getProductListFinal->currentPage() + 1;
        
        return [
            'status' => 200,
            'productItems' => $productItems,
            'isNextPage' => $isNextPage,
            'nextPage' => $nextPage,
            'product_count'=> $getProductListFinal->count(),
            'categoryData' => $categoryData
        ];
    }

if (!function_exists("getIpInfos")) {
    /**
     * details browser currency
     */
    function getIpInfos()
    {
        // $countryName = 'China';
        // $countryCode = 'CN';
        // $currencyCode = 'Chinese yuan';

        $location = Session::get('location');
        $currency = Session::get('currency');
        if(isset($location) && !empty($location)){
            // dump(" getIpInfos if");
            $getCountryName = Country::where('shortname',$location)->select('name','shortname','currency','language_code','phonecode')->first();
            $countryName = $getCountryName->name;
            $countryCode = $location;
            $currencyCode = isset($currency)?$currency:$getCountryName->currency;
        }else{
            // dump(" getIpInfos else");
            $ipaddress = getenv("REMOTE_ADDR");
            $geo  = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$ipaddress"));

            $countryName = $geo["geoplugin_countryName"];
            $countryCode = $geo["geoplugin_countryCode"];
            $currencyCode = $geo["geoplugin_currencyCode"];
            Session::put('location', $countryCode);
            Session::put('currency', $currencyCode);
            Session::put('country', $geo["geoplugin_countryName"]);
            Session::put('language', 'EN');
        }

        $ipinformation = array(
            "countryName" => $countryName,
            "countryCode" => $countryCode,
            "currencyCode" => $currencyCode
        );

        return $ipinformation;
    }
}


if (!function_exists("currencySymbol")) {
    /**
     * Get currency detail.
     */
    function currencySymbol($currencySymbol = null)
    {

        if(isset($currencySymbol) && !empty($currencySymbol)){
            $currency = $currencySymbol; 
        }else{
            $currency = session()->get('currency', []);
        }
        $browserData = getIpInfos();

        if (empty($currency)) {
            $currency = $browserData['currencyCode'];
            //$currency = 'pound';
        }
        // dd($currency);

        $currencySymbel = DB::table('currency')->select('currency_sign','base_price')->where('currency_name', $currency)->first();


        $getSymbel = array(
            "MY_CURRENCY_SYMBOL" => $currencySymbel->currency_sign,
            "MY_CURRENCY_BASE_PRICE"=>$currencySymbel->base_price,
        );
        //dd($getSymbel);
        return $getSymbel;
    }
}

if (!function_exists("currencyConvertedSymbol")) {
    /**
     * Get currency detail.
     */
    function currencyConvertedSymbol($oldCurrency = null)
    {
        $currency = session()->get('currency', []);
        $currencyClass = [
            'old_currency' => $oldCurrency,
            'new_currency' => $currency,
        ];

        foreach($currencyClass as $key => $value){
            $currencyBasePrice[$key] = DB::table('currency')->select('currency_name','currency_sign','base_price')->where('currency_name', $value)->first();
        }
        return $currencyBasePrice;
    }
}

if (!function_exists("currencyTable")) {
    /**
     * Get currency table.
     */
    function currencyTable()
    {
        $currency = session()->get('currency', []);
        $browserData = getIpInfos();

        if (empty($currency)) {
            $currency = strtolower($browserData['currencyCode']);
            //$currency = 'pound';
        } else {
            $currency = strtolower($currency);
        }

        $temp_table = 'currency_' . $currency;

        return $temp_table;
    }
}

if (!function_exists("addToCartWithCurrency")) {
    /**
     * Get currency cart price table.
     */
    function addToCartWithCurrency()
    {
        $temp_table = currencyTable();
        $currency = session()->get('currency', []);

        if ($currency) {
            $cart = session()->get('cart');

            if ($cart) {
                foreach (session('cart') as $id => $details) {
                    if($details['cart_status'] == false){
                        $productVariationId = ProductVariations::where('product_id', $id)->pluck('id')->toArray();
                        if (isset($productVariationId) && !empty($productVariationId)) {
                            $metalcolor = $details['customArray']['metal_type'];
                            $variDetails =  ProductVariationDetails::whereIn('variation_id', $productVariationId)
                                ->where('value', $metalcolor)
                                ->select('id', 'variation_id', 'value')
                                ->first();
    
                            if (empty($variDetails)) {
                                $variDetails =  ProductVariationDetails::whereIn('variation_id', $productVariationId)
                                    ->select('id', 'variation_id', 'value')
                                    ->first();
                            }
                        }
                        $grand_total = DB::table($temp_table)->select('grand_total','rrp_price')->where('variation_id', $variDetails->variation_id)->where('diamond_type',$details['customArray']['choose_diamond'])->first();
                        $getCategoryID = Products::where('id',$id)->first();

                        $getDiscountedAmount = getIncreaseDiscountedPrice($getCategoryID->product_parent_category,$grand_total->grand_total,$details['customArray']['choose_diamond']);
                        $grand_total->grand_total = $getDiscountedAmount;
                        
                        $cart = session()->get('cart');
                        $cart[$id]["price"] = round($grand_total->grand_total,2);
                        $cart[$id]["rrp_price"] = round($grand_total->rrp_price,2);
                        $cart[$id]["deposited_price"] = round($grand_total->grand_total,2);
                        $cart[$id]["shop_price"] = round($grand_total->grand_total,2);
                        $cart[$id]["price"] = round($grand_total->rrp_price,2);
                       
                    }else if($details['cart_status'] == true){
                        $oldCurrency = session()->get('old_currency');
                        $curr =  currencyConvertedSymbol($oldCurrency);
                        if(isset($curr['old_currency']) && $curr['old_currency']->currency_name == 'GBP'){
                            $price = $details['price'] * $curr['new_currency']->base_price;
                            $deposited_price = $details['deposited_price'] * $curr['new_currency']->base_price;
                            $cart = session()->get('cart');
                            $cart[$id]["price"] = round($price);
                            $cart[$id]["deposited_price"] = round($deposited_price);
                        }else{
                            if($curr['new_currency']->currency_name == 'GBP'){
                                $curr['new_currency']->base_price = 1;
                            }
                            $price = (($details['price'] / $curr['old_currency']->base_price) * ($curr['new_currency']->base_price));
                            $deposited_price = (($details['deposited_price'] / $curr['old_currency']->base_price) * ($curr['new_currency']->base_price));

                            $cart = session()->get('cart');
                            $cart[$id]["price"] = round($price,2);
                            $cart[$id]["deposited_price"] = round($deposited_price,2);
                        }
                    }

                    session()->put('cart', $cart);
                }
                //exit;
            }
            return $cart;
        }
    }
}

if (!function_exists("countiesList")) {
    /**
     * Get country detail.
     */
    function countiesList()
    {
        $countryData = Country::orderBy('id', 'ASC')->get()->toArray();
        $countriesArray = array();
        foreach ($countryData as $key => $value) {
            $countriesArray[$key]['text'] = $value['name'];
            $countriesArray[$key]['shortname'] = $value['shortname'];
        }
        return $countriesArray;
    }
}
if (!function_exists("languageList")) {
    /**
     * Get languag detail.
     */
    function languageList()
    {
        $langData = Language::orderBy('id', 'DESC')->where('status', '=', 1)->get()->toArray();
        $languageArray = array();
        foreach ($langData as $key => $value) {
            $languageArray[$key]['language_code'] = $value['language_code'];
            $languageArray[$key]['text'] = $value['title'];
        }
        return $languageArray;
    }
}
if (!function_exists("currencyList")) {
    /**
     * Get currency detail.
     */
    function currencyList()
    {
        $currencyData = Currency::orderBy('id', 'DESC')->where('status', '=', 1)->get()->toArray();
        $currencyArray = array();
        foreach ($currencyData as $key => $value) {
            $currencyArray[$key]['text'] = $value['currency_name'];
            $currencyArray[$key]['id'] = $value['id'];
        }
        return $currencyArray;
    }
}

function getIpInfo($ip = NULL, $purpose = "location", $deep_detect = TRUE)
{
    $output = NULL;

    if (filter_var($ip, FILTER_VALIDATE_IP) === FALSE) {
        $ip = $_SERVER["REMOTE_ADDR"];
        if ($deep_detect) {
            if (filter_var(@$_SERVER['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP))
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
            if (filter_var(@$_SERVER['HTTP_CLIENT_IP'], FILTER_VALIDATE_IP))
                $ip = $_SERVER['HTTP_CLIENT_IP'];
        }
    }

    $purpose    = str_replace(array("name", "\n", "\t", " ", "-", "_"), NULL, strtolower(trim($purpose)));
    $support    = array("country", "countrycode", "state", "region", "city", "location", "address");
    $continents = array(
        "AF" => "Africa",
        "AN" => "Antarctica",
        "AS" => "Asia",
        "EU" => "Europe",
        "OC" => "Australia (Oceania)",
        "NA" => "North America",
        "SA" => "South America"
    );

    if (filter_var($ip, FILTER_VALIDATE_IP) && in_array($purpose, $support)) {
        $ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
        if (@strlen(trim($ipdat->geoplugin_countryCode)) == 2) {
            $output = array(
                "city"           => @$ipdat->geoplugin_city,
                "state"          => @$ipdat->geoplugin_regionName,
                "country"        => @$ipdat->geoplugin_countryName,
                "country_code"   => @$ipdat->geoplugin_countryCode,
                "continent"      => @$continents[strtoupper($ipdat->geoplugin_continentCode)],
                "continent_code" => @$ipdat->geoplugin_continentCode,
                "ip" => $ip
            );
        }
    }
    return $output;
}

function getBrowser()
{
    $u_agent = $_SERVER['HTTP_USER_AGENT'];
    $bname = 'Unknown';
    $platform = 'Unknown';
    $version = "";

    if (preg_match('/linux/i', $u_agent)) {
        $platform = 'linux';
    } elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
        $platform = 'mac';
    } elseif (preg_match('/windows|win32/i', $u_agent)) {
        $platform = 'windows';
    }
    if (preg_match('/MSIE/i', $u_agent) && !preg_match('/Opera/i', $u_agent)) {
        $bname = 'Internet Explorer';
        $ub = "MSIE";
    } elseif (preg_match('/Firefox/i', $u_agent)) {
        $bname = 'Mozilla Firefox';
        $ub = "Firefox";
    } elseif (preg_match('/OPR/i', $u_agent)) {
        $bname = 'Opera';
        $ub = "Opera";
    } elseif (preg_match('/Chrome/i', $u_agent) && !preg_match('/Edge/i', $u_agent)) {
        $bname = 'Google Chrome';
        $ub = "Chrome";
    } elseif (preg_match('/Safari/i', $u_agent) && !preg_match('/Edge/i', $u_agent)) {
        $bname = 'Apple Safari';
        $ub = "Safari";
    } elseif (preg_match('/Netscape/i', $u_agent)) {
        $bname = 'Netscape';
        $ub = "Netscape";
    } elseif (preg_match('/Edge/i', $u_agent)) {
        $bname = 'Edge';
        $ub = "Edge";
    } elseif (preg_match('/Trident/i', $u_agent)) {
        $bname = 'Internet Explorer';
        $ub = "MSIE";
    }

    // finally get the correct version number
    $known = array('Version', $ub, 'other');
    $pattern = '#(?<browser>' . join('|', $known) .
        ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
    if (!preg_match_all($pattern, $u_agent, $matches)) {
        // we have no matching number just continue
    }
    // see how many we have
    $i = count($matches['browser']);
    if ($i != 1) {
        //we will have two since we are not using 'other' argument yet
        //see if version is before or after the name
        if (strripos($u_agent, "Version") < strripos($u_agent, $ub)) {
            $version = $matches['version'][0];
        } else {
            $version = $matches['version'][1];
        }
    } else {
        $version = $matches['version'][0];
    }

    // check if we have a number
    if ($version == null || $version == "") {
        $version = "?";
    }

    return array(
        'userAgent' => $u_agent,
        'name'      => $bname,
        'version'   => $version,
        'platform'  => $platform,
        'pattern'    => $pattern
    );
}


if (!function_exists('adminLanguageDropDown')) {
    function adminLanguageDropDown()
    {
        $languageslisting = DB::table('languages')->groupBy('title')->get();
        $defult_language = getDefultAdminLanguage();
        $output = '<!-- Language dropdown list -->';
        $output .= '<select class="defultAdminLanguage form-control">';
        foreach ($languageslisting as $cat) {
            $selected = '';
            if ($defult_language == $cat->language_code) {
                $selected = 'selected';
            }
            $output .= '<option value ="' . $cat->language_code . '" ' . $selected . ' >' . $cat->title . '</option>';
        }
        $output .= '</select>';

        echo $output;
    }
}


if (!function_exists('getDefultAdminLanguage')) {
    function getDefultAdminLanguage($lang_code = null)
    {
        if ($lang_code != null) {
            session(['adminLanguage' => 'EN']);
            $temp_language = session()->get('adminLanguage');
        } else {
            $temp_language = session()->get('adminLanguage');
            if ($temp_language == null) {
                $temp_language = ['adminLanguage' => 'EN'];
                session($temp_language);
                $temp_language = session()->get('adminLanguage');
            }
        }
        return $temp_language;
    }
}


if (!function_exists('chnageColumnAccordingToLanguage')) {
    function chnageColumnAccordingToLanguage($data, $relation, $colum_arr = [], $defult_language = null)
    {
        if ($defult_language == null)
            $defult_language = getDefultAdminLanguage();
        if ($defult_language != env('DEFULT_LANG_CODE')) {

            if (isset($data[0])) {
                foreach ($data as $key => $value) {
                    if (isset($value->$relation[0])) {
                        foreach ($value->$relation as $value1) {
                            if ($value1->lang == $defult_language) {
                                foreach ($colum_arr as $colum_key => $colum_value) {
                                    $data[$key]->$colum_value = $value1->$colum_value;
                                }
                            }
                        }
                    }
                }
            } else {
                if (isset($data->$relation)) {
                    foreach ($data->$relation as $value1) {
                        if ($value1->lang == $defult_language) {
                            foreach ($colum_arr as $colum_key => $colum_value) {
                                $data->$colum_value = $value1->$colum_value;
                            }
                        }
                    }
                }
            }
        }
        return $data;
    }
}


if (!function_exists('chnageMenuLanguage')) {
    function chnageMenuLanguage($data, $relation, $colum_arr = [], $defult_language = null)
    {
        if ($defult_language == null)
            $defult_language = getDefultAdminLanguage();
        // if ($defult_language != env('DEFULT_LANG_CODE')) {

            if (isset($data[0])) {
                foreach ($data as $key => $value) {
                    if (isset($value->$relation[0])) {
                        foreach ($value->$relation as $value1) {
                            if ($value1->lang == $defult_language) {
                                foreach ($colum_arr as $colum_key => $colum_value) {
                                    $data[$key]->$colum_value = $value1->$colum_value;
                                }
                            }
                        }
                    }
                }
            } else {
                if (isset($data->$relation)) {
                    foreach ($data->$relation as $value1) {
                        if ($value1->lang == $defult_language) {
                            foreach ($colum_arr as $colum_key => $colum_value) {
                                $data->$colum_value = $value1->$colum_value;
                            }
                        }
                    }
                }
            }
        // }
        return $data;
    }
}

function getLabDiamondPrices($requestData){

    if(isset($requestData['type']) && $requestData['type']){
        $diamondCaratWeight = explode("-", trim($requestData['carat']));
        $diamondColour = $requestData['color'];
        $diamondClarity = $requestData['clarity'];
        $diamondCertificate = $requestData['certificate'];
        // $diamondShape = $requestData['diamondShape'];
        $diamondGrade = isset($requestData['grade'])?$requestData['grade']:'';
        $diamondType = $requestData['diamond_type'];
    
        if(isset($diamondType) && $diamondType == 'lab_grown'){
            return LabPricesList::whereBetween('carat', [$diamondCaratWeight[0], $diamondCaratWeight[1]])->where(['color'=> $diamondColour, 'clarity'=>$diamondClarity,'is_active'=>1, 'is_deleted'=>0])->select('clarity','color','carat','price')->first();
        }else{
            return 0.00;
        }
    }else{
        return 0.00;
    }
}

function getVariationDiamondPrices($requestData){
    $caratFrom = '0.30'; $caratTo = '0.39';
    if($requestData['diamondCaratWeight']!=''){
        $carat = explode('-',$requestData['diamondCaratWeight']);
        $caratFrom = $carat[0]; $caratTo = $carat[1];
    }

    $colorFrom = $colorTo = 'D'; $colour = array();
    if($requestData['diamondColour']!=''){
        $colour = explode(',',$requestData['diamondColour']);
        $colorFrom = $colorTo = $requestData['diamondColour'];
    }

    $clarityFrom = $clarityTo = 'SI2'; $clarity=array();
    if($requestData['diamondClarity']!=''){
        $clarity = explode(',',$requestData['diamondClarity']);
        $clarityFrom = $clarityTo = $requestData['diamondClarity'];
    }

    $gradeFrom = $gradeTo = 'EX'; $grade=array();
    if(isset($requestData['diamondGrade']) && $requestData['diamondGrade']!=''){
        $grade = explode(',',$requestData['diamondGrade']);
        $gradeFrom = $gradeTo = $requestData['diamondGrade'];
    }

    $polishFrom = 'EX'; $polishTo = 'GD'; $polish=array();
    $symmetryFrom = 'EX'; $symmetryTo = 'GD'; $symmetry=array();
    $fluorescence = array();

    $certificate = array();
    if($requestData['diamondCertificate']!=''){
        $certificate = explode(',',$requestData['diamondCertificate']);
    }

    $data = array('shape'=>$requestData['diamondShape'],'colorFrom'=>$colorFrom,'colorTo'=>$colorTo,'colour'=>$colour,'clarityFrom'=>$clarityFrom,'clarityTo'=>$clarityTo,'clarity'=>$clarity,'caratFrom'=>$caratFrom,'caratTo'=>$caratTo,'gradeFrom'=>$gradeFrom,'gradeTo'=>$gradeTo,'grade'=>$grade,'polishFrom'=>$polishFrom,'polishTo'=>$polishTo,'polish'=>$polish,'symmetryFrom'=>$symmetryFrom,'symmetryTo'=>$symmetryTo,'symmetry'=>$symmetry,'fluorescence'=>$fluorescence,'certificate'=>$certificate,'num_of_row'=>2,'PageSize'=>1);

    $hkData = getHKApiRecords($data);
    
    $diamondPrice = 0.00;
    if(isset($hkData) && !empty($hkData)){
        $diamondPrice = $hkData[0]['Amount'];
    }else{
        $rapnetData = getRapnetApiRecordsDiamondSearch($data,1);
        if(isset($rapnetData) && !empty($rapnetData)){
            $diamondPrice = $rapnetData[0]->total_sales_price_in_currency;
        }
    }
    return [
        'price'=> $diamondPrice,
    ];
}

function getRagularFilterPrices($getRequestData,$diamondType,$slug,$filterArray){

    $currency = session()->get('currency', []);
    $browserData = getIpInfos();
    if (empty($currency)) {
        $currency = $browserData['currencyCode'];
        $currency = strtolower($currency);
    }else{
        $currency = strtolower($currency);
    }
    $temp_table = 'currency_' . $currency;

    if(isset($diamondType) && !empty($diamondType)){
        $diamondType = $diamondType;
    }else{
        $diamondType = 'mined_diamond';
    }
    $rrpPrice = $diamondType.'_rrp';
    $getProductDetails = Products::where('slug',$slug)->first();
    
    // $getVariationsArray = ProductVariations::where('product_id',$getProductDetails->id)->pluck('id')->toArray();
    $getProductVariationId = ProductVariations::where('product_id', $getProductDetails->id)->pluck('id')->toArray();
    if (!empty($getProductVariationId)) {
        $attributeCount = count($getRequestData['variations']);
        foreach ($getProductVariationId as $key1 => $productVariationId) {
            $variationDetails = array();
            foreach ($getRequestData['variations'] as $key2 => $variations) {
                $getVariDetails = ProductVariationDetails::where('variation_id', $productVariationId)
                    ->where('value', $variations)
                    ->get()
                    ->toArray();

                if (!empty($getVariDetails))
                    $variationDetails[] = $getVariDetails;
            }
            if ($attributeCount == count($variationDetails))
                break;
        }
    }

    $categoryId = $getProductDetails->product_parent_category;
    if(in_array('54',explode(',',$getProductDetails->categories))){
        $categoryId = 54;
    }
    

    // $getRegularPrices = ProductVariations::where('id',$variationDetails[0][0]['variation_id'])->select('regular_price',"$diamondType as shopPrice","$rrpPrice as rrpPrice",'product_id','id')->first();
    $getRegularPrices = DB::table($temp_table)->select('grand_total as shopPrice','rrp_price as rrpPrice')->where('variation_id', $variationDetails[0][0]['variation_id'])->where('diamond_type',$diamondType)->first();

    $getDiscountedPrice = getIncreaseDiscountedPrice($categoryId,$getRegularPrices->shopPrice,$diamondType);

    $result = [
        'rrp_price'=> $getRegularPrices->rrpPrice,
        'shop_price'=> $getRegularPrices->shopPrice,
        'discounted_price'=> $getDiscountedPrice,
        'parent_category' => $categoryId,
    ];
    return $result;
}

function getIncreaseDiscountedPrice($category,$price,$diamondType){
    $curr =  currencySymbol();
    $MY_CURRENCY_BASE_PRICE = $curr['MY_CURRENCY_BASE_PRICE'];
    $shopPriceCurrencytoGBP = $price / $MY_CURRENCY_BASE_PRICE;
    
    $disPercentage = DiscountRange::whereHas('discount_data', function($q)  {
                    $q->whereDate('end_date', '>', now());
                })
                ->with(['discount_data'])->where('category_id', $category)
                ->whereRaw('"'.$shopPriceCurrencytoGBP.'" between `from_price` and `to_price`')
                ->when($diamondType, function ($q) use ($diamondType) {
                    return $q->whereRaw("FIND_IN_SET(?, diamond_type) > 0", [$diamondType]);
                })
                ->where('discount', '!=', 1)
                ->where('status', 1)
                ->first();
    
    if(isset($disPercentage) && !empty($disPercentage)){
        $discountedPrice = $price * (1 - $disPercentage->discount / 100);
        return $discountedPrice;
    }
    return $price;
}

function getFlatDiscountRanges($arrayPrices, $catId,$diamondType){
    $curr =  currencySymbol();
    $MY_CURRENCY_BASE_PRICE = $curr['MY_CURRENCY_BASE_PRICE'];
    $shopPriceCurrencytoGBP = $arrayPrices['shop_price'] / $MY_CURRENCY_BASE_PRICE;

    $disFlatPercentage = DiscountRange::whereHas('discount_data', function($q)  {
                    $q->whereDate('end_date', '>', now());
                })
                ->with(['discount_data'])->where('category_id', $catId)
                ->whereRaw('"'.$shopPriceCurrencytoGBP.'" between `from_price` and `to_price`')
                ->where('diamond_type', $diamondType)
                ->where('discount', '!=', 1)
                //->where('discount_type', 'F')
                ->where('status', 1)
                ->first();
    
    if(isset($disFlatPercentage) && !empty($disFlatPercentage)){
        $arrayPrices['discounted_price'] = round($arrayPrices['shop_price'] * (1 - $disFlatPercentage->discount / 100));
        return $arrayPrices;
    }
    return $arrayPrices;
}

function amountHariKrishnaRapnetChange($numPrice){
    $curr =  currencySymbol();
    $MY_CURRENCY_BASE_PRICE = $curr['MY_CURRENCY_BASE_PRICE'];
    
    // $marginAPIPercentage = MarginApiRange::where('api_type','harikrishna')->whereRaw('"'.$numPrice.'" between `from_price` and `to_price`')
    // ->where('status', 1)
    // ->first();
    
    $marginAPIPercentage = 1;

    if(isset($marginAPIPercentage) && !empty($marginAPIPercentage)){
        return $numPrice * $marginAPIPercentage * $MY_CURRENCY_BASE_PRICE;
    }
    return $numPrice;
}

if (!function_exists("getBreadcrumbCategoryName")) {
    function getBreadcrumbCategoryName($breadCrumbURL)
    {
        $breadcrumbArray = array_filter(explode('/',$breadCrumbURL));
        $newDesignBreadcrumb = [];
        $breadcrumbDesign = '';
        foreach($breadcrumbArray as $key => $value){
            $getCategoryName = Category::where('slug',$value)->value('name');
            if(count($breadcrumbArray) >= $key){
                $breadcrumbDesign .= "/".$value;
            }
            if(!next($breadcrumbArray)) {
                $newDesignBreadcrumb[$key] = '<a href="javascript:void(0);">'.$getCategoryName.'</a>';
            }else{
                $newDesignBreadcrumb[$key] = '<a href="'.$breadcrumbDesign.'">'.$getCategoryName.'</a>';
            }
        }
        return implode(' / ',$newDesignBreadcrumb);
    }
}

if (!function_exists("checkFingerSizeAvailable")) {
    function checkFingerSizeAvailable($getFingerSize)
    {
        $getAttributeValues = Attributes::where('slug','finger-size')->select('name','slug','values')->first();
        $getFingerSizeArray = explode("|",$getAttributeValues->values);
        $getFingerSizeArray = array_map('trim', $getFingerSizeArray);
        if(in_array(trim($getFingerSize),$getFingerSizeArray)){
            return true;
        }
        return false;
    }
}


if (!function_exists("checkCaratDiamondValue")) {
    function checkCaratDiamondValue($getCaratValue)
    {
        $minCarat = 0.3;
        $maxCarat = 5.0;
        if($minCarat <= $getCaratValue && $maxCarat >= $getCaratValue){
            return true;
        }
        return false;
    }
}
if (!function_exists("checkDiamondTypeValue")) {
    function checkDiamondTypeValue($getDiamondType)
    {
        $diamondTypeArray = [
            'ROUND','PEAR','MARQUISE','HEART','ASSCHER','PRINCESS','RADIANT','EMERALD','OVAL','CUSHION'
        ];
        if(in_array(strtoupper($getDiamondType),$diamondTypeArray)){
            return true;
        }
        return false;
    }
}
if (!function_exists("checkDiamondColourValue")) {
    function checkDiamondColourValue($getDiamondColour)
    {
        $diamondColourArray = [
            'D','E','F','G','H','I','J','K'
        ];
        if(in_array($getDiamondColour,$diamondColourArray)){
            return true;
        }
        return false;
    }
}
if (!function_exists("checkDiamondClarityValue")) {
    function checkDiamondClarityValue($getDiamondClarity)
    {
        $diamondClarityArray = [
            'I1','IF','SI1','SI2','VS1','VS2','VVS1','VVS2'
        ];
        if(in_array($getDiamondClarity,$diamondClarityArray)){
            return true;
        }
        return false;
    }
}
if (!function_exists("checkDiamondCutGradeValue")) {
    function checkDiamondCutGradeValue($getDiamondCutGrade)
    {
        $diamondCutGradeArray = [
            'VG','EX','GD','Excellent','Very Good','Good'
        ];
        if(in_array($getDiamondCutGrade,$diamondCutGradeArray)){
            return true;
        }
        return false;
    }
}
if (!function_exists("checkDiamondLabValue")) {
    function checkDiamondLabValue($getDiamondLab)
    {
        $diamondLabArray = [
            'GIA','IGI'
        ];
        if(in_array($getDiamondLab,$diamondLabArray)){
            return true;
        }
        return false;
    }
}

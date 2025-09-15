<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;

class WishlistController extends Controller
{
    public function index(){
        return view('front.pages.products-wishlists');
    }

    public function addToWishlist(Request $request){
        $productData = Products::with('getProductImages','getProductVariation')->where('slug',$request->slug)->first();
        $productData = chnageColumnAccordingToLanguage($productData, 'langProducts', ['title', 'description', 'short_description', 'lab_description'], session()->get('language'));
        if(isset($productData) && !empty($productData)){

            if(isset($productData) && !empty($productData->title)){
                $titleName = $productData->title; 
                $titleSlug = $productData->slug;
            }else{
                $titleName = '';
            }

            $wishlist = session()->get('wishlist', []);

            if(isset($wishlist[$productData->id])) {
                $content = new Request([
                    'id'=>$productData->id,
                ]);
                $this->removeWishlist($content);
                return response()->json(['error'=>'Removed!']);
            } else {
                $wishlist[$productData->id] = [
                    "titleName" => $titleName,
                    "titleSlug" => $titleSlug,
                    "price" => $request->price,
                    "added_date" => date('M d, Y'),
                    "stock_status"=> "In stock",
                    "image" => $productData->getProductImages->image_url
                ];
            }
            session()->put('wishlist', $wishlist);
            return response()->json(['wishcount'=>count((array) session('wishlist')),'success'=>'Product added to wishlist successfully!']);
        }else{
            return response()->json(['error'=>'Not Match']);
        }
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function removeWishlist(Request $request)
    {
        if($request->id) {
            $cart = session()->get('wishlist');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('wishlist', $cart);
            }
            session()->flash('successwishlist', 'Product removed successfully');
        }
    }

}

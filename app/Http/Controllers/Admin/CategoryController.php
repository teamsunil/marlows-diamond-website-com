<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\SlugController;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Products;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Str;

class CategoryController extends Controller
{
    public function index()
    {
        $breadcrumb = [
            ["name" => "Categories", "url" => route("admin.categories"), "icon" => "fa fa-list-alt"],
            ["name" => "Home", "url" => route("admin.dashboard"), "icon" => "fa fa-home"],

        ];
        populate_breadcrumb($breadcrumb);
        $query = Category::latest();

        $query  = getFilter(Category::class, $query, request()->all());

        $getData = $query->paginate(10);

        $getData = chnageColumnAccordingToLanguage($getData, 'langCateoryProduct', ['title','name','description','short_description']);
        $result = [
            'getData' => $getData,
        ];

        return view('admin.categories.index', $result);
    }

    public function getCategory(Request $request)
    {
        $getCatId_arr = [];
        if (isset($request->id)) {
            $getCategory = Products::find($request->id);
            $getCatId = $getCategory->categories;
            $getCatId_arr = explode(",", $getCategory->categories);
        }
        if (isset($request->cate_id)) {
            $getCategory = Category::find($request->cate_id);
            $getCatId = $getCategory->parent_id;

            $getCatId_arr = explode(",", $getCatId);
        }

        $getParentData = Category::where('status', 1)->where('parent_id', 0)->get()->toArray();
        $dataArray = $child1 = array();
        if (count($getParentData) > 0) {
            foreach ($getParentData as $key => $parent) {
                $dataArray[$key]['id'] = $parent['id'];
                $dataArray[$key]['name'] = $parent['name'];
                if (in_array($parent['id'], $getCatId_arr)) {
                    echo '<option selected value="' . $parent['id'] . '">' . $parent['name'] . '</option>';
                } else {
                    echo '<option  value="' . $parent['id'] . '">' . $parent['name'] . '</option>';
                }
                $child = $this->getChildData($parent['id'], 0, $getCatId_arr);
                if (count($child) > 0) {
                    $dataArray[$key]['parent'] = $child;
                }
            }
        }
        die;
        //echo '<pre>'; print_r($dataArray);die;
        //return response()->json($dataArray);
    }

    public function getChildData($parent_id, $level, $getCatId_arr)
    {
        $getChildData = Category::where('status', 1)->where('parent_id', $parent_id)->get()->toArray();
        $level++;
        $dataArray = $child1 = array();
        if (count($getChildData) > 0) {
            foreach ($getChildData as $key => $child) {
                //echo str_repeat("-", ($level * 2)) . $child['name'] . '<br>';
                if (in_array($child['id'], $getCatId_arr)) {
                    echo '<option selected value="' . $child['id'] . '">' . str_repeat("-", ($level * 2)) . $child['name'] . '</option>';
                } else {
                    echo '<option value="' . $child['id'] . '">' . str_repeat("-", ($level * 2)) . $child['name'] . '</option>';
                }
                $dataArray[$key]['id'] = $child['id'];
                $dataArray[$key]['name'] = $child['name'];

                $child = $this->getChildData($child['id'], $level, $getCatId_arr);
                if (count($child) > 0) {
                    $dataArray[$key]['parent'] = $child;
                }
            }
        }
        return $dataArray;
    }

    public function createForm($catId = null)
    {
        $breadcrumb = [
            ["name" => "Create Category", "url" => route("admin.categories"), "icon" => "fa fa-list-alt "],
            ["name" => "Home", "url" => route("admin.dashboard"), "icon" => "fa fa-home"],
        ];
        populate_breadcrumb($breadcrumb);

        if (!is_null($catId)) {
            $getData = Category::where('slug', $catId)->first();
            $getData = chnageColumnAccordingToLanguage($getData, 'langCateoryProduct', ['title','name','description','short_description']);
            $result = [
                'getData' => $getData
            ];
        } else {
            $result = [
                'getData' => ''
            ];
        }

        return view('admin.categories.create', $result);
    }

    public function add(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);
        if ($request->hasFile('image')) {

            $image = single_storage_image_upload($request->file('image'), 'Category');
        } else {
            $image = $request->image_url_bk;
        }

        //  setup parent_id 
        //  $getParentId = 0;
        if (isset($request->table_id) && !empty($request->table_id)) {
            if ($request->table_id == $request->parent_id) {

                $request->parent_id = 0;
            } elseif (!isset($request->parent_id) && empty($request->parent_id)) {
                $request->parent_id = 0;
            }

            if ($request->slug_bk != $request->slug) {
                $newSlug = new SlugController;
                $newCustomSlug = $newSlug->makeNewSlugName('Category', $request->name, $request->slug);  // 1. Model Name 2. Name/Title. 3. slugName
            } else {
                $newCustomSlug = $request->slug;
            }
        } else {
            $newSlug = new SlugController;
            $newCustomSlug = $newSlug->makeNewSlugName('Category', $request->name, $request->slug);  // 1. Model Name 2. Name/Title. 3. slugName
        }
        if (getDefultAdminLanguage() == env('DEFULT_LANG_CODE')){
        if ($validator->fails()) {
            if (isset($request->table_id) && !empty($request->table_id)) {
                $insertedData = Category::updateOrCreate(['id' => $request->table_id], [
                    'name' => $request->name,
                    'title' => isset($request->title) ? $request->title : '',
                    'slug' => strtolower($newCustomSlug),
                    'status' => isset($request->status) ? $request->status : 0,
                    'parent_id' => isset($request->parent_id) ? $request->parent_id : 0,
                    'short_description' => isset($request->short_description) ? $request->short_description : '',
                    'description' => $request->description,
                    'meta_title' => $request->meta_title,
                    'meta_keyword' => $request->meta_keyword,
                    'meta_description' => $request->meta_description,
                    'image_url' => $image,
                ]);
                return redirect()->back()->with('success', 'Successfully updated!!!');
            }
            return Redirect::back()->withErrors($validator->errors())->withInput();
        } else {
            $insertedData = Category::updateOrCreate(['id' => $request->table_id], [
                'name' => $request->name,
                'title' => isset($request->title) ? $request->title : '',
                'slug' => strtolower($newCustomSlug),
                'status' => isset($request->status) ? $request->status : 0,
                'parent_id' => isset($request->parent_id) ? $request->parent_id : 0,
                'short_description' => isset($request->short_description) ? $request->short_description : '',
                'description' => $request->description,
                'meta_title' => $request->meta_title,
                'meta_keyword' => $request->meta_keyword,
                'meta_description' => $request->meta_description,
                'image_url' => $image,
            ]);
            return redirect()->back()->with('success', 'Successfully added!!!');
        }
        }else{

            $request['lang'] = getDefultAdminLanguage();
            $request['category_id'] = $request->table_id;
            $validator = Validator::make($request->all(), [
                'title' => 'required',
                'description' => 'required',
                'short_description' => 'required',
                'name' => 'required',
            ]);
            if ($request->table_id != '') {
               
                if ($validator->fails()) {
                    return Redirect::back()->withErrors($validator->errors())->withInput();
                } else {
                    
                $insertedData = ProductCategoryLang::updateOrCreate(['id' => $request->table_id], [
                    'name' => $request->name,
                    //'parent_id' => isset($request->parent_id) ? $request->parent_id : 0,
                    'short_description' =>isset($request->short_description) ? $request->short_description : '',
                    'description' => $request->description,
                    'title' => $request->title,
                    'lang' => $request['lang'],
                    'category_id' => $request['category_id']
                ]);
          
            }
    
                return redirect()->back()->with('success', 'Successfully added!!!');
            }
        }
    }

    public function status(Request $request)
    {
        $statusChange = Category::findOrFail($request->id);
        if ($statusChange) {

            $statusChange->update([
                'status' => $request->status,
            ]);
            return response()->json($statusChange);
        }
        return response()->json(['error' => 'geterror'], 422);
    }

    public function delete(Request $request)
    {
        $post = Category::find($request->id)->delete();
        //return response()->json($post);
        return redirect()->action('Admin\CategoryController@index')->with('success', 'Currency Deleted Successfully');
    }

    function getCategoryTree($parent_id = 0, $spacing = '', $tree_array = array())
    {
        $categories = Category::select('id', 'name', 'parent_id')->where('parent_id', '=', $parent_id)->orderBy('parent_id')->get();
        foreach ($categories as $item) {
            $tree_array[] = ['categoryId' => $item->id, 'categoryName' => $spacing . $item->name];
            $tree_array = $this->getCategoryTree($item->id, $spacing . '--', $tree_array);
        }

        return $tree_array;
    }
}

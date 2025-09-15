<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostCategoryLang extends Model
{
    protected $table = 'post_categories_lang';
    public $timestamps = false;
    use HasFactory;

    

    protected $fillable = ['name','post_category_id','description','lang'];

    // protected $appends = [
    //     'blog_title_details'
    // ];

    // public function getBlogTitleDetailsAttribute()
    // {
    //     return Pages::where('slug', 'blog')->first(); // Change after SEO discuss 05Jan2023 seo_change
    // }
}

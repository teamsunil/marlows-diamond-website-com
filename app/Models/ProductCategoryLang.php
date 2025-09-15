<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategoryLang extends Model
{
     /**
   * @var string $table
   */
  protected $table='product_categories_lang';
  public $timestamps= false;

  use HasFactory;
  
  protected $fillable=['title','name','category_id','description','parent_id','lang','short_description'];

}

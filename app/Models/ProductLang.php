<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductLang extends Model
{
      /**
   * @var string $table
   */
    protected $table='product_lang';
    public $timestamps= false;

    use HasFactory;

    protected $fillable=['title' , 'products_id' , 'description' , 'short_description' , 'lab_description' , 'lang'];

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewsLang extends Model
{
   /**
   * @var string $table
   */
    protected $table='review_lang';
    public $timestamps= false;

    use HasFactory;

    protected $fillable=['title','reviews_id','description','lang'];
  
}

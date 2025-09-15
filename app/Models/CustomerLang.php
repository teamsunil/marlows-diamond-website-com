<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerLang extends Model
{
    /**
   * @var string $table
   */
  protected $table='customer_lang';
  public $timestamps= false;

  use HasFactory;

  protected $fillable=['name','user_id','username','nicename','lang'];
 
}
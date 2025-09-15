<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\FaqsLang;

class Faqs extends Model
{
  /**
   * @var string $table
   */
  protected $table = 'faqs';

  use HasFactory;

  protected $fillable = ['title', 'categories', 'description', 'status'];

  public function getLangDetails()
  {

    return $this->hasOne(FaqsLang::class, 'faqs_id', 'id');
  }

  public function langFaq()
  {
    return $this->hasMany(FaqsLang::class);
  }
}

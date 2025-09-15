<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaqsLang extends Model
{
	/**
     * @var string $table
     */
    protected $table = 'faqs_lang';
    public $timestamps = false;
    
    use HasFactory;
	
	protected $fillable = ['title','faqs_id','categories','description','lang'];
    
}

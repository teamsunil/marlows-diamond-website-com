<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BannerDetailsLang extends Model
{
	/**
     * @var string $table
     */
    protected $table = 'banners_details_lang';
    public $timestamps = false;
    use HasFactory;
	
	protected $fillable = ['banner_id','banners_details_id','lang','description','image'];
}

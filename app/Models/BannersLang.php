<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BannersLang extends Model
{
	/**
     * @var string $table
     */
    protected $table = 'banners_lang';
    public $timestamps = false;
    use HasFactory;
	
	protected $fillable = ['page_id','title','description','image','banners_id','lang'];
	
	public function getBannerDetails(){
		return $this->hasMany('App\Models\BannerDetails','banner_id','id');
	}
}

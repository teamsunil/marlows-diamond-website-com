<?php

namespace App\Models;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PostsLang extends Authenticatable
{
    use Notifiable;
	/**
     * @var string $table
     */
    protected $table = 'posts_lang';
    public $timestamps = false;
    
    use HasFactory;

    protected $fillable = [
        'posts_id', 'lang', 'title', 'subtitle', 'short_description', 'description', 'image'];

	protected $appends = ['cat_details','cat_name'];

	public function getCatDetailsAttribute()
    {
        $ids = explode(',',$this->categories);
		
        $user = PostCategoryLang::whereIn('post_category_id',$ids)->where('lang', session()->get('language'))->pluck('name')->toArray();
        return implode(',',$user);
    }
	public function getCatNameAttribute()
    {
        $ids = explode(',',$this->categories);
        return PostCategoryLang::where('post_category_id',$ids[0])->where('lang', session()->get('language'))->select('name')->first();
    }

}

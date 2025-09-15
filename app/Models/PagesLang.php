<?php

namespace App\Models;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class PagesLang extends Authenticatable
{
    /**
     * @var string $table
     */
    protected $table = 'pages_lang';
    public $timestamps = false;

    use Notifiable;
    
    protected $fillable = [
        'title','pages_id','subtitle','short_description','description','template','image','lang'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PopupsLang extends Model
{
	/**
     * @var string $table
     */
    protected $table = 'popups_lang';
    public $timestamps = false;
    
    use HasFactory;
	
	protected $fillable = ['title','popups_id','description','lang'];
}

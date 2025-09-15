<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
	/**
     * @var string $table
     */
    protected $table = 'currency';
    
    use HasFactory;
	
	protected $fillable = ['currency_name','currency_title','currency_sign','base_price','status'];

}

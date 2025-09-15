<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
	/**
     * @var string $table
     */
    protected $table = 'languages';
    
    use HasFactory;
	
	protected $fillable = ['title', 'language_code','status'];

}

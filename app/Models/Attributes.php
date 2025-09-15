<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attributes extends Model
{
    use HasFactory;

    protected $table = 'attributes';

    protected $fillable = [
        'name','slug','values','status'
    ];

    protected $hidden = ['status','created_at','updated_at'];
}

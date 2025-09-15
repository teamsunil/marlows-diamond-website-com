<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Queue extends Model
{
    use HasFactory;
    protected $table = 'queue';
    protected $fillable = [
        'task',
        'status',
        'created_at',
        'updated_at'
    ];
}

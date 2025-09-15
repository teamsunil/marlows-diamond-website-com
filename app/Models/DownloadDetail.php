<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DownloadDetail extends Model
{
    use HasFactory;

    protected $table = 'download_details';

    protected $fillable = [
        'name','email','status'
    ];
}

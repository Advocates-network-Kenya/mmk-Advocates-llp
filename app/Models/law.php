<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class law extends Model
{
    /** @use HasFactory<\Database\Factories\LawFactory> */
    use HasFactory;
    public $fillable = [
        'title',
        'description',
        //image
        'image',
        'user_id',
        //content
        'content',
        'slug',
       // 'icon',

    ];
}

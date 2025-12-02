<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;

    protected $table = 'courses';
    protected $fillable = [
        'title',
        'slug',
        'short_description',
        'image',
        'language',
        'rating',
        'cont_title',
        'content',
        'period_b',
        'duration_b',
        'period_s',
        'duration_s',
        'meta_title',
        'meta_description',
        'status'
    ];

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title', 
        'description', 
        'objectives', 
        'price', 
        'total_videos', 
        'duration', 
        'channel_id', 
        'user_id', 
        'category_id'
    ];
}
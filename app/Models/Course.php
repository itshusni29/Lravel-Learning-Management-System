<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'category',
        'level',
        'duration',
        'total_lessons',
        'description',
        'trainer',
        'thumbnail',
    ];
}

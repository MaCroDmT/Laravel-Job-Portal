<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'location', 'salary', 'deadline'];

   
    protected $casts = [
        'deadline' => 'datetime',
    ];
}

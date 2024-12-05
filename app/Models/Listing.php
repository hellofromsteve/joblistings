<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_title',
        'job_desc',
        'gender',
        'category',
        'qualification',
        'salary',
        'language',
        'region',
        'city',
        'slug',
    ];


    public function user()
    {
        return  $this->belongsTo(User::class);
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobListing extends Model
{
    /** @use HasFactory<\Database\Factories\JobListingFactory> */
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

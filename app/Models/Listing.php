<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
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


    public function applications()
    {
        return $this->hasMany(Applications::class);
    }

    public function getRouteKeyName()
    {
        return 'slug'; // or the custom column you're using
    }
}

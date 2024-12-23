<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'dob',
        'password',
        'user_account',
        'account_type',
        'language',
        'address',
        'region',
        'education',
        'job_title',
        'field_of_study',
        'linked_in',
        'twitter',
        'facebook',
        'instagram',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function listing()
    {
        return  $this->hasMany(Listing::class);
    }

    public function applications()
    {
        return $this->hasMany(Applications::class);
    }

    public function isEmployer()
    {
        return $this->account_type === 'employer';
    }

    public function isCandidate()
    {
        return $this->account_type === 'candidate';
    }
}

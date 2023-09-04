<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    protected $table = 'coaches';
    use HasFactory;
    public function getRouteKeyName()
    {
        return 'username';
    }

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'country',
        'governorate',
        'bio',
        'img',
        'username',
        'phone',
        'expertise',
        'completed_clients',
        'status',

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
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
class Coach extends Authenticatable
{
    protected $table = 'coaches';
    use HasFactory, Notifiable;
    public function getRouteKeyName()
    {
        return 'username';
    }

    public function sentMessages()
    {
        return $this->morphMany(Message::class, 'sender');
    }

    public function receivedMessages()
    {
        return $this->morphMany(Message::class, 'receiver');
    }
    protected $fillable = [
        'name',
        'email',
        'password',
        'country',
        'img',
        'gender',
        'category',
        'username',
        'phone',
        'expertise',
        'completed_clients',
        'Active_clients',
        'status',

    ];
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    public function bookedSessions()
    {
        return $this->hasMany(BookedSession::class);
    }
    public function coachPlans()
    {
        return $this->hasMany(CoachPlan::class);
    }
    public function transformations()
    {
        return $this->hasMany(Transformation::class);
    }
    public function certifications()
    {
        return $this->hasMany(Transformation::class);
    }
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

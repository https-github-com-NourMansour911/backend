<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coach_review extends Model
{
    protected $table = 'coach_reviews';
    use HasFactory;
    protected $fillable = [
        'coach_id',
        'user_id',
        'content',
        'rating',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function coach()
    {
        return $this->belongsTo(Coach::class);
    }

}

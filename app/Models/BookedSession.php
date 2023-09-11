<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookedSession extends Model
{
    use HasFactory;
    protected $fillable = [
        'coach_id',
        'client_id',
        'plan_id',
        'start_date',
        'start_time',
    ];
    public function coach()
    {
        return $this->belongsTo(User::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

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
        'end_date',
    ];
    public function coach()
    {
        return $this->belongsTo(Coach::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transformation extends Model
{
    use HasFactory;
    protected $fillable = [
        'coach_id',
        'img',
        'client_age',
        'client_name',
    ];
    public function coach()
    {
        return $this->belongsTo(Coach::class);
    }
}

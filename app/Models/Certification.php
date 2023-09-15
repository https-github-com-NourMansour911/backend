<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    use HasFactory;
    protected $fillable = [
        'coach_id',
        'name',
        'img',
    ];
    public function coach()
    {
        return $this->belongsTo(Coach::class);
    }
}

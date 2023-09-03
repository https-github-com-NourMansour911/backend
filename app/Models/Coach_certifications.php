<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coach_certifications extends Model
{
    protected $table = 'coach_certifications';
    use HasFactory;
    protected $fillable = [
        'coach_id',
        'name',
        'description',
        'img',
        'link',
    ];
}

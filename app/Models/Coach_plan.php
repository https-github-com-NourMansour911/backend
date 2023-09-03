<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coach_plan extends Model
{
    protected $table = 'coaches_plans';
    use HasFactory;
    protected $fillable = [
        'coach_id',
        'description',
        'discount',
        'price',
        'plan_name',

    ];
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoachPlan extends Model
{
    use HasFactory;
    protected $table = 'coach_plans';
    protected $fillable = [
        'coach_id',
        'duration',
        'discount',
        'price',
        'plan_name',

    ];
    public function coach()
    {
        return $this->belongsTo(Coach::class);
    }
}

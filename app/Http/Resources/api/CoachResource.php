<?php

namespace App\Http\Resources\api;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CoachResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'coach_id' => $this->id,
            'name' => $this->name,
            'username' => $this->username,
            'email' => $this->email,
            'country'=> $this->country,
            'img' => "techtitans.puiux.org/". $this->img,
            'expertise' => $this->expertise,
            'category' => $this->category,
            'completed_clients' => $this->completed_clients,
            'active_clients' => $this->active_clients,
            'status' => $this->status,
            'gender'=>$this->gender,
            'bio' => $this->bio,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'rating' => intval($this->reviews->avg('rating')),
            'certifications' => $this->certifications,
            'transformations' => $this->transformations,
            'reviews' => $this->reviews,
            'Plans' => $this->coachPlans,

            
        ];
    }
}

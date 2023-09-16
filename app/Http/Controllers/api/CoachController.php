<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\api\CoachResource;
use App\Models\Transformation;
use Illuminate\Http\Request;
use App\Models\Coach;
class CoachController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        return  CoachResource::collection(Coach::all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Coach $coach)
    {
        $coachCollection = collect([$coach]);
        
        return CoachResource::collection($coachCollection);
    }
    /**
     * Search for a name
     * 
     * @param str $name
     * @return \Illuminate\Http\Response
     */
    public function search($name)
    {
        // Search for a coach based on their name or their username
        $coachs=Coach::where('name', 'like', '%'.$name.'%')->orWhere('username', 'like', '%'.$name.'%')->get();
        return CoachResource::collection($coachs);
    }
    public function getTransformation(Coach $coach)
    {
        $trans=Transformation::where('coach_id', $coach->id)->get();
        return $trans;
    }

}

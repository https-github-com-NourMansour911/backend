<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
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
        return Coach::all();
    }

    /**
     * Display the specified resource.
     */
    public function show(Coach $coach)
    {
        return $coach;
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
        return Coach::where('name', 'like', '%'.$name.'%')->orWhere('username', 'like', '%'.$name.'%')->get();
    }
    public function getTransformation(Coach $coach)
    {
        return Transformation::where('coach_id', $coach->id)->get();
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Coach;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CoachController extends Controller
{
    public function index()
    {
       
    }
    public function create()
    {
        view('coaches.create');
    }
    public function store(Request $request)
    {
        
    }
    public function show(Coach $coach)
    {
        
    }
    public function edit(Coach $coach)
    {
        
    }
    public function update(Request $request)
    {
        $coach = Coach::find($request->user()->id);
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:coaches,email,' . $coach->id,
            'img' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        if ($request->hasFile('img')) {
            $img = Str::random(20) . '.' . $request->file('img')->getClientOriginalExtension();
            $request->file('img')->move(public_path('Images/Coaches'), $img);
            $coach->img = 'Images/Coaches/' .$img;
        }
        $coach->name=$request->name;
        $coach->email=$request->email;
        $coach->country=$request->country;
        //$coach->bio=$request->bio;
        if(isset($request->status))
            $coach->status=$request->status;
        $coach->expertise=$request->expertise;
        
        $coach->save();
        return redirect('/profile');
    }

}

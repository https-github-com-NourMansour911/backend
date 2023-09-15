<?php

namespace App\Http\Controllers;

use App\Models\Transformation;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TransformationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $transformations = Transformation::where('coach_id', Auth::user()->id)->get();
        return view('coaches.trans.view', ['user' => Auth::user(), 'transformations' =>$transformations]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'client_name' => 'required',
            'client_age' => 'required',
            'img' => 'required',
        ]);
        $transformation = new Transformation();
        $transformation->coach_id = Auth::user()->id;
        $transformation->client_name = $request->client_name;
        $transformation->client_age = $request->client_age;
        if ($request->hasFile('img')) {
            $img = Str::random(20) . '.' . $request->file('img')->getClientOriginalExtension();
            $request->file('img')->move(public_path('Images/Transfor'), $img);
            $transformation->img = 'Images/Transfor/' . $img;
        }
        $transformation->save();
        return redirect('/transformations');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $transformation = Transformation::find($request->id);
        $transformation->delete();
        return redirect('/transformations');
    }
}

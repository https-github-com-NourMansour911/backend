<?php

namespace App\Http\Controllers;

use App\Models\Certification;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CertificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $certifications = Certification::where('coach_id', Auth::user()->id)->get();
        return view( "coaches.certifications.index", ['user' => Auth::user(), 'certifications' => $certifications]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'img' => 'required',
        ]);
        $certifications = new Certification();
        $certifications->coach_id = Auth::user()->id;
        $certifications->name = $request->name;
        if ($request->hasFile('img')) {
            $img = Str::random(20) . '.' . $request->file('img')->getClientOriginalExtension();
            $request->file('img')->move(public_path('../../public_html/Images/Certification'), $img);
            $certifications->img = 'https://techtitans.puiux.org/Images/Certification/' . $img;
        }
        $certifications->save();
        return redirect('/certifications');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $certification = Certification::find($request->id);
        $certification->delete();
        return redirect('/certifications');
    }
}

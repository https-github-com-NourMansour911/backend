<?php

namespace App\Http\Controllers;

use App\Models\CoachPlan;
use Auth;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function index()
    {
        $plans = CoachPlan::where('coach_id', Auth::user()->id)->get();
        return view('coaches.plans.index', ['user' => Auth::user(), "plans" => $plans]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'plan_name' => 'required',
            'duration' => 'required',
            'price' => 'required',
        ]);
        $plan = new CoachPlan();
        $plan->coach_id = Auth::user()->id;
        $plan->plan_name = $request->plan_name;
        $plan->duration = $request->duration;
        $plan->price = $request->price;
        if (isset($request->discount)) {
            $plan->discount = $request->discount;
        }
        $plan->save();
        return redirect('/plans');
    }

    public function update(Request $request)
    {
        
        $plan = CoachPlan::find($request->plan_id);
        $plan->discount = 0;
        $plan->save();
        return redirect('/plans');
    }
    public function destroy(Request $request)
    {
        $plan = CoachPlan::find($request->plan_id);
        $plan->delete();
        return redirect('/plans');
    }

}

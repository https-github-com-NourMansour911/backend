<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\BookedSession;
use Exception;
use Illuminate\Http\Request;
use App\Models\Coach;
use App\Models\CoachPlan;
use Illuminate\Validation\ValidationException;
class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Coach $coach)
    {
        try{ 
        return CoachPlan::where('coach_id', $coach->id)->get();
        }
        catch (Exception $e) {
            // Handle other errors here
            return response()->json(['error' => 'Server error'], 500);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(CoachPlan $plan)
    {
        return $plan;
    }
    /**
     * Purchase a plan
     */
    public function purchase(Request $request, CoachPlan $plan)
    {
        try {
        //validate request
        $fields = $request->validate([
            'start_date' => 'required|date_format:Y-m-d',
            'start_time' => 'required|date_format:H:i',
        ]);
        //open chat_status to work on
        //add session to booked sessions
        BookedSession::create([
            'client_id' => $request->user()->id,
            'coach_id' => $plan->coach_id,
            'plan_id' => $plan->id,
            'start_date' => $request->start_date,
            'start_time' => $request->start_time,
            'status' => 'pending' // a req was sent to the coach to accept or reject
            //should sent a req to the coach to accept or reject (new table for reqs)
        ]);
        return "Plan purchased successfully";
        } catch (ValidationException $e) {
            // Handle validation errors here
            return response()->json(['error' => $e->errors()], 422);
        } catch (Exception $e) {
            // Handle other errors here
            return response()->json(['error' => 'Server error'], 500);
        }
    }
    
}

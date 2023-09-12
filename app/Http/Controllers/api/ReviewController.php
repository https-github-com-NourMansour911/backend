<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Coach;
use App\Models\Review;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Coach $coach)
    {
        return Review::where('coach_id', $coach->id)->get();
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
        $fields = $request->validate([
            'coach_id' => 'required|exists:coaches,id',
            'content' => 'string',
            'rating' => 'required|numeric|min:1|max:5'
        ]);
        Review::create([
            'coach_id' => $request->coach_id,
            'user_id' => $request->user()->id,
            'content' => $request->content,
            'rating' => $request->rating
        ]);
        return "Review created successfully";
    } catch (ValidationException $e) {
        // Handle validation errors here
        return response()->json(['error' => $e->errors()], 422);
    } catch (Exception $e) {
        // Handle other errors here
        return response()->json(['error' => 'Server error'], 500);
    }
}



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $review = Review::find($id);
        $review->update($request->all());
        return "Review updated successfully";
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $review = Review::find($id);
        $review->delete();
        return "Review deleted successfully";
    }
}

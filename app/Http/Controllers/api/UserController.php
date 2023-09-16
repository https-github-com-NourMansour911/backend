<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function index(Request $request)
    {
        return  response()->json($request->user());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        
        $user = $request->user();
        $user->update($request->all());
        return "User updated successfully";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $user = $request->user();
        $user->delete();
        return "User deleted successfully";
    }
}

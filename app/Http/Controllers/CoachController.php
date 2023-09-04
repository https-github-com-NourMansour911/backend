<?php

namespace App\Http\Controllers;

use App\Models\Coach;
use Illuminate\Http\Request;

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
    public function update(Coach $coach)
    {
        
    }
    public function destroy(Coach $coach)
    {
       
    }
    public function clients(Coach $coach) //show all clients for a specific coach
    {
        
    }
    public function plans(Coach $coach) //show all plans for a specific coach
    {
        
    }
    public function reviews(Coach $coach) //show all reviews for a specific coach
    {
        
    }
}

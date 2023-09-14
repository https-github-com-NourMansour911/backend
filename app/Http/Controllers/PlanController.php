<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function index()
    {

    }
    public function create()
    {
        return view('coaches.plans.create', ['user' => Auth::user()]);
    }
    public function store()
    {

    }
    public function show($id)
    {

    }
    public function edit($id)
    {

    }
    public function update($id)
    {

    }
    public function destroy($id)
    {

    }

}

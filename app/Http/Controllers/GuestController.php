<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;

class GuestController extends Controller
{
    public function index()
    {
        $project = Project::all();
        return view('home', compact('projects'));
    }
}

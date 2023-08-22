<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;


class LoggedController extends Controller
{
    public function show($id)
    {
        $projects = Project::findOrFail($id);

        return view('show', compact('project'));
    }
}

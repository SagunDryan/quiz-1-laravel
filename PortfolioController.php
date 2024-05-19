<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Skill;
use App\Models\Education;

class PortfolioController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        $skills = Skill::all();
        $educations = Education::all();

        return view('portfolio.index', compact('projects', 'skills', 'educations'));
    }
}

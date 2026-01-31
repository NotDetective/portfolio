<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\Project;
use App\Models\Stack;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PortfolioController extends Controller
{

    public function index()
    {
        $stacks = Stack::select(['name', 'icon', 'id'])
            ->with(['capabilities' => function ($query) {
                $query->select('id', 'name', 'stack_id');
            }])
            ->get();

        $experiences = Experience::select(['title', 'location', 'description', 'start_date', 'end_date'])
            ->orderBy('start_date', 'DESC')
            ->get()
            ->each(fn($experience) => [
                $experience['formated_date'] = $experience->formated_date,
            ]);

        $projects = Project::select(['name', 'description', 'git_url', 'project_url'])
            ->get();

        return Inertia::render('Portfolio/Base', [
            'stacks' => $stacks,
            'experiences' => $experiences,
            'projects' => $projects,
        ]);
    }

}

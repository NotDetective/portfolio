<?php

namespace App\Http\Controllers;

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

        return Inertia::render('Portfolio/Base', [
            'stacks' => $stacks
        ]);
    }

}

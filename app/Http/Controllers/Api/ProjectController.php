<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        $data = [
            'results' => $projects,
            'success' => true
        ];
        return response()->json($data);
    }

    public function show(string $slug)
    {
        $project = Project::with(['type', 'technologies'])->where('slug', $slug)->first();
        $data = [
            'results' => $project,
            'success' => true
        ];

        if (!$project) {
            return response()->json(['not found'], 404);
        }
        return response()->json($data);
    }
}

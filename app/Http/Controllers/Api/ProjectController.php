<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index() {
        $projects = Project::all();
        
        $data = [
            'results' => $projects,
            'success' => true
        ];
        return response()->json($data);
    }

    public function show(string $project) {
        $project = Project::with(['type', 'technologies'])->where('slug', $project)->firts();
        $data = [
            'results' => $project,
            'success' => true
        ];
        return response()->json($data);
    }
}

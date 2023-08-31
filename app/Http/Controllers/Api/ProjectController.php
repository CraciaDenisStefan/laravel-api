<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Project;

class ProjectController extends Controller
{
   public function index(){
    $projects = Project::with('type','technologies')->paginate(3);

    return response()->json([

        'status' => true,
        'results' => $projects,

    ]);
   }
   public function show($title){
    $projects = Project::with('type','technologies')->where('title', $title)->first();

    if($projects){
        return response()->json([

            'status' => true,
            'project' => $projects,

        ]);
    }
    return response()->json([

        'status' => false,
        'message' => 'Nessun progetto trovato',

    ]);
}
}



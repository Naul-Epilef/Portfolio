<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function lists(){
        $projects = Project::All()->sortByDesc("updated_at");
        return view("site.home", [
            "projects" => $projects
        ]);
    }
}

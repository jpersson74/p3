<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public function index()
    {
        return view('project.index');
    }
//Search controller
    public function search()
    {
        return view('project.search');
    }


}



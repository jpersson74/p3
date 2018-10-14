<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public function index(){

//index controller
        return 'WSP Geospatial Project Tracker';
    }
//Search controller
    public function searchProject(){

        return 'Search for Project Data';
    }


}



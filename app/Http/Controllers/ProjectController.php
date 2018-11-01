<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public function index(Request $request)
    {
        return view('project.index')->with([
            'projSearch' => $request->session()->get('projSearch', ''),

            'searchResults' => $request->session()->get('searchResults', []),
        ]);
    }

//Search controller

    public function searchProcess(Request $request)

    {
        $searchResults = [];

        $projSearch = $request->input('projSearch', null);

        $request->validate([

            'projSearch' => 'regex:/^\d{2}[P]-.*$/'
        ]);

        if ($projSearch) {
            //Gets existing data from JSON

            $projectsJSON = file_get_contents(database_path('/projects.json'));

            $data = json_decode($projectsJSON, true);

            //Loops through array to search for data

            foreach ($data as $projectID => $project) {
                if ($project['ProjectID'] == $projSearch) {
                    $searchResults[$projectID] = $project;
                }
            }
        }

        return redirect('/')->with([
            'projSearch' => $projSearch,

            'searchResults' => $searchResults
        ]);
    }

    public function enterData(Request $request)
    {
        $request->validate([

            'projID' => 'regex:/^\d{2}[P]-.*$/',
            'projYear' => 'required',
            'projType' => 'required',
            'projLoc' => 'required'
        ]);

        $data = [

            'ProjectID' => $request['projID'],
            'Year' => $request['projYear'],
            'ProjectType' => $request['projType'],
            'Location' => $request['projLoc']
        ];

        $dataToJSON = file_get_contents(database_path('/projects.json'));

        $dataArr = json_decode($dataToJSON, true);

        $dataArr[] = $data;

        $json = json_encode($dataArr, JSON_PRETTY_PRINT);

        //Adds new data to JSON file

        file_put_contents(database_path('/projects.json'), $json);

        //return back();

        return redirect()->back()->with('success', 'Thanks for submitting!');
    }

}





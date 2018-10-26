@extends('layouts.master')

@section('title')
    Search
@endsection

@section('content')
    <img src='/images/WSP.png' id='logo' alt='WSP Logo'><h1>Geospatial Project Tracker</h1>


    <form method='POST' action='/enter-data'>
        {{ csrf_field() }}

        <p> Enter project information below:</p>
        <fieldset>
            <legend>Please enter a project ID:</legend>
            <label for='projectNum'>Project ID:</label>
            <input type='text' id='projID' name='projID' placeholder='Example: 18P-i18847'>
            <br>
        </fieldset>
        <br>


        <fieldset>
            <legend>Please select a project year:</legend>
            <select name='projYear' id='projYear'>
                <option value='' selected='selected'>Select a Project Year</option>
                <option value='2018'>2018</option>
                <option value='2017'>2017</option>
                <option value='2016'>2016</option>
                <option value='2015'>2015</option>
                <option value='2014'>2014</option>
                <option value='2013'>2013</option>
                <option value='2012'>2012</option>
                <option value='2011'>2011</option>
                <option value='2010'>2010</option>
                <option value='2009'>2009</option>
                <option value='2008'>2008</option>
                <option value='2007'>2007</option>
                <option value='2006'>2006</option>
                <option value='2005'>2005</option>
                <option value='2004'>2004</option>
                <option value='2003'>2003</option>
                <option value='2002'>2002</option>
                <option value='2001'>2001</option>
                <option value='2000'>2000</option>
            </select>
        </fieldset>
        <br>
        <fieldset>
            <legend>Please select all that apply:</legend>
            <input type='radio' name='projType' value='Photogrammetry'>Photogrammetry<br>
            <input type='radio' name='projType' value='Survey'>Survey<br>
            <input type='radio' name='projType' value='GIS'>GIS<br>
            <input type='radio' name='projType' value='Laser Scanning'>Laser Scanning<br>
        </fieldset>
        <br>
        <fieldset>
            <legend>Location:</legend>
            <label for='projLoc'>Project Location:</label>
            <input type='text' id='projLoc' name='projLoc' placeholder='Example: Providence, RI'>

        </fieldset>
        <br>
        <input type='submit' name='save' value='Enter data'>
        <br>
        <br>

    </form>

    <form method='GET' action='/search-process'>

        <fieldset>
            <legend>Search for project information here:</legend>
            <label for='projSearch'>Search by Project ID: </label>
            <input type='text' name='projSearch' placeholder='Example: 18P-i18847' value='{{ old('projSearch') }}'>
            <br>

            @if(count($errors) > 0)
                <ul class='errors'>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </fieldset>
        <br>
        <input type='submit' name='search' value='Search Projects'>
        <br>

    </form>

    @if($projSearch)


        <p>Here are your results:</p>

        @if(count($searchResults) == 0)
            <p>No matches found.</p>
        @else
            @foreach($searchResults as $projectID => $project)
                <div class='projectResults'>
                    <ul class='searchResults'>
                    <li>Project: {{$project['ProjectID']}}</li>
                    <li>Location: {{$project['Location']}}</li>
                    <li>Year: {{$project['Year']}}</li>
                    <li>Type: {{$project['ProjectType']}}</li>
                    </ul>
                </div>

            @endforeach
        @endif

    @endif


@endsection
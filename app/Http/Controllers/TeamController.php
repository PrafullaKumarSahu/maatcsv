<?php

namespace App\Http\Controllers;

use App\Team;
use App\Exports\TeamsExport;
use App\Imports\TeamsImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    private $excel;

    public function __construct(Excel $excel)
    {
        $this->excel = $excel;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::all();
        return view('index', compact('teams'));
    }

    public function import(Request $request)
    {
        if($request->file('imported-file')) {
            // $path = $request->file('imported-file')->getRealPath();

            // dd( $path );
            Excel::import(new TeamsImport, $request->file('imported-file'));
            return redirect('/teams')->with('success', 'All good!');
        }
        
        
        return redirect('/teams')->with('failed', 'Some thing gone wrong!');
    }

    public function export() 
    {
        return Excel::download(new TeamsExport, 'teams.xlsx');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        //
    }
}

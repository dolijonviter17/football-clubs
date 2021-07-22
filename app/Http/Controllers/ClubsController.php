<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Club;
use App\Models\Player;
use App\Models\Stadium;
use DataTables;
class ClubsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(){
        return view('clubs.index');
    }

    public function getClubs()
    {
        $clubs = Club::with('stadium')->select('clubs.*');
        return DataTables::eloquent($clubs)
                ->addColumn('stadium', function (Club $club) {
                    return $club->stadium ? $club->stadium->name : ' ';
                })
                ->addColumn('action', function($row) {
                    $details = '/clubs/detail/' . $row->id;
                    $btn = '<a href="'.$details.'" class="edit btn btn-primary btn-sm">View</a>';
                     return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
    }

    public function detailClub($id){
        $club = Club::find($id);
        $players = Club::find($id)->players()->with('club')->simplePaginate(7);
        return view('clubs.details', compact('players', 'club'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

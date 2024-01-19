<?php

namespace App\Http\Controllers;

use App\Social_team;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AdminTeamSocialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        //

        $input = $request->all();

        Social_team::create($input);

        return back()->with('added', 'Team Social added');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $social = Social_team::findOrFail($id);

        $input = $request->all();

        $social->update($input);

        return back()->with('updated', 'Team Social updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $social = Social_team::findOrFail($id);

        $social->delete();

        return back()->with('deleted', 'Team Social deleted');
    }
}

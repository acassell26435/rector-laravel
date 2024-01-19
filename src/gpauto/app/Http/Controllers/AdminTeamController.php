<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeamCreateRequest;
use App\Http\Requests\TeamUpdateRequest;
use App\Social_team;
use App\Team;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;

class AdminTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $socials = Social_team::with('teams')->get();
        $teams = Team::all();

        return view('admin.team.index', ['teams' => $teams, 'socials' => $socials]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.team.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $teamCreateRequest
     * @return Response
     */
    public function store(TeamCreateRequest $teamCreateRequest)
    {
        //
        $input = $teamCreateRequest->all();

        if ($file = $teamCreateRequest->file('photo')) {

            $name = time() . $file->getClientOriginalName();

            $file->move('images/Teams', $name);

            $input['photo'] = $name;

        }

        $input['dob'] = date('Y/m/d', strtotime((string) $teamCreateRequest->dob));
        $input['join_date'] = date('Y/m/d', strtotime((string) $teamCreateRequest->join_date));

        Team::create($input);

        return redirect('admin/team')->with('added', 'Team Member added');
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

        $team = Team::findOrFail($id);

        return view('admin.team.edit', ['team' => $team]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $teamUpdateRequest
     * @param  int  $id
     * @return Response
     */
    public function update(TeamUpdateRequest $teamUpdateRequest, $id)
    {

        $team = Team::findOrFail($id);

        $input = $teamUpdateRequest->all();

        if ($file = $teamUpdateRequest->file('photo')) {

            $name = time() . $file->getClientOriginalName();

            $file->move('images/teams', $name);

            if ($team->photo) {

                unlink(public_path() . '/images/teams/' . $team->photo);

            }

            $input['photo'] = $name;

        }

        $input['dob'] = date('Y/m/d', strtotime((string) $teamUpdateRequest->dob));
        $input['join_date'] = date('Y/m/d', strtotime((string) $teamUpdateRequest->join_date));

        $team->update($input);

        return redirect('admin/team')->with('updated', 'Team Member Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
        $team = Team::findOrFail($id);

        if ($team->photo) {

            unlink(public_path() . '/images/teams/' . $team->photo);

        }

        $team->delete();

        Session::flash('delete_user', 'User has been deleted');

        return redirect('admin/team')->with('deleted', 'Team Member deleted');
    }
}

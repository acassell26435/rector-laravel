<?php

namespace App\Http\Controllers;

use App\Company_social;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AdminCompanySocialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $socials = Company_social::all();

        return view('admin.company_social.index', ['socials' => $socials]);
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
        $input = $request->all();

        Company_social::create($input);

        return back()->with('added', 'Company social has been added');
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
        $social = Company_social::findOrFail($id);

        $input = $request->all();

        $social->update($input);

        return back()->with('updated', 'Company social has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $social = Company_social::findOrFail($id);

        $social->delete();

        return back()->with('deleted', 'Company social has been deleted');
    }
}

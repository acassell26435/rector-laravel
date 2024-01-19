<?php

namespace App\Http\Controllers;

use App\Washing_plan_include;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AdminWashingIncludeController extends Controller
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
        $input = $request->all();

        Washing_plan_include::create($input);

        return back()->with('added', 'Washing plan includes added');
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
        $plan_include = Washing_plan_include::findOrFail($id);

        $input = $request->all();

        $plan_include->update($input);

        return back()->with('updated', 'Washing plan includes updated');
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
        $plan_include = Washing_plan_include::findOrFail($id);

        $plan_include->delete();

        return back()->with('deleted', 'Washing plan includes deleted');
    }
}

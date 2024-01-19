<?php

namespace App\Http\Controllers;

use App\Vehicle_type;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AdminVehicleTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $vehicle_types = Vehicle_type::all();

        return view('admin.vehicle_type.index', ['vehicle_types' => $vehicle_types]);
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

        Vehicle_type::create($input);

        return back()->with('added', 'Vehicle type added');
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
        $vehicle_type = Vehicle_type::findOrFail($id);

        $input = $request->all();

        $vehicle_type->update($input);

        return back()->with('updated', 'Vehicle type updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $vehicle_type = Vehicle_type::findOrFail($id);

        $vehicle_type->delete();

        return back()->with('deleted', 'Vehicle type deleted');
    }
}

<?php

namespace App\Http\Controllers;

use App\Washing_plan;
use App\Washing_plan_include;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AdminWashingPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $washing_plans = Washing_plan::all();
        $washing_includes = Washing_plan_include::all();

        return view('admin.washing_plan.index', ['washing_plans' => $washing_plans, 'washing_includes' => $washing_includes]);
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

        Washing_plan::create($input);

        return back()->with('added', 'Washing plan added');
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
        //

        $plan = Washing_plan::findOrFail($id);

        $input = $request->all();

        $plan->update($input);

        return back()->with('updated', 'Washing plan updated');
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
        $plan = Washing_plan::findOrFail($id);

        $plan->delete();

        return back()->with('deleted', 'Washing plan deleted');
    }
}

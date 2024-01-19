<?php

namespace App\Http\Controllers;

use App\Payment_mode;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AdminPaymentModeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $modes = Payment_mode::all();

        return view('admin.payment_mode.index', ['modes' => $modes]);
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

        Payment_mode::create($input);

        return back()->with('added', 'Payment mode added');
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
        $mode = Payment_mode::findOrFail($id);

        $input = $request->all();

        $mode->update($input);

        return back()->with('updated', 'Payment mode updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $mode = Payment_mode::findOrFail($id);

        $mode->delete();

        return back()->with('deleted', 'Payment mode deleted');
    }
}

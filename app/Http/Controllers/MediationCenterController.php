<?php

namespace App\Http\Controllers;

use App\MediationCenter;
use Illuminate\Http\Request;

class MediationCenterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $form = MediationCenter::all();
        return response()->json([
            'success' => true,
            'form' => $form
        ],200);
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

        $this->validate($request, [
            'full_name' => 'required|string',
            'email' => 'required|string',
            'phone' => 'required|integer',
            'country' => 'required|string' ,
            'city' => 'required|string',
            'subject' => 'required|string',
            'case_description' => 'string',

        ]);

        $form = new MediationCenter();
        $form ->fill($request->all());
        //dd($form);


        if ($form->save())
            return response()->json([
                'success' => true,
                'form' => $form
            ],200);


        else
            return response()->json([
                'success' => false,
                'message' => 'Sorry, could not be added.'
            ], 500);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MediationCenter  $mediationCenter
     * @return \Illuminate\Http\Response
     */
    public function show(MediationCenter $mediationCenter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MediationCenter  $mediationCenter
     * @return \Illuminate\Http\Response
     */
    public function edit(MediationCenter $mediationCenter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MediationCenter  $mediationCenter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MediationCenter $mediationCenter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MediationCenter  $mediationCenter
     * @return \Illuminate\Http\Response
     */
    public function destroy(MediationCenter $mediationCenter)
    {
        //
    }
}

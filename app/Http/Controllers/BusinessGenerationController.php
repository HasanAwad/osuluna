<?php

namespace App\Http\Controllers;

use App\BusinessGeneration;
use Illuminate\Http\Request;

class BusinessGenerationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $business_generation = BusinessGeneration::all();
        return response()->json([
            'success' => true,
            'bGeneration' => $business_generation
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BusinessGeneration  $businessGeneration
     * @return \Illuminate\Http\Response
     */
    public function show(BusinessGeneration $businessGeneration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BusinessGeneration  $businessGeneration
     * @return \Illuminate\Http\Response
     */
    public function edit(BusinessGeneration $businessGeneration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BusinessGeneration  $businessGeneration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BusinessGeneration $businessGeneration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BusinessGeneration  $businessGeneration
     * @return \Illuminate\Http\Response
     */
    public function destroy(BusinessGeneration $businessGeneration)
    {
        //
    }
}

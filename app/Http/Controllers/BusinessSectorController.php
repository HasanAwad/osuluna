<?php

namespace App\Http\Controllers;

use App\BusinessSector;
use Illuminate\Http\Request;

class BusinessSectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $businessSector = BusinessSector::all();
        return response()->json([
            'success' => true,
            'businessSector' => $businessSector
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
     * @param  \App\BusinessSector  $businessSector
     * @return \Illuminate\Http\Response
     */
    public function show(BusinessSector $businessSector)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BusinessSector  $businessSector
     * @return \Illuminate\Http\Response
     */
    public function edit(BusinessSector $businessSector)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BusinessSector  $businessSector
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BusinessSector $businessSector)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BusinessSector  $businessSector
     * @return \Illuminate\Http\Response
     */
    public function destroy(BusinessSector $businessSector)
    {
        //
    }
}

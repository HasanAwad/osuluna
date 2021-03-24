<?php

namespace App\Http\Controllers;

use App\TypeOfIndustry;
use Illuminate\Http\Request;

class TypeOfIndustryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $industry = TypeOfIndustry::all();
        return response()->json([
            'success' => true,
            'industry' => $industry
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
     * @param  \App\TypeOfIndustry  $typeOfIndustry
     * @return \Illuminate\Http\Response
     */
    public function show(TypeOfIndustry $typeOfIndustry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TypeOfIndustry  $typeOfIndustry
     * @return \Illuminate\Http\Response
     */
    public function edit(TypeOfIndustry $typeOfIndustry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TypeOfIndustry  $typeOfIndustry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TypeOfIndustry $typeOfIndustry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TypeOfIndustry  $typeOfIndustry
     * @return \Illuminate\Http\Response
     */
    public function destroy(TypeOfIndustry $typeOfIndustry)
    {
        //
    }
}

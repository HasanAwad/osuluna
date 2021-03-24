<?php

namespace App\Http\Controllers;

use App\BusinessLegalForm;
use Illuminate\Http\Request;

class BusinessLegalFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $businessLegal = BusinessLegalForm::all();
        return response()->json([
            'success' => true,
            'businessLegal' => $businessLegal
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
     * @param  \App\BusinessLegalForm  $businessLegalForm
     * @return \Illuminate\Http\Response
     */
    public function show(BusinessLegalForm $businessLegalForm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BusinessLegalForm  $businessLegalForm
     * @return \Illuminate\Http\Response
     */
    public function edit(BusinessLegalForm $businessLegalForm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BusinessLegalForm  $businessLegalForm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BusinessLegalForm $businessLegalForm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BusinessLegalForm  $businessLegalForm
     * @return \Illuminate\Http\Response
     */
    public function destroy(BusinessLegalForm $businessLegalForm)
    {
        //
    }
}

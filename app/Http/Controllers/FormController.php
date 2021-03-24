<?php

namespace App\Http\Controllers;

use App\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $form = Form::all();
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
            'family_business_name' => 'required|string',
            'applicant_full_name' => 'required|string',
            'applicant_role' => 'required|in:family,business',
            'industry_id' => 'required|integer|between:1,4' ,
            'business_sector_id' => 'required|integer|between:1,19',
            'business_generation_id' => 'required|integer|between:1,5',
            'business_legal_form_id' => 'required|integer|between:1,6',
            'business_year_establishment' => 'required' ,
            'nb_family_members' => 'required',
            'phone_number' => 'required',
            'full_address' => 'required|string',
            'email' => 'required|email',
        ]);

        $form = new Form();
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
     * @param  \App\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function show(Form $form)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function edit(Form $form)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Form $form)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form $form)
    {
        //
    }
}

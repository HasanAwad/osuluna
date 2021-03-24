<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contacts;
class ContactController extends Controller
{



public function index()
{
    if(auth()->guard('admins')->check()) {
        $contacts = Contacts::all();
        return response()->json([
            'success' => true,
            'contact' => $contacts
        ],200);
    }else
        return response()->json([
            'success' => false,
            'message' => 'Sorry, could not be show bc not admin.'
        ], 500);
}


/**
* @param Request $request
* @return \Illuminate\Http\JsonResponse
* @throws \Illuminate\Validation\ValidationException
*/
public function store(Request $request)
{


$this->validate($request, [
    'name' => 'required',
    'email' => 'required',
    'subject' => 'required' ,
    'message' => 'required'
]);

  $contacts = new Contacts();
  $contacts ->fill($request->all());



  if ($contacts->save())
      return response()->json([
          'success' => true,
          'contact' => $contacts
      ],200);


  else
      return response()->json([
          'success' => false,
          'message' => 'Sorry, could not be added.'
      ], 500);


}
}

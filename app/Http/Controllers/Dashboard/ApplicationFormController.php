<?php

namespace App\Http\Controllers\Dashboard;

use App\Form;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class ApplicationFormController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    /**
     * List all Forms
     * @return View
     */
    public function index() : View
    {
        if(!auth()->guard('dashboard')->check()){
            abort(403);
        }
        $forms = Form::orderby('created_at')->paginate(15);
        return view('back.forms.index', compact('forms'));

    }

    /**
     * Display Specific Form
     * @param $id
     * @return View
     */
    public function show($id) : View
    {
        if(!auth()->guard('dashboard')->check()){
            abort(403);
        }
        $form = Form::where('id', $id)->first();
        return view('back.forms.show', compact('form'));
    }

}

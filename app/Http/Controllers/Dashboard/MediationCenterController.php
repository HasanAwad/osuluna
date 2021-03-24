<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\MediationCenter;
use Illuminate\View\View;

class MediationCenterController extends Controller
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
        $forms = MediationCenter::orderby('created_at')->paginate(15);
        return view('back.mediation.index', compact('forms'));

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
        $form = MediationCenter::where('id', $id)->first();
        return view('back.mediation.show', compact('form'));
    }

}

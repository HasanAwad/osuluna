<?php

namespace App\Http\Controllers\Dashboard;

use App\Contacts;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class ContactUsController extends Controller
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
        $forms = Contacts::orderby('created_at')->paginate(15);
        return view('back.contact_us.index', compact('forms'));

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
        $form = Contacts::where('id', $id)->first();
        return view('back.contact_us.show', compact('form'));
    }

}

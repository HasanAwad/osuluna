<?php

namespace App\Http\Controllers\Dashboard;

use App\Admin;
use App\Http\Controllers\Controller;
use App\Http\Repositories\AdminRepository;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AdminController extends Controller
{

    private $repository;

    /**
     * AdminController constructor.
     * @param AdminRepository $repository
     */
    public function __construct(AdminRepository $repository)
    {
        $this->repository = $repository;
        //$this->middleware('admin');
    }

    /**
     * List all Admins
     * @return View
     */
    public function index() : View
    {
        if(!auth()->guard('dashboard')->check()){
            abort(403);
        }
        $admins = Admin::orderby('created_at')->paginate(15);
        return view('back.admins.index', compact('admins'));

    }

    /**
     * Show Admin Creation Form
     * @return View
     */
    public function create() : View
    {
        if(!auth()->guard('dashboard')->check()){
            abort(403);
        }
        return view('back.admins.create');
    }

    /**
     * Store Admin in database
     * @param StoreAdminRequest $request
     * @return RedirectResponse
     */
    public function store(StoreAdminRequest $request) : RedirectResponse
    {
        if(!auth()->guard('dashboard')->check()){
            abort(403);
        }
        if($this->repository->store($request)){
            flash('Admin successfully saved.')->success();
            return redirect()->route('admins.index');
        }

        flash('Unable to save admin.')->error();
        return back();
    }

    /**
     * Show Admin Edit Form
     * @param $id
     * @return View
     */
    public function edit($id) : View
    {
        if(!auth()->guard('dashboard')->check()){
            abort(403);
        }
        $admin = Admin::where('id', $id)->first();
        return view('back.admins.edit', compact('admin'));
    }

    /**
     * Update Admin in database
     * @param UpdateAdminRequest $request
     * @param $id
     * @return RedirectResponse
     */
    public function update(UpdateAdminRequest $request, $id) : RedirectResponse
    {
        if(!auth()->guard('dashboard')->check()){
            abort(403);
        }
        if($this->repository->update($request, $id)){
            flash('Admin successfully updated.')->success();
            return redirect()->route('admins.edit', $id);
        }

        flash('Unable to update admin.')->error();
        return back();
    }

    /**
     * @param $id
     * @return RedirectResponse
     */
    public function destroy($id) : RedirectResponse
    {
        if(!auth()->guard('dashboard')->check()){
            abort(403);
        }
        if($this->repository->destroy($id)){
            flash('Admin successfully deleted.')->success();
            return redirect()->route('admins.index');
        }

        flash('Unable to delete admin.')->error();
        return back();
    }
}

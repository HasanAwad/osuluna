<?php

namespace App\Http\Controllers\Dashboard;

use App\Events;
use App\Http\Controllers\Controller;
use App\Http\Repositories\EventRepository;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class EventController extends Controller
{

    private $repository;

    /**
     * EventController constructor.
     * @param EventRepository $repository
     */
    public function __construct(EventRepository $repository)
    {
        $this->repository = $repository;

        //$this->middleware('auth');


    }

    /**
     * List all Events
     * @return View
     */
    public function index() : View
    {
        if(!auth()->guard('dashboard')->check()){
            abort(403);
        }
        $events = Events::orderby('created_at')->paginate(15);
        return view('back.events.index', compact('events'));

    }

    /**
     * Show Event Creation Form
     * @return View
     */
    public function create() : View
    {
        if(!auth()->guard('dashboard')->check()){
            abort(403);
        }
        return view('back.events.create');
    }

    /**
     * Store Event in database
     * @param StoreEventRequest $request
     * @return RedirectResponse
     */
    public function store(StoreEventRequest $request) : RedirectResponse
    {
        if(!auth()->guard('dashboard')->check()){
            abort(403);
        }
        if($this->repository->store($request)){
            flash('Event successfully saved.')->success();
            return redirect()->route('events.index');
        }

        flash('Unable to save event.')->error();
        return back();
    }

    /**
     * Show Event Edit Form
     * @param $id
     * @return View
     */
    public function edit($id) : View
    {
        if(!auth()->guard('dashboard')->check()){
            abort(403);
        }
        $event = Events::where('id', $id)->first();
        return view('back.events.edit', compact('event'));
    }

    /**
     * Update Event in database
     * @param UpdateEventRequest $request
     * @param $id
     * @return RedirectResponse
     */
    public function update(UpdateEventRequest $request, $id) : RedirectResponse
    {
        if(!auth()->guard('dashboard')->check()){
            abort(403);
        }
        if($this->repository->update($request, $id)){
            flash('Event successfully updated.')->success();
            return redirect()->route('events.edit', $id);
        }

        flash('Unable to update event.')->error();
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
            flash('Event successfully deleted.')->success();
            return redirect()->route('events.index');
        }

        flash('Unable to delete event.')->error();
        return back();
    }
}

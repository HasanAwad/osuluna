<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events;
class EventController extends Controller
{


public function index()
{

    $events = Events::all();

        return response()->json([
            'success' => true,
            'events' => $events
        ],200);

}
public function show(Request $request, $id)
{
    $events = Events::find($id);
    if(!$events){
        return response()->json([
            'success' => false,
            'message' => 'Sorry, event with id ' . $id . ' cannot be found.'
        ], 400);
    }
    return response()->json([
        'success' => true,
        'event' => $events
    ],200);


}


/**
* @param Request $request
* @return \Illuminate\Http\JsonResponse
* @throws \Illuminate\Validation\ValidationException
*/
public function store(Request $request)
{
  if(auth()->guard('admins')->check()) {
        $this->validate($request, [
        'image' => 'required|file|image|max:1000',
        'title' => 'required',
        'description' => 'required' ,
        'summary' => 'required',
        'start_date' => 'required' ,
        'end_date' => 'required'
        ]);

        $events = new Events();

        $events->fill($request->all());
        $events->image = $request->image->hashName();
        $this->storeImage($events);



        //dd($events);



        if ($events->save())
            return response()->json([
                'success' => true,
                'event' => $events
            ],200);


        else
            return response()->json([
                'success' => false,
                'message' => 'Sorry, could not be added.'
            ], 500);

    }else
        return response()->json([
            'success' => false,
            'message' => 'Sorry, could not be added because not admin.'
        ], 500);


}
/**
 * @param Request $request
 * @param $id
 * @return \Illuminate\Http\JsonResponse
 */
public function update(Request $request, $id)
{
    if(auth()->guard('admins')->check()) {
        $events = Events::find($id);

        if (!$events) {
            return response()->json([
                'success' => false,
                'message' => 'Sorry, event with id ' . $id . ' cannot be found.'
            ], 400);
        }
        //dd(is_null($request->title) ? $events->title :$request->title);
        $events->image = is_null($request->image) ? $events->image :$request->image->hashName();
        $events->title = is_null($request->title) ? $events->title :$request->title;
        $events->description = is_null($request->description) ? $events->description :$request->description;
        $events->summary =is_null($request->summary) ? $events->summary :$request->summary;
        $events->start_date = is_null($request->start_date) ? $events->start_date :$request->start_date;
        $events->end_date = is_null($request->end_date) ? $events->end_date :$request->end_date;
        //$events->fill($request->all());
        $updated = $events->save();
        //$this->storeImage($events);
        //dd($events);

        if ($updated) {
            return response()->json([
                'success' => true,
                'event' => $events
            ],200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Sorry, event could not be updated.'
            ], 500);
        }
    }else
        return response()->json([
            'success' => false,
            'message' => 'Sorry, could not be updated because not admin.'
        ], 500);

}



/**
 * @param $id
 * @return \Illuminate\Http\JsonResponse
 */
public function destroy($id)
{

    if(auth()->guard('admins')->check()) {
        $events = Events::find($id);


        if (!$events) {
            return response()->json([
                'success' => false,
                'message' => 'Sorry, event with id ' . $id . ' cannot be found.'
            ], 400);
        }

        if ($events->delete()) {
            return response()->json([
                'success' => true
            ],200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'event could not be deleted.'
            ], 500);
        }
    }else
        return response()->json([
            'success' => false,
            'message' => 'Sorry, could not be deleted because not admin.'
        ], 500);

}



private function storeImage($events){

    if(request()->has('image')){
        $events->update([
            'image' => request()->image->store('events',['disk' => 'events']),
        ]);
    }

}
}

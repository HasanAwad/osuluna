<?php


namespace App\Http\Repositories;

use App\Events;
use App\Http\Repositories\Interfaces\RepositoryInterface;
use Illuminate\Foundation\Http\FormRequest;

class EventRepository implements RepositoryInterface
{

    /**
     * Store Resource
     * @param FormRequest $request
     * @return bool
     */
    public function store($request) : bool
    {
        $event = new Events();
        $event->fill($request->all());

        if(isset($event->image)) {
            $event->image = $request->image->hashName();
            $this->storeImage($event);
        }

        if($event->save()){
            return true;
        }

        return false;
    }

    /**
     * Update Resource
     * @param FormRequest $request
     * @param $id
     * @return bool
     */
    public function update($request, $id) : bool
    {
        $event = Events::findOrFail($id);
        if($event->update($request->all())){
            if(isset($event->image)) {
                $event->image = $request->image->hashName();
                $this->storeImage($event);
            }
            return true;
        }

        return false;
    }

    /**
     * Delete Resource
     * @param $id
     * @return bool
     */
    public function destroy($id) : bool
    {
        if (Events::where('id', $id)->delete()) {
            return true;
        }
        return false;
    }

    /**
     * Upload Image
     * @param $event
     * @return void
     */
    private function storeImage($event)
    {
        if(request()->has('image')){
            $event->update([
                'image' => request()->image->store('events',['disk' => 'events']),
            ]);
        }

    }
}

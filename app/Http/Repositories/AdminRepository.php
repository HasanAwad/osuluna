<?php


namespace App\Http\Repositories;


use App\Admin;
use App\Http\Repositories\Interfaces\RepositoryInterface;
use Illuminate\Foundation\Http\FormRequest;

class AdminRepository implements RepositoryInterface
{

    /**
     * Store Resource
     * @param FormRequest $request
     * @return bool
     */
    public function store($request)
    {
        $inputs = $request->all();
        $inputs['role_id'] = 0;
        $inputs['password'] = bcrypt($inputs['password']);

        $admin = new Admin();
        $admin->fill($inputs);
        if($admin->save()){
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
    public function update($request, $id)
    {
        $admin = Admin::findOrFail($id);
        if($admin->update($request->all())){
            return true;
        }

        return false;
    }

    /**
     * Delete Resource
     * @param $id
     * @return bool
     */
    public function destroy($id)
    {
        if (Admin::where('id', $id)->delete()) {
            return true;
        }
        return false;
    }
}

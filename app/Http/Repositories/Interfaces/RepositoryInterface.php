<?php


namespace App\Http\Repositories\Interfaces;

use Illuminate\Foundation\Http\FormRequest;

interface RepositoryInterface
{

    /**
     * Store Resource
     * @param FormRequest $request
     * @return bool
     */
    public function store(FormRequest $request);

    /**
     * Update Resource
     * @param FormRequest $request
     * @param $id
     * @return bool
     */
    public function update(FormRequest $request, $id);

    /**
     * Delete Resource
     * @param $id
     * @return bool
     */
    public function destroy($id);

}

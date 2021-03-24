<?php


namespace App\Http\Repositories;


use App\Articles;
use App\Http\Repositories\Interfaces\RepositoryInterface;
use Illuminate\Foundation\Http\FormRequest;

class ArticleRepository implements RepositoryInterface
{

    /**
     * Store Resource
     * @param FormRequest $request
     * @return bool
     */
    public function store($request)
    {
        $article = new Articles();
        $article->fill($request->all());
        $article->image = $request->image->hashName();
        $this->storeImage($article);
        if($article->save()){
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
        $article = Articles::findOrFail($id);
        if($article->update($request->all())){
            $this->storeImage($article);
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
        if (Articles::where('id', $id)->delete()) {
            return true;
        }
        return false;
    }

    /**
     * Upload Image
     * @param $article
     * @return void
     */
    private function storeImage($article){

        if(request()->has('image')){
            $article->update([
                'image' => request()->image->store('articles',['disk' => 'articles']),
            ]);
        }

    }
}

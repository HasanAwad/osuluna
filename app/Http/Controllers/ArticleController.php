<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles;
class ArticleController extends Controller
{


    public function index()
    {
        $articles = Articles::all();
        return response()->json([
            'success' => true,
            'articles' => $articles
        ],200);
    }


    public function show(Request $request, $id)
{
    $articles = Articles::find($id);
    if(!$articles){
        return response()->json([
            'success' => false,
            'message' => 'Sorry, event with id ' . $id . ' cannot be found.'
        ], 400);
    }
    return response()->json([
        'success' => true,
        'article' => $articles
    ],200);


}
    /**
    * @param Request $request
    * @return \Illuminate\Http\JsonResponse
    * @throws \Illuminate\Validation\ValidationException
    */
    public function store(Request $request)
    {

         if ($files = $request->url('file')) {

            //store file into document folder
            $file = $request->url;
            $file->store('public/tasks');
            //dd($request->url->hashName());
            //store your file into database
            $task = new Task();
            $task->url = $file;
            $task->name = "test";

            $task->save();

            return response()->json([
                "success" => true,
                "message" => "File successfully uploaded",
                "file" => $file
            ]);

        }

        if(auth()->guard('admins')->check()) {
            $this->validate($request, [
            'image' => 'file|max:5000',
            'title' => 'required',
            'title_arabic' => 'required',
            'text' => 'required' ,
            'text_arabic' => 'required'
            ]);

            $articles = new Articles();

            $articles->fill($request->all());
            $articles->image = $request->image->hashName();
            // $articles->image = $request->image;
            // dd($articles->image);
            $this->storeImage($articles);




            if ($articles->save())
                return response()->json([
                'success' => true,
                'article' => $articles
                ],200);


            else {
                return response()->json([
                    'success' => false,
                    'message' => 'Sorry, could not be added.'
                ], 500);
            }

        }
        else return response()->json([
            'success' => false,
            'message' => 'Sorry, could not be added bc not admin.'
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
        $articles = Articles::find($id);


        if (!$articles) {
            return response()->json([
                'success' => false,
                'message' => 'Sorry, article with id ' . $id . ' cannot be found.'
            ], 400);
        }

        $articles->image = is_null($request->image) ? $articles->image :$request->image->hashName();
        $articles->title = is_null($request->title) ? $articles->title :$request->title;
        $articles->text = is_null($request->text) ? $articles->text :$request->text;
        $updated = $articles->save();
        $this->storeImage($articles);
        //dd($articles);

        if ($updated) {
            return response()->json([
                'success' => true
            ],200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Sorry, article could not be updated.'
            ], 500);
        }
  }else
    return response()->json([
        'success' => false,
        'message' => 'Sorry, article could not be updated bc not admin.'
    ], 500);

}



    /**
 * @param $id
 * @return \Illuminate\Http\JsonResponse
 */
public function destroy($id)
{
    if(auth()->guard('admins')->check()) {
        $articles = Articles::find($id);


        if (!$articles) {
            return response()->json([
                'success' => false,
                'message' => 'Sorry, article with id ' . $id . ' cannot be found.'
            ], 400);
        }

        if ($articles->delete()) {
            return response()->json([
                'success' => true
            ],200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'article could not be deleted.'
            ], 500);
        }
    }else
    return response()->json([
        'success' => false,
        'message' => 'article could not be deleted bc not admin'
    ], 500);

}


        /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */


    private function storeImage($articles){

        if(request()->has('image')){
            $articles->update([
                'image' => request()->image->store('articles',['disk' => 'articles']),
            ]);
        }

    }
}

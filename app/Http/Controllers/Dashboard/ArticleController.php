<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Repositories\ArticleRepository;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use App\Articles;
use Illuminate\View\View;

class ArticleController extends Controller
{

    private $repository;



    /**
     * ArticleController constructor.
     * @param ArticleRepository $repository
     */
    public function __construct(ArticleRepository $repository)
    {
        $this->repository = $repository;
        //$this->middleware('auth');
    }

    /**
     * List all Articles
     * @return View
     */
    public function index() : View
    {
        if(!auth()->guard('dashboard')->check()){
            abort(403);
        }
        $articles = Articles::orderby('created_at')->paginate(15);
        return view('back.articles.index', compact('articles'));

    }

    /**
     * Show Article Creation Form
     * @return View
     */
    public function create() : View
    {
        if(!auth()->guard('dashboard')->check()){
            abort(403);
        }
        return view('back.articles.create');
    }

    /**
     * Store Article in database
     * @param StoreArticleRequest $request
     * @return RedirectResponse
     */
    public function store(StoreArticleRequest $request) : RedirectResponse
    {
        if(!auth()->guard('dashboard')->check()){
            abort(403);
        }
        if($this->repository->store($request)){
            flash('Article successfully saved.')->success();
            return redirect()->route('articles.index');
        }

        flash('Unable to save article.')->error();
        return back();
    }

    /**
     * Show Article Edit Form
     * @param $id
     * @return View
     */
    public function edit($id) : View
    {
        if(!auth()->guard('dashboard')->check()){
            abort(403);
        }
        $article = Articles::where('id', $id)->first();
        return view('back.articles.edit', compact('article'));
    }

    /**
     * Update Article in database
     * @param UpdateArticleRequest $request
     * @param $id
     * @return RedirectResponse
     */
    public function update(UpdateArticleRequest $request, $id) : RedirectResponse
    {
        if(!auth()->guard('dashboard')->check()){
            abort(403);
        }
        if($this->repository->update($request, $id)){
            flash('Article successfully updated.')->success();
            return redirect()->route('articles.edit', $id);
        }

        flash('Unable to update article.')->error();
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
            flash('Article successfully deleted.')->success();
            return redirect()->route('articles.index');
        }

        flash('Unable to delete article.')->error();
        return back();
    }
}

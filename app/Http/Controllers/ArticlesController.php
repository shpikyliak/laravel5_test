<?php

namespace App\Http\Controllers;

use App\Article;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $articles = Article::orderBy('id','desc')->get();

        return view('articles.index', compact('articles'));
    }

    public function show(Article $article)
    {
        //$article = Article::findOrFail($id);
        return view('articles.show', compact('article'));
    }

    public function create()
    {
        return view('articles.new');
    }
    public  function store(\Illuminate\Http\Request $request)
    {

        $this->validate($request, ['name'=>'required', 'text'=>'required']);
        $input = Request::all();
        $input['date'] = Carbon::now();
        $article = new Article($input);
        Auth::user()->articles()->save($article );
        return redirect('articles');
    }
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.edit', compact('article'));
    }
    public function update($id, \Illuminate\Http\Request $request)
    {
        $this->validate($request, ['name'=>'required', 'text'=>'required']);
        $article = Article::findOrFail($id);
        $article->update($request->all());

        return redirect('articles');
    }


}

<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Categorie;
use App\Models\User;
use App\Notifications\ArticleCreatedNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = auth()->user();
        $articles = $user->articles;

        return view('article.index', compact('articles'));
    }

    public function create()
    {
        return view('article.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'titre' => 'required',
            'contenu' => 'required',
            'categorie' => 'required'
        ]);
        $categorie = Categorie::find($request->categorie);
        $user = auth()->user();

        $article = new Article([
            'titre' => $request->titre,
            'contenu' => $request->contenu
        ]);

        $article->categorie()->associate($categorie);
        $article->user()->associate($user);
        $article->save();

        Notification::send(
            User::query()->where('id', '<>', $user->id)->get(),
            new ArticleCreatedNotification($article)
        );

        return redirect()->route('article.index');
    }

    public function read(Article $article)
    {
        return view('article.read', compact('article'));
    }

    public function destroy(Article $article)
    {
        $article->delete();

        return redirect()->route('home')->with('success', 'Article supprimé avec success');
    }
}

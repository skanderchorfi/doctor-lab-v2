<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RechercheController extends Controller
{
    public function index(Request $request) {
        $auteur = $request->auteur;
        $articles = Article::with('user')
            ->get()
            ->filter(function($a) use($auteur) {
                return $a->user->name == $auteur;
            });
        $recommendations = DB::connection('look4care')->table('recommandations')->limit(5)->get();

        return view('dashboard', compact('articles', 'recommendations'));
    }
}

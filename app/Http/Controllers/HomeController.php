<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $articles = Article::query()->orderByDesc('created_at')->limit(5)->get();
        $recommendations = DB::connection('look4care')->table('recommandations')->limit(5)->get();

        return view('dashboard', compact('articles', 'recommendations'));
    }
}

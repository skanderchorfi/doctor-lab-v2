<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RecommendationController extends Controller
{
    public function index()
    {
        $recommendations = DB::connection('look4care')
            ->table('recommandations')
            ->paginate(10);

        return view('recommendation.index', compact('recommendations'));
    }
}

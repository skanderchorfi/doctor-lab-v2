<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $categories = Categorie::all();

        return view('categorie.index', compact('categories'));
    }

    public function create()
    {
        return view('categorie.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nom' => 'required'
        ]);

        Categorie::create([
            'nom' => $request->nom
        ]);

        return redirect()->route('home');
    }

    public function destroy(Categorie $categorie)
    {
        $categorie->delete();

        return redirect()->route('categorie.index');
    }
}

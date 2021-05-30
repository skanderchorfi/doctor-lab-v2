<?php


namespace App\Http\Controllers;


use App\Models\Produit;

class ProduitController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $produits = Produit::query()->paginate(5);

        return view('produit.index', compact('produits'));
    }

    public function type(string $type)
    {
        $produits = Produit::query()->where('type', '=', $type)->get();

        return view('produit.index', compact('produits'));
    }

}

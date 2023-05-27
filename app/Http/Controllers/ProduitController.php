<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $produits = Produit::all();
        return view('Produit.index' , compact('produits'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Produit.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $produit = new Produit() ;
        $produit->nom = $request->nom ;
        $produit->price = $request->price ;
        $produit->quantite = $request->quantite ;
        $produit->description = $request->description ;
        $produit->save();

        return redirect()->route('produits.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Produit $produit)
    {
        //
        $produit->all();
        return view('Produit.show', compact('produit'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produit $produit)
    {
        //
        $produit->all();
        return view('Produit.edit', compact('produit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produit $produit)
    {
        //
        $produit->nom = $request->nom;
        $produit->price = $request->price;
        $produit->quantite = $request->quantite;
        $produit->description = $request->description;
        $produit->update();
        return redirect()->route('produits.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produit $produit)
    {
        //
        $produit->delete();
        return redirect()->route('produits.index');
    }
}

@extends('layout')
@section('title', 'Produit Info')
@section('content')
    <h1>{{ $produit->nom }}</h1>
    <p>Price: {{ $produit->price }}</p>
    <p>Quantity: {{ $produit->quantite }}</p>
    <p>Description: {{ $produit->description }}</p>

    <a href="{{ route('produits.edit', $produit) }}" class="btn btn-primary">Edit</a>
@endsection

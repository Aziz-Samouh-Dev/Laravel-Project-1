@extends('layout')

@section('title', 'Edit Produit')

@section('content')

    <form action="{{ route('produits.update', $produit) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nom" class="form-label">Name</label>
            <input type="text" class="form-control" id="nom" name="nom" value="{{ $produit->nom }}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ $produit->price }}">
        </div>
        <div class="mb-3">
            <label for="quantite" class="form-label">Quantite</label>
            <input type="number" class="form-control" id="quantite" name="quantite" value="{{ $produit->quantite }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" style="height: 100px">{{ $produit->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-outline-primary">Update</button>
    </form>
@endsection

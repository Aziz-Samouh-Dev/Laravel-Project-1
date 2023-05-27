@extends('layout')

@section('title', 'Create Produit')

@section('content')

    <form action="{{ route('produits.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="nom" class="form-label">Name</label>
            <input type="text" class="form-control" id="nom" name="nom" >
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price" >
        </div>
        <div class="mb-3">
            <label for="quantite" class="form-label">Quantite</label>
            <input type="number" class="form-control" id="quantite" name="quantite" >
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" style="height: 100px"></textarea>
        </div>
        <button type="submit" class="btn btn-outline-primary">Update</button>
    </form>
@endsection

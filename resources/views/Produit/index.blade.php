@extends('layout')

@section('title', 'Produits')

@section('content')


    <div class="my-4 d-flex justify-content-between">

        <a href="{{ route('produits.create') }}">
            <button type="button" class="btn btn-success">
                Create Produit
            </button>
        </a>


        <form class="d-flex" role="search">
            <input class="form-control me-2" id="search" name="search" type="search" placeholder="Search" aria-label="Search">
        </form>
    </div>


    <table  class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Quantite</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody id="table">

            @foreach ($produits as $produit)
                <tr>
                    <th scope="row">{{ $produit->id }}</th>
                    <td>{{ $produit->nom }}</td>
                    <td>{{ $produit->price }}</td>
                    <td>{{ $produit->quantite }}</td>
                    <td class="d-flex">
                        <a href="{{ route('produits.show', $produit) }}" class="px-1">
                            <button type="button" class="btn btn-success">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-eye-fill" viewBox="0 0 16 16">
                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                    <path
                                        d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                </svg>
                            </button>
                        </a>
                        <a href="{{ route('produits.edit', $produit) }}" class="px-1">
                            <button type="button" class="btn btn-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-pen" viewBox="0 0 16 16">
                                    <path
                                        d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                                </svg>
                            </button>
                        </a>

                        <form action="{{ route('produits.destroy', $produit) }}" method="POST" class="px-1">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Confirmer la suppression!')">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-trash" viewBox="0 0 16 16">
                                    <path
                                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                    <path
                                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                                </svg>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <script>
        // Get the input element and table
        const searchInput = document.getElementById('search');
        const produitTable = document.getElementById('table');

        // Add event listener for input change
        searchInput.addEventListener('input', function() {
            const searchValue = searchInput.value.toLowerCase();
            const rows = produitTable.getElementsByTagName('tr');

            // Iterate over the table rows and show/hide based on search value
            for (let i = 0; i < rows.length; i++) {
                const cells = rows[i].getElementsByTagName('td');
                let found = false;

                for (let j = 0; j < cells.length; j++) {
                    const cellValue = cells[j].innerText.toLowerCase();
                    if (cellValue.includes(searchValue)) {
                        found = true;
                        break;
                    }
                }

                rows[i].style.display = found ? '' : 'none';
            }
        });
    </script>

@endsection

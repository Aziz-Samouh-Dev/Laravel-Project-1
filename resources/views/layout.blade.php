<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="layout d-flex" style="height:100vh">
        <div class="bg-dark d-block  " style="width: 300px">
            <div class="my-4 ">
                <h1 class="text-white text-center text-bold">Admin</h1>
            </div>
            <ul class="navbar-nav text-white px-4 d-block ">
                <div class="">

                    <li class="">
                        <a class="nav-link active" aria-current="page" href="{{ route('produits.index') }}">
                            <button type="button" class="btn btn-dark w-100">Produits</button>
                        </a>
                    </li>
                    <li class="">
                        <a class="nav-link active" aria-current="page" href="{{ route('agents.index') }}">
                            <button type="button" class="btn btn-dark w-100">Agents</button>
                        </a>
                    </li>
                </div>


                <li class="">
                    <a class="nav-link active" aria-current="page" href="">
                        <button type="button" class="btn btn-dark w-100">Logout</button>
                    </a>
                </li>
            </ul>
        </div>
        <div class="content bg-light" style="width: 100%">

            <div class="p-4">
                <div class="card">
                    <div class="card-header">
                        <h1>@yield('title')</h1>
                    </div>
                    <div class="card-body">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>

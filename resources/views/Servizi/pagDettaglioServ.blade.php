<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halo Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">


    {{-- google font titoli --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&display=swap" rel="stylesheet">


    {{-- google font testi --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">


    {{-- icons Bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">


    {{-- css custom --}}

    <link rel="stylesheet" href="style.css">


</head>

<body>


    {{-- inizio navbar --}}

    <nav class="navbar navbar-expand-lg grigio fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="/media/logo - azzurro.png" alt="logo sito" class="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Homepage</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('people') }}">Protagonisti</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('service') }}">Servizi</a>
                    </li>
                </ul>
            </div>

            {{-- div invisibile per centrare i nav-link --}}
            <div class="logo logo-1"></div>

        </div>
    </nav>

    {{-- fine navbar --}}


    {{-- header --}}

    <header class="container-fluid box1">

        <div class="row vh-100 align-items-center header ">

            <div class="col-12">

                <div class="container box2">
                    <div class="row">

                        <div class="col-12">
                            <h1 class="display-2 text-center text-azzurro1 titolo1">IL CODICE DEGLI SPARTAN</h1>
                            <h2 class="text-center text-arancio titolo2">Storia, lore e segreti dell’universo Halo</h2>
                        </div>

                    </div>
                </div>




            </div>

        </div>

    </header>

    {{-- fine header --}}


    {{-- section --}}

    <section class="container-fluid azzurro box3 sect-servizi">

        <h3 class="text-center mb-5">Servizo dettaglio </h3>

        <div class="row">

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim tempora officia, delectus similique quo maxime quae iusto dolores recusandae laborum ducimus veniam possimus deserunt vel modi quod? Deleniti, nostrum quas.</p>


        </div>



    </section>

    {{-- fine section --}}


    {{-- inizio footer --}}

    <footer class="container-fluid box6">

        <div class="row h-100">

            <div class="col-12 col-md-10 box7 mt-5">
                <h4>INFORMAZIONI</h4>
                <p>Halo Blog è un progetto di David Paparo</p>

            </div>

            <div class="col-12 col-md-2 box8 mt-5">
                <h4>SOCIAL</h4>
                <i class="bi bi-twitch d-block fs-1"></i>
                <i class="bi bi-youtube d-block fs-1"></i>
                <i class="bi bi-facebook d-block fs-1"></i>


            </div>

        </div>

    </footer>

    {{-- fine footer --}}











    {{-- JS bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>

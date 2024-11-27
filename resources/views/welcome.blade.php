<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <!-- bootstrap-icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
        <title>Moneo</title>
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-md p-3">
                <div class="container-fluid d-flex">

                    <a href="/" class="navbar-brand">
                        <img src="/img/header-logo.png" width="120" height="30">
                    </a>

                    <div class="d-flex order-md-3">
                        <ul class="navbar-nav d-flex flex-row gap-2 gap-md-0 me-3 me-md-0">
                            <li class="nav-item"><a href="/register" class="btn text-dark">Register</a></li>
                            <li class="nav-item"><a href="/login" class="btn text-light" style="background-color: #D99F59;">Log in</a></li>                  
                        </ul>
                        <button class="navbar-toggler p-0 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-links" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="bi bi-list h2"></span>
                        </button>
                    </div>
                    
                    <div class="navbar-collapse collapse" id="navbar-links">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link btn btn-hover-line" href="#">About</a></li>
                            <li class="nav-item"><a class="nav-link btn btn-hover-line" href="#">Documentation</a></li>
                            <li class="nav-item"><a class="nav-link btn btn-hover-line" href="#">Features</a></li>
                        </ul>
                    </div>

                    
                </div>   
            </nav>
        </header>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
        crossorigin="anonymous"></script>
    </body>
</html>

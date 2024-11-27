<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    
    <!-- bootstrap-icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>@yield('title')</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-md bg-dark">
            <div class="container-fluid">
                <a href="/" class="navbar-brand"><img src="/img/logo-no-bg.png" width="40" height="40"></a>

                <div class="ms-0 d-flex align-items-center order-md-3">
                    
                    <button class="navbar-toggler p-0 me-3" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-links">
                        <span class="text-light"><i class="bi bi-list"></i></span>
                    </button>
                    
                    <div class="navbar-collapse collapse navbar-links">
                        <a href="/profile">
                            <img src="/img/logo.png" class="rounded-circle" width="40" height="40" alt="">
                        </a>
                    </div>
                    
                    <form action="/logout" method="POST">
                        @csrf
                        <a href="/logout" class="nav-link text-light ms-2" 
                        onclick="event.preventDefault();
                            this.closest('form').submit();">
                            Sair
                            <i class="bi bi-box-arrow-right"></i>
                        </a>
                        
                    </form>
                </div>

                <div class="navbar-collapse collapse navbar-links">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link text-light btn btn-dark" href="/dashboard">Dashboard</a></li>
                        <li class="nav-item"><a class="nav-link text-light btn btn-dark" href="/transactions">Transações</a></li>
                        <li class="nav-item"><a class="nav-link text-light btn btn-dark" href="#">Relatório</a></li>
                        <li class="nav-item"><a class="nav-link text-light btn btn-dark" href="#">Recorrências</a></li>
                        <li class="nav-item"><a class="nav-link text-light btn btn-dark" href="#">Investimentos</a></li>
                        <li class="nav-item"><a class="nav-link text-light btn btn-dark" href="#">Tutorial</a></li>
                    </ul>
                </div>
                
            </div>
            
        </nav>
    </header>
    <main class="d-flex">

        @yield('content')    

    </main>
    <footer class="bg-dark text-light text-center py-3" style="position: fixed; bottom: 0; width: 100%;">
        <p class="mb-0">© 2024 João Abner</p>
    </footer>  
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
        crossorigin="anonymous"></script>
</body>
</html>
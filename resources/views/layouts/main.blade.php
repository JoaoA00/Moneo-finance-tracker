<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>-->

    <title>@yield('title')</title>
</head>
<body>
    <header>
        <nav>
            <div class="header-pages">
                <ul>
                    <li><a href="/dashboard">Dashboard</a></li>
                    <li><a href="/transactions">Transações</a></li>
                    <li><a href="#">Relatório</a></li>
                    <li><a href="#">Recorrências</a></li>
                    <li><a href="#">Investimentos</a></li>
                    <li><a href="#">Tutorial</a></li>
                </ul>
            </div>
            <div class="right-itens">
                <div class="user-profile">
                    <a href="/profile">
                        <img src="/img/logo.png" alt="">
                    </a>
                </div>
                <div class="logout">
                    <form action="/logout" method="POST">
                        @csrf
                        <a href="/logout" class="nav-link" 
                            onclick="event.preventDefault();
                            this.closest('form').submit();">
                            Sair
                            <ion-icon name="arrow-forward-outline"></ion-icon>
                        </a>
                        
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <main>

        @yield('content')    

    </main>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
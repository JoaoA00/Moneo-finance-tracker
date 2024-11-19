<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    
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
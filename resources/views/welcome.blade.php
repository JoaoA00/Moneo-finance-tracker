<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Moneo</title>
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
        <header>
            <nav>
                <div class="header-itens">
                    <div class="header-logo">
                        <img src="/img/header-logo.png">
                    </div>
                    <div class="header-navigation">
                        <ul>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Documentation</a></li>
                            <li><a href="#">Features</a></li>
                        </ul>
                    </div>
                    <div class="login-register">
                        <ul>
                            <li><a href="/register" class="register-btn btn">Register</a></li>
                            <li><a href="/login" class="login-btn btn">Log in</a></li>                  
                        </ul>
                    </div>
                    
                </div>
            </nav>
        </header>
    </body>
</html>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Игрушки Hola</title>

        <meta charset="UTF-8">
        <meta name="theme-color" content="rgb(255, 255, 255)">
        <meta name="author" content="TOO WebNet">
        <meta name="description" content="RetactorPhoto by WebNet">
        <meta name="keywords" content="RedactorPhoto">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="index, follow">

        <link rel="shortcut icon" href="/public/images/almatyholaLogo.png" type="image/png">
        <link rel="stylesheet" href="/public/styles/style.css">
        <link rel="stylesheet" href="/public/styles/mobileStyle.css">
        <link rel="manifest" href="/manifest.json">
        
    </head>

    <body>

        <header>
            <div class="headerContent">
                <h1>Развивающие игрушки от Hola</h1>
            </div>
        </header>
        
        <div class="container">
            <div class="card">
                <div class="cardItem">
                    <img src="public/images/bgS1.png" alt="" class="imgCard">
                    <hr>
                </div>
            </div>
            <div class="card">
                <div class="cardItem">
                    <img src="public/images/bgS1.png" alt="" class="imgCard">
                    <hr>
                </div>
            </div>
            <div class="card">
                <div class="cardItem">
                    <img src="public/images/bgS1.png" alt="" class="imgCard">
                    <hr>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="card">
                <div class="cardItem"></div>
            </div>
            <div class="card">
                <div class="cardItem"></div>
            </div>
            <div class="card">
                <div class="cardItem"></div>
            </div>
        </div>

        <script>
             // Проверка на поддержку service worker
            if('serviceWorker' in navigator) {
                navigator.serviceWorker
                    .register('/sw.js')
                    .then(function() { console.log("Service Worker Registered"); });
            }
        </script>
        <script src="/public/scripts/main.js"></script>
    </body>
</html>
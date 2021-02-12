<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page title</title>

    <?php wp_head() ?>

</head>
<body>
    <header class="site-header">
        <h1 class="site-header__main-link"><i class="fas fa-code dev-icon"></i>Page title</h1>
    </header>
    <main>
    
   
        <section>
            <article class="short-post"> 
                <header class="short-post__header">
                    <h2 class="short-post__title"><a class="short-post__link" href="article.html">RaspberryPi - odpalamy diodę</a></h2>
                    <p class="post__date">25 stycznia 2021 r.</p>
                </header>
                
                <p>
                    Dziś wielki dzień! Przystąpimy do pierwszej próby skomunikowania naszej malinki z zewnętrznym urządzeniem. Na pierwszy ogień pójdzie dioda LED. Przy okazji zainstalujemy Node.js oraz nauczymy się korzystać z npm.
                </p>
            </article>

            <article>
                <header>
                    <h2>Pomiar temperatury z RaspberryPi oraz Node.js</h2>
                    <p class="post__date">25 stycznia 2021 r.</p>
                </header>
                <p>
                    Po pierwszych udanych próbach z diodą LED przyszedł czas na większe wyzwanie. Tym razem podłączymy do malinki czujnik temperatury. Napiszemy skrypt, który odczytuje pomiary oraz wysyła je do zewnętrznego serwisu. Na koniec pobierzemy dane z API.
                </p>
          
                <header>
                    <h2>Przygotowujemy środowisko dla RaspberryPI i Node.js</h2>
                    <p class="post__date">25 stycznia 2021 r.</p>
                </header>
                <p>
                    Po pierwszych udanych próbach z diodą LED przyszedł czas na większe wyzwanie. Tym razem podłączymy do malinki czujnik temperatury. Napiszemy skrypt, który odczytuje pomiary oraz wysyła je do zewnętrznego serwisu. Na koniec pobierzemy dane z API.
                </p>
            </article>
        </section>
    </main>
    <footer class="footer">
        <nav class="footer-navigation">
            <ul class="footer-navigation__list">
                <li class="footer-navigation__item"><a class="footer-navigation__link" href="/">Home</a></li>
                <li class="footer-navigation__item"><a class="footer-navigation__link" href="#">O mnie</a></li>
                <li class="footer-navigation__item"><a class="footer-navigation__link" href="#">Kontakt</a></li>
                <li class="footer-navigation__item"><a class="footer-navigation__link" href="#">Poruszeni.pl</a></li>
            </ul>
        </nav>
        <p>&copy; Arkadiusz Kulewicz 2021 r.</p>
    </footer>
    
</body>
</html>
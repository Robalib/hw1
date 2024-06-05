<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel='stylesheet' href='search_artist.css'>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Mada:wght@200..900&display=swap" rel="stylesheet">
        <script src='search_artist.js' defer></script>
        <title> Search Artist - GCDS </title>
    </head>
    <body>

        <section id="ricerca">
            <form name='gallery'>
                <h1>Ispirati al tuo cantante preferito per nuove idee di stile!</h1>
                <input type="text" name="search" id="searchbox" placeholder="Cerca un Artista">
                <input type="submit" value="cerca">
                <div class="unsplash">Powered by Spotify</div>
            </form>
        </section>

        <section id='errore' class='hidden'>
            <p> Nessun risultato </p>
        </section>


        <section class="container">
            <div id="results">
            </div>
        </section>

        <section id="modale" class="hidden" >
                
        </section>

    </body>
</html>
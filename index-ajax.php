<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/main.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Catamaran:wght@400;700&display=swap">
    <title>Spitify</title>
</head>
<body>
    <div id="app">
        <header>
            <div class="app__navmenu">
                <img src="dist/img/spotify-logo.png" alt="Spotify LOGO">
            </div>
        </header>
        <main>
            <div class="app__show-albums">
            </div>
        </main>
        <footer>
            <span>2020 - Marco Silvestri</span>
        </footer>
    </div>

    <!-- Templating -->
    <script id="albums-template" type="text/x-handlebars-template">
        <div class="app__show-albums__album">
            <span class="app__show-albums__album__title">{{albumTitle}}</span>
            <img class="app__show-albums__album__cover" src="{{albumCover}}" alt="{{albumTitle}} - {{albumArtist}}">
            <span class="app__show-albums__album__author">{{albumAuthor}}</span>
            <div class="app__show-albums__album__classification">
                <span class="app__show-albums__album__classification__year">{{albumYear}}</span>
                <span class="app__show-albums__album__classification__genre">{{albumGenre}}</span>
            </div>
        </div>
    </script>
    <!--  End of Templating -->

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/handlebars@latest/dist/handlebars.js"></script>
    <script src='dist/scripts/app.js'></script>
</body>
</html>
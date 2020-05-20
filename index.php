<?php
/* Data-import */
require_once __DIR__ . "/dist/scripts/data.php"
?>

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
                <?php
                foreach ($albums as $album){ ?>
                    <div class="app__show-albums__album">
                        <span class="app__show-albums__album__title"><?php echo $album['title']; ?></span>
                        <img class="app__show-albums__album__cover" src="<?php echo $album['cover_path']; ?>">
                        <span class="app__show-albums__album__author"><?php echo $album['author']; ?></span>
                        <div class="app__show-albums__album__classification">
                            <span class="app__show-albums__album__classification__year"><?php echo $album['year']; ?></span>
                            <span class="app__show-albums__album__classification__genre"><?php echo $album['genre']; ?></span>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </main>
        <footer>
            <span>2020 - Marco Silvestri</span>
        </footer>
    </div>
</body>
</html>
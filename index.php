<?php

class Movie {
    public $title;
    public $genre;

    public function __construct($title, $genre) {
        $this->title = $title;
        $this->genre = $genre;
    }

    public function infoMovie() {
        echo "<strong>Titolo</strong>: {$this->title}, <strong>Genere</strong>: {$this->genre}";
    }
}

$movie1 = new Movie("Inception", "Science Fiction");
$movie2 = new Movie("The Shawshank Redemption", "Drama");

$movies = [$movie1, $movie2];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <ul>
            <?php foreach ($movies as $movie): ?>
                <li>
                    <?php $movie->infoMovie(); ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </main>
</body>
</html>
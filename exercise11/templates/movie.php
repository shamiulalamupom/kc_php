<?php include_once "../lib/movies.php";
include_once "../lib/directors.php";

if (isset($_GET["movieId"])) {
    $movie = getMovieById($pdo, $_GET["movieId"]);
    if (isset($movie["director_id"])) {
        $director = getDirectorById($pdo, $movie["director_id"]);
    }
};

include_once "header.php";
?>

<?php 
if (!$movie):
    header("refresh:5;url=../index.php");
    echo 'Movie not found. Click <a href="../index.php">here</a> to go to homepage.';
else:
?>
<h2><?= $movie["title"] ?></h2>
<ul>
    <li><?= $movie["summary"] ?></li>
    <li><?= $movie["release_date"] ?></li>
    <li><?= "{$director["first_name"]} {$director["last_name"]}" ?></li>
</ul>
<?php endif; ?>

<?php include_once "footer.php"; ?>
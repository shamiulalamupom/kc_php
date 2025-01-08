<?php 
include_once "lib/movies.php";
if (isset($_GET["showAll"])) {
    $movies = getAllMovies($pdo, true);
} else {
    $movies = getAllMovies($pdo);
}
include_once "templates/header.php";
?>

<h1>Homepage</h1>

<?php foreach ($movies as $movie): ?>
<article>
    <h3><?=$movie["title"] ?></h3>
    <a href="templates/movie.php?movieId=<?=$movie["id"] ?>"><button>Show More</button></a>
</article>
<?php endforeach; ?>

<!-- <?php if (!isset($_GET["showAll"])): ?>
<a href="index.php?showAll=true"><button>Show More Movies...</button></a>
<?php endif; ?> -->

<?php include_once "templates/footer.php"; ?>
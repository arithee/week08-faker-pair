<?php
require 'vendor/autoload.php';

$faker = Faker\Factory::create();

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">';
echo "<div class='container mt-4'>";
echo "<h2 class='mb-4'>Fake Books</h2>";
echo "<table class='table table-bordered table-striped'>";
echo "<thead class='table-dark'><tr><th>Title</th><th>Author</th><th>Genre</th><th>Publication Year</th><th>ISBN</th><th>Summary</th></tr></thead><tbody>";
$genres = ['Fiction', 'Mystery', 'Historical', 'Scifi', 'Thriller', 'Romance', 'Fantasy', 'Horror'];

for ($i = 0; $i < 15; $i++) {
//$title = $faker->paragraph();
$author = $faker->name();
$genre = $genres[array_rand($genres)];
$PublicationYear = $faker->numberBetween(1900, 2024);
$isbn = $faker->isbn13();
//$summary = $faker->text(50);

echo "<tr>";
//echo "<td>($title)</td>";
echo "<td>($author)</td>";
echo "<td>($genre)</td>";
echo "<td>($PublicationYear)</td>";
echo "<td>($isbn)</td>";
//echo "<td>($summary)</td>";
echo "</tr>";
}
echo "</tbody></table></div>";
?>



<?php
require "settings/init.php";

foreach ($books as $book) {
$title = $book['title'];
$author = $book['author'];
$price = $book['price'];
$release_date = $book['release_date'];
$description = $book['description'];

// Indsæt oplysninger i databasen ved hjælp af en SQL-forespørgsel
$sql = "INSERT INTO books (title, author, price, release_date, description)
VALUES ('$title', '$author', $price, '$release_date', '$description')";

// ... Udfør SQL-forespørgslen og håndter eventuelle fejl
}
?>








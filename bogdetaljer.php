<?php
require "settings/init.php";

$bog = $db->sql("SELECT * FROM produkter WHERE prodid = :prodid", [":prodid" => $_GET["prodid"]])[0];


?>

<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">
    <title><?php echo $bog->prodNavn; ?> - Bog Detaljer</title>
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles2.css" rel="stylesheet" type="text/css">
    <!-- Tilføj Font Awesome CSS (Du skal downloade og inkludere Font Awesome-filer) -->
    <script src="https://kit.fontawesome.com/c464ec85f7.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <img src="images/<?php echo $bog->prodBillede; ?>" alt="<?php echo $bog->prodBillede; ?>" class="book-image">
        </div>
        <div class="col-md-8">
            <h1><?php echo $bog->prodNavn; ?></h1>

            <p class="book-description"><?php echo $bog -> prodBeskrivelse; ?></p>
            <p class="book-price"><strong>Pris:</strong> <?php echo $bog -> prodPris; ?> kr.</p>

        </div>
    </div>
</div>


<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

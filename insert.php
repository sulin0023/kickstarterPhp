<?php
require "settings/init.php";
if (!empty($_POST["data"])){
    $data=$_POST["data"];
    $file=$_FILES;

    if(!empty($file[prodBillede]["tnp_name"])){
        move_uploaded_file($file[prodBillede]["tnp_name"], "uploads/" . basename($file[prodBillede]["name"]));

    }

    

     $bind=[
            "prodNavn" => $data ["prodNavn"],
            "prodBeskrivelse" =>$data[prodBeskrivelse],
            "prodPris" => $data [prodPris],
            "prodBillese" => (!empty($file[prodBillede]["tnp_name"])) ? $file[prodBillede]["name"]:NULL,


    ];
    $db->sql($sql, $bind, false);
    header('location: insert.php');
    exit();

}
?>



<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Indsæt til database </title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="css/styles1.css" rel="stylesheet" type="text/css">


    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body

<div class="container">
    <form action="webshop.php" method="POST" enctype="multipart/form-data">

        <label for="Navn">Navn:</label>
        <input type="text" name="Navn" required><br>

        <label for="Forfatter">Forfatter:</label>
        <input type="text" name="Forfatter"><br>

        <label for="udgivelsesdato">Udgivelsesdato:</label>
        <input type="date" name="udgivelsesdato"><br>

        <label for="Beskrivelse">Beskrivelse:</label>
        <textarea name="Beskrivelse"></textarea><br>

        <label for="pris">Pris:</label>
        <input type="number" name="pris" step="0.01"><br>

        <div class="col-12">
            <label class="form-label" for="prodBillede">Produkt billede: </label>
            <input type="file" class="form-control" id="prodBillede" name="prodBillede">
        </div>

        <label for="Sidetal">Sidetal:</label>
        <input type="number" name="Sidetal"><br>

        <label for="genre">Genre:</label>
        <input type="text" name="genre"><br>

        <label for="bedømmelse">Bedømmelse:</label>
        <input type="number" name="bedømmelse" min="1" max="5"><br>


        <input type="submit" value="Tilføje bog">
    </form>
</div>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

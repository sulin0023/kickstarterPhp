<?php
require "settings/init.php";
?>
<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">
    <title>Sigende titel</title>
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <!-- Brug ikke .scss-filen som stylesheet. Det er en kildefil for SASS og skal kompileres før brug -->
    <!-- <link href="css/styles.scss" rel="stylesheet" type="text/css"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="container">
    <div class="row g-2">
        <?php
        $books = [
            [
                "navn" => "Bog 1",
                "billede" => "images/bog1.png",
                "beskrivelse" => "Beskrivelse for bog 1.",
                "pris" => 100,
                "bedommelse" => 4,
            ],
            [
                "navn" => "Bog 2",
                "billede" => "images/bog2.png",
                "beskrivelse" => "Beskrivelse for bog 2.",
                "pris" => 150,
                "bedommelse" => 5,
            ],


            [
                "navn" => "Bog 3",
                "billede" => "images/bog3.png",
                "beskrivelse" => "Beskrivelse for bog 3.",
                "pris" => 150,
                "bedommelse" => 5,
            ],

            [
                "navn" => "Bog 4",
                "billede" => "images/bog4.png",
                "beskrivelse" => "Beskrivelse for bog 4.",
                "pris" => 150,
                "bedommelse" => 5,
            ],

            [
                "navn" => "Bog 5",
                "billede" => "images/bog5.png",
                "beskrivelse" => "Beskrivelse for bog 5.",
                "pris" => 150,
                "bedommelse" => 5,
            ],

            [
                "navn" => "Bog 6",
                "billede" => "images/bog6.png",
                "beskrivelse" => "Beskrivelse for bog 6.",
                "pris" => 150,
                "bedommelse" => 5,
            ],

            [
                "navn" => "Bog 7",
                "billede" => "images/bog7.png",
                "beskrivelse" => "Beskrivelse for bog 7.",
                "pris" => 150,
                "bedommelse" => 5,
            ],

            [
                "navn" => "Bog 8",
                "billede" => "images/bog8.png",
                "beskrivelse" => "Beskrivelse for bog 8.",
                "pris" => 150,
                "bedommelse" => 5,
            ],

            [
                "navn" => "Bog 9",
                "billede" => "images/bog9.png",
                "beskrivelse" => "Beskrivelse for bog 9.",
                "pris" => 150,
                "bedommelse" => 5,
            ],

            [
                "navn" => "Bog 10",
                "billede" => "images/bog10.png",
                "beskrivelse" => "Beskrivelse for bog 10.",
                "pris" => 150,
                "bedommelse" => 5,
            ],

            [
                "navn" => "Bog 11",
                "billede" => "images/bog11.png",
                "beskrivelse" => "Beskrivelse for bog 11.",
                "pris" => 150,
                "bedommelse" => 5,
            ],

            [
                "navn" => "Bog 12",
                "billede" => "images/bog12.png",
                "beskrivelse" => "Beskrivelse for bog 12.",
                "pris" => 150,
                "bedommelse" => 5,
            ],

            [
                "navn" => "Bog 13",
                "billede" => "images/bog13.png",
                "beskrivelse" => "Beskrivelse for bog 13.",
                "pris" => 150,
                "bedommelse" => 5,
            ],

            [
                "navn" => "Bog 14",
                "billede" => "images/bog14.png",
                "beskrivelse" => "Beskrivelse for bog 14.",
                "pris" => 150,
                "bedommelse" => 5,
            ],

            [
                "navn" => "Bog 15",
                "billede" => "images/bog15.png",
                "beskrivelse" => "Beskrivelse for bog 15.",
                "pris" => 150,
                "bedommelse" => 5,
            ],

            [
                "navn" => "Bog 16",
                "billede" => "images/bog16.png",
                "beskrivelse" => "Beskrivelse for bog 16.",
                "pris" => 150,
                "bedommelse" => 5,
            ],

            [
                "navn" => "Bog 17",
                "billede" => "images/bog17.png",
                "beskrivelse" => "Beskrivelse for bog 17.",
                "pris" => 150,
                "bedommelse" => 5,
            ],

            [
                "navn" => "Bog 18",
                "billede" => "images/bog18.png",
                "beskrivelse" => "Beskrivelse for bog 18.",
                "pris" => 150,
                "bedommelse" => 5,
            ],

            [
                "navn" => "Bog 19",
                "billede" => "images/bog19.png",
                "beskrivelse" => "Beskrivelse for bog 19.",
                "pris" => 150,
                "bedommelse" => 5,
            ],

            [
                "navn" => "Bog 20",
                "billede" => "images/bog20.png",
                "beskrivelse" => "Beskrivelse for bog 20.",
                "pris" => 150,
                "bedommelse" => 5,
            ],
        ];

        foreach($books as $key => $book) {
            ?>

            <div class="col-12 col-md-4">
                <div class="card">
                    <?php
                    if ($key === 0) {
                        ?>
                        <a href="bogdetaljer.php?book_id=<?php echo $key; ?>">
                            <img src="<?php echo $book['billede']; ?>" class="card-img-top" alt="<?php echo $book['navn']; ?>">
                        </a>
                        <?php
                    } else {
                        ?>
                        <img src="<?php echo $book['billede']; ?>" class="card-img-top" alt="<?php echo $book['navn']; ?>">
                        <?php
                    }
                    ?>
                    <div class="card-header">
                        <?php
                        echo $book['navn'];
                        ?>
                    </div>
                    <div class="card-body">
                        <?php
                        echo $book['beskrivelse'];
                        ?>
                    </div>
                    <div class="card-footer text-muted">
                        <div class="row">
                            <div class="col-6">
                                <?php
                                echo "Pris: " . $book['pris'] . " kr.";
                                ?>
                            </div>
                            <div class="col-6 text-end">
                                <?php
                                $bedommelse = $book['bedommelse'];
                                for ($i = 1; $i <= $bedommelse; $i++) {
                                    echo "★";
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

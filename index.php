<?php
error_reporting(-1);
ini_set('display-errors', 'On');
?>
<DOCTYPE html>
    <html lang="de">
        <head>
            <title> Martens Onlineshop</title>
            <meta charset="utf-8">
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/styles.css">
        </head>
        <body>
            <header class="jumbotron">
                <div class="container">
                    <h1> Erste Überschirft</h1>            
                </dixv>
            </header>
                <section class="container" id="products">
                <div class="row">
                    <div class="col">
                        <?php include 'card.php'?>
                    </div>
                    <div class="col">
                        <?php include 'card.php'?>
                    </div>
                    <div class="col">
                        <?php include 'card.php'?>
                    </div>
                    <div class="col">
                        <?php include 'card.php'?>
                    </div>
                </section>
            <script src="assets/js/bootstrap.bundle.js" ></script>
        </body>
    </html>
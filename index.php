<?php
error_reporting(-1);
ini_set('display-errors', 'On');

$username = "shop_Admin";
$password = "KsKm811;";
$dsn = "mysql:host=127.0.0.1;dbname=shop;charset=utf8mb4";
try {
$db = new PDO($dsn,$username,$password);
}catch(PDOException $e) {
    echo"Connection failed". $e->getMessage();
}
$sql = "SELECT ID,title,descripton,price FROM products";
$result = $db->query($sql);
// var_dump($result);
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
                    <?php while($row = $result->fetch()):?>
                    <div class="col">
                        <?php include 'card.php'?>
                    </div>
                    <?php endwhile;?>
                </div>


                </section>
            <script src="assets/js/bootstrap.bundle.js" ></script>
        </body>
    </html>


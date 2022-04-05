<?php

include_once './classes/ShopProduct.php';
include_once './classes/ShoesProduct.php';
include_once './classes/TShirtProduct.php';
include_once './classes/ShopProductWriter.php';

include_once './classes/Singletone.php';

$tsh = new TShirtProduct(
    "ASTROK",
    "H&M",
    "MEN",
    30,
    "black"
);


$shoes = new ShoesProduct(
    "Yeezie",
    "Adidas",
    "Men",
    400,
    44);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/mustard-ui.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>PHP OOP</title>
</head>

<body>
<div class="container">
    <h1>OOP</h1>

    <section>
        <pre>
            <?
            echo ShopProductWriter::write($tsh);
            echo "<br>";
            echo ShopProductWriter::write($shoes);
            ?>
        </pre>
        <?
        $instance = Singletone::getInstance();
        $instance2 = Singletone::getInstance();
        $instance2->setData(100);

        ?>
        <pre>
            Instance1: <?  var_dump($instance) ?>
        </pre>

        <pre>
            Instance2: <? var_dump($instance2) ?>
        </pre>
    </section>
</div>

</body>

</html>
<?php
// L'e-commerce vende prodotti per gli animali.
// I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
// L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
// BONUS:
// Il pagamento avviene con la carta prepagata che deve contenere un saldo sufficiente all'acquisto. 
require_once __DIR__ . '/ProdottiAnimali.php';


$friskiesDog = new ProdottiAnimali('Cani','Cibo');
$friskiesDog->prodotto = 'Friskies Dog';
$friskiesDog->prezzo = 20;

$kiteKatCat = new ProdottiAnimali('Gatto', 'Cibo');
$kiteKatCat->prodotto = 'Kitekat Cat';
$kiteKatCat->prezzo = 15;

$tiragraffiCat = new ProdottiAnimali('Gatti', 'Giochi');
$tiragraffiCat->prodotto = 'tiragraffi';
$tiragraffiCat->prezzo = 5;

$frontlineDog = new ProdottiAnimali('Cani', 'Antiparassitari');
$frontlineDog->prodotto = 'tiragraffi';
$frontlineDog->prezzo = 30;

// var_dump($friskiesDog);
// var_dump($kiteKatCat);
// var_dump($tiragraffiCat);
// var_dump($frontlineDog);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP oop 2</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>
            Prodotti per animali
        </h1>
        <div>
            Profilo: [Non Registrato/Registrato]
        </div>
    </header>
    <main>
        <section class="container">
            <h2>
                Prodotti più venduti
            </h2>
            <div class="am-product">
                <?php echo $friskiesDog ->getInfo() ?>
            </div>
            <div class="am-product">
                <?php echo $kiteKatCat ->getInfo() ?>
            </div>
            <div class="am-product">
                <?php echo $tiragraffiCat ->getInfo() ?>
            </div>
            <div class="am-product">
                <?php echo $frontlineDog ->getInfo() ?>
            </div>
        </section>
    </main>
</body>
</html>
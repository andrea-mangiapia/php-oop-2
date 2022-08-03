<?php
// L'e-commerce vende prodotti per gli animali.
// I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
// L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
// BONUS:
// Il pagamento avviene con la carta prepagata che deve contenere un saldo sufficiente all'acquisto. 
require_once __DIR__ . '/ProductAnimal.php';
require_once __DIR__ . '/UserRegistered.php';
require_once __DIR__ . '/UserNoRegistered.php';
require_once __DIR__ . '/PaymentCard.php';

$friskiesDog = new ProductAnimal('Cani','Cibo');
$friskiesDog->prodotto = 'Friskies Dog';
$friskiesDog->prezzo = 20;

$kiteKatCat = new ProductAnimal('Gatto', 'Cibo');
$kiteKatCat->prodotto = 'Kitekat Cat';
$kiteKatCat->prezzo = 15;

$tiragraffiCat = new ProductAnimal('Gatti', 'Giochi');
$tiragraffiCat->prodotto = 'tiragraffi';
$tiragraffiCat->prezzo = 5;

$frontlineDog = new ProductAnimal('Cani', 'Antiparassitari');
$frontlineDog->prodotto = 'Frontline';
$frontlineDog->prezzo = 30;

// var_dump($friskiesDog);
// var_dump($kiteKatCat);
// var_dump($tiragraffiCat);
// var_dump($frontlineDog);

$Andrea = new UserRegistered('Andrea', 'Bianchi', 'andreabianchi@mail.it', new PaymentCard());
$Andrea->cartaPagamenti->nomeUtenteCarta = 'Andrea Bianchi';
$Andrea->cartaPagamenti->numeroCarta = '5333 1234 1234';
$Andrea->cartaPagamenti->scadenzaCarta = '12/25';
$Andrea->cartaPagamenti->cvv = '345';
$Andrea->cartaPagamenti->saldoDisponibile = 50;

$Anonimo = new UserNoRegistered('Anonimo', '-', '-',  new PaymentCard());

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
            <?php
                echo $Andrea->userRegistationCheck();

            ?>
        </div>
    </header>
    <main>
        <section class="container">
            <h2>
                Carrello
            </h2>
            <div class="am-cart">
                <?php $Andrea->prodottiNelCarrello([$friskiesDog, $frontlineDog]) ?>
                    <ul>
                        <li>
                            <?php echo $friskiesDog->prodotto ?>
                        </li>
                        <li>
                            <?php echo $frontlineDog->prodotto ?>
                        </li>
                    </ul>


                <?php ?>
            </div>
            <div class="am-cart-total">
                L'ordine TOTALE è pari a <?php echo $Andrea->totaleCarrello();?> euro
            </div>
            <div class="am-payment">
            <?php echo $Andrea->pagamentoUtente() ?>                
            </div>
            <h2>
                Prodotti più venduti
            </h2>
            <div class="am-product">
                <?php echo $friskiesDog->getInfo() ?>
            </div>
            <div class="am-product">
                <?php echo $kiteKatCat->getInfo() ?>
            </div>
            <div class="am-product">
                <?php echo $tiragraffiCat->getInfo() ?>
            </div>
            <div class="am-product">
                <?php echo $frontlineDog->getInfo() ?>
            </div>
        </section>
    </main>
</body>
</html>
<?php
require_once __DIR__ . '/UserRegistered.php';
require_once __DIR__ . '/UserNoRegistered.php';

class PaymentCard {
    public $nomeUtenteCarta;
    public $numeroCarta;
    public $scadenzaCarta;
    public $cvv;
    public $saldoDisponibile;
}
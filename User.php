<?php
class User {
    public $nome;
    public $cognome;
    public $email;
    public $registrazioneUtente;
    public $sconto = 0;
    public $cartaPagamenti;

    public function __construct($_nome, $_cognome, $_email) {
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->email = $_email;
    }

    public function userRegistationCheck() {
        if($this->registrazioneUtente === 'anonymous') {
            return "Benvenuto! Registrandoti potrai ricevere un buono sconto";
        } else {
            return "Ciao $this->nome! Hai diritto al $this->sconto% sui nostri prodotti";
        }
    }
}
?>
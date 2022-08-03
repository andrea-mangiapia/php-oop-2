<?php

class User {
    public $nome;
    public $cognome;
    public $email;
    public $registrazioneUtente;
    public $sconto = 0;
    public $cartaPagamenti;

    public function __construct($_nome, $_cognome, $_email, $_cartaPagamenti) {
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->email = $_email;
        $this->cartaPagamenti = $_cartaPagamenti;
    }

    public function userRegistationCheck() {
        if($this->registrazioneUtente === 'anonymous') {
            return "Benvenuto! Registrandoti potrai ricevere un buono sconto";
        } else {
            return "Ciao $this->nome! Hai diritto al $this->sconto% sui nostri prodotti";
        }
    }

    public function prodottiNelCarrello($prodottiScelti) {
        foreach($prodottiScelti as $prodottoscelto) {
            $this->carrello[] = $prodottoscelto;
        }
    }

    public function totaleCarrello() {
        $totale = 0;
        foreach($this->carrello as $prodottoscelto) {
            $totale += $prodottoscelto->prezzo;
        }

        $totale -= $totale * $this->sconto / 100;
        return $totale;
        
    }

    public function pagamentoUtente() {
        $pagamentoTotale = $this->totaleCarrello();
        
        if($this->cartaPagamenti->saldoDisponibile < $pagamentoTotale) { 
            return "pagamento non andato a buon fine, saldo insufficiente";
        } else {
            return "pagamaneto andato a buon fine";
        }
    }
}

?>
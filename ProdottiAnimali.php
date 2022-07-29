<?php
class ProdottiAnimali {
    public $animale;
    public $categoria;
    public $prodotto;
    public $prezzo;

    public function __construct($_animale, $_categoria) {
        $this->animale = $_animale;
        $this->categoria = $_categoria;
    }

    public function getInfo() {
        return "$this->categoria per $this->animale<br>
                Prodotto: $this->prodotto<br>
                Prezzo: $this->prezzo &euro;";

    }
}



?>
<?php
class ProductAnimal {
    public $animale;
    public $categoria;
    public $prodotto;
    public $prezzo;

    public function __construct($_animale, $_categoria) {
        $this->animale = $_animale;
        $this->categoria = $_categoria;
    }

    public function getInfo() {
        return "<h3>$this->categoria per $this->animale</h3>
                <div><b>Prodotto:</b> $this->prodotto</div>
                <div><b>Prezzo:</b> $this->prezzo &euro;</div>";

    }
}

?>
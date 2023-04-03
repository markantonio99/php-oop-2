<?php

trait AddCat {
    public function aggiungiLettiera(string $materiale): string {
        $this->lettiera .= $materiale . ";";
        return $this->lettiera;
    }
}

class gatti extends animali {
    use AddCat;
    public $categoria_prodotto = "gatti";
    public $tipologia_prodotto;
    public string $lettiera;

    public function __construct() {
        $this->lettiera = "";
    }
}

?>

?>

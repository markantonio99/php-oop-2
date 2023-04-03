<?php
class cani extends animali {
 public $categoria_prodotto = "cani";
 public $tipologia_prodotto;

 public function setTipologiaProdotto($tipologia) {
    if (!is_string($tipologia)) {
        throw new Exception("Il valore della tipologia prodotto deve essere una stringa.");
    }
    $this->tipologia_prodotto = $tipologia;
 }
}
?>

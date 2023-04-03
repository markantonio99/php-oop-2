<?php

trait AddCat {
    public string $lettiera;

    public function aggiungiLettiera(): string {
        $this->lettiera .= "lettiera gatti" . ";";
        return $this->lettiera;
        }
}

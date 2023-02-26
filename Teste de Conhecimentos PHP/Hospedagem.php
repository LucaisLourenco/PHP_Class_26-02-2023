<?php

class Hospedagem {

    private Quarto $quarto; 
    public array $hospedes = array();
    public array $consumos = array();

    public function __construct(Quarto $quarto) {
        $this->quarto = $quarto;
    }

    public function setQuarto(Quarto $quarto): void {
        $this->quarto = $quarto;
    }

    public function getquarto(): Quarto {
        return $this->quarto;
    }

    public function getHospedes(): array {
        return $this->hospedes;
    }

    public function getConsumos(): array {
        return $this->consumos;
    }
}
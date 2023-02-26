<?php

class Quarto {

    private Pousada $pousada;
    private array $hospedagens = array();

    public function __construct(Pousada $pousada) {
        $this->pousada = $pousada;
    }

    public function setPousada(Pousada $pousada): void {
        $this->pousada = $pousada;
    }

    public function getPousada(): Pousada {
        return $this->pousada;
    }

    public function getHospedagens(): array {
        return $this->hospedagens;
    }

}
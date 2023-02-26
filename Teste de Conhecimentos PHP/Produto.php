<?php

class Produto {

    private array $consumos = array();

    public function getConsumos(): array {
        return $this->consumos;
    }
}
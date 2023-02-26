<?php

class Consumo {
    
    private Hospedagem $hospedagem;
    private Produto $produto;

    public function __construct(Hospedagem $hospedagem, Produto $produto) {
        $this->hospedagem = $hospedagem;
        $this->produto = $produto;
    }

    public function setHospedagem(Hospedagem $hospedagem): void {
        $this->hospedagem = $hospedagem;
    }

    public function getHospedagem(): Hospedagem {
        return $this->hospedagem;
    }

    public function setProduto(Produto $produto): void {
        $this->produto = $produto;
    }

    public function getProduto(): Produto {
        return $this->produto;
    }
}
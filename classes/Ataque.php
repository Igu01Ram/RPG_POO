<?php

require_once 'Item.php';

class Ataque extends Item
{
    public function __construct(string $nome, int $tamanho = 7, string $classe = "Ataque")
    {
        parent::__construct($nome, $tamanho, $classe);
    }
}
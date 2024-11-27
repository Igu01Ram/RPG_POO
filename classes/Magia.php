<?php

require_once 'Item.php';

class Magia extends Item
{
    public function __construct(string $nome, int $tamanho = 2, string $classe = "Magia")
    {
        parent::__construct($nome, $tamanho, $classe);
    }
}
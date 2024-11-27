<?php
require_once 'classes/Item.php';
require_once 'classes/Ataque.php';
require_once 'classes/Defesa.php';
require_once 'classes/Magia.php';
require_once 'classes/Inventario.php';
require_once 'classes/Player.php';

$player1 = new Player("Jogador1");
$player2 = new Player("Jogador2");

$itemAtaque1 = new Ataque("Lamina de Doran");
$itemAtaque2 = new Ataque("Martelo de Guerra");
$itemAtaque3 = new Ataque("Cutelo Negro");
$itemDefesa1 = new Defesa("Escudo de Doran");
$itemDefesa2 = new Defesa("Armadura de Warmog");
$itemDefesa3 = new Defesa("Couraça do defunto");
$itemMagia1 = new Magia("Anel de Doran");
$itemMagia2 = new Magia("Cajado do vazio");
$itemMagia3 = new Magia("Varinha explosiva");

echo "Adicionando itens ao Jogador 1...<br>";
if ($player1->coletarItem($itemDefesa1)) {
    echo "Item de defesa <strong>'Escudo de Doran'</strong> coletado!";
} else {
    echo "Inventário cheio!";
}
echo "<br>";
if ($player1->coletarItem($itemAtaque1)) {
    echo "Item de ataque <strong>'Lamina de Doran'</strong> coletado!";
} else {
    echo "Inventário cheio!";
}
echo "<br>";
if ($player1->coletarItem($itemDefesa2)) {
    echo "Item de defesa <strong>'Armadura de Warmog'</strong> coletado!";
} else {
    echo "Inventário cheio!";
}
echo "<br>";
if ($player1->coletarItem($itemMagia1)) {
    echo "Item de magia <strong>'Anel de Doran'</strong> coletado!";
} else {
    echo "Inventário cheio!";
}
echo "<br>";
if ($player1->coletarItem($itemDefesa1)) {
    echo "Item de defesa <strong>'Escudo de Doran'</strong> coletado!";
} else {
    echo "Inventário cheio!";
}
echo "<br>";
echo "Tentando adicionar mais itens ao inventário...<br>";

if ($player1->coletarItem($itemDefesa1)) {
    echo "Item de defesa <strong>'Escudo de Doran'</strong> coletado!";
} else {
    echo "Inventário cheio!";
}
echo "<br>";
echo "Aumentando nível do jogador...<br>";
$player1->subirNivel();
echo "Novo nível: <strong>2</strong> <br>   ";

if ($player1->coletarItem($itemAtaque3)) {
    echo "Item de defesa <strong>'Cutelo negro'</strong> coletado!";
} else {
    echo "Inventário cheio!";
}
echo "<br>";
if ($player1->coletarItem($itemMagia2)) {
    echo "Item de magia <strong>'Cajado do vazio'</strong> coletado!";
} else {
    echo "Inventário cheio!";
}

echo "<hr>";
echo "Adicionando itens ao Jogador 2...<br>";
if ($player2->coletarItem($itemDefesa3)) {
    echo "Item de defesa <strong>'Couraça do defunto'</strong> coletado!";
} else {
    echo "Inventário cheio!";
}
echo "<br>";
if ($player2->coletarItem($itemAtaque1)) {
    echo "Item de ataque <strong>'Lamina de Doran'</strong> coletado!";
} else {
    echo "Inventário cheio!";
}
echo "<br>";
if ($player2->coletarItem($itemAtaque2)) {
    echo "Item de ataque <strong>'Martelo de guerra'</strong> coletado!";
} else {
    echo "Inventário cheio!";
}
echo "<br>";
if ($player2->coletarItem($itemMagia3)) {
    echo "Item de magia <strong>'Varinha explosiva'</strong> coletado!";
} else {
    echo "Inventário cheio!";
}
echo "<br>";
if ($player2->coletarItem($itemDefesa1)) {
    echo "Item de defesa <strong>'Escudo de Doran'</strong> coletado!";
} else {
    echo "Inventário cheio!";
}
echo "<br>";
echo "Tentando adicionar mais itens ao inventário...<br>";

if ($player2->coletarItem($itemDefesa1)) {
    echo "Item de defesa <strong>'Escudo de Doran'</strong> coletado!";
} else {
    echo "Inventário cheio!";
}
echo "<br>";
echo "Removendo itens do inventário do jogador...<br>";
$player2->soltarItem($itemAtaque2);
echo " O item de ataque <strong>'Martelo de Guerra'</strong> foi removido do inventário! <br>";

if ($player2->coletarItem($itemAtaque3)) {
    echo "Item de ataque <strong>'Cutelo negro'</strong> coletado!";
} else {
    echo "Inventário cheio!";
}
echo "<hr>";
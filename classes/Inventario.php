<?php
class Inventario {
    private int $capacidadeMaxima;
    private array $itens = [];

    public function __construct(int $capacidadeInicial) {
        $this->capacidadeMaxima = $capacidadeInicial;
    }

    public function adicionar(Item $item): bool {
        if ($this->capacidadeLivre() >= $item->getTamanho()) {
            $this->itens[] = $item;
            return true;
        }
        return false;
    }

    public function remover(Item $item): void {
        foreach ($this->itens as $key => $i) {
            if ($i === $item) {
                unset($this->itens[$key]);
                break;
            }
        }
        $this->itens = array_values($this->itens);
    }

    public function capacidadeLivre(): int {
        $ocupado = 0;
        foreach ($this->itens as $item) {
            $ocupado += $item->getTamanho();
        }
        return $this->capacidadeMaxima - $ocupado;
    }
    

    public function aumentarCapacidade(int $quantidade): void {
        $this->capacidadeMaxima += $quantidade;
    }
}

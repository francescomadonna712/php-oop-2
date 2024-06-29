<?php
require_once __DIR__ . '/Prodotto.php';

class Cibo extends Prodotto
{
    public $peso;

    public function __construct($nome, $prezzo, Categoria $categoria, $peso)
    {
        parent::__construct($nome, $prezzo, $categoria);
        $this->peso = $peso;
    }

    public function getPeso()
    {
        return $this->peso;
    }

    public function setPeso($peso)
    {
        $this->peso = $peso;
    }

    public function getInfo()
    {
        return parent::getInfo() . ", Peso: {$this->peso}";
    }
}

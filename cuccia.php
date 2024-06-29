<?php
require_once __DIR__ . '/Prodotto.php';

class Cuccia extends Prodotto
{
    public $dimensioni;

    public function __construct($nome, $prezzo, Categoria $categoria, $dimensioni)
    {
        parent::__construct($nome, $prezzo, $categoria);
        $this->dimensioni = $dimensioni;
    }

    public function getDimensioni()
    {
        return $this->dimensioni;
    }

    public function setDimensioni($dimensioni)
    {
        $this->dimensioni = $dimensioni;
    }

    public function getInfo()
    {
        return parent::getInfo() . ", Dimensioni: {$this->dimensioni}";
    }
}

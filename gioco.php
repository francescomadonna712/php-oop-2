<?php
require_once __DIR__ . '/Prodotto.php';

class Gioco extends Prodotto
{
    public $materiale;

    public function __construct($nome, $prezzo, Categoria $categoria, $materiale)
    {
        parent::__construct($nome, $prezzo, $categoria);
        $this->materiale = $materiale;
    }

    public function getMateriale()
    {
        return $this->materiale;
    }

    public function setMateriale($materiale)
    {
        $this->materiale = $materiale;
    }

    public function getInfo()
    {
        return parent::getInfo() . ", Materiale: {$this->materiale}";
    }
}

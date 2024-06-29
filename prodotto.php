<?php
require_once __DIR__ . '/Categoria.php';

class Prodotto
{
    public $nome;
    public $prezzo;
    public $categoria;

    public function __construct($nome, $prezzo, Categoria $categoria)
    {
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->categoria = $categoria;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getPrezzo()
    {
        return $this->prezzo;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setPrezzo($prezzo)
    {
        $this->prezzo = $prezzo;
    }

    public function setCategoria(Categoria $categoria)
    {
        $this->categoria = $categoria;
    }

    public function getInfo()
    {
        return "Nome: {$this->nome}, Prezzo: {$this->prezzo}, Categoria: [" . $this->categoria->getInfo() . "]";
    }
}

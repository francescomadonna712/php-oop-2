<?php
class Categoria
{
    public $nome;
    public $descrizione;

    public function __construct($nome, $descrizione)
    {
        $this->nome = $nome;
        $this->descrizione = $descrizione;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getDescrizione()
    {
        return $this->descrizione;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setDescrizione($descrizione)
    {
        $this->descrizione = $descrizione;
    }

    public function getInfo()
    {
        return "Nome: {$this->nome}, Descrizione: {$this->descrizione}";
    }
}

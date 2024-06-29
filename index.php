<?php
require_once 'Categoria.php';
require_once 'Prodotto.php';
require_once 'Cibo.php';
require_once 'Gioco.php';
require_once 'Cuccia.php';

// Creazione di una categoria
$categoriaCani = new Categoria("Cani", "Prodotti per cani");

// Creazione di un prodotto cibo
$ciboCani = new Cibo("Crocchette per cani", 20.99, $categoriaCani, "2 kg");

// Creazione di un prodotto gioco
$giocoCani = new Gioco("Pallina per cani", 5.99, $categoriaCani, "Plastica");

// Creazione di una cuccia
$cucciaCani = new Cuccia("Cuccia per cani", 45.00, $categoriaCani, "60x40 cm");


$prodotti = [$ciboCani, $giocoCani, $cucciaCani];


foreach ($prodotti as $prodotto) {
    echo "<h2>{$prodotto->getNome()}</h2>";
    echo "<p>" . $prodotto->getInfo() . "</p>";
}

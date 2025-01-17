<?php

//J'ai fait des boucles pour récupérer tous les livres et tous les auteurs (Sabrina)


// Pour les Books
require_once "managers/BookManager.php";

$bookManager = new BookManager();
$books = $bookManager->findAll(); 

if ($books && count($books) > 0) {
    echo "<h2>Liste des livres :</h2>";
    foreach ($books as $book) {
        echo "Titre : " . $book->getTitle() . "<br>";
        echo "Extrait : " . $book->getExcerpt() . "<br>";
        echo "Prix : " . $book->getPrice() . "€<br>";
        echo "Auteur (ID) : " . $book->getAuthor() . "<br><br>";
    }
} else {
    echo "Aucun livre trouvé.";
}

// Pour les Authors
require_once "managers/AuthorManager.php";

$authorManager = new AuthorManager();
$authors = $authorManager->findAll(); 

if ($authors && count($authors) > 0) {
    echo "<h2>Liste des auteurs :</h2>";
    foreach ($authors as $author) {
        echo "Prénom : " . $author->getFirstname() . "<br>";
        echo "Nom : " . $author->getLastname() . "<br>";
        echo "Biographie : " . $author->getBiographie() . "<br><br>";
    }
} else {
    echo "Aucun auteur trouvé.";
}

<?php

// Pour le Books
require_once "managers/BookManager.php";

$bookManager = new BookManager();
$bookId = 1; // Exemple d'ID de livre

$book = $bookManager->findOne($bookId);

if ($book) {
    echo "Titre : " . $book->getTitle() . "<br>";
    echo "Extrait : " . $book->getExcerpt() . "<br>";
    echo "Prix : " . $book->getPrice() . "€<br>";
    echo "Auteur (ID) : " . $book->getAuthor() . "<br>";
} else {
    echo "Aucun livre trouvé pour l'ID : $bookId";
}

// Pour les Author 

require_once "managers/AuthorManager.php";
$authorManager = new AuthorManager();
$authorId = 1; // Exemple d'ID d'auteur

$author = $authorManager->findOne($authorId);

if ($author) {
    echo "Prénom : " . $author->getFirstname() . "<br>";
    echo "Nom : " . $author->getLastname() . "<br>";
    echo "Biographie : " . $author->getBiography() . "<br>";
} else {
    echo "Aucun auteur trouvé pour l'ID : $authorId";
}
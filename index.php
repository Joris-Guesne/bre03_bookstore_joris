<?php
require_once 'connexion.php';
require_once 'Author.php';
require_once 'Book.php';
require_once 'AuthorManager.php';


try {
    // Instancier la connexion à la base de données
    $database = new Database();
    $db = $database->getConnection();

    // Instancier AuthorManager
    $authorManager = new AuthorManager($db);

    // Récupérer tous les auteurs
    $authors = $authorManager->getAllAuthors();
    echo "Liste des auteurs :<br>";
    foreach ($authors as $author) {
        echo $author->getFirstName() . " " . $author->getLastName() . "<br>";
    }

    // Récupérer les livres d’un auteur spécifique (par exemple avec ID 1)
    echo "<br>Livres de l'auteur avec ID 1 :<br>";
    $books = $authorManager->getBooksByAuthor(1);
    foreach ($books as $book) {
        echo $book->getTitle() . " - " . $book->getPrice() . "€<br>";
    }

} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage();
}
?>
<?php


class AuthorManager
{

    private $authors = [];
    private $db;

    public function __construct()
    {
        require '../connexion.php';
        $this->db = new PDO(
            $connexionString,
            $user,
            $password
        );
    }

     //Fonction pour récupérer tous les auteurs
  
  public function findAll(): array {
    $query = $this->db->query("SELECT * FROM authors");
    $authors = [];
    
    while ($data = $query->fetch(PDO::FETCH_ASSOC)) {
      $authors[] = new Author($data['id'], $data['firstName'], $data['lastName'], $data['biography']);
    }
    return $authors;
  }
  
  //Fonction pour récupérer tous les livres d'un auteur
  
  public function getBooksByAuthors(int $authorID) : array {
      $query = $int ->db->prepare("SELECT * FROM bookes WHERE author = :author_id");
      $query->bindParam(':author_id', $authorId, PDO::PARAM_INT);
      $query->execute();
      
      $books = [];
      while ($data = $query->fetch(PDO::FETCH_ASSOC)) {
            $books[] = new Book(
                $data['id'],
                $data['title'],
                $data['excerpt'],
                $data['price'],
              $data['author']
            );
        }

        return $books;
    }
}

?>

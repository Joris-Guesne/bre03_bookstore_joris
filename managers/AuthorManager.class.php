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

    public function getAuthors(): array
    {
        return $this->authors;
    }
}

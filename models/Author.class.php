<?php

class User
{
    private ?int $id = null;
    private string $first_name;
    private string $last_name;
    private string $biography;

    public function __construct($first_name, $last_name, $biography)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->biography = $biography;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getFirst_name(): string
    {
        return $this->first_name;
    }

    public function setFirst_name(string $first_name): void
    {
        $this->first_name = $first_name;
    }

    public function getLast_name(): string
    {
        return $this->last_name;
    }

    public function setLast_name(string $last_name): void
    {
        $this->last_name = $last_name;
    }

    public function getBiography(): string
    {
        return $this->biography;
    }

    public function setBiography(string $biography): void
    {
        $this->biography = $biography;
    }
}

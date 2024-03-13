<?php

class Book {
    private $bookName;
    private $bookAuthor;

    public function __construct($name, $author)
    {
        $this->bookName = $name;
        $this->bookAuthor = $author;
    }

    public function getBookDetails() : string
    {
        return $this->bookName . ' - ' . $this->bookAuthor;
    }
}
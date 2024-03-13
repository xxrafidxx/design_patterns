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

class BookFactory {
    public static function create($name, $author) : object
    {
        return new Book($name, $author);
    }
}

$harryPotter = BookFactory::create('Harry Potter', 'JK Rowling');
echo $harryPotter->getBookDetails();
?>
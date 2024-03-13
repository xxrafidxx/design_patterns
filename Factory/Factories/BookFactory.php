<?php
include_once './Models/Book.php';

class BookFactory {
    public static function create($name, $author) : object
    {
        return new Book($name, $author);
    }
}
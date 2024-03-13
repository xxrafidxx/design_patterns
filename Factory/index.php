<?php
include_once './Factories/BookFactory.php';
include_once './Models/Book.php';

$harryPotter = BookFactory::create('Harry Potter', 'JK Rowling');
echo $harryPotter->getBookDetails();

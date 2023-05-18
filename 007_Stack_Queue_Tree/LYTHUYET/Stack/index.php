<?php
include_once "Stack.php";
include_once "Book.php";

$book = new Book(5);
$book->push("Văn");
$book->push("Anh");
$book->push("Hóa");
$book->push("Toán");
$book->push("Lý");
$book->push("Sử");
// $book->pop();
// $book->pop();
echo $book->top();
var_dump($book->getStack());
?>
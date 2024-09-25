<?php
require_once("crud.php");

$title = $_POST['title'];
$author = $_POST['author'];
$genre = $_POST['genre'];
$pages = $_POST['pages'];

$newBook = [
    'title' => $title,
    'author' => $author,
    'genre' => $genre,
    'pages' => $pages
];
setData('books', $newBook);

?>
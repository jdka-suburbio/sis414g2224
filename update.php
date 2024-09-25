<?php
require_once("crud.php");

$id = $_POST['id'];
$title = $_POST['title'];
$author = $_POST['author'];
$genre = $_POST['genre'];
$pages = $_POST['pages'];

$updateBook = [
    'title' => $title,
    'author' => $author,
    'genre' => $genre,
    'pages' => $pages
];
updateData('books', $id, $updateBook);
?>
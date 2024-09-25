<?php
require_once("crud.php");

$books = getData('books');
foreach ($books as $book) {
    echo "Título: " . $book['title'] . ", Autor: " . $book['author'] . ", Género: " . $book['genre'] . ", Páginas: " . $book['pages'] . "<br>";
}
?>
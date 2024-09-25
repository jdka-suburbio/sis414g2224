<?php
require_once("crud.php");

$books = getData('books');
foreach ($books as $book) {
    echo "Título: " . $book['title'] . ", Autor: " . $book['author'] . ", Género: " . $book['genre'] . ", Páginas: " . $book['pages'] . "<br>";
}

$newBook = [
    'title' => 'Cien años de soledad',
    'author' => 'Gabriel García Márquez',
    'genre' => 'Realismo mágico',
    'pages' => 500
];
setData('books', $newBook);

$updateBook = [
    'title' => 'Cien años de soledad (Edición revisada)',
    'author' => 'Gabriel García Márquez',
    'genre' => 'Realismo mágico',
    'pages' => 520
];
updateData('books', 1, $updateBook);

deleteData('books', 2);
?>
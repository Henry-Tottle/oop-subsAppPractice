<?php
require('vendor/autoload.php');
header('Content-Type: application/json; charset=utf-8');
use subsBooks\books\BooksHydrator;

try {
    $db = new PDO('mysql:host=db;dbname=subscription_books', 'root', 'password');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

try {
    $allBooks = BooksHydrator::hydrateBooks($db);
    echo json_encode($allBooks);
} catch (PDOException $e) {
    echo json_encode([
        'error' => true,
        'message' => $e->getMessage()
    ]);
}




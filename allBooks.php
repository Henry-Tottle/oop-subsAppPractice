<?php
require_once('vendor/autoload.php');
header('Content-Type: application/json; charset=utf-8');

use subsBooks\books\BooksHydrator;

try {
    $db = new PDO('mysql:host=db;dbname=subscription_books', 'root', 'password');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e)
{
    echo json_encode(['connection failed' => $e->getMessage()]);
}

try {
    $allDetailedBooks = BooksHydrator::hydrateDetailedBooks($db);
    echo json_encode($allDetailedBooks);
} catch (PDOException $e)
{
    echo json_encode(['connection failed' => $e->getMessage()]);
}
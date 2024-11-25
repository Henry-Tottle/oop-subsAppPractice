<?php

namespace subsBooks\books;
use PDO;

class BooksHydrator
{
    public static function hydrateBooks(PDO $db)
    {
        $query = $db->prepare("SELECT `title`, `author`, `isbn` FROM books");
        $query->execute();
        $query->setFetchMode(PDO::FETCH_CLASS, BooksEntity::class);
        return $query->fetchAll();
    }

    public static function hydrateDetailedBooks(PDO $db)
    {
        $query = $db->prepare('Select  `title`,`price`, `subject`, `image`, `format`, `picksCount` FROM `books`');
        $query->execute();
        $query->setFetchMode(PDO::FETCH_CLASS, DetailedBooksEntity::class);
        return $query->fetchAll();
    }


}
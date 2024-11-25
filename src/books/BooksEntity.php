<?php

namespace subsBooks\books;
use JsonSerializable;

class BooksEntity implements JsonSerializable
{
    private string $title;
    private string $author;
    private string $isbn;

//    public function __construct(string $title, string $author, string $isbn)
//    {
//        $this->title = $title;
//        $this->author = $author;
//        $this->isbn = $isbn;
//    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getIsbn(): string
    {
        return $this->isbn;
    }

    public function jsonSerialize(): mixed
    {
        return [
            'title' => $this->title,
            'author' => $this->author,
            'isbn' => $this->isbn
        ];
    }

}
<?php

namespace subsBooks\books;
use subsBooks\books\BooksEntity as BooksEntity;
class DetailedBooksEntity extends BooksEntity implements \JsonSerializable
{
    private float $price;
    private string $subject;
    private string $image;
    private string $format;
    private int $picksCount;

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @return string
     */
    public function getSubject(): string
    {
        return $this->subject;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @return string
     */
    public function getFormat(): string
    {
        return $this->format;
    }

    /**
     * @return int
     */
    public function getPicksCount(): int
    {
        return $this->picksCount;
    }

    public function jsonSerialize(): mixed
    {
        return [
            'title' => $this->getTitle(),
            'price' => $this->getPrice(),
            'genre' => $this->getSubject(),
            'image' => $this->getImage(),
            'format' => $this->getFormat(),
            'picks' => $this->getPicksCount()
        ];
    }
}
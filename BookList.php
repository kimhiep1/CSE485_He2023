<?php
class BookList {
    private $books = [];

    public function addBook(Book $book) {
        $this->books[] = $book;
    }

    public function getBooks() {
        return $this->books;
    }

    public function sortByAuthor() {
        usort($this->books, function($a, $b) {
            return strcmp($a->getAuthor(), $b->getAuthor());
        });
    }

    public function sortByTitle() {
        usort($this->books, function($a, $b) {
            return strcmp($a->getTitle(), $b->getTitle());
        });
    }

    public function sortByPublishYear() {
        usort($this->books, function($a, $b) {
            return $a->getPublishYear() - $b->getPublishYear();
        });
    }
}
?>

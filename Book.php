<?php
class Book implements IBook {
    private $title;
    private $author;
    private $publisher;
    private $publishYear;
    private $isbn;
    private $chapters;

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function setAuthor($author) {
        $this->author = $author;
    }

    public function getPublisher() {
        return $this->publisher;
    }

    public function setPublisher($publisher) {
        $this->publisher = $publisher;
    }

    public function getPublishYear() {
        return $this->publishYear;
    }

    public function setPublishYear($publishYear) {
        $this->publishYear = $publishYear;
    }

    public function getISBN() {
        return $this->isbn;
    }

    public function setISBN($isbn) {
        $this->isbn = $isbn;
    }

    public function getChapters() {
        return $this->chapters;
    }

    public function setChapters($chapters) {
        $this->chapters = $chapters;
    }

    public function displayInfo() {
        echo "Title: " . $this->title . "<br>";
        echo "Author: " . $this->author . "<br>";
        echo "Publisher: " . $this->publisher . "<br>";
        echo "Publish Year: " . $this->publishYear . "<br>";
        echo "ISBN: " . $this->isbn . "<br>";
        echo "Chapters: " . implode(", ", $this->chapters) . "<br>";
        echo "<br>";
    }
}
?>

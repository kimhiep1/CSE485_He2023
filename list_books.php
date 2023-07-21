<?php
include 'IBook.php';
include 'BookList.php';
include 'Book.php';
session_start();

if (isset($_SESSION['bookList'])) {
    $bookList = $_SESSION['bookList'];
    $books = $bookList->getBooks();
} else {
    $books = [];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Danh sách sách</title>
</head>
<body>
    <h1>Danh sách sách</h1>
    <a href="index.php">Thêm sách</a>
    <br><br>
    <form action="list_books.php" method="post">
        <label for="sort_option">Sắp xếp theo:</label>
        <select name="sort_option" id="sort_option">
            <option value="author">Tác giả</option>
            <option value="title">Tên sách</option>
            <option value="publish_year">Năm xuất bản</option>
        </select>
        <input type="submit" value="Sắp xếp">
    </form>
    <br>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $sortOption = $_POST['sort_option'];
        if ($sortOption == 'author') {
            $bookList->sortByAuthor();
        } elseif ($sortOption == 'title') {
            $bookList->sortByTitle();
        } elseif ($sortOption == 'publish_year') {
            $bookList->sortByPublishYear();
        }
        $_SESSION['bookList'] = $bookList;
    }
    ?>

    <?php foreach ($books as $book) : ?>
        <?php $book->displayInfo(); ?>
    <?php endforeach; ?>
</body>
</html>

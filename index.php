<?php
// index.php - Trang thêm sách mới
include '../TH1B/IBook.php';
include '../TH1B/Book.php';
include '../TH1B/BookList.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $book = new Book();
    $book->setTitle($_POST['title']);
    $book->setAuthor($_POST['author']);
    $book->setPublisher($_POST['publisher']);
    $book->setPublishYear($_POST['publish_year']);
    $book->setISBN($_POST['isbn']);
    $chapters = explode(",", $_POST['chapters']);
    $book->setChapters($chapters);

    $bookList = new BookList();
    $bookList->addBook($book);

    $_SESSION['bookList'] = $bookList;
    header("Location: list_books.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Quản lý sách</title>
</head>
<body>
    <h1>Quản lý sách</h1>
    <form action="index.php" method="post">
        <label for="title">Tên sách:</label>
        <input type="text" id="title" name="title" required><br>

        <label for="author">Tác giả:</label>
        <input type="text" id="author" name="author" required><br>

        <label for="publisher">Nhà xuất bản:</label>
        <input type="text" id="publisher" name="publisher" required><br>

        <label for="publish_year">Năm xuất bản:</label>
        <input type="number" id="publish_year" name="publish_year" required><br>

        <label for="isbn">Số hiệu ISBN:</label>
        <input type="text" id="isbn" name="isbn" required><br>

        <label for="chapters">Danh mục chương sách (phân cách bằng dấu phẩy):</label>
        <input type="text" id="chapters" name="chapters" required><br>

        <input type="submit" value="Thêm sách">
    </form>
</body>
</html>

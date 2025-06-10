<?php
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $user_id = $_POST['user_id'];
  $email = $_POST['email'];
  $book_title = $_POST['book_title'];
  $date = $_POST['date'];
  $contact = $_POST['contact'];
  $isbn = $_POST['isbn']; // <-- Make sure this is passed from the form

  $stmt = $conn->prepare("INSERT INTO borrow_records (user_id, email, book_title, date, contact) VALUES (?, ?, ?, ?, ?)");
  $stmt->bind_param("sssss", $user_id, $email, $book_title, $date, $contact);

  if ($stmt->execute()) {
    // Redirect to book_read.php with success flag
    header("Location: read_book.php?id=" . urlencode($isbn) . "&borrowed=1");
    exit;
  } else {
    // Redirect with error (optional: you can show a different popup if needed)
    header("Location: read_book.php?id=" . urlencode($isbn) . "&borrowed=0&error=" . urlencode($stmt->error));
    exit;
  }

  $stmt->close();
  $conn->close();
}
?>

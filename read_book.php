<?php
include 'db_connect.php';

$isbn = $_GET['id'] ?? '';
$isbn = mysqli_real_escape_string($conn, $isbn);

// Fetch book by ISBN
$query = "SELECT * FROM books WHERE isbn = '$isbn'";
$result = mysqli_query($conn, $query);
$book = mysqli_fetch_assoc($result);

// Check if book exists
if (!$book) {
    echo "Book not found.";
    exit;
}

// Check if PDF exists
$pdf_file = htmlspecialchars($book['pdf_file']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title><?= htmlspecialchars($book['title']) ?> - Read</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
        }

        .main {
            margin-left: 240px; /* sidebar width */
            flex: 1;
            padding: 20px;
            display: flex;
            flex-direction: column;
            height: 100vh;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .book-title {
            font-size: 24px;
            font-weight: bold;
        }

        .author {
            font-size: 16px;
            color: #666;
        }

        iframe {
            flex: 1;
            width: 100%;
            height: 100%;
            border: none;
        }

        button {
            background-color: #002f4b;
            color: white;
            border: none;
            padding: 10px 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #01406d;
        }
        .sidebar {
        width: 240px;
        height: 100vh;
        background-color: #0c3b5d;
        color: white;
        position: fixed;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding-top: 20px;
    }

    .logo-container {
        margin-bottom: 20px;
    }

    .logo {
        width: 80px;
        height: 80px;
        border-radius: 50%;
    }

    .sidebar a {
        color: white;
        padding: 15px 20px;
        text-decoration: none;
        width: 100%;
        text-align: left;
        transition: background 0.3s;
    }

    .sidebar a:hover {
        background-color: #145374;
    }
    </style>
</head>
<body>

    <?php include 'sidebar.php'; ?>

    <div class="main">
        <div class="header">
            <div>
                <div class="book-title"><?= htmlspecialchars($book['title']) ?></div>
                <div class="author">Author: <?= htmlspecialchars($book['author']) ?></div>
            </div>
            <a href="book_details.php"><button>Back</button></a>
        </div>

        <?php if (!empty($pdf_file) && file_exists($pdf_file)): ?>
            <iframe src="<?= $pdf_file ?>"></iframe>
        <?php else: ?>
            <p style="color: red;">Sorry, the PDF for this book is not available.</p>
        <?php endif; ?>
    </div>

</body>
</html>

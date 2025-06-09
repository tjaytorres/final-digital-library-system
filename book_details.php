<?php
// Connect to the database
include 'db_connect.php';

// Fetch books from the database
$query = "SELECT * FROM books";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Book Details</title>
  <style>
    * { box-sizing: border-box; }
    body { margin: 0; font-family: Arial, sans-serif; background-color: #f4f4f4; display: flex; }
    .sidebar { width: 200px; background-color: #0a3b5c; color: white; height: 100vh; padding: 20px 10px; display: flex; flex-direction: column; align-items: center; }
    .logo-container { margin-bottom: 30px; }
    .logo { width: 80px; height: 80px; border-radius: 50%; }
    .sidebar ul { list-style: none; padding: 0; width: 100%; }
    .sidebar ul li { margin: 15px 0; padding: 10px 15px; cursor: pointer; transition: background 0.3s; border-radius: 5px; }
    .sidebar ul li:hover { background-color: #145374; }
    .main-content { flex: 1; padding: 20px; }
    h1 { margin-bottom: 20px; }
    .book-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(220px, 1fr)); gap: 20px; }
    .book-card { background-color: white; border-radius: 10px; box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1); padding: 15px; display: flex; flex-direction: column; align-items: center; max-width: 220px; height: 100%; }
    .book-image { width: 150px; height: 220px; object-fit: cover; border-radius: 5px; margin-bottom: 10px; }
    .book-info { text-align: center; font-size: 14px; }
    .book-info p { margin: 4px 0; }
    .description { height: 50px; overflow: hidden; text-overflow: ellipsis; }
    .book-buttons { margin-top: 10px; display: flex; gap: 10px; }
    .book-buttons a button { background-color: #002f4b; color: white; border: none; padding: 6px 12px; border-radius: 5px; cursor: pointer; }
    .book-buttons a button:hover { background-color: #01406d; }
  </style>
</head>
<body>

  <div class="sidebar">
    <div class="logo-container">
      <img src="logo.png" alt="Readly Logo" class="logo">
    </div>
    <ul>
      <li>Dashboard</li>
      <li>Library</li>
      <li>Book Details</li>
      <li>Track and Record</li>
      <li>Support Page</li>
      <li>Settings</li>
      <li>Sign Out</li>
    </ul>
  </div>

  <div class="main-content">
    <h1>Book Details</h1>
    <div class="book-grid">

      <?php while ($row = mysqli_fetch_assoc($result)) : ?>
        <div class="book-card">
          <img src="<?= htmlspecialchars($row['cover_image']) ?>" alt="<?= htmlspecialchars($row['title']) ?>" class="book-image" />
          <div class="book-info">
            <strong><?= htmlspecialchars($row['title']) ?></strong>
            <p><?= htmlspecialchars($row['author']) ?></p>
            <p><strong>Genre:</strong> <?= htmlspecialchars($row['category']) ?></p>
            <p><strong>Status:</strong> <?= htmlspecialchars($row['status']) ?></p>
            <p class="description"><?= htmlspecialchars($row['description']) ?></p>
            <div class="book-buttons">
              <a href="#"><button>Borrow</button></a>
              <a href="read_book.php?id=<?= urlencode($row['isbn']) ?>"><button>Read</button></a>
            </div>
          </div>
        </div>
      <?php endwhile; ?>

    </div>
  </div>

</body>
</html>

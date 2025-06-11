<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Admin Book Edit</title>
  <link rel="stylesheet" href="css/AdminBookEdit.css" />
</head>
<body>
  <div class="container">
    <!-- Sidebar -->
    <aside class="sidebar" id="sidebar">
      <div class="logo" onclick="toggleSidebar()">
        <img src="Images/logo.png" alt="Readly Logo" />
      </div>
      <nav class="nav">
        <a href="#" onclick="toggleSidebar()"><img class="icon" src="Images/dashboard.png" alt="Dashboard Icon" /><span>Dashboard</span></a>
        <a href="#" onclick="toggleSidebar()"><img class="icon" src="Images/BookDetails.png" alt="Book Edit Icon" /><span>Book Edit</span></a>
        <a href="#" onclick="toggleSidebar()"><img class="icon" src="Images/userpage.png" alt="User Page Icon" /><span>User Page</span></a>
        <a href="#" onclick="toggleSidebar()"><img class="icon" src="Images/settings.png" alt="Settings Icon" /><span>Settings</span></a>      
      </nav>
      <div class="sign-out">
        <a href="#" onclick="toggleSidebar()"><img class="icon" src="Images/signout.png" alt="Signout Icon" /><span>Sign Out</span></a>
      </div>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
      <!-- Header with Icons -->
      <header class="header">
        <div class="header-icons">
          <img class="icon" src="Images/notif.png" alt="Notification Icon">
          <img class="icon" src="Images/profile.png" alt="Profile Icon">
        </div>
      </header>

      <!-- Title & Search Bar Section -->
      <section class="book-controls">
        <h2 class="book-title">Available Books</h2>
        <div class="search-bar">
          <input type="text" placeholder="Search" />
          <button><img src="Images/search-icon.png" alt="Search Icon"></button>
        </div>
      </section>

      <!-- Book Display Section -->
      <div class="book-section">
        <h3>Business</h3>
        <div class="book-row">
          <img src="Images/Book2.jpg" alt="The Outer Space" class="book-cover" />
          <img src="Images/book1.jpg" alt="Firstlife" class="book-cover" />
          <img src="Images/Book3.jpg" alt="Harry Potter" class="book-cover" />
          <img src="Images/Book4.png" alt="Firstlife" class="book-cover" />
          <img src="Images/Book3.jpg" alt="Harry Potter" class="book-cover" />
          <img src="Images/Book4.png" alt="Firstlife" class="book-cover" />
          <img src="Images/Book2.jpg" alt="The Outer Space" class="book-cover" />
          <img src="Images/Book4.png" alt="The Outer Space" class="book-cover" />
        </div>

        <h3>Fantasy</h3>
        <div class="book-row">
          <img src="Images/Book2.jpg" alt="The Outer Space" class="book-cover" />
          <img src="Images/book1.jpg" alt="Firstlife" class="book-cover" />
          <img src="Images/Book3.jpg" alt="Harry Potter" class="book-cover" />
          <img src="Images/Book4.png" alt="Firstlife" class="book-cover" />
          <img src="Images/Book3.jpg" alt="Harry Potter" class="book-cover" />
          <img src="Images/Book4.png" alt="Firstlife" class="book-cover" />
          <img src="Images/Book2.jpg" alt="The Outer Space" class="book-cover" />
          <img src="Images/Book3.jpg" alt="The Outer Space" class="book-cover" />
        </div>

        <h3>Horror</h3>
        <div class="book-row">
          <img src="Images/Book2.jpg" alt="The Outer Space" class="book-cover" />
          <img src="Images/book1.jpg" alt="Firstlife" class="book-cover" />
          <img src="Images/Book3.jpg" alt="Harry Potter" class="book-cover" />
          <img src="Images/Book4.png" alt="Firstlife" class="book-cover" />
          <img src="Images/Book3.jpg" alt="Harry Potter" class="book-cover" />
          <img src="Images/Book4.png" alt="Firstlife" class="book-cover" />
          <img src="Images/Book2.jpg" alt="The Outer Space" class="book-cover" />
          <img src="Images/Book4.png" alt="The Outer Space" class="book-cover" />
        </div>
      </div>
    </main>
  </div>

  <script>
    function toggleSidebar() {
      const sidebar = document.getElementById("sidebar");
      sidebar.classList.toggle("collapsed");
    }
  </script>
</body>
</html>

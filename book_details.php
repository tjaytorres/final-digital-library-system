<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Book Details</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Playfair+Display:wght@700&display=swap">
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }

    body, html {
      height: 100%;
      font-family: 'Inter', sans-serif;
      background-color: #f9f7f4;
    }

    .container { display: flex; height: 100vh; }

    /* Sidebar */
    .sidebar {
      background-color: #0e3a5d;
      width: 250px;
      color: white;
      display: flex;
      flex-direction: column;
      transition: width 0.3s ease;
    }

    .sidebar.collapsed { width: 70px; }

    .logo {
      height: 70px;
      display: flex;
      align-items: center;
      justify-content: flex-start;
      cursor: pointer;
      padding: 10px 10px;
    }

    .logo img {
      width: 50px;
      height: 50px;
      border-radius: 50%;
    }

    .nav {
      flex-grow: 1;
      display: flex;
      flex-direction: column;
      padding-top: 20px;
    }

    .nav a,
    .sign-out a {
      display: flex;
      align-items: center;
      padding: 15px 20px;
      color: white;
      text-decoration: none;
      transition: background 0.2s;
    }

    .nav a:hover,
    .sign-out a:hover {
      background-color: #12476f;
    }

    .nav .icon,
    .sign-out .icon {
      width: 25px;
      height: 25px;
      margin-right: 10px;
    }

    .nav span,
    .sign-out span {
      margin-left: 10px;
      white-space: nowrap;
    }

    .sidebar.collapsed span { display: none; }

    .sign-out { margin-top: auto; }

    /* Main Content */
    .main-content {
      flex-grow: 1;
      display: flex;
      flex-direction: column;
      overflow-y: auto;
      background-color: #fdfaf7;
    }

    .topbar {
      background-color: #ffffff;
      padding: 10px 20px;
      border-bottom: 1px solid #ccc;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .topbar .left {
      display: flex;
      align-items: center;
      gap: 10px;
      font-weight: bold;
    }

    .topbar .right img {
      width: 30px;
      height: 30px;
      margin-left: 15px;
      cursor: pointer;
    }

    .content { padding: 30px; }

    h2 { margin-bottom: 20px; }

    .book-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
      gap: 20px;
    }

    .book-card {
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
      padding: 15px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .book-image {
      width: 150px;
      height: 220px;
      object-fit: cover;
      border-radius: 5px;
      margin-bottom: 10px;
    }

    .book-info {
      text-align: center;
      font-size: 14px;
    }

    .book-info p { margin: 4px 0; }

    .description {
      height: 50px;
      overflow: hidden;
      text-overflow: ellipsis;
    }

    .book-buttons {
      margin-top: 10px;
      display: flex;
      gap: 10px;
    }

    .book-buttons button {
      background-color: #0e3a5d;
      color: white;
      border: none;
      padding: 6px 12px;
      border-radius: 5px;
      cursor: pointer;
      font-size: 14px;
    }

    .book-buttons button:hover {
      background-color: #12476f;
    }

    /* Modal Styles */
    #borrowModal {
      display: none;
      position: fixed;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      z-index: 1000;
      justify-content: center;
      align-items: center;
    }

    #borrowModal .modal-content {
      background-color: white;
      padding: 30px;
      border-radius: 10px;
      width: 400px;
      position: relative;
    }

    #borrowModal h2 {
      text-align: center;
      margin: 20px 0;
    }

    #borrowModal input {
      width: 100%;
      padding: 8px;
      margin-bottom: 15px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    #borrowModal button {
      background-color: #0e3a5d;
      color: white;
      padding: 8px 16px;
      border: none;
      border-radius: 5px;
      margin: 0 5px;
      cursor: pointer;
    }

    #borrowModal button:hover {
      background-color: #12476f;
    }
  </style>
</head>
<body>

<div class="container">
  <!-- Sidebar -->
  <aside class="sidebar" id="sidebar">
    <div class="logo" onclick="toggleSidebar()">
      <img src="/Images/logo.png" alt="Logo" />
    </div>
    <nav class="nav">
      <a href="#"><img class="icon" src="/Images/dashboard.png" /><span>Dashboard</span></a>
      <a href="#"><img class="icon" src="/Images/Library.png" /><span>Library</span></a>
      <a href="#"><img class="icon" src="/Images/Details.png" /><span>Book Details</span></a>
      <a href="#"><img class="icon" src="/Images/Track.png" /><span>Track and Record</span></a>
      <a href="#"><img class="icon" src="/Images/Support.png" /><span>Support Page</span></a>
      <a href="#"><img class="icon" src="/Images/Settings.png" /><span>Settings</span></a>       
    </nav>
    <div class="sign-out">
      <a href="#"><img class="icon" src="/Images/signout.png" /><span>Sign Out</span></a>
    </div>
  </aside>

  <!-- Main content -->
  <div class="main-content">
    <div class="topbar">
      <div class="left"></div>
      <div class="right">
        <img src="/Images/notif.png" alt="Notifications">
        <img src="/Images/profile.png" alt="Profile">
      </div>
    </div>

    <div class="content">
      <h2>Book Details</h2>
      <div class="book-grid">
        <!-- Static book cards can go here manually -->
      </div>
    </div>
  </div>
</div>

<!-- Borrow Modal -->
<div id="borrowModal">
  <div class="modal-content">
    <img src="logo.png" alt="Logo" style="width:80px; display:block; margin:auto;">
    <h2>Fill up the following</h2>
    <form id="borrowForm" action="submit_borrow.php" method="POST">
      <label>User ID</label>
      <input type="text" name="user_id" required>

      <label>Email</label>
      <input type="email" name="email" required>

      <label>Book Title</label>
      <input type="text" name="book_title" id="modalBookTitle" readonly>

      <label>Date</label>
      <input type="date" name="date" required>

      <label>Contact</label>
      <input type="text" name="contact" required>

      <div style="text-align:center;">
        <button type="submit">SUBMIT</button>
        <button type="button" onclick="closeBorrowModal()">CANCEL</button>
      </div>
    </form>
  </div>
</div>

<script>
  function toggleSidebar() {
    const sidebar = document.getElementById("sidebar");
    sidebar.classList.toggle("collapsed");
  }

  function openBorrowModal(bookTitle) {
    document.getElementById('borrowModal').style.display = 'flex';
    document.getElementById('modalBookTitle').value = bookTitle;
  }

  function closeBorrowModal() {
    document.getElementById('borrowModal').style.display = 'none';
  }
</script>

</body>
</html>

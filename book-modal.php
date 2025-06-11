<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Book Modal - The Great Gatsby</title>
  <link rel="stylesheet" href="css/book-modal.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>

<div class="modal">
  <div class="modal-content">
    <button class="close-btn" onclick="closeModal()">×</button>

    <div class="book-image">
      <img src="Images/Book3.jpg" alt="The Great Gatsby">
      <div class="tags">
        <span class="tag">Romance</span>
        <span class="tag">Fiction</span>
      </div>
    </div>
    
    <div class="book-info">
      <h1>THE GREAT GATSBY</h1>
      <p class="author">F. Scott Fitzgerald</p>

      <div class="stats">
        <div><span>👁</span> Reads<br><strong>15.5M</strong></div>
        <div><span>⭐</span> Votes<br><strong>400K</strong></div>
        <div><span>📄</span> Parts<br><strong>15</strong></div>
      </div>

      <div class="buttons">
        <button class="read-btn">READ</button>
        <button class="fav-btn">FAVORITE</button>
      </div>

      <div class="description">
        <h4>Publisher's Description:</h4>
        <p>
          Paulo Coelho’s The Alchemist is a modern 
          classic that has inspired
          a global audience with its powerful message 
          about pursuing one’s dreams...
        </p>
      </div>
    </div>
  </div>
</div>

<script>
  function closeModal() {
    document.querySelector('.modal').style.display = 'none';
  }
</script>

</body>
</html>


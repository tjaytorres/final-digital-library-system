<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Book</title>
  <link rel="stylesheet" href="css/Edit-Book-Modal.css">
</head>
<body>
  <div class="modal-overlay">
    <div class="modal-box">
      <!-- Modal Header -->
      <div class="modal-header">
        <img src="your-icon.png" alt="Icon" class="modal-icon">
        <h2>Edit Book</h2>
      </div>

      <!-- Form Layout -->
      <form class="modal-form">
        <div class="form-grid">
          <!-- Left Column -->
          <div class="left-column">
            <div class="form-group">
              <label for="title">Book Title</label>
              <input type="text" id="title" name="title">
            </div>

            <div class="form-group">
              <label for="author">Author's Name</label>
              <input type="text" id="author" name="author">
            </div>

            <div class="form-group">
              <label for="isbn">ISBN</label>
              <input type="text" id="isbn" name="isbn">
            </div>

            <div class="form-group">
              <label for="genre">Category/Genre</label>
              <input type="text" id="genre" name="genre">
            </div>

            <div class="form-group">
              <label for="publisher">Publisher</label>
              <input type="text" id="publisher" name="publisher">
            </div>
          </div>

          <!-- Right Column -->
          <div class="right-column">
            <div class="form-group icon-input">
              <label for="cover">Cover Photo</label>
              <input type="file" id="cover" name="cover">
              <img src="cover-icon.png" alt="Cover Icon" class="cover-icon">
            </div>

            <div class="form-group">
              <label for="edition">Edition</label>
              <input type="text" id="edition" name="edition">
            </div>

            <div class="form-group">
              <label for="language">Language</label>
              <input type="text" id="language" name="language">
            </div>

            <div class="form-group">
              <label for="description">Description</label>
              <textarea id="description" name="description" rows="3"></textarea>
            </div>

            <div class="form-group">
              <label for="status">Availability Status</label>
              <select id="status" name="status">
                <option value="available">Available</option>
                <option value="borrowed">Borrowed</option>
                <option value="unavailable">Unavailable</option>
              </select>
            </div>
          </div>
        </div>

        <!-- Bottom Row -->
        <div class="bottom-row">
          <div class="form-group">
            <label for="date">Publication Date</label>
            <input type="date" id="date" name="date">
          </div>

          <div class="form-group">
            <label for="location">Location Library</label>
            <input type="text" id="location" name="location">
          </div>
        </div>

        <!-- Buttons -->
        <div class="button-group">
          <button type="button" class="cancel-btn">Cancel</button>
          <button type="submit" class="save-btn">Save</button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>


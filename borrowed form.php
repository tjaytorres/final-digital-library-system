<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Borrowed Form</title>
  <link rel="stylesheet" href="css/borrowed form.css">
</head>
<body>
  <div class="modal-overlay">
    <div class="form-container">
      <img src="Images/logo.png" alt="Readly Logo" class="logo">
      <h2>Fill up the following</h2>
      <form action="#" method="POST">
        <div class="form-group">
          <label for="userId">User ID</label>
          <input type="text" id="userId" name="userId">
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email">
        </div>

        <div class="form-group">
          <label for="bookTitle">Book Title</label>
          <input type="text" id="bookTitle" name="bookTitle">
        </div>

        <div class="form-row">
          <div class="form-group">
            <label for="date">Date</label>
            <input type="date" id="date" name="date">
          </div>

          <div class="form-group">
            <label for="contact">Contact</label>
            <input type="tel" id="contact" name="contact">
          </div>
        </div>

        <div class="buttons">
          <button type="submit">SUBMIT</button>
          <button type="reset">CANCEL</button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Main Page</title>
  <link rel="stylesheet" href="css/mainpage.css" />
</head>
<body>
  <header class="navbar">
    <div class="navbar-container">
      <div class="logo">
        <img src="Images/logo.png" alt="Readly Logo" />
      </div>
      <nav class="nav-links">
        <a href="#">Home</a>
        <a href="#">About us</a>
        <a href="#">Categories</a>
        <a href="#">Contact Us</a>
        <a href="#">FAQ</a>
      </nav>
      <div class="auth-links">
        <a href="#">Log in</a>
        <a href="#" class="signup-btn">Sign up</a>
      </div>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="hero">
    <div class="hero-content">
      <div class="hero-text">
        <h1>Readly Digital Library System</h1>
        <p>Readly is a modern digital library system designed to provide easy access to a wide collection of books and resources—anytime, anywhere.</p>
        <div class="hero-buttons">
          <button class="btn-primary">Start Reading</button>
          <button class="btn-secondary">Guest</button>
        </div>
      </div>
      <div class="hero-image">
        <img src="Images/main.png" alt="Reading Illustration">
      </div>
    </div>
  </section>

  <!-- Book Categories -->
  <section class="categories">
    <h2>Book Categories</h2>
    <p class="subtitle">Explore categories for every reader—fiction, history, science, and more.</p>
    <div class="category-grid">
      <div class="category-item">
        <img src="Images/image1.png" alt="Fantasy">
        <h3>Fantasy</h3>
        <p>Step into imaginative worlds and mythical adventures.</p>
      </div>
      <div class="category-item">
        <img src="Images/image3.png" alt="History">
        <h3>History</h3>
        <p>Discover the past, explore ancient civilizations and historical events.</p>
      </div>
      <div class="category-item">
        <img src="Images/image4.png" alt="Science">
        <h3>Science</h3>
        <p>Explore knowledge from new worlds of biology, chemistry, tech, and more.</p>
      </div>
      <div class="category-item">
        <img src="Images/image1.png" alt="Drama">
        <h3>Drama</h3>
        <p>Step into the emotional rollercoaster with vivid character-driven tales.</p>
      </div>
      <div class="category-item">
        <img src="Images/image3.png" alt="Horror">
        <h3>Horror</h3>
        <p>Discover dark tales to thrill, chill, and keep you turning pages.</p>
      </div>
      <div class="category-item">
        <img src="Images/image4.png" alt="Fiction">
        <h3>Fiction</h3>
        <p>Explore stories born from the wonders of imagination, science, and society.</p>
      </div>
    </div>
  </section>

  <!-- About Us -->
  <section class="about">
    <h2>About Us</h2>
    <div class="about-content">
      <img src="Images/image2.png" alt="Bookshelf Illustration">
      <div>
        <h3>Our Journey</h3>
        <p>The idea for Readly was born out of the desire to bring the joy of reading to everyone, anytime and anywhere. What started as a small passion project has grown into a powerful platform for discovery and learning. We are a group of avid readers, designers, and developers on a mission to redefine access to literature.</p>
        <p>Readly has since personalized thousands of readers’ experiences, helping them connect with stories that inspire, educate, and entertain.</p>
      </div>
    </div>
  </section>

  <!-- Contact Us -->
  <section class="contact">
    <h2>Contact Us</h2>
    <div class="contact-grid">
      <div class="contact-info">
        <h3>Contact Information</h3>
        <p><strong>Call Us:</strong> +092345678</p>
        <p><strong>Email Us:</strong> readly@email.com</p>
      </div>
      <div class="contact-form">
        <h3>Send a Message</h3>
        <form>
          <input type="text" placeholder="Fullname" required>
          <input type="email" placeholder="Email" required>
          <textarea placeholder="Message" required></textarea>
          <button type="submit">SEND MESSAGE</button>
        </form>
      </div>
    </div>
  </section>

  <!-- FAQ -->
    <!-- FAQ -->
  <section class="faq">
    <div class="section-header">
      <h2>Frequently Asked Questions</h2>
    </div>
    <details>
      <summary>How to sign up?</summary>
      <p>You can sign up by clicking the “Sign up” button at the top right corner and filling out your details.</p>
    </details>
    <details>
      <summary>How do I borrow books?</summary>
      <p>Go to the categories section, select a book, and click "Borrow".</p>
    </details>
    <details>
      <summary>How long can I borrow books?</summary>
      <p>The standard borrowing time is 14 days. Extensions may be requested.</p>
    </details>
    <details>
      <summary>Is there a limit to how many books I can borrow?</summary>
      <p>You can borrow up to 5 books at a time.</p>
    </details>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="footer-container">
      <p>&copy; 2025 Readly. All rights reserved.</p>
      <div class="footer-links">
        <a href="#">Privacy Policy</a>
        <a href="#">Terms of Service</a>
        <a href="#">Support</a>
      </div>
    </div>
  </footer>
</body>
</html>

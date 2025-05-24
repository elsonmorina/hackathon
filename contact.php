<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Contact Us – Hope For Children</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background-color: #fff8f0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      color: #333;
    }
    
    .hero h1 {
      font-size: 2.8rem;
      text-align: center;
    }
    
    .hero {
  background: url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?ixlib=rb-4.0.3&auto=format&fit=crop&w=1280&q=80') no-repeat center center/cover;
  height: 350px;
  color: white;
  display: flex;
  justify-content: center;
  align-items: center;
  text-shadow: 2px 2px 8px rgba(0,0,0,0.7);
  margin-bottom: 40px;
}
    .info-box {
      background: #ffe9e9;
      border-left: 5px solid #b22222;
      padding: 20px;
      margin-bottom: 30px;
      border-radius: 6px;
    }
    label {
      font-weight: 600;
      color: #a03030;
    }
    .btn-danger {
      background-color: #b22222;
      border: none;
    }
    .btn-danger:hover {
      background-color: #801515;
    }
    .footer {
      text-align: center;
      font-size: 0.9rem;
      color: #555;
      margin-top: 4rem;
      padding-bottom: 2rem;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <div class="container">
    <a class="navbar-brand" href="index.php">HopeForChildren</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="children_in_war.php">Children in War</a></li>
        <li class="nav-item"><a class="nav-link" href="donate.php">Donate</a></li>
        <li class="nav-item"><a class="nav-link active" href="contact.php">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero Section -->
<div class="hero">
  <h1>Contact Us</h1>
</div>

<!-- Contact Info -->
<div class="container">
  <div class="info-box">
    <h5><strong>📍 Address:</strong></h5>
    <p>Hope for Children Foundation<br>
    123 Humanity Street<br>
    Amman, Jordan</p>

    <h5><strong>📞 Phone:</strong></h5>
    <p>+962 7 9999 9999</p>

    <h5><strong>📧 Email:</strong></h5>
    <p><a href="mailto:contact@hopeforchildren.org">contact@hopeforchildren.org</a></p>

    <h5><strong>🕒 Office Hours:</strong></h5>
    <p>Sunday – Thursday: 9:00 AM – 5:00 PM<br>GMT +3</p>
  </div>

  <!-- Contact Form -->
  <form action="contact.php" method="POST">
    <div class="mb-3">
      <label for="name" class="form-label">Your Name *</label>
      <input type="text" class="form-control" id="name" name="name" required />
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">Your Email *</label>
      <input type="email" class="form-control" id="email" name="email" required />
    </div>

    <div class="mb-3">
      <label for="subject" class="form-label">Subject *</label>
      <input type="text" class="form-control" id="subject" name="subject" required />
    </div>

    <div class="mb-3">
      <label for="message" class="form-label">Your Message *</label>
      <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
    </div>

    <button type="submit" class="btn btn-danger w-100">Send Message</button>
  </form>
</div>

<!-- Footer -->
<div class="footer">
  &copy; 2025 Hope for Children in War Zones | Compassion is our strength.
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

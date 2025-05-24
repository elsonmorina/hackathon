<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Donate to Help Children in War</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background-color: #fff8f0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      color: #333;
      line-height: 1.6;
    }
    .hero {
      background: url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80') no-repeat center center/cover;
      height: 250px;
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
      text-shadow: 2px 2px 8px rgba(0,0,0,0.7);
      margin-bottom: 40px;
    }
    .hero h1 {
      font-size: 2.8rem;
      text-align: center;
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
        <li class="nav-item"><a class="nav-link active" href="donate.php">Donate</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="hero">
  <h1>Support Children Affected by War</h1>
</div>

<div class="container">
  <form action="donate.php" method="POST" novalidate>
    <div class="mb-3">
      <label for="name" class="form-label">First Name *</label>
      <input type="text" class="form-control" id="name" name="name" required>
    </div>

    <div class="mb-3">
      <label for="surname" class="form-label">Surname *</label>
      <input type="text" class="form-control" id="surname" name="surname" required>
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">Email *</label>
      <input type="email" class="form-control" id="email" name="email" required>
    </div>

    <div class="mb-3">
      <label for="country" class="form-label">Country *</label>
      <input type="text" class="form-control" id="country" name="country" required>
    </div>

    <div class="mb-3">
      <label for="amount" class="form-label">Donation Amount (USD) *</label>
      <input type="number" class="form-control" id="amount" name="amount" required min="1">
    </div>

    <button type="submit" class="btn btn-danger w-100">Donate Now</button>
  </form>
</div>

<div class="footer">
  &copy; 2025 Hope for Children in War Zones | Compassion is our strength.
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

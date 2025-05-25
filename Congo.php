<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Children in Congo (DRC) – War's Youngest Victims</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background-color: #fff8f0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      color: #333;
      line-height: 1.6;
    }
    .hero {
      background:url('war_images/congo.jpg')no-repeat center center/cover;
      height: 350px;
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
      text-shadow: 2px 2px 8px rgba(0,0,0,0.7);
      margin-bottom: 40px;
    }
    .hero h1 {
      font-size: 3rem;
      text-align: center;
    }
    .content {
      max-width: 900px;
      margin: auto;
      padding: 0 1rem 3rem;
    }
    h2 {
      color: #b22222;
      margin-top: 2rem;
      margin-bottom: 1rem;
    }
    .stat {
      font-weight: bold;
      color: #a03030;
      margin-bottom: 1rem;
      font-size: 1.2rem;
    }
    blockquote {
      font-style: italic;
      background: #ffe6e6;
      border-left: 5px solid #b22222;
      margin: 2rem 0;
      padding: 1rem 1.5rem;
      color: #800000;
    }
    .footer {
      text-align: center;
      font-size: 0.9rem;
      color: #555;
      margin-top: 4rem;
      padding-bottom: 2rem;
    }
  .war-navbar {
  flex-direction: column;
  width: auto;
  position: absolute;
  top: 58px; 
  left: 0;
  background-color: #333;
  padding: 10px 0;
  border-radius: 0 6px 6px 0;
  z-index: 1000;
}

.war-navbar .navbar-collapse {
  display: flex !important;
  flex-direction: column;
  align-items: flex-start;
}

.war-navbar .navbar-nav {
  flex-direction: column;
}

.war-navbar .nav-item {
  width: 100%;
}

.war-navbar .nav-link {
  display: block;
  padding: 10px 15px;
  width: 180px;
  white-space: nowrap;
  border-bottom: 1px solid #444;
}
    .war-navbar .nav-link.active {
  color: #ffc107 !important;  /* For example, a yellow accent */
  font-weight: 700;
  text-decoration: none;
  background-color: transparent;
}
@media (max-width: 991.98px) {
  .war-navbar .navbar-collapse {
    display: none !important;
  }
}
.war-navbar .navbar-brand {
  font-size: 1.3rem;
  text-transform: uppercase;
  letter-spacing: 1px;
  color: #ffc107 !important; /* Bootstrap warning yellow */
  padding: 0.5rem 1rem;
  border-left: 4px solid #ffc107;
  margin-right: 1rem;
}

/* Optional: Add hover effect */
.war-navbar .navbar-brand:hover {
  color: #fff8dc !important;
}
.war-navbar {
  flex-direction: column;
  width: auto;
  position: absolute;
  top: 58px;
  bottom: 0; /* Add this */
  left: 0;
  background-color: #333;
  padding: 10px 0;
  border-radius: 0 6px 6px 0;
  z-index: 1000;
  height: calc(100vh - 58px); /* Make it full height minus top offset */
  overflow-y: auto; /* Optional: scroll if items overflow */
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
          <li class="nav-item"><a class="nav-link active" href="#">Children in War</a></li>
          <li class="nav-item"><a class="nav-link" href="Donate.php">Donate</a></li>
          <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
          <li class="nav-item"><a class="nav-link" href="dashboard.php">Dashboard</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark war-navbar">
    <div class="container">
      <!-- <a class="navbar-brand" href="#">Countries in War</a> -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#warCountriesNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="warCountriesNav">
        <ul class="navbar-nav">
          <a class="navbar-brand" href="#">Countries in War</a>
          <li class="nav-item"><a class="nav-link" href="children_in_war.php">Gaza</a></li>
          <li class="nav-item"><a class="nav-link" href="syria.php">Syria</a></li>
          <li class="nav-item"><a class="nav-link" href="yemen.php">Yemen</a></li>
          <li class="nav-item"><a class="nav-link" href="sudan.php">Sudan</a></li>
          <li class="nav-item"><a class="nav-link" href="ukraine.php">Ukraine</a></li>
          <li class="nav-item"><a class="nav-link" href="Afghanistan.php">Afghanistan</a></li>
          <li class="nav-item"><a class="nav-link active" href="Congo.php">Congo (DRC)</a></li>
          <li class="nav-item"><a class="nav-link" href="ethiopia.php">Ethiopia</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <div class="hero">
    <h1>Children in Congo (DRC)</h1>
  </div>

  <div class="content">
    <p>
      In the Democratic Republic of the Congo, children are growing up amid armed conflict, poverty, and displacement. The crisis has led to unimaginable suffering for millions of young lives across the region.
    </p>

    <h2>What They're Facing</h2>
    <p class="stat">💔 Over 13 million children in the DRC are in need of humanitarian assistance.</p>
    <p class="stat">📚 Conflict has forced millions out of school, many for years at a time.</p>
    <p class="stat">🏥 Healthcare access is limited due to violence, displacement, and underfunding.</p>
    <p class="stat">😔 Children are at risk of recruitment by armed groups, abuse, and exploitation.</p>
    <p class="stat">🍽️ Malnutrition is widespread, with food insecurity affecting over 6 million children.</p>

    <h2>In Their Own Words</h2>
    <blockquote>
      "I saw people running and screaming. We hid in the forest for three days." – Jean, 12 years old
    </blockquote>
    <blockquote>
      "I want to be a nurse so I can help children like me." – Amina, 9 years old
    </blockquote>

    <h2>What This Does to a Child</h2>
    <p>
      Violence and instability shatter a child’s sense of security. In Congo, many children grow up knowing only conflict, hunger, and fear — robbing them of a peaceful childhood and the opportunity to thrive.
    </p>

    <p>
      These young lives need urgent help, not just for survival, but to reclaim hope, safety, and the right to grow and learn.
    </p>

    <h2>How You Can Stand With Them</h2>
    <p>
      Every child deserves a future free from war and hunger. You can support by spreading awareness and donating to trusted organizations committed to protecting children in the DRC.
    </p>

    <p>
      Learn more and support via: <a href="https://www.unicef.org/drcongo/en" target="_blank">UNICEF DRC</a>, <a href="https://www.savethechildren.org" target="_blank">Save the Children</a>, <a href="https://www.wfp.org/countries/congo-democratic-republic" target="_blank">World Food Programme</a>.
    </p>
  </div>

  <div class="footer">
    &copy; 2025 Hope for Children in War Zones | Speak for those who cannot speak.
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

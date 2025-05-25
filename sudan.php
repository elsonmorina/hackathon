<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Children in Sudan – War's Youngest Victims</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background-color: #fff8f0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      color: #333;
      line-height: 1.6;
    }
    .hero {
      background:url('war_images/sudan.jpg')no-repeat center center/cover;
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
          <li class="nav-item"><a class="nav-link active" href="sudan.php">Sudan</a></li>
          <li class="nav-item"><a class="nav-link" href="ukraine.php">Ukraine</a></li>
          <li class="nav-item"><a class="nav-link" href="Afghanistan.php">Afghanistan</a></li>
          <li class="nav-item"><a class="nav-link" href="Congo.php">Congo (DRC)</a></li>
          <li class="nav-item"><a class="nav-link" href="ethiopia.php">Ethiopia</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <div class="hero">
    <h1>Children in Sudan</h1>
  </div>

  <div class="content">
    <p>
      Sudan's ongoing conflict has created a dire humanitarian crisis, especially for children. Violence, displacement, hunger, and collapsed infrastructure have put millions of young lives at risk.
    </p>

    <h2>What They're Facing</h2>
    <p class="stat">💔 Over 13 million children are in urgent need of aid across Sudan.</p>
    <p class="stat">📚 More than 6 million children are out of school due to violence and instability.</p>
    <p class="stat">🍽️ Acute malnutrition is rising rapidly, especially among displaced children.</p>
    <p class="stat">🏥 Medical facilities are often looted, closed, or unreachable.</p>
    <p class="stat">😢 Children are exposed to trauma, child labor, recruitment, and violence.</p>

    <h2>In Their Own Words</h2>
    <blockquote>
      "We had to run when the shooting started. I haven’t seen my father since." – Mariam, 10 years old
    </blockquote>
    <blockquote>
      "I dream of going back to school. I want to become a teacher." – Yousif, 13 years old
    </blockquote>

    <h2>What This Does to a Child</h2>
    <p>
      Conflict robs children of safety, education, and a healthy future. The ongoing war exposes them to deep emotional wounds, developmental delays, and a life without stability or care.
    </p>

    <p>
      Without swift international action and peace, Sudan’s children face an uncertain and often tragic future.
    </p>

    <h2>How You Can Stand With Them</h2>
    <p>
      Raise your voice, spread awareness, and support relief efforts. Together, we can protect children and give them hope in even the darkest moments.
    </p>

    <p>
      Learn more or donate through trusted sources: <a href="https://www.unicef.org/emergencies/sudan-crisis" target="_blank">UNICEF Sudan</a>, <a href="https://www.savethechildren.org" target="_blank">Save the Children</a>, <a href="https://www.wfp.org/emergencies/sudan-emergency" target="_blank">World Food Programme</a>.
    </p>
  </div>

  <div class="footer">
    &copy; 2025 Hope for Children in War Zones | Speak for those who cannot speak.
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

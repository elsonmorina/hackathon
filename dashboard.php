<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style> 
  body {
      background-color: #fff8f0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      color: #333;
      line-height: 1.6;
    }

    

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 2rem;
    }

    thead {
      background-color: #b22222;
      color: white;
    }

    th, td {
      padding: 12px 15px;
      border: 1px solid #ccc;
      text-align: left;
    }

    tr:nth-child(even) {
      background-color: #fdf2ef;
    }

    tr:hover {
      background-color: #ffe6e6;
    }

    .action-links a {
      color: #b22222;
      text-decoration: none;
      margin-right: 10px;
    }

    .action-links a:hover {
      text-decoration: underline;
    }

    .top-links {
      margin-top: 2rem;
      display: flex;
      justify-content: space-between;
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
		<?php
		include_once('config.php');
		$getusers = $conn->prepare("SELECT * FROM users");
		$getusers ->execute();
		$users = $getusers->fetchall();
		?>
	 <table>
    <header>
    
  </header>

    <!-- 🌍 Navbar -->
   <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
      <a class="navbar-brand" href="index.php">HopeForChildren</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link " href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="children_in_war.php">Children in War</a></li>
          <li class="nav-item"><a class="nav-link" href="donate.php">Donate</a></li>
          <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
          <li class="nav-item"><a class="nav-link active" href="dashboard.php">Dashboard</a></li>
        </ul>
      </div>
    </div>
  </nav>
		<thead>
			
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Surname</th>
				<th>Email</th>
				<th>Country</th>
				<th>Amount</th>
                
			</tr>
	</thead>

	<?php
		foreach($users as $user){
			?>
	<tr>
		<td><?=$user['id']?></td>
		<td><?=$user['name']?></td>
		<td><?=$user['surname']?></td>
		<td><?=$user['email']?></td>
		<td><?=$user['country']?></td>
		<td><?=$user['amount']?></td>
		
	</tr>
	<?php	
	}
	?>
	 </table>

	 
</body>
</html>
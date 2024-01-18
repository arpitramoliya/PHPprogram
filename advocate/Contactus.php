<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="Home.css">
    <title>Contact Us</title>
</head>
<body>
<h1 class="ex1">File Manage</h1>

<header>
  <nav class="navbar container">
      <li class="nav-item">
        <a href="Home.php" class="nav-link">HOME</a>
      </li>
      <li class="nav-item">
        <a href="Contactus.php" class="nav-link">CONTACT US</a>
      </li>
      <li class="nav-item">
        <a href="BankDetails.php" class="nav-link">Bank Details</a>
      </li>
      <li class="nav-item">
        <a href="File.php" class="nav-link">File</a>
      </li>
      <div class="active"></div>
      </ul>
</nav>
</header>
    
<div class="container mt-3">
  <h2>Contact Us</h2>
  <form action="Backend.php" method="post">
    <div class="mb-3 mt-3">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" required>
    </div>
    <div class="mb-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email add" >
    </div>
    <div class="mb-3 mt-3">
      <label for="contact">Contact:</label>
      <input type="text" class="form-control" id="contact" name="contact" placeholder="Enter Contect" required>
    </div>
    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

    <!--<div class="signup-container">
        <h2>Contact Us</h2>
        <form action="Backend.php" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="contact">Contact</label>
                <input type="tel" id="contact" name="contact" required>
            </div>
    
            <div class="form-group">
            <button type="submit"  id="add">Sign Up</button>
            </div>
        </form>
    </div>-->
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="Home.css"> 
    <title>File </title>
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
<!--Navigation End-->
<br>
    <h1>File Upload Form</h1>
    <form action="Backend.php" method="post">
    <div class="mb-3 mt-3">
        <label for="File">Select a file to upload:</label> 
        <input type="file" class="form-control" id=""  name="fileupload" required>
        <br>
        <button type="submit" value="Upload Image" name="submit" class="btn btn-primary" id="add">Submit</button>
    </div>
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bank Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="Home.css">
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

<div class="container mt-3">
  <h2><u>Bank Details</u></h2>
  <form method="post" action="Backend.php">
   <b>
    <div class="mb-3 mt-3">
      <label for="accountNumber">Account Number:</label>
      <input type="text" class="form-control" id=""  name="accountnumber"  placeholder="Enter Account Number" required>
    </div>

    <div class="mb-3">
      <label for="accountName">Accountr's Name:</label>
      <input type="text" class="form-control" id="" name="accountname" placeholder="Enter password" required>
    </div>

    <div class="mb-3">
        <label for="accountType">Account Type:</label>
        <input type="text" class="form-control" id="" name="accounttype" placeholder="Enter Account Type"  required>
    </div>

    <div class="mb-3">
        <label for="cifNumber">CIF Number:</label>
        <input type="text" class="form-control" id="" name="cifnumber" placeholder="Enter CIF Number"  required>
    </div>

    <div class="mb-3">
      <label for="ifsCode">IFS Code:</label>
      <input type="text" class="form-control" id="" name="ifscode" placeholder="Enter IFS Code"  required>
    </div>

    <div class="mb-3">
      <label for="micrCode">MICR Code:</label>
      <input type="text" class="form-control" id="" name="micrcode" placeholder="Enter MICR Code"  required>
    </div>

    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember" require> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary" id="add">Submit</button>
    <button type="reset" class="btn btn-primary">Reset</button>
    </b>
  </form>
</div>

</body>
</html>
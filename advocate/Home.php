<?php
    require 'Config.php';
    $qry = "SELECT * FROM `contactus`";
    $query = "SELECT * FROM `bankinfo`";
    $run = mysqli_query($conn,$qry);
    $runn = mysqli_query($conn, $query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  
    <link rel="stylesheet" href="Home.css">
    <title>File Manage</title>
</head>
<body>
    <h1 class="ex1">File Manage</h1>

  <header>
    <nav class="navbar container">
        <li class="nav-item">
          <a href="#" class="nav-link">HOME</a>
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

<div class="container">
    <h3 class="text-center m-4">Manage credentials</h3>
    <hr>
      <div class="d-grid gap-2">
      <a href="Contactus.php" class="btn btn-primary btn-block" name="add">New Client joing</a>
      </div>
    <hr>
      </div>
    <!--Contact Us Table-->
    <hr>
  <h3>Contact Us Information</h3>
  <table class="table table-bordered table-centered">
    <thead>
      <tr>
        <th>ID</th>
        <th class="name">Name</th>
        <th class="email">Email</th>
        <th class="contact">Contact</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php
        while($row = $run->fetch_assoc()){
          $id = $row['id'];

          echo"<tr>
              <td>" . $row['id'] . "</td>
              <td>" . $row['name'] . "</td>
              <td>" . $row['email'] . "</td>
              <td>" . $row['contact'] . "</td>";
            echo '<td>
                  <a href="edit.php?id='.$id.'" class="btn btn-primary">Edit</button>
                  <a href="delete.php?id='.$id.'" class="btn btn-danger">Delete</button>
                  </td>';
              }
      ?>
    </tbody>
    <!--Bank Details Information Table-->

  <table class="table table-bordered table-centered">
  <h3>Bank Details Information</h3>
    <thead>
      <tr>

        <th class="">Account Number</th>
        <th class="">Accountr's Name</th>
        <th class="">Account Type</th>
        <th class="">CIF Number</th>
        <th class="">IFS Code</th>
        <th class="">MICR Code</th>
      </tr>
    </thead>
    <tbody>
      <?php
        while($row = $runn->fetch_assoc()){
          $id = $row['id'];

          echo"<tr>
              <td>" . $row['accountnumber'] . "</td>
              <td>" . $row['accountname'] . "</td>
              <td>" . $row['accounttype'] . "</td>
              <td>" . $row['cifnumber'] . "</td>
              <td>" . $row['ifscode'] . "</td>
              <td>".$row['micrcode']."</td>";

          }
      ?>
    </tbody>
</body>
</html>
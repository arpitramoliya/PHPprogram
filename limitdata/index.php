<?php
  require "connection.php";

  $page = 0;
  if(isset($_GET['page'])){
      $page = $_GET['page'];
  }

  $offset = ($page *10);
  $qry = "SELECT * FROM `details` limit 10 offset $offset ";
	  $run = mysqli_query($conn,$qry);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Limit & Offset Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="container">
    <h3 class="text-center m-4">Manage Student Details</h3>
  <hr>
    <div class="d-grid gap-2">
    <a href="studentform.php" class="btn btn-primary btn-block" name="add">New Student Join</a>
    </div>
    <hr>
    <br>
    <table class="table table-bordered table-centered">
    <thead>
      <tr>
        <th>ID</th>
        <th class="">Name</th>
        <th class="">Standard</th>
        <th class="">Medium</th>
        <th class="">contact</th>
        <th class="">gender</th>
        <th class="">email</th>
        <th class="">psssword</th>
      </tr>
    </thead>
    <tbody>
        <?php
            while($row = $run->fetch_assoc()) {
            $id = $row['id'];

            echo "<tr>
                <td>". $row['id'] ."</td>
                <td>". $row['name'] ."</td>
                <td>". $row['standard'] ."</td>
                <td>". $row['medium'] ."</td>
                <td>". $row['contact'] ."</td>
                <td>". $row['gender'] ."</td>
                <td>". $row['email'] ."</td>
                <td>". $row['psssword'] ."</td>
                </tr>";
            }
        ?>
      </table>

      <nav aria-label="Page navigation example">
      <ul class="pagination">
        <li class="page-item"><a class="page-link" href="index.php">Previous</a></li>
        <li class="page-item"><a class="page-link" href="index.php?page=1">1</a></li>
        <li class="page-item"><a class="page-link" href="index.php?page=2">2</a></li>
        <li class="page-item"><a class="page-link" href="index.php?page=3">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
      </ul>
    </nav>
</body>
</html>
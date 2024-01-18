<?php
  require "connection.php";
  $qry = "SELECT * FROM `user`";
  $run = mysqli_query($conn,$qry);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
  <table class="table table-bordered table-centered">

    <tbody>
      <?php
        while($row = $run->fetch_assoc()) {
            $id = $row['id'];
            echo "<ul>
            <li>". $row['id'] ." ". $row['name'] ."</li>
            </ul>";
        }
            ?>
    </tbody>
</body>
</html>
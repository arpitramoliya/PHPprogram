<?php
    require "connection.php";

    $id = $_REQUEST['id'];
    $qry = "SELECT * FROM `sfname` WHERE `id`='$id'"; 
    $run = mysqli_query($conn,$qry);
    $data = mysqli_fetch_array($run);

    // print_r($data);
    // die;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Credentials Manage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">

  <h2><u>Stacked form</u></h2>
    <form action="edition.php" method="POST">
   <b>
    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $data['email']; ?>" required>
    </div>

    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" value="<?php echo $data['password']; ?>" required>
    </div>

    <div class="mb-3">
        <label for="software name">SF Name:</label>
        <input type="text" class="form-control" id="sfname" placeholder="Enter password" name="sfname" value="<?php echo $data['sfname']; ?>" required>
      </div>

    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember" require> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary" name="update" id="add">Submit</button>
    <button type="reset" class="btn btn-primary">Reset</button>
    </b>
  </form>
</div>

</body>
</html>
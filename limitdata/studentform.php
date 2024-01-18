<?php
  require "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container mt-3">
  <h2><u>Student form</u></h2>
  <form method="post" action="backend.php">
   <b>

   <div class="mb-3 mt-3">
      <label for="name">Student Name:</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your's name"  required>
    </div>


    <div class="mb-3 mt-3">
    <label for="name">Select Your Standard:</label>
    <select class="form-control form-control-sm" name="standard">
        <option>Std. 8</option>
        <option>Std. 9</option>
        <option>Std. 10</option>
        <option>Std. 11</option>
        <option>Std. 12 </option>
    </select>
    </div>

    <div class="mb-3 mt-3">
    <label for="name">Select Your medium:</label>
    <select class="form-control form-control-sm" name="medium">
        <option>English</option>
        <option>Gujrati</option>
    </select>
    </div>

    <div class="mb-3 mt-3">
      <label for="contact">Student Contact:</label>
      <input type="text" class="form-control" id="contact" name="contact" placeholder="Enter Your's Contact"  required>
    </div>

    <div class="mb-3 mt-3">
        <label for="Gender" >Gender:</label>
        <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1">
        <label class="form-check-label" for="flexRadioDefault1">Male</label>

        <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1">
        <label class="form-check-label" for="flexRadioDefault1">Female</label>

    </div>

    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter email"  required>
    </div>

    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" name="psssword" placeholder="Enter password"  required>
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
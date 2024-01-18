<?php
  require "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Bootstrap Animation for Form Fields</title>
  <style>
    /* Add custom CSS for the animation */
    @keyframes shake {
      0% { transform: translateX(0); }
      25% { transform: translateX(-10px); }
      50% { transform: translateX(10px); }
      75% { transform: translateX(-10px); }
      100% { transform: translateX(0); }
    }
    .form-group {
      position: relative;
    }
    .error-animation {
      animation: shake 0.5s;
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <h1>New Add Data</h1>
    <hr>
    <p id="msg"></p>
    <form action="backend.php" mathd="" id="userForm">
    <div class="form-group">
        <label for="id">Id:</label>
        <input type="text" class="form-control" id="id" name="id" required>
      </div>

      <div class="form-group">
        <label for="fullname">Full Name:</label>
        <input type="text" class="form-control" id="fullname" name="fullname" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>
      <button type="submit" class="btn btn-primary" id="add">Submit</button>
      <button type="reset" class="btn btn-primary">Reset</button>
    </form>
  </div>
    <div id="table-container"></div>
  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    $(document).on('submit','#userForm',function(e){
        e.preventDefault();
        $.ajax({
        url: "backend.php",
        method:"POST",
        data:$(this).serialize(),
        success: function(data){
        $('#msg').html(data);
        $('#userForm').find('input').val('')
    }});
});
    /*$(#add).ready(function(){
      $.ajax({
        url:'backend.php',
        method:'POST',
        data:{},
        success:function(response){
          $("#table-container").html(response)
        }
      });
    });*/
  </script>
</body>
</html>
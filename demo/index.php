<?php
	  require "connection.php"; 
		  $qry = "SELECT * FROM `sfname`";
		  $run = mysqli_query($conn,$qry);

?>

<!DOCTYPE html>
<html>
 <title>Credentials Manage</title>
<head>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    .table-centered thead th {
      text-align: center;
    }

    .table-centered tbody td {
      text-align: center;
    }

  </style>
</head>
<body class="container">
  <h3 class="text-center m-4">Manage credentials</h3>
  <hr>
    <div class="d-grid gap-2">
    <a href="form.php" class="btn btn-primary btn-block" name="add">New Client joing</a>
    </div>  
  <hr>
  <table class="table table-bordered table-centered">
    <thead>
      <tr>
        <th>ID</th>
        <th class="email">Email ID</th>
        <th class="password">Password</th>
        <th class="sfname">Sf Name</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>

      <?php
          // read data of each database table
          //$index = 1;
          while($row = $run->fetch_assoc()){
          $id = $row['id'];

         echo"<tr>
              <td>" . $row['id'] . "</td>
              <td>" . $row['email'] . "</td>
              <td>" . $row['password']. "</td>
              <td>" . $row['sfname'] . "</td>";

               //echo $index.')'.$row['id'];
            echo '<td>
                  <a href="edit.php?id='.$id.'" class="btn btn-primary">Edit</button>
                  <a href="delete.php?id='.$id.'" class="btn btn-danger">Delete</button>
                  </td>';
              }
              ?>

        <!--tr>
        <td>2</td>
        <td>jane@example.com</td>
        <td>********</td>
        <td>Goolge</td>
        <td>
          <button class="btn btn-primary">Edit</button>
          <button class="btn btn-danger">Delete</button>
        </td>
      </tr>
    </tbody>
  </table>-->

  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        /*$(documentt).ready(function(){
          function deleteData(params){
            send ajax
            url:'backend.php',
            method:'post',
            data:{deleteid:params},
            success:function(res){
              alert(res);
              location.reload();
            }
          }
        });*/
        
        /*var deleteData = function(id){
        $.ajax({
            type: "POST",
            url: "delete.php",
            data:{deleteId:id},
            dataType: "html",
            success: function(res){
              toastr.success("Task deleted!");
                    setInterval(() => {
                        location.reload();
                    }, 1000);
            }
        });
      };*/


        </script>

</body>
</html>

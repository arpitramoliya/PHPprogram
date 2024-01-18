<?php
    session_start();


    if(empty($_SESSION['username'])){
        header("location:login.php");

    }

    require 'Connection.php';


    if (isset($_GET['search'])) {
        $searchTerm = mysqli_real_escape_string($conn, $_GET['search']);
        // $qry = "SELECT * FROM `student_form` WHERE `name` LIKE '%$searchTerm%'";
        $qry = "SELECT s.*, o.* 
        FROM `student_form` s
        LEFT JOIN `office_form` o ON s.id = o.student_id
        WHERE s.`name` LIKE '%$searchTerm%'"; 


        } else {
            // Display all data if search is not performed
            // $qry = "SELECT * FROM `student_form`";
                $qry = "SELECT s.*, o.batch FROM `student_form` s LEFT JOIN `office_form` o ON s.id = o.student_id"; 
        }
        $run = mysqli_query($conn, $qry);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Dashboard </title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                <div class="card-header">
                    <h4>Search Student Name</h4>

                </div>
                <div class="card-body">
                    <div class="row">
                      <div class="col-md-7">
                        <form method="GEt" action="">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="" name="search" value="" placeholder="Search your Data">
                                &nbsp; &nbsp; <button type="submit" class="btn btn-primary" name="searchs">Search</button>

                            </div>
                        </form>

                    </div>
                    <div class="col-md-5"><a href="Student_Form.php" class="btn btn-outline-info col-md-5" type="button">Add New Student</a></div>
                    <a class="nav-link" href="logout.php">Logout</a>

                </div>
            </div>
        </div>
    </div>
        <br<br>
       <hr>
        <div class="card-header">
            <h4 class="">Student Information</h4>
        </div>
        <hr>
        <table class="table table-bordered table-centered">
        <thead>
            <tr>
                <th>ID</th>
                <th class="name">Name</th>
                <th>Created Time</th>
                <th>Updated Time</th>
                <th>Office</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>

            <?php
                while($row = $run->fetch_assoc()) {
                    $id = $row['id'];

                    if($row['batch'] == NULL){
                        $office = '<a href="Office_form.php?id='.$id.'" class="btn btn-primary ">Add Office data</button>';
                    }else{
                        $office = 'Office Form Filled.';
                    }

                    echo "<tr>
                        <td>" . $row['id'] . "</td>
                        <td>" . $row['name'] . "</td>
                        <td>" . date('d/m/Y h:i:s A',strtotime($row['created_at'])) . "</td>
                        <td>" . date('d/m/Y h:i:s A',strtotime($row['updated_at'])) . "</td>";

                        echo '<td>'.$office.'</td>';
                        echo '<td><a href="View.php?id='.$id.'" class="btn btn-primary ">View Info.</button></td>';

                    echo " </tr>";
                }
            ?>

        </tbody>
        </table>

</body>
</html>

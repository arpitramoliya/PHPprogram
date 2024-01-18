<?php
    require "Connection.php";

    $id = $_REQUEST['id'];
    $qry = "SELECT * FROM `student_form` WHERE `id`='$id'"; 
    $run = mysqli_query($conn, $qry);
    $data = mysqli_fetch_array($run);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>View</title>
</head>
<body>
    <div class="container">
        <div class="card-header">
            <h4 class="">Student Information</h4>
        </div>
        <hr>
        <table class="table table-bordered table-centered">
            
            <thead>
                <tr>
                    <th width="40%">Fields</th>
                    <th>Details</th>
                </tr>
            </thead>
            <tbody>
            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                <tr>
                    <td>ID</td>
                    <td><?php echo $data['id']; ?></td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><?php echo $data['name']; ?></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><?php echo $data['address']; ?></td>
                </tr>
                <tr>
                    <td>Contact no</td>
                    <td><?php echo $data['contact']; ?></td>
                </tr>
                <tr>
                    <td>Parents Contact no</td>
                    <td><?php echo $data['parenetcontact']; ?></td>
                </tr>
                <tr>
                    <td>Date of Birth</td>
                    <td><?php echo $data['dob']; ?></td>
                </tr>
                <tr>
                    <td>Qualification</td>
                    <td><?php echo $data['qualification']; ?></td>
                </tr>
                <tr>
                    <td>Current Activity</td>
                    <td><?php echo $data['activity']; ?></td>
                </tr>
                <tr>
                    <td>Other Activity</td>
                    <td><?php echo $data['otheractivity']; ?></td>
                </tr>
                <tr>
                    <td>Course Name</td>
                    <td><?php echo $data['course']; ?></td>
                       
                </tr>
            </tbody>

                <tr>
                    <td colspan="2">
                        <a href="Student_Edit.php?id=<?php echo $data['id']; ?>" class="btn btn-success btn-block">Student Data Edit</a>
                        <a href="Student_Delete.php?id=<?php echo $data['id']; ?>" class="btn btn-success btn-danger">Student Data Delete</a>
                        <a href="office_dashboard.php?id=<?php echo $data['id']; ?>" class="btn btn-success btn-block">Office Data</a>
                        <!--<a href="Delete.php?id='.$id.'" class="btn btn-danger btn-block" name="">Student Data Delete</a>-->
                    </td>
                </tr>
            
        </table>
</div>
</body>
</html>

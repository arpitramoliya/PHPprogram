<?php
     require 'Connection.php';

     $id = $_REQUEST['id'];

     $qry = "SELECT * FROM `office_form` WHERE `student_id`='$id'"; 
     $run = mysqli_query($conn, $qry);
     $data = mysqli_fetch_array($run);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Office Dashboard </title>
</head>
<body>
    <div class="text-center container ">
        <div class="card-header">
            <h4 class="">Office Use Only</h4>
        </div>
        <?php if ($data) : ?>
            
        <table class="table table-bordered table-centered">
            <thead>
                <tr>
                    <th>Fields</th>
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
                    <td>Course</td>
                    <td><?php echo $data['course']; ?></td>
                </tr>
                <tr>
                    <td>Batch Time</td>
                    <td><?php echo $data['batch']; ?></td>
                </tr>
                <tr>
                    <td>Date of Joining</td>
                    <td><?php echo $data['joindate']; ?></td>
                </tr>
                <tr>
                    <td>Ending Date</td>
                    <td><?php echo $data['enddate']; ?></td>
                </tr>
                <tr>
                    <td>Course Duration</td>
                    <td><?php echo $data['courseduration']; ?></td>
                </tr>
                <tr>
                    <td>Inst. Scheme</td>
                    <td><?php echo $data['instscheme']; ?></td>
                </tr>
                <tr>
                    <td>Total Fees</td>
                    <td><?php echo $data['totalfees']; ?></td>
                </tr>
                <tr>
                    <td>Books</td>
                    <td><?php echo $data['books']; ?></td>
                </tr>
                <tr>
                    <td>Exam/Certificate</td>
                    <td><?php echo $data['certificate']; ?></td>
                </tr>
                <tr>
                    <td>Comments</td>
                    <td><?php echo $data['comments']; ?></td>
                </tr>
            </tbody>
                <tr>
                    <td colspan="2">
                        <a href="Office_Edit.php?id=<?php echo $data['id']; ?>" class="btn btn-success btn-block">Student Data Edit</a>
                        <a href="Office_Delete.php?id=<?php echo $data['id']; ?>" class="btn btn-success btn-danger">Student Data Delete</a>
                    </td> 
                </tr>
        </table>
        
        <?php else : ?>
            <p>No data found for the specified ID.</p>
            <a href="Office_form.php?id=<?php echo $id; ?>" class="btn btn-success btn-info">Office Data</a>
        <?php endif; ?>
        
    </div>
</body>
</html>
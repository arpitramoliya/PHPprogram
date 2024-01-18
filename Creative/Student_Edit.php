<?php
    require 'Connection.php';

    $id = $_REQUEST['id'];
    $qry = "SELECT * FROM `student_form` WHERE `id`='$id'";
    $run = mysqli_query($conn,$qry);
    $data = mysqli_fetch_array($run);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #f8f9fa; /* Background color */
        }

        .center-box {
            max-width: 600px;
            border: 2px solid #17a2b8; /* Border color */
            border-radius: 10px; /* Border radius */
            padding: 20px;
            background-color: #fff; /* Form background color */
            box-shadow: 0 0 10px rgba(0,0,0,0.1); /* Box shadow */
            animation: fadeInUp 0.5s ease-out; /* Animation */
        }

        /* Simple animation */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
    <title>Student Form</title>
</head>
<body>

    <div class="container center-box">
        <form method="POST" action="Student_Edition.php">
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
        <div class="row">
                <div class="col-md-12 p-3 text-center mb-2 border-bottom">
                    <h3>Register new Student.</h3>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-6">    

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $data['name']; ?>" placeholder="Enter your name" required>
            </div>

            <div class="form-group">
                <label for="address">Address</label>
                <textarea class="form-control" id="address" name="address" value="" placeholder="Enter Address" required><?php echo $data['address']; ?></textarea>
                <!--<input type="text" class="form-control" id="address" name="address" value="" placeholder="Enter Your Address">-->
            </div>

            <div class="form-group">
                <label for="contact">Contact no</label>
                <input type="tel" class="form-control" id="contact" name="contact" value="<?php echo $data['contact']; ?>" placeholder="Enter your contact number" required>
            </div>

            <div class="form-group">
                <label for="contact">Parents Contact no</label>
                <input type="tel" class="form-control" id="contact" name="parenetcontact" value="<?php echo $data['parenetcontact']; ?>" placeholder="Enter your contact number" required>
            </div>

            <div class="form-group">
                <label for="dob">Date of Birth</label>
                <input type="date" class="form-control" id="dob" name="dob" value="<?php echo $data['dob']; ?>" required>
            </div>
        </div>      
        <div class="col-md-6">
            <div class="form-group">
                <label for="qualification">Qualification</label>
                <input type="text" class="form-control" id="qualification" name="qualification" value="<?php echo $data['qualification']; ?>" placeholder="Enter your qualification" required>
            </div>

            <div class="form-group">
                <label for="activity">Current Activity</label>
                <input type="text" class="form-control" id="activity" name="activity" value="<?php echo $data['activity']; ?>" placeholder="Enter your current activity" required>
            </div>

            <div class="form-group">
                <label for="otheractivity">Other Activity</label>
                <textarea class="form-control" id="otheractivity" name="otheractivity"   placeholder="Enter Your Activity"><?php echo $data['otheractivity']; ?></textarea>
                <!--<input type="text" class="form-control" id="otheractivity" name="otheractivity" value="" placeholder="Enter Your other Activity" required>-->
            </div>

            <div class="form-group">
                <label for="course">Course Name</label>
                <select class="form-control" id="course" name="course"  required>
                    <option value="">--Select Your Course--</option>
                    <option value="Computer Basic"  <?php echo ($data['course'] == "Computer Basic") ? 'selected': ''; ?>>Computer Basic</option>
                    <option value="Opreting (MS Office)"  <?php echo ($data['course'] == "Opreting (MS Office)") ? 'selected': ''; ?>>Opreting (MS Office)</option>
                    <option value="CCC" <?php echo ($data['course'] == "CCC") ? 'selected': ''; ?>>CCC</option>
                    <option value="Accounting Tally"  <?php echo ($data['course'] == "Accounting Tally") ? 'selected': ''; ?>>Accounting Tally</option>
                    <option value="Garphic Designing"  <?php echo ($data['course'] == ">Garphic designing") ? 'selected': ''; ?>>Garphic Designing</option>
                    <option value="Mater Designing"  <?php echo ($data['course'] == "Master designing") ? 'selected': ''; ?>>Master Designing</option>
                    <option value="Web Designing"  <?php echo ($data['course'] == "Web designing") ? 'selected': ''; ?>>Web Designing</option>
                    <option value="Web Development"  <?php echo ($data['course'] == "Web Development") ? 'selected': ''; ?>>Web Development</option>
                    <!-- Add more options as needed -->
                </select>
            </div>
    </div>
    </div>
            <button type="submit" class="btn btn-primary" name="update">Submit</button>
            <button type="reset" class="btn btn-primary">Reset</button>
        </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

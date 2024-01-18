<?php 
  require "Connection.php";
  $id = $_REQUEST['id'];
  
    $qry = "SELECT * FROM `student_form` WHERE `id`='$id' "; 
    $run = mysqli_query($conn, $qry);
    $data = mysqli_fetch_array($run);

  // id
  //student table 

  //get course 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Course Registration Form</title>
  <style>
    body {
      background-color: #f8f9fa;
    }
    .form-container {
      max-width: 800px;
      margin: 50px auto;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
      background-color: #ffffff;
      border-radius: 8px;
    }
    .form-container h2 {
      text-align: center;
      color: #007bff;
    }
    .form-container label {
      font-weight: bold;
    }
    .trending-text {
      font-size: 24px;
      font-weight: bold;
      color: #007bff;
      text-align: center;
      margin-top: 30px;
    }
  </style>
</head>
<body>

  <div class="container form-container">
    <h2>FOR OFFICE USE ONLY</h2>
    <form action="Office_formprocess.php" method="POST">
    <input type="hidden" name="student_id" value="<?php echo $_GET['id']; ?>">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="course">Course</label>
                <input type="text" class="form-control" id="course" name="course" placeholder="Enter Course"value="<?php echo $data['course']; ?>" >
            </div>
            <div class="form-group col-md-6">
                <label for="batch">Batch Time</label>
                <input type="text" class="form-control" id="batch" name="batch" placeholder="Enter Batch Time">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="joinDate">Date of Joining</label>
                <input type="date" class="form-control" id="joinDate" name="joindate">
            </div>
            <div class="form-group col-md-6">
                <label for="endDate">Ending Date</label>
                <input type="date" class="form-control" id="endDate" name="enddate">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="courseDuration">Course Duration</label>
                <input type="text" class="form-control" id="" name="courseduration">
            </div>
            <div class="form-group col-md-6">
                <label for="instscheme">Inst. Scheme</label>
                <input type="text" class="form-control"  id="" name="instscheme">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="totalfees">Total Fees</label>
                <input type="text" class="form-control" id="" name="totalfees">
            </div>
            <div class="form-group col-md-6">
                <label for="books">Books</label>
                <input type="text" class="form-control" id="" name="books">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="exam">Exam/Certificate </label>
                <input type="text" class="form-control" id="" name="certificate">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-12">
              <label for="comments">Comments</label>
              <textarea class="form-control" id="comments" name="comments" rows="2" placeholder="Enter Comments or Design"></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="submit" class="btn btn-primary">Reset</button>
    </form>
  </div>



  <!-- Bootstrap JS and Popper.js -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

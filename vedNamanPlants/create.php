<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add New Plant</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">
        <h2>Add New Plant</h2>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Include database connection code here
            include 'db_connection.php';

            // Retrieve form data
            $heading = $_POST['heading'];
            $mainTitle = $_POST['main_title'];
            $mainDescription = $_POST['main_description'];
            $benefitsTitle = $_POST['benefits_title'];
            $benefitsDescription = $_POST['benefits_description'];

            // Handle file uploads
            $uploadDirectory = 'uploads/';  // Change this to your desired upload directory
            $uploadedFiles = [];

            foreach ($_FILES['input_files']['tmp_name'] as $key => $tmp_name) {
                $file_name = $_FILES['input_files']['name'][$key];
                $file_tmp = $_FILES['input_files']['tmp_name'][$key];

                $currentDateTime = date('YmdHis'); // Format: YYYYMMDDHHIISS
                $target_file = $uploadDirectory . $currentDateTime . '.jpg'; // Assuming the uploaded file is in JPEG format

                move_uploaded_file($file_tmp, $target_file);
                $uploadedFiles[] = $target_file;
            }

            // Insert into database
            $stmt = $conn->prepare("INSERT INTO plantsData (heading, main_title, main_description, benefits_title, benefits_description, input_file) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->execute([$heading, $mainTitle, $mainDescription, $benefitsTitle, $benefitsDescription, implode(',', $uploadedFiles)]);

            // Display success message
            echo '<div class="alert alert-success" role="alert">Record added successfully!</div>';
        }
        ?>

        <form method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="heading" class="form-label">Heading</label>
                <input type="text" class="form-control" id="heading" name="heading" required>
            </div>

            <div class="mb-3">
                <label for="main_title" class="form-label">Main Title</label>
                <input type="text" class="form-control" id="main_title" name="main_title" required>
            </div>

            <div class="mb-3">
                <label for="main_description" class="form-label">Main Description</label>
                <textarea class="form-control" id="main_description" name="main_description" rows="3"
                    required></textarea>
            </div>

            <div class="mb-3">
                <label for="benefits_title" class="form-label">Benefits Title</label>
                <input type="text" class="form-control" id="benefits_title" name="benefits_title" required>
            </div>

            <div class="mb-3">
                <label for="benefits_description" class="form-label">Benefits Description</label>
                <textarea class="form-control" id="benefits_description" name="benefits_description" rows="3" required></textarea>
            </div>

            <div class="mb-3">
                <label for="footer_input" class="form-label">Footer Input</label>
                <textarea class="form-control" id="footer_input" name="footer_input" rows="3" required></textarea>
            </div>

            <div class="mb-3">
                <label for="input_files" class="form-label">Upload Images</label>
                <input type="file" class="form-control" id="input_files" name="input_files[]" multiple>
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
            <a href="index.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
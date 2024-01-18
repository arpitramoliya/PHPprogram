<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Plant</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">
        <h2>Edit Plant</h2>

        <?php
        // Include database connection code here
        include 'db_connection.php';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Retrieve form data
            $id = $_POST['id'];
            $heading = $_POST['heading'];
            $mainTitle = $_POST['main_title'];
            $mainDescription = $_POST['main_description'];
            $benefitsTitle = $_POST['benefits_title'];
            $benefitsDescription = $_POST['benefits_description'];
            $footer_input = $_POST['footer_input'];

            // Update record in the database
            /*$stmt = $conn->prepare("UPDATE plantsData SET heading=?, main_title=?, main_description=?, benefits_title=?, benefits_description=? WHERE id=?");
        $stmt->execute([$heading, $mainTitle, $mainDescription, $benefitsTitle, $benefitsDescription, $footer_input, $id]);*/
            // Update record in the database
            $stmt = $conn->prepare("UPDATE plantsData SET heading=?, main_title=?, main_description=?, benefits_title=?, benefits_description=?, footer_input=? WHERE id=?");
            $stmt->execute([$heading, $mainTitle, $mainDescription, $benefitsTitle, $benefitsDescription, $footer_input, $id]);


            // Display success message
            echo '<div class="alert alert-success" role="alert">Record updated successfully!</div>';
        }

        // Fetch record to pre-fill the form
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $stmt = $conn->prepare("SELECT * FROM plantsData WHERE id=?");
            $stmt->execute([$id]);
            $result = $stmt->fetch();
        } else {
            // If ID is not provided, redirect to the main page
            header('Location: index.php');
            exit();
        }
        ?>

        <form method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $result['id']; ?>">

            <div class="mb-3">
                <label for="heading" class="form-label">Heading</label>
                <input type="text" class="form-control" id="heading" name="heading"
                    value="<?php echo $result['heading']; ?>" required>
            </div>

            <div class="mb-3">
                <label for="main_title" class="form-label">Main Title</label>
                <input type="text" class="form-control" id="main_title" name="main_title"
                    value="<?php echo $result['main_title']; ?>" required>
            </div>

            <div class="mb-3">
                <label for="main_description" class="form-label">Main Description</label>
                <textarea class="form-control" id="main_description" name="main_description" rows="3"
                    required><?php echo $result['main_description']; ?></textarea>
            </div>

            <div class="mb-3">
                <label for="benefits_title" class="form-label">Benefits Title</label>
                <input type="text" class="form-control" id="benefits_title" name="benefits_title"
                    value="<?php echo $result['benefits_title']; ?>" required>
            </div>

            <div class="mb-3">
                <label for="benefits_description" class="form-label">Benefits Description</label>
                <textarea class="form-control" id="benefits_description" name="benefits_description" rows="3"
                    required><?php echo $result['benefits_description']; ?></textarea>
            </div>

            <div class="mb-3">
                <label for="footer_input" class="form-label">Footer Input</label>
                <textarea class="form-control" id="footer_input" name="footer_input" rows="3"
                    required><?php echo isset($result['footer_input']) ? $result['footer_input'] : ''; ?></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="index.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
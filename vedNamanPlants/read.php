
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Plant Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2>Plant Details</h2>

    <?php
    // Include database connection code here
    include 'db_connection.php';

    // Check if ID parameter is provided
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // Fetch record from the database
        $stmt = $conn->prepare("SELECT * FROM plantsData WHERE id=?");
        $stmt->execute([$id]);
        $result = $stmt->fetch();

        if ($result) {
            // Display record details
            echo '<p><strong>Heading:</strong> ' . $result['heading'] . '</p>';
            echo '<p><strong>Main Title:</strong> ' . $result['main_title'] . '</p>';
            echo '<p><strong>Main Description:</strong> ' . $result['main_description'] . '</p>';
            echo '<p><strong>Benefits Title:</strong> ' . $result['benefits_title'] . '</p>';
            echo '<p><strong>Benefits Description:</strong> ' . $result['benefits_description'] . '</p>';
            echo '<p><strong>Benefits fotter:</strong> ' . $result['footer_input'] . '</p>';
            echo '<a href="index.php" class="btn btn-secondary">Back</a>';
        } else {
            echo '<p>Record not found.</p>';
            echo '<a href="index.php" class="btn btn-secondary">Back</a>';
        }
    } else {
        // If ID is not provided, redirect to the main page
        header('Location: index.php');
    }
    ?>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

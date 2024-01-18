<!DOCTYPE html>
<html>
<head>
    <title>Quiz Result</title>
</head>
<body>
    <h1>Quiz Result</h1>
    <?php
    // Check if the form has been submitted
    if (isset($_POST['q1']) && isset($_POST['name'])) {
        $name = $_POST['name'];
        $selected_answer = $_POST['q1'];

        // Define the correct answer
        $correct_answer = "Paris";

        // Check if the selected answer is correct
        if ($selected_answer === $correct_answer) {
            echo "<p>Congratulations, $name! You answered question 1 correctly!</p>";
        } else {
            echo "<p>Sorry, $name. Your answer was incorrect. The correct answer is $correct_answer.</p>";
        }
    } else {
        echo "<p>Please fill out the form completely.</p>";
    }
    ?>
</body>
</html>

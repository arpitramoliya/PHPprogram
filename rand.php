<?php
// Array of sample paragraphs
$paragraphs = [
    "The quick brown fox jumps over the lazy dog.",
    "To be or not to be, that is the question.",
    "All human beings are born free and equal in dignity and rights.",
    "A journey of a thousand miles begins with a single step.",
    "In the end, we will remember not the words of our enemies, but the silence of our friends."
];

// Function to get a random paragraph
function getRandomParagraph($paragraphs) {
    return $paragraphs[array_rand($paragraphs)];
}

// Initialize variables
$submitted = isset($_POST['submit']);
$typedText = $submitted ? trim($_POST['typed_text']) : '';
$randomParagraph = getRandomParagraph($paragraphs);
$correct = '';
$timeTaken = '';
$wpm = '';

if ($submitted) {
    // Get start time and end time from POST data
    $startTime = isset($_POST['start_time']) ? $_POST['start_time'] : 0;
    $endTime = time();
    $timeTaken = $endTime - $startTime; // Time in seconds
    
    // Calculate WPM
    $wordCount = str_word_count($typedText);
    $minutes = $timeTaken / 60;
    $wpm = $minutes > 0 ? round($wordCount / $minutes) : 0;

    // Compare typed text with the paragraph
    if (trim($typedText) === trim($randomParagraph)) {
        $correct = "Congratulations! Your typing is correct. Your speed: {$wpm} WPM.";
    } else {
        $correct = "Oops! The text you typed does not match. Your speed: {$wpm} WPM.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Typing Racer</title>
    <!-- Bootstrap CSS -->
    <link href="https://bootswatch.com/5/yeti/bootstrap.min.css" rel="stylesheet">
    <style>
        .paragraph {
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 10px;
            background-color: #f8f9fa;
        }
        textarea {
            resize: none;
        }
        .result {
            margin-top: 10px;
            font-weight: bold;
        }
    </style>
    <script>
        let startTime = null;

        function startTimer() {
            startTime = new Date().getTime() / 1000; // Current time in seconds
        }

        function setStartTime() {
            document.getElementById('start_time').value = startTime;
        }

        window.onload = function() {
            document.querySelector('textarea').addEventListener('focus', startTimer);
            document.querySelector('form').addEventListener('submit', setStartTime);
        }
    </script>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Typing Racer</h1>
        <p>Type the following paragraph as quickly and accurately as you can:</p>
        <div class="paragraph"><?= htmlspecialchars($randomParagraph) ?></div>
        
        <form method="post" action="" class="mb-3">
            <div class="form-group">
                <textarea class="form-control" name="typed_text" placeholder="Start typing here..."><?= htmlspecialchars($typedText) ?></textarea>
                <input type="hidden" id="start_time" name="start_time" value=""/>
            </div><br>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
        
        <?php if ($submitted): ?>
            <div class="result"><?= htmlspecialchars($correct) ?></div>
        <?php endif; ?>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

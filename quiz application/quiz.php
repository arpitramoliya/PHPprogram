<?php require 'questions.php';
    // session_start();

    $user = '';
    if(isset($_SESSION['user'])){
        $user = $_SESSION['user'];
    }
?>

<?php if(isset($_SESSION['user'])): ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Application</title>
</head>
<body>
    <h1>Hello Friend! <?php echo $user; ?></h1>
    <?php
    $i=1;
    // echo "<pre>";
    // print_r($questions);
    // echo "</pre>";
    // die;
    $rightanswers = [];
?>

    <hr>
    <form action="quizresult.php" method='post'>
        <?php
        //include 'camera.html';
        echo "<pre>";
            foreach ($questions as $key => $value) {
        // print_r($value);
        echo "<h4>".($key+1).') '.$value['question']."</h4>";
        //to display questions
        foreach ($value['options'] as $qk => $qval) {
        //print_r($qval.' <br />');
            echo "<input type='radio' name='$key' id='$key' value='{$qval}'>{$qval}</p>";

            // echo $qk;
            // if($qk){

            // }
        }

            //   echo "<h4>".($key+1).') '.$value['answer']."</h4>";
            // if($){
                // echo $qval;
            // }
            array_push($rightanswers,$value['answer']);
            }
            echo "</pre>";

            // echo $questions['']

        ?>

        <input type="submit" valur="submit">
    </form>
        <hr>
    <?php
            $_SESSION['rightAnswers'] = $rightanswers;
            // print_r($rightanswers);
    ?>
</body>
</html>
<?php else: ?>
    <h3>Session has been expired.</h3>
    
<?php endif; ?>
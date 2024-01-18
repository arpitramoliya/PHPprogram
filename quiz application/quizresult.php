// <?php 

require 'questions.php'; 
    
    // $_SESSION = [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hii! <?php echo  $_SESSION['user']; ?> <br>
        Show Your Result</h1>
    <?php
        // echo "<pre>";
        //print_r($questions);
        // echo "</pre>";
        // echo "<hr>";

    // echo $questions [1]['answer']; //mutidimensional array
    // echo "<pre>";
    // echo 'Given answers';
    // print_r($_REQUEST);
    // echo "</pre>";
    // echo "<hr>";

    // echo "<pre>";
    // echo 'Right answers';
    // print_r($_SESSION['rightAnswers']);
    // echo "</pre>";
    // echo "<hr>";

    $getMark = [];
    $i = 1;

    foreach($_REQUEST as $key => $value){
        // echo ($key+1).' = '.$value.'<br />';
        if($value[0] == $_SESSION['rightAnswers'][$key]){
            array_push($getMark,'true');
        }else{
            array_push($getMark,'false');
        }
     }

     $result = array_count_values($getMark);

     echo "<h4>You have answered right <big>".$result['true']."</big> questions.</h4>";
     echo "<h4>You have answered wrong <big>".$result['false']."</big> questions.</h4>";
    //  echo "<pre>";
    //  print_r($getMark);
    //  echo "</pre>";

    echo "<a href='logout.php'>Logout</a>";
    ?>
   
</body>
</html>
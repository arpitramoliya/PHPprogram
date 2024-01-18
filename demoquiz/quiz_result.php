<?php
     echo "<h1>Result Show</h1>";

     echo "<pre>";
     print_r($_REQUEST);
     echo "</pre>";
     echo "<hr />";

     $answer = [
          'question1' => "Rasmus Lerdorf", 
          'question2' => "Personal Home Page",
          'question3' => "Zeev Suraski",
          'question4' => "8.3",
          'question5' => "rshort",
          'question6' => ".php",
          'question7' => "sing $",
          'question8' => "all of the above",
          'question9' => "both(a)and(c)",
          'question10' => "id()",
          'question11' => "glob()",
          'question12' => "val()",
          'question13' => ";(semicolon)",
          'question14' => "\$newvar",
          'question15' => "Standard PHP Library",
          'question16' => "Brower side",
          'question17' => "true",
          'question18' => "1 and 0",
          'question19' => "Central processing unit",
          'question20' => "Operating system Apache Mysql Php Per"
     ];

     //  allUserData();//

     $getMarks = [];
     $i = 1;
     foreach($_REQUEST as $key => $value) {
          if($key == 'question'.$i){
               if($value == $answer['question'.$i]){
                    $getMarks['question'.$i] = 'true';
               }else{
                    $getMarks['question'.$i] = 'false';
               }
          }
          $i++;
      }

      echo "<h3>Checked answer</h3><hr />";
      echo "<pre>";
     print_r($getMarks);
      $ansval = array_count_values($getMarks);
      echo "<h3>Your right answers are ".$ansval['true']."</h3>";
      echo "<h3>Your false answers are ".$ansval['false']."</h3>";
      echo "</pre>";

?>

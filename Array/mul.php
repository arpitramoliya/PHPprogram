<?php

	$March = array (
    "Friday" => array(
            "1st" => 3,
            "2nd" => 10,
            "3rd" => 17,
            "4th" => 24,
            "5th" => 31 
    ),
    "Saturday" => array (
            "1st" => 4,
            "2nd" => 11,
            "3rd" => 18,
            "4th" => 25 
    ),
    "Sunday" => array (
            "1st" => 5,
            "2nd" => 12,
            "3rd" => 19,
            "4th" => 26 
    ),
    "Monday" => array (
            "1st" => 6,
            "2nd" => 13,
            "3rd" => 20,
            "4th" => 27 
    ),
    "Tuesday" => array (
            "1st" => 7,
            "2nd" => 14,
            "3rd" => 21,
            "4th" => 28 
    ),
    "Wednesday" => array (
            "1st" => 8,
            "2nd" => 15,
            "3rd" => 22,
            "4th" => 29 
    ),
    "Thursday" => array (
            "1st" => 9,
            "2nd" => 16,
            "3rd" => 23,
            "4th" => 30 
    ) 
);

 echo "<pre> <br>";
        foreach($March as $nameOfDay => $dayArray ){
         foreach($dayArray as $key => $val){
        echo $val.' is the '.$key.' '.$nameOfDay.' in March. ';
    }
}
echo "</pre>";


?>
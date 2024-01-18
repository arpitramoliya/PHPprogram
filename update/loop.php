<?php

    for($i=0; $i<=5; $i++){
        for($j=1; $j<=$i; $j++){
            echo "*";
        }
        echo "<br>";
    }

?>

<br>
<br>

<?php

    $n = 5;
    $start = 0;
    for($i=0; $i<$n; $i++) {
        for($j=0; $j<=$n-$i-1; $j++){
            echo "&nbsp;&nbsp";
        }
        while($start!=(2*$i+1)) {
            echo "*";
            $start++;
        }
        $start = 0;
        echo "<br>";
    }

?>

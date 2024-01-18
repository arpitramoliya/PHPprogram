<?php

    $str = "Hello PHP";
    echo "The string:".$str;
    echo "<br>";
    echo "TRUE - Raw 20 character binary format: ".sha1($str, TRUE);
    echo "<br>";
    echo "FALSE - 40 character hex number: ".sha1($str);

?>
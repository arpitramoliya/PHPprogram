<?php

    $hash = '$2y$10$hnQY9vdyZUcwzg2CO7ykf.a4iI5ij4Pi5ZwySwplFJM7AKUNUVssO';
    $valid = password_verify('Password1', $hash);

    echo $valid ? 'Valid' : 'Not valid';

?>
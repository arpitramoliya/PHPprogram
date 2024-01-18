<?php 
include 'backend.php';

if(isset($_POST['btn'])){

    $se = $_POST['search'];
    $data = new a();
    $data->setdatas1();
    $data->searchdatas1($se);

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>demo</title>
</head>
<body>
    <form action="index.php" method="POST">
        Search:<input type="text" name="search" id="">
        <input type="submit" value="search" name="btn">
    </form>
</body>
</html>

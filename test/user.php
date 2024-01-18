<?php
     require 'connection.php';
    $test = '';
    if(isset($_SESSION['test'])){
        $test = $_SESSION['test'];
    }
?>

<?php if(isset($_SESSION['test'])): ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <h1>Hello User! <?php echo $test; ?></h1>

    </body>
    </html>

 <?php endif; ?>
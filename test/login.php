<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $_SESSION["test"] = ""; ?>
    <class="login-box">
        <h2>LOGIN</h2>
        <form action="backend.php" method="post">
            <div class="user-box">
                <input type="text" name="email" id="email"  required>
                <label>Emial</label>
                </div>
                <div class="user-box">
                    <input type="password" name="password" id="password" required>
                    <label>Password</label>
                    </div>

                    <button type="submit" value="Upload Image" name="submit" class="btn btn-primary" id="add">Submit</button>
        </form>

</body>
</html>
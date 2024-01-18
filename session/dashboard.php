<?php 

session_start();

?>

<?php if(isset($_SESSION['email'])): ?>
<h1>Hello , <?php echo $_SESSION['email']; ?>  !</h1>
<a href="logout.php">Logout</a>
<?php else: ?>
<?php header("location:form.php"); ?>
<?php endif; ?>

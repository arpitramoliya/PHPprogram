<?php
include('config.php');
// Code for update data
if(isset($_POST['update']))
		{
		$name=$_POST['name'];
			$email=$_POST['email'];
		    $contact=$_POST['contact'];
		    $addrss=$_POST['addrss'];
		    $uid=$_GET['id'];
		$ad="update user set name=?,email=?,contactno=?,addrss=? where id=?";
        $stmt= $mysqli->prepare($ad);
        $stmt->bind_param('ssisi',$name,$email,$contact,$addrss,$uid);
          $stmt->execute();
         // $newId = $stmtins->insert_id;
          $stmt->close();	   
          echo "<script>alert('Data updated Successfully');</script>" ;
}
?>


<html>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Prepared statement</title>
<body>
<h2>Edit Data using PHP Prepared Statement</h2>
<p><a href="fetch.php">View Data</a></p>
<?php 
$id=$_GET['id'];
	$ret = "select * from user where id=?";
	$stmt2 = $mysqli->prepare($ret);
	$stmt2->bind_param('i',$id);
	$stmt2->execute();
	 $res=$stmt2->get_result();
	 $cnt=1;
	   while($row=$res->fetch_object())
	  {
	?>
<tr>
<form name="stmt" method="post">
<table>
<tr>
<td>Name :</td>
<td><input type="text" name="name" value="<?php echo $row->name;?>" required="required" /> </td>
</tr>
<tr>
<td>Email :</td>
<td><input type="email" name="email" value="<?php echo $row->email;?>" required="required" /></td>
</tr>
<tr>
<td>Contact no. :</td>
<td><input type="text" name="contact" value="<?php echo $row->contactno; ?>" required="required" /></td>
</tr>
<tr>
<td>Address :</td>
<td><textarea name="addrss" cols="30" rows="4" required="required"><?php echo $row->addrss; ?></textarea></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="update" value="Submit" /></td>
</tr>
</table>
</form>
<?php } ?>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- wordad -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:15px"
     data-ad-client="ca-pub-8906663933481361"
     data-ad-slot="5235300730"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</body>
</html>
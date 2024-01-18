<?php
include('config.php');
if(isset($_POST['submit']))
		{
		$name=$_POST['name'];
			$email=$_POST['email'];
		    $contact=$_POST['contact'];
		    $addrss=$_POST['addrss'];
		$ad="insert into user(name,email,contactno,addrss) values(?,?,?,?)";
        $stmt= $mysqli->prepare($ad);
        $stmt->bind_param($name,$email,$contact,$addrss);
          $stmt->execute();
         // $newId = $stmtins->insert_id;
          $stmt->close();	
          echo "<script>alert('Data added Successfully');</script>" ;

		    }	
		    ?>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Prepared statement</title>
<body>
<h2>Insert Data in the Database using PHP Prepared Statement</h2>
<form name="stmt" method="post">
<table>
<tr>
<td>Name :</td>
<td><input type="text" name="name" required="required" /> </td>
</tr>
<tr>
<td>Email :</td>
<td><input type="email" name="email" required="required" /></td>
</tr>
<tr>
<td>Contact no. :</td>
<td><input type="text" name="contact" required="required" /></td>
</tr>
<tr>
<td>Address :</td>
<td><textarea name="addrss" cols="30" rows="4" required="required"></textarea></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="submit" value="Submit" /></td>
</tr>

<tr>
<td></td>
<td><a href="fetch.php">View Data</a></td>
</tr>
</table>
</form>
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
<!--CUSTOMER-->
<?php
    include "connection.php";
    $sql = "SELECT * FROM customer ";
    $result = mysqli_query($conn,$sql);
?>
<!--html code-->
<html>
	<body>
        <center>
            <h2>CUSTOMER</h2>
		<table border="3" align="center">
            <tr>
                <th>Customer id</th>
                <th>Customer Name</th>
                <th>Customer Address</th>
                <th>Customer City</th>
                <th>Customer Contact</th>
            </tr>
            <?php
                while($data = mysqli_fetch_assoc($result))
                {
            ?>
                <tr>
                    <td><?php echo $data['cus_id']; ?></td>
                    <td><?php echo $data['cus_name']; ?></td>
                    <td><?php echo $data['cus_address']; ?></td>
                    <td><?php echo $data['cus_city']; ?></td>
                    <td><?php echo $data['cus_contact']; ?></td>
                </tr>

        <?php
            } 
        ?>
        </table>
        </center>
    </body>
</html><br><br>


<!--ORDER TABLE-->
<?php
    include "connection.php";
    //$qry = "SELECT * FROM ` cust_orders` ";
    $qry = 'SELECT * FROM `customer` INNER JOIN cust_orders ON cust_orders.cus_id';
    $rul = mysqli_query($conn,$qry);
?>
<html>
	<body>
        <center>
            <h2>ORDER</h2>
		<table border="4" align="center">
        <tr>
            <th>Order id</th>
            <th>Customer id</th>
            <th>Oredr Date</th>
            <th>Salman id</th>
            <th>Purch Amount</th>
        </tr>
        <?php
            while($data = mysqli_fetch_assoc($rul))
            {
            ?>
            <tr>
                <td><?php echo $data['ord_id']; ?></td>
                <td><?php echo $data['cus_id']; ?></td>
                <td><?php echo $data['ord_date']; ?></td>
                <td><?php echo $data['salesman_id']; ?></td>
                <td><?php echo $data['purch_amt']; ?></td>
            </tr>

        <?php
            } 
        ?>
        </table>
    </center>
    </body>
</html>
<br>

<!--PRODUCT-->
<?php
    include "connection.php";
    // $qury = "SELECT * FROM product ";
    $qury = 'SELECT * FROM `product` WHERE id = 1';
    $resul = mysqli_query($conn,$qury);
?>

<html>
	<body>
        <center>
            <h2>PRODUCT</h2>
		<table border="5" align="center">
            <tr>
                <th>Product id</th>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Product Description</th>
                <th>Product Status</th>
            </tr>
            <?php
                while($data = mysqli_fetch_assoc($resul))
                {
            ?>
                <tr>
                    <td><?php echo $data['id']; ?></td>
                    <td><?php echo $data['Product_name']; ?></td>
                    <td><?php echo $data['Product_price']; ?></td>
                    <td><?php echo $data['Product_description']; ?></td>
                    <td><?php echo $data['Product_status']; ?></td>
                </tr>

        <?php
            } 
        ?>

        </table>
        </center>
    </body>
</html>

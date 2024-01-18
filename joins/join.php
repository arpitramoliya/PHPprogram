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
    $qry = "SELECT * FROM  cust_orders ";
    //$qry = 'SELECT * FROM `customer` INNER JOIN cust_orders ON cust_orders.cus_id';
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

<!--Inner join-->
<?php
    include "connection.php";
    //$qry = "SELECT * FROM  cust_orders ";
    //$qry = 'SELECT * FROM `customer` INNER JOIN cust_orders ON cust_orders.cus_id';
    $qry = 'SELECT cust_orders.ord_id, customer.cus_name
            FROM cust_orders
            INNER JOIN customer ON cust_orders.cus_id = customer.cus_id ';


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


<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "car dealership";

$conn = mysqli_connect($servername, $username, $password,$db);
	
	if (!$conn) {
    	die("Connection failed: " . mysqli_connect_error());
	}

$sql = "SELECT customers.name,customers.Contact_No,customers.Address,customers.Ord_ID,orders.type from customers INNER JOIN orders on orders.Ord_ID = customers.Ord_ID;";
$result = mysqli_query($conn, $sql);
echo"<head>
	<title> TITLE</title>
    	<link rel='stylesheet' type='text/css' href='project.css'>
	<style>
		table,tr,th,td {
    	border: 1px solid grey;
    	border-collapse: collapse;
    	color:#e0e3e5;

	}
	th,td {
    padding: 10px;
}
	th{
		font-size:16px;
		text-decoration:underline;
	}
	</style>
	</head>";

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo "<body>
    	<div style='margin-left:15%'><a href='featured.php'><img src='logo1.jpg' alt='logo' height=200 width =80%></a></div>
    	<br>
    	<div style='width:100%;height:20px;text-align: center;color:#2d118e;font-size:24px'> <strong>CURRENT ORDERS</strong></div><br>
    	<table style = 'margin-left:250'>
    		<tr>
				<th> Order Id </th>
				<th> Name </th>
				<th> Contact Number</th>
				<th> Address</th>
				<th> Type </th>
			</tr>";
   		while($row = mysqli_fetch_array($result))
		{
  			echo "<tr><td>"; 
  			echo $row['Ord_ID'];
  			echo "</td><td>";   
  			echo $row['name'];
  			echo "</td><td>";    
  			echo $row['Contact_No'];
  			echo "</td><td>";
  			echo $row['Address'];
  			echo "</td><td>"; 
  			echo $row['type'];
  			echo "</td></tr>"; 
		}
echo "</table></body>"; 
} else{
    echo "0 results";
}


mysqli_close($conn);

	
?>
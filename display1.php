<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "car dealership";

$conn = mysqli_connect($servername, $username, $password,$db);
	
	if (!$conn) {
    	die("Connection failed: " . mysqli_connect_error());
	}

$sql = "SELECT * from employees;";
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
    	<div style='width:100%;height:20px;text-align: center;color:#2d118e;font-size:24px'> <strong>EMPLOYEE DETAILS</strong></div><br>
    	<table style = 'margin-left:280'>
    		<tr>
				<th> Employee Id </th>
				<th> Name </th>
				<th> Salary</th>
				<th> Start Date</th>
				<th> Branch Id </th>
				<th> Manager Id </th>
				<th> Department Id </th>
			</tr>";
   		while($row = mysqli_fetch_array($result))
		{
  			echo "<tr><td>"; 
  			echo $row['Emp_ID'];
  			echo "</td><td>";   
  			echo $row['EName'];
  			echo "</td><td>";    
  			echo $row['Salary'];
  			echo "</td><td>";
  			echo $row['Start_date'];
  			echo "</td><td>"; 
  			echo $row['B_id'];
  			echo "</td><td>";
  			echo $row['Mng_ID'];
  			echo "</td><td>";
  			echo $row['Dept_id'];
  			echo "</td></tr>"; 
		}
echo "</table></body>"; 
} else{
    echo "0 results";
}


mysqli_close($conn);

	
?>
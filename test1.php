<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "car dealership";
	
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
$conn = mysqli_connect($servername, $username, $password,$db);
if (!$conn) {
    	die("Connection failed: " . mysqli_connect_error());
	}
if(isset($_GET['test1'])){
	$query="SELECT model_no from vehicles where ord_id=(select ord_id from orders where ord_id='".$_GET['test1']."');";
	//echo $query;
	$result = mysqli_query($conn, $query);
	
	echo "<body>
    	<div style='margin-left:15%'><a href='featured.php'><img src='logo1.jpg' alt='logo' height=200 width =80%></a></div>
    	<br>";
	if (mysqli_num_rows($result) > 0) {
   		while($row = mysqli_fetch_array($result))
		{	echo "<br><br>";
  			echo "<center><image src='pics/".$row['model_no'].".jpg' height=400px width=400px></center>";
  			echo "<br><br>";
  			$nquery="select * from standards where std_no=(select std_id from vehicles where model_no='".$row['model_no']."');";
  			$nresult=mysqli_query($conn, $nquery);
  			echo "<div style='width:100%;height:20px;text-align: center;color:#2d118e;font-size:24px'> <strong>Standards</strong></div><br>
    	<table style = 'margin-left:400'>
    		<tr>
				<th> Standard Number </th>
				<th> Monoxide Production </th>
				<th> Sulphur Oxide Production</th>
			</tr>";
   			while($nrow = mysqli_fetch_array($nresult))
			{
  				echo "<tr><td>"; 
  				echo $nrow['Std_No'];
  				echo "</td><td>";   
  				echo $nrow['CO_Prod'];
  				echo "</td><td>";    
  				echo $nrow['SO2_Prod'];
  				echo "</td></tr>"; 
			}
			echo "</table>";
		}
	}
	else{
    echo "<strong style = 'margin-left:45%;color:red;font-size:30px;'>0 Results </strong>";
	}
}
else{
	echo "You are not authorized.";
}
	
?>
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "car dealership";
	$name =  $_POST["name"];
	$number =  $_POST["number"];
	$address =  $_POST["add"];
	$order_id =  $_POST["ord"];
	$type = $_POST["type"];
	$conn = mysqli_connect($servername, $username, $password,$db);
	
	if (!$conn) {
    	die("Connection failed: " . mysqli_connect_error());
	}
	//echo $_POST;
	
	if (isset($_POST['add1'])){$sql = "INSERT INTO customers (Name, Contact_No,Address,Ord_id)
	VALUES ('$name','$number','$address','$order_id');";
	
	$sql1 = "INSERT INTO orders (Ord_id,Type)
	VALUES ('$order_id','$type');";
		if (mysqli_query($conn, $sql1) && mysqli_query($conn, $sql))
		{
			 $message="Insertion successful. Returning to homepage.";
    		echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('$message')
            window.location.href='http://localhost/featured.php';
            </SCRIPT>");
		} 
		else
		{
    		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}
	
	if (isset($_POST['update'])){
		$sql = "UPDATE customers SET Name = '$name',Contact_No=$number,Address = '$address' where Ord_id = '$order_id';";
		//echo $sql;
	
	
		if (mysqli_query($conn, $sql))
		{
    		$message="Updation successful. Returning to homepage.";
    		echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('$message')
            window.location.href='http://localhost/featured.php';
            </SCRIPT>");
		} 
		else
		{
    		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}


mysqli_close($conn);

	
	
?>
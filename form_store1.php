<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "car dealership";
	$e_id =  $_POST["e_id"];
	$name =  $_POST["name"];
	$salary =  $_POST["salary"];
	$date =  $_POST["date"];
	$b_id = $_POST["b_id"];
	$m_id = $_POST["m_id"];
	$d_id = $_POST["d_id"];
	//$loc = $_POST["loc"];
	//$bname = $_POST["bname"];
	
	$conn = mysqli_connect($servername, $username, $password,$db);
	
	if (!$conn) {
    	die("Connection failed: " . mysqli_connect_error());
	}
	//echo $e_id." ".$name." ".$salary." ".$date." ".$b_id." ".$m_id." ".$d_id." ";
	
	if (isset($_POST['add1'])){$sql = "INSERT INTO employees (Emp_id, Ename,Salary,Start_date,B_id,Mng_id,Dept_id)
	VALUES ('$e_id','$name','$salary','$date','$b_id','$m_id','$d_id');";
	echo $sql;
	
	//$sql1 = "INSERT INTO branches (Branch_ID,Bname,Location)
	//VALUES ('$b_id','$bname','$loc');";
		if ( mysqli_query($conn, $sql))
		{
    		$message="Insertion successful. Returning to homepage.";
    		echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('$message')
            window.location.href='http://localhost/featured.php';
            </SCRIPT>");//header('Location: http://localhost/homepage.php');
		} 
		else
		{
    		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}
	
	if (isset($_POST['update'])){
		$sql = "UPDATE employees SET Ename = '$name',Salary=$salary,B_id = '$b_id',Mng_id = '$m_id', Dept_id = '$d_id' where Emp_id = '$e_id';";
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
//SELECT customers.name,customers.Contact_No,customers.Address,customers.Ord_ID,orders.type from customers INNER JOIN orders on orders.Ord_ID = customers.Ord_ID;

mysqli_close($conn);

	
	
?>
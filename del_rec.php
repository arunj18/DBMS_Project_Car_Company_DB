<!DOCTYPE html>

<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "car dealership";
	$order_id =  $_POST["ord"];

	$conn = mysqli_connect($servername, $username, $password,$db);
	
	if (!$conn) {
    	die("Connection failed: " . mysqli_connect_error());
	}
	

    $sql="select ord_id,type from orders where ord_id='$order_id'";
    $result=mysqli_query($conn, $sql);

    //echo "here<br>$sql<br>";
    
   
    
    if (mysqli_num_rows($result) > 0) {
        $message="Deletion successful. Returning to homepage.";
        $sql = "delete from orders where ord_id='$order_id'";
        $res=mysqli_query($conn,$sql);
        echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('$message')
            window.location.href='http://localhost/homepage.php';
            </SCRIPT>");
 
        
    }
    else
    {
        $message="Deletion unsuccessful Try again!";
        //echo "<script type='text/javascript'>alert('$message');</script>";
        echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('$message')
            window.location.href='http://localhost/delete.php';
            </SCRIPT>");
 
        
    }

     /*if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_array($result))
        {
            echo $row['ord_id'];
            echo $row['type'];
            echo $row['ord_date'];
            echo "<br>";
        }
    }
    else
        echo "<br>failed"*/

    /*
	$sql = "delete from orders where ord_id='$order_id';";
	$result = mysqli_query($conn, $sql);

	if (mysqli_query($conn, $sql)) {
		$message="Deletion successful";
    	echo "<script type='text/javascript'>alert('$message');</script>";
    }
    else
    {
    	$message="Deletion unsuccessful";
    	echo "<script type='text/javascript'>alert('$message');</script>";
    }


	
	/*while($row = mysqli_fetch_array($result))
	{
		echo $row['ord_id'];
		echo $row['type'];
		echo $row['ord_date'];
		echo "<br>";
	}*/



/*
<html  style=" width: 100%;  height: 100%;  padding: 0px;  margin: 0px;">
  	<head>
    	<title> TITLE</title>
    	<link rel="stylesheet" type="text/css" href="project.css">
    	<style type="text/css">
    		header{
                text-align: center;
                font-size: 70px;
                color: white;
                font-family: georgia;
            }
    	</style>
    </head>


	<body style=" width: 100%;  height: 100%;  padding: 0px;  margin: 0px;background-color: #1a1a1c">
    	
    	<div class="logo" style="margin-left:15%"><a href="homepage.php"><img src="logo1.jpg" alt="logo" height=200 width =80%></a></div>
    	<br>	

    	<div class="left panel" style="float:left;width:200px;height:100px;background-color: #1a1a1c;">


    	</div>

    	<div class="right panel" style="float:right;width:200px;height:100px;background-color: #1a1a1c">


    	</div>

    	<div class="main" >

           <header > Delete orders    </header>
           <br>
           <article>
                <pre style="">works!</pre>

           </article>   

        </div>

    </body>
</html>*/
?>
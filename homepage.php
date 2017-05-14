<!DOCTYPE html>
<html>
  	<head>
    	<title> TITLE</title>
    	<link rel="stylesheet" type="text/css" href="project.css">
    	
    <style type="text/css">
    .container {
    overflow: hidden;
    background-color: #333;
    font-family: Arial;
}

.container a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
}

.container a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
	</head>

	
		<body>
    <div style="margin-left:15%"><a href="featured.php"><img src="logo1.jpg" alt="logo" height=200 width =80%></a></div>
    <br>
    <div class="container">
  <a href="featured.php">Home</a>
  <a href="test.php">Search For Order</a>
  <div class="dropdown">
    <button class="dropbtn">More</button>
    <div class="dropdown-content">
      <a href="#">Log Out</a>
      <a href="#">Feedback</a>
      <a href="#">Contact Branch</a>
    </div>
  </div> 
</div>

<a href="customer1.php">
<div class="wrapper" id="a1" >
	<div style="margin-top:55px;margin-left:20px">
 	ADD OR UPDATE CUSTOMER DETAILS
 	</div>
</div></a>


<a href="employee.php">
<div class="wrapper" id="a1" >
	<div style="margin-top:55px;margin-left:20px">
 	ADD OR UPDATE EMPLOYEE DETAILS
 	</div>
</div>
</a>

<a href = "display.php">
<div class="wrapper" id="a1" >
	<div style="margin-top:55px;margin-left:20px">
 	SHOW CURRENT ORDER DETAILS
 	</div>
</div>
</a>
<a href="display1.php">
<div class="wrapper" id="a1" >
	<div style="margin-top:55px;margin-left:20px">
 	VIEW EMPLOYEE DETAILS
 	</div>
</div></a>
<a href="delete.php">
<div class="wrapper" id="a1" style='margin-bottom:30px' >
    <div style="margin-top:55px;margin-left:20px">
    DELETE ORDERS
    </div>
</div></a>

	</body>
</html>
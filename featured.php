<!DOCTYPE html>
<html>
  <head>
    <title> FEATURED </title>
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="project.css">
    <style>
    .wrapper1{display:inline-block;
      margin-left: 150px;
      margin-top: 50px;
      border-radius: 6%;
       height:350px;
      }

    .imgz1{
      width:250px;
      height:350px;
      
      border: 6px solid black;
      box-shadow: 0 5px 5px 8px rgba(0,0,0,0.24), 0 3px 3px 3px rgba(0,0,0,0.19);
      border-radius: 6%;
      
      z-index: 0;
  -webkit-transition: all 300ms;
  -moz-transition: all 300ms;
  transition: all 300ms;
  max-width: 100%;
    }
    .imgz1:hover {
      border: 6px solid red;
      -webkit-transform: scale(1.1);
  -moz-transform: scale(1.1);
  transform: scale(1.1);
  filter:opacity(70%);
    }
#a1:hover > #b1{opacity: 1;-webkit-transition: all 300ms; }
#a2:hover > #b2{opacity: 1;-webkit-transition: all 300ms;}
#a3:hover > #b3{opacity: 1;-webkit-transition: all 300ms;}
#a4:hover > #b4{opacity: 1;-webkit-transition: all 300ms;}
#a5:hover > #b5{opacity: 1;-webkit-transition: all 300ms;}
#a6:hover > #b6{opacity: 1;-webkit-transition: all 300ms;}
    .textx{
      margin-left: 60px;
      position: absolute;
      
      
      bottom:100px;
      z-index: 100;
      font-size: 30px;
      opacity: 0;
    }
    .text_1{
      
      position: absolute;
      margin-left:63px;
      text-align: center;
      bottom:-350px;
      z-index: 100;
      font-size: 30px;
      opacity: 0;
    }
    .text_2{
      
      position: absolute;
      margin-left:65px;
      text-align: center;
      bottom:-350px;
      z-index: 100;
      font-size: 30px;
      opacity: 0;
    }

    .fbuttonx1{
    background-color: #333333;
    color: green;
    border: 2px solid green; /* Green */
    border-radius: 4px;
    padding: 4px 12px;
    text-align: center;
    display: inline-block;
    font-size: 13px;
    position: relative;
    bottom:3px;
}
.fbuttonx1:hover{
    background-color:green; /* Green */
    color: white;
    box-shadow: 0 3px 3px 0 rgba(0,0,0,0.24), 0 3px 3px 0 rgba(0,0,0,0.19);
    cursor: pointer;
    transition:0.2s ease-in-out;
    transform:scale(1.1);

}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    border: 2px solid darkgreen;
    background-color: darkgreen;
        }
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
.x {
    float: right;
    font-size: 16px;
    color: white;
    position: relative;
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
    </div>
    
    <div class="container">
  <a href="featured.php">Home</a>
  <a href="homepage.php">Add or Update Details</a>
  <a href="test.php">Search for Order</a>
  <div class="dropdown">
    <button class="dropbtn">More</button>
    <div class="dropdown-content">
      <a href="#">Log Out</a>
      <a href="#">Feedback</a>
      <a href="#">Contact</a>
    </div>
    <?php 
    $servername = "localhost";
  $username = "root";
  $password = "";
  $db = "car dealership";

$conn = mysqli_connect($servername, $username, $password,$db);
  
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

$sql = "SELECT COUNT(*) as count from orders";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_array($result);
    //{echo $row['count'];}
}
    echo"<div class ='x'> Orders Pending : <span style='color:red'>".$row['count']."</span></div>"?>
  </div> 
  
</div>

<br>
<div class="wrapper1" id="a1" >
  <a href="#">
    <img src="b1.jpg" class="imgz1"></a>
    <div class="textx " id="b1">
        <pre style="text-align:center"> <i class="material-icons" style="font-size:70px;color:#DAA520">grade</i>
<span style="font-weight: bold;"> 8.7/10</span></pre> 
    </div>


</div>
<div class="wrapper1" id="a1" >
  <a href="#">
    <img src="b.jpg" class="imgz1"></a>
    <div class="textx " id="b1">
        <pre style="text-align:center"> <i class="material-icons" style="font-size:70px;color:#DAA520">grade</i>
<span style="font-weight: bold;"> 8.7/10</span></pre> 
    </div>


</div>
<div class="wrapper1" id="a3" >
  <a href="#">
    <img src="b3.jpg" class="imgz1"></a>
    <div class="textx " id="b3">
        <pre style="text-align:center"> <i class="material-icons" style="font-size:70px;color:#DAA520">grade</i>
 <span style="font-weight: bold;">9.0/10</span></pre> 
    </div>


</div>
<br>
<div class="wrapper1" id="a4" >
  <a href="#">
    <img src="b4.jpg" class="imgz1"></a>
    <div class="text_1 " id="b4">
       <pre style="text-align:center"> 

<i class="material-icons" style="font-size:70px;color:#DAA520">grade</i>
 <span style="font-weight: bold;">9.5/10</span></pre>
    </div>


</div>
<div class="wrapper1" id="a5"  >
  <a href="#">
    <img src="b5.jpg" class="imgz1"></a>
    <div class="text_2 " id="b5">
        <pre style="text-align:center" > <i class="material-icons" style="font-size:70px;color:#DAA520">grade</i>
 <span style="font-weight: bold;">8.8/10</span></pre> 
    </div>


</div>
<div class="wrapper1" id="a6" >
  <a href="#">
    <img src="b6.jpg" class="imgz1"></a>
    <div class="text_2 " id="b6">
      <pre style="text-align:center"> 
  <i class="material-icons" style="font-size:70px;color:#DAA520">grade</i>
 <span style="font-weight: bold;">9.3/10</span></pre>
    </div>


</div>
</div>
</body>
</html>
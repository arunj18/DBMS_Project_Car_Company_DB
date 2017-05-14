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
            header{
                text-align: center;
                font-size: 40px;
                color: white;
                font-family: georgia;
            }

            label{
                margin-left: 180px;
                font-size: 20px;
                font-weight: bold;
                font-family: georgia;
            }
            form{
                padding: 10px;
                background-color: slategrey;
                margin-left: 320px;
                border-width: 2.5px;
                border-radius: 10px;
                border-color: darkblue;
                border-style: solid;
                width: 690px;
                height: 170px;
            }

            input{
                height:25px;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 2px;
                outline: none;
            }

            input:focus{
                border-bottom: 3px solid #2d118e;

            }

            .submit{
                background-color: #f1f1f1;
                color: black;
                border: 2px solid dark red; /* Green */
                border-radius: 4px;
                padding: 4px 12px;
                text-align: center;
                font-size: 17px;
                position: relative;
                bottom:3px;
                width: 20%;
                height: 30px;
                margin-left: 270px;
            }
            .submit:hover{
                background-color:red; /* Green */
                color: white;
                box-shadow: 0 3px 3px 0 rgba(0,0,0,0.24), 0 3px 3px 0 rgba(0,0,0,0.19);
                cursor: pointer;
                transition:0.4s ease-in-out;
                transform:scale(1.1);
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
/*echo "<form action='test1.php' method='get' name='test'>
			<input type='text' placeholder='Order_ID' name='test1'>
			<input type='submit' class='fbutton' value='submit'>
			";

*/

?>
<body style=" width: 100%;  height: 100%;  padding: 0px;  margin: 0px;background-color: #1a1a1c">
    	
    	<div class="logo" style="margin-left:15%"><a href="featured.php"><img src="logo1.jpg" alt="logo" height=200 width =80%></a></div>
    	<br>	

    	<div class="left panel" style="float:left;width:200px;height:100px;background-color: #1a1a1c;">


    	</div>

    	<div class="right panel" style="float:right;width:200px;height:100px;background-color: #1a1a1c">


    	</div>

    	<div class="main" >

           <header > Enter the Order ID    </header>
           <br>
           <article>
                <form method="get" action="test1.php" name = 'test'>
                    <br><br><br>
                    <label style>Order ID: &nbsp &nbsp &nbsp  <input type="text" name="test1" style="width:200px" placeholder=" &nbsp  &nbsp  Enter Order ID "></input></label>
                    <br><br><br>
                   <input type='submit' value='submit' class = 'submit'>
                </form>

           </article>   

        </div>

    </body>

<!DOCTYPE html>
<html  style=" width: 100%;  height: 100%;  padding: 0px;  margin: 0px;">
  	<head>
    	<title> Delete a Record</title>
    	<link rel="stylesheet" type="text/css" href="project.css">
    	<style type="text/css">
            header{
                text-align: center;
                font-size: 70px;
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
                border: 2px solid darkblue; /* Green */
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
                background-color:darkblue; /* Green */
                color: white;
                box-shadow: 0 3px 3px 0 rgba(0,0,0,0.24), 0 3px 3px 0 rgba(0,0,0,0.19);
                cursor: pointer;
                transition:0.4s ease-in-out;
                transform:scale(1.1);
            }
            .left-panel,.right-panel{
                background-color: red;
                height:440px;
                background-image: url(img5.jpg);
                background-size: 200px 440px;
                background-repeat: no-repeat;
            }
            
            .right-panel{
                background-image: url(img4.jpg);
                background-size: 200px 440px;
                background-repeat: no-repeat;
            }

        </style>
	</head>


	<body style=" width: 100%;  height: 100%;  padding: 0px;  margin: 0px;background-color: #1a1a1c">
    	
    	<div class="logo" style="margin-left:15%"><a href="homepage.php"><img src="logo1.jpg" alt="logo" height=200 width =80%></a></div>
    	<br>	

    	<div class="left-panel" style="float:left;width:200px;">


    	</div>

    	<div class="right-panel" style="float:right;width:200px;">


    	</div>

    	<div class="main" >

           <header > Delete orders    </header>
           <br>
           <article>
                <form method="post" action="del_rec.php">
                    <br><br><br>
                    <label style>Order ID: &nbsp &nbsp &nbsp  <input type="text" name="ord" style="width:200px" placeholder=" &nbsp  &nbsp  Enter Order ID "></input></label>
                    <br><br><br>
                    <button name="submit" class="submit">Submit</button>
                </form>

           </article>   

        </div>

    </body>
</html>
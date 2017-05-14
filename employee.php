<!DOCTYPE html>
<html>
  	<head>
    	<title> TITLE</title>
    	<link rel="stylesheet" type="text/css" href="project.css">
    	
	</head>
	<body>
		<div style="margin-left:15%"><a href="featured.php"><img src="logo1.jpg" alt="logo" height=200 width =80%></a></div>
    <br>

    <div style="width:100%;height:20px;text-align: center;color:#2d118e;font-size:24px"><strong> ENTER EMPLOYEE DETAILS </strong></div><br>
    <div class="foutline">
    <div class="internal_space">


    <form name ="customers" method="post" action="form_store1.php" >


    <br>
    <div class="internal_space">
    <br><strong class="rheadin">Employee Id<span class="required"></span></strong></div>
    <input type="text" name="e_id" class="in1" style="margin-left:50px;margin-top: 5px;" size= 68px required >

    <div class="internal_space">
    <br><strong class="rheadin">Name<span class="required"></span></strong></div>
    <input type="text" name="name" class="in1" style="margin-left:50px;margin-top: 5px;" size= 68px required >

    <div class="internal_space">
    <br><strong class="rheadin">Salary<span class="required"></span></strong></div>
    <input type="text" name="salary" class="in1" style="margin-left:50px;margin-top: 5px;" size= 68px required>

    <div class="internal_space">
    <br><strong class="rheadin">Start Date</strong></div>
    <input type="date" name="date" class="in1" style="margin-left:50px;margin-top: 5px;" size= 68px   ></input>

    <div class="internal_space">
    <br><strong class="rheadin">Branch Id<span class="required"></span></strong></div>
    <input type="text" name="b_id" class="in1" style="margin-left:50px;margin-top: 5px;" size= 68px  required ></input>


    <div class="internal_space">
    <br><strong class="rheadin">Manager Id<span class="required"></span></strong></div>
    <input type="text" name="m_id" class="in1" style="margin-left:50px;margin-top: 5px;" size= 68px  required= ></input>


    <div class="internal_space">
    <br><strong class="rheadin">Department Id<span class="required"></span></strong></div>
    <input type="text" name="d_id" class="in1" style="margin-left:50px;margin-top: 5px;" size= 68px  required ></input>


     <div class="internal_space"><br>
    <strong class="rheadin">OPERATIION<span class="required"></span></strong></div>
    <input type="radio" name="add1"  style="margin-left:50px;margin-top: 5px;"  ><strong class="rheadin"> ADD NEW EMPLOYEE</strong></input><br>
    <input type="radio" name="update"  style="margin-left:50px;margin-top: 5px;"  ><strong class="rheadin"> UPDATE EXISTING EMPLOYEE</strong></input><br>
     <br>
    <br>
   
    <button name="form_submit" style="margin-right:50px;float:right;" class="fbutton1">Submit</button>
    <br>
    <br>
    


	</body>
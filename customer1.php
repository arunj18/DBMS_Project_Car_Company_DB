<!DOCTYPE html>
<html>
  	<head>
    	<title> TITLE</title>
    	<link rel="stylesheet" type="text/css" href="project.css">
    	
	</head>
	<body>
		<div style="margin-left:15%"><a href="homepage.php"><img src="logo1.jpg" alt="logo" height=200 width =80%></a></div>
    <br>

    <div style="width:100%;height:20px;text-align: center;color:#2d118e;font-size:24px"> ENTER CUSTOMER DETAILS</div><br>
    <div class="foutline">
    <div class="internal_space">


    <form name ="customers" method="post" action="form_store.php" >


    <br>
    <div class="internal_space">
    <br><strong class="rheadin">Name<span class="required"></span></strong></div>
    <input type="text" name="name" class="in1" style="margin-left:50px;margin-top: 5px;" size= 68px required >

    <div class="internal_space">
    <br><strong class="rheadin">Contact Number<span class="required"></span></strong></div>
    <input type="text" name="number" class="in1" style="margin-left:50px;margin-top: 5px;" size= 68px required >

    <div class="internal_space">
    <br><strong class="rheadin">Address<span class="required"></span></strong></div>
    <input type="text" name="add" class="in1" style="margin-left:50px;margin-top: 5px;" size= 68px required>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "car dealership";
    $conn = mysqli_connect($servername, $username, $password,$db);
    $sql = "SELECT Ord_ID from orders;";
    aj:
    $ordgen='';
    for($i=0;$i<3;$i++){
    $ordgen=$ordgen.mt_rand(0,9);
    }
    $ordgen=$ordgen.'-';
    $ordgen=$ordgen.mt_rand(0,9);
    $ordgen=$ordgen.mt_rand(0,9);
    $ordgen=$ordgen.'-';
    for($i=0;$i<4;$i++){
    $ordgen=$ordgen.mt_rand(0,9);
    }
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result))
        {
            if($row['Ord_ID']==$ordgen){
                goto aj;
            } 
        }
    }
    echo "<div class='internal_space'>
    <br><strong class='rheadin'>Order Id<span class='required'></span></strong></div>
    <input type='text' name='ord' id ='set' class='in1' style='margin-left:50px;margin-top: 5px;' size= 68px value='".$ordgen."' required readonly='readonly'></input>";
    ?>
    <div class="internal_space">
    <br><strong class='rheadin'>Order Type<span class='required'></span></strong></div>
    <input type='text' name='type' class='in1' style='margin-left:50px;margin-top: 5px;' size= 68px  required></input>;
    
     <div class="internal_space"><br>
    <strong class="rheadin">OPERATION<span class="required"></span></strong></div>
    <input type="radio" name="add1"  style="margin-left:50px;margin-top: 5px;" ><strong class="rheadin"> ADD NEW CUSTOMER</strong></input><br>
    <input type="radio" name="update" id="update" style="margin-left:50px;margin-top: 5px;"  ><strong class="rheadin"> UPDATE EXISTING CUSTOMER</strong></input><br>
     <br>
    <br>
   
    <button name="form_submit" style="margin-right:50px;float:right;" class="fbutton1">Submit</button>
    <br>
    <br>
    </form>
    <script type="text/javascript">
    var check=document.getElementById('update');
    check.addEventListener('click',change);
    function change(){
        if(check.checked){
            var set=document.getElementById('set');
            set.removeAttribute('readonly');
        }
    }
    </script>


	</body>
</html>
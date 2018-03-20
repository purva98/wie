<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
   

</script>

<script>
  function back(){
    window.location="teacher_login.php";
  }
     
  function logout(){
    window.location="logout.html";
  }
  function edit(){
    window.location="edit.php";
  }
  
</script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="background-color:#7a5230">
   <div class="first" style="background-image:url('subback.jpg'); background-repeat: no-repeat; background-position: center;  background-size: '20%';  padding-bottom: 50px;">
    

    <br>
    <div class="second" style="float:right"><button class="btn btn-primary" onclick="back()" type="button">Back</button></div>
    
    <div class="second" style="float:left;padding-left: 90%;"><button class="btn btn-primary" onclick="logout()" type="button">Logout</button></div>
    <br><br>
	
    <span class="firstsub_a" style="float:center; " align="center">
      <h1 style="color: white; font-family: arial;font-size: 30px;margin-left: 57px;"> Teacher Details</h1>
    </span>
    <br>
    <br>
    <br><br>
  </div>
  <br><br><br><br>
  <table align="center" cellpadding=20px style="background-color: white;" border="2" width="90%">
     

    <?php
  include('connsp.php');
  $sq="select * from teacher";
  $res = $connsp->query($sq);
  while($fe=$res->fetch_object())
  {
  if($fe->user== $_SESSION['unm']){
    ?>
    <tr  height="50px"><td width="20%" style="background-color:#4c4c4c; font-size: 23px;color: white;"><b>Teacher ID</b></td><td style="font-size: 20px; text-align: center; background-color:#e5e5f2;"><?php echo $fe->empid;?></td></tr>
 <tr  height="50px"><td width="20%" style="background-color:#4c4c4c; font-size: 23px;color: white;"><b>Teacher Name</b></td><td  style="font-size: 20px; text-align: center; background-color:#e5e5f2;"><?php echo $fe->user;?></td></tr>
 <tr  height="50px"><td width="20%" style="background-color:#4c4c4c; font-size: 23px;color: white;"><b>Email Id</b></td><td style="font-size: 20px; text-align: center; background-color:#e5e5f2;"><?php echo $fe->email;?></td></tr>
 <tr  height="50px"><td width="20%" style="background-color:#4c4c4c; font-size: 23px;color: white;"><b>Phone Number</b></td><td  style="font-size: 20px; text-align: center; background-color:#e5e5f2;"><?php echo $fe->phone_no;?></td></tr>
 <tr  height="50px"><td width="20%" style="background-color:#4c4c4c; font-size: 23px;color: white;"><b>Address</b></td><td style="font-size: 20px; text-align: center; background-color:#e5e5f2;"><?php echo $fe->address;?></td></tr>
  <tr  height="50px"><td width="20%" style="background-color:#4c4c4c; font-size: 23px;color: white;"><b>Blood Group</b></td><td  style="font-size: 20px; text-align: center; background-color:#e5e5f2;"><?php echo $fe->bloodg;?></td></tr>
 
    <?php
  }
}
  ?>
    
  </table>
  <table>
  <tr><td width="25%"></td>   
<td>
<button type="button" onclick="edit()" class="btn btn-primary" style="padding: 15px 25px;margin-left:auto;font-size: 25px;margin-right:auto;display:block;margin-top:10%;margin-bottom:5%; border-radius: 10px;">
Edit Details</button></td>
  <br><br>
  </body>

</html>

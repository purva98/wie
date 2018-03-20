<?php
include('connsp.php');

if(isset($_REQUEST['submit']))
{
	$user = $_REQUEST['user'];
	$pass = $_REQUEST['pass'];
	$empid=$_REQUEST['empid'];
 	$email = $_REQUEST['email']; 	
 	$phone_no = $_REQUEST['phone_no'];
 	$confirm_pass = $_REQUEST['confirm_pass']; 	 	
    $bloodg=$_REQUEST['bloodg'];
    $address = $_REQUEST['address'];
   
    
    if($confirm_pass==$pass)
    {
    
	
		$ins="insert into teacher(empid,pass,user,email,phone_no,bloodg,address) values ('$empid','$pass','$user','$email','$phone_no','$bloodg','$address')";

		$res=$connsp->query($ins);
		if($res)
		{
			?> 
			<script type="text/javascript">
				alert('insert success'); 
				window.location="teacher_login.php"; //here wrtite the name of the teacher profile file that you make
			</script>
			<?php
		}
		else
		{
			echo "insert not success";

		}
	

  }

  else
	{
		?> 
		<script type="text/javascript">
			alert('Check your password and confirm password!'); 
			window.location="signup_wieteacher.php";
		</script>
		<?php
	}
}	

?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
</script>
	<script>
  function back(){
    window.location="mainpage.php"; 
  }
  </script>
  	<title>sign up</title>
	<style>	
	.bg {
    background-image: url("m1.jpg");
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
        }
</style>

	<script type="text/javascript" src="backfix.min.js"></script>
	<script type="text/javascript">
	bajb_backdetect.OnBack = function()
	{
		window.location = "mainpage.php";
	}
	</script>

</head>
<body class="bg">
<br>
    <div class="second" style="float:right; padding-right: 2%;"><button class="btn btn-success" onclick="back()" type="button">Back</button></div>
<br><br><br>
<h1 style="font-family: georgia;color:black" align="center"><b>Add your details:</b></h1>
<br><br><br>	
<form action="" method="POST">
 <table border="0" align="center" width="50%" cellpadding="90px" cellspacing="90px" >
 
	<tr>
		<td style="font-family: georgia;width: 25%;font-size: 25px; color:black"><center>Username</center></td>
		<td  style="width: 25%;"><input type="text" style="width:150%; height: 30px; border-radius: 10px;" name="user"></td>
	</tr>
	<tr>
		<td style="font-family: georgia;width: 25%;font-size: 25px; color:black"><center>Employee ID</center></td>
		<td  style="width: 25%;"><input type="text" style="width:150%; height: 30px; border-radius: 10px;" name="empid"></td>
	</tr>

	
	<tr>
		<td style="font-family: georgia;width: 25%;font-size: 25px;color:black"><center>Address</center></td>
		<td  style="width: 25%;"><input type="text" style="width:150%; height: 50px;border-radius: 10px;" name="address"></td>
	</tr>



	
     <tr>
		<td style="font-family: georgia;width: 25%;font-size: 25px;color:black"><center>E-mail</center></td>
		<td  style="width: 25%;"><input type="text" style="width:150%; height: 30px;border-radius: 10px;" name="email"></td>
	</tr>

	<tr>
		<td style="font-family: georgia;width: 25%;font-size: 25px;color:black"><center>Phone number</center></td>
		<td  style="width: 25%;"><input type="number" style="width:150%; height: 30px;border-radius: 10px;" name="phone_no"></td>
	</tr>

	

	<tr>
		<td style="font-family: georgia;width: 25%;font-size: 25px; color:black"><center>School</center></td>
		<td  style="width: 25%;"><input type="text" style="width:150%; height: 30px; border-radius: 10px;" name="school"></td>
	</tr>

	<tr>
		<td style="font-family: georgia;width: 25%;font-size: 25px;color:black;"><center>Blood group</center></td>
		<td  style="width: 25%;"><input type="text" style="width:150%; height: 30px;border-radius: 10px;" name="bloodg"></td>
	</tr>
	

	<tr>
		<td style="font-family: georgia;width: 25%;font-size: 25px;color:black"><center>Password</center></td>
		<td  style="width: 25%;"><input type="password" style="width:150%; height: 30px;border-radius: 10px;" name="pass"></td>
	</tr>

<tr>
		<td style="font-family: georgia;width: 25%;font-size: 25px;color:black"><center>Confirm Password</center></td>
		<td  style="width: 25%;"><input type="password" style="width:150%; height: 30px;border-radius: 10px;" name="confirm_pass"></td>
	</tr>	

	<tr></tr>
	<tr>
		<td></td>
		
		<td style="font-family: georgia;width: 25%;font-size: 20px;color:black"><input class="btn btn-success" type="submit" name="submit" style="width:20%; height: 45%;" value="submit"></td>
	</tr>


	
 </table>
</form>

</body>
</html>
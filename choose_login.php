<!DOCTYPE html>
<html>
<title>Choose Login</title>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
  </script>
  <style>
 .bg
  {
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    
    }
    </style>
<script>
function back(){
    window.location="mainpage.php";
  }
  function Teacher(){
    window.location="teacher_login.php";
  }
  
 function student(){
  window.location="student_login.php";
 }
</script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="background-color:white; color:white">  
<div class="second" "><button class="btn btn-success" onclick="back()" type="button">Back</button></div>
<br>
<button type="button" onclick="Teacher()" 
style="background-color:white; padding: 25px 35px;font-size: 25px;border:solid;display:block;background-color: black;">
Teacher</button> 

<button type="button" onclick="student()" 
style="background-color:white; padding: 25px 35px;font-size: 25px;border:solid;display:block;background-color: black;">
Student</button> 

</body>
</html>
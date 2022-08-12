<?php
// include database connection file
require_once'dbconfig.php';
if(isset($_POST['insert']))
{
// Posted Values  
$reg_number=$_POST['reg_number'];
$room_number=$_POST['room_number'];
$entrance_date=$_POST['entrance_date'];
$exit_date=$_POST['exit_date'];
// Call the store procedure for insertion
$sql=mysqli_query($con,"call sp_insert_history('$reg_number','$room_number','$entrance_date','$exit_date')");
if($sql)
{
// Message for successfull insertion
echo "<script>alert('Record inserted successfully');</script>";
echo "<script>window.location.href='index_history.php'</script>"; 
}
else 
{
// Message for unsuccessfull insertion
echo "<script>alert('Something went wrong. Please try again');</script>";
echo "<script>window.location.href='index_history.php'</script>"; 
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Hostel Block Details </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
    </style>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://getbootstrap.com/dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="./css/style.css">
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<!-- Body -->

<body>
<nav>
	<input type="checkbox"  id="check">
	<label for="check" class="checkbtn">
		<i class="fas fa-bars"></i>
	</label>
	<a class="logo-a" href="index.php"><img id="logoimg" src="img/uni-logo.png" alt="UOJ"></a>
	<label class="logo">UOJ HOSTELS</label>
	<ul>
		<li><a class="active" href="">Home</a></li>
		<li><a class ="nonactive" href="https://www.jfn.ac.lk/">About</a></li>
		<li><a class ="nonactive" href="http://www.jfn.ac.lk/index.php/contact-us/">Contact</a></li>
	</ul>
</nav>
<div class="container">
<div class="row">
<div class="col-md-12">
<h3>Insert Record | Insert hostel room history details</h3>
<hr />
</div>
</div>
<form name="insertrecord" method="post">
<div class="row">
<div class="col-md-4"><b>Reg_number</b>
<input type="text" name="reg_number" class="form-control" required>
</div>
<div class="col-md-4"><b>Room_number</b>
<input type="text" name="room_number" class="form-control" required>
</div>
</div>
<div class="row">
<div class="col-md-4"><b>Entrance_date</b>
<input type="date" name="entrance_date" class="form-control" required>
</div>
<div class="col-md-4"><b>Exit_date</b>
<input type="date" name="exit_date" class="form-control" required>
</div>
</div> 
<div class="row" style="margin-top:1%">
<div class="col-md-8">
<input type="submit" name="insert" value="Submit">
</div>
</div> 
</form>
</div>
</div>
</body>
</html>

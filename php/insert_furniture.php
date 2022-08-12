<?php
// include database connection file
require_once'dbconfig.php';
if(isset($_POST['insert']))
{
// Posted Values  
$f_number=$_POST['f_number'];
$room_number=$_POST['room_number'];
$type=$_POST['type'];
$condition_of_furniture=$_POST['condition_of_furniture'];
$availability=$_POST['availability'];
// Call the store procedure for insertion
$sql=mysqli_query($con,"call sp_insert_furniture('$f_number','$room_number','$type','$condition_of_furniture','$availability')");
if($sql)
{
// Message for successfull insertion
echo "<script>alert('Record inserted successfully');</script>";
echo "<script>window.location.href='index_furniture.php'</script>"; 
}
else 
{
// Message for unsuccessfull insertion
echo "<script>alert('Something went wrong. Please try again');</script>";
echo "<script>window.location.href='index_furniture.php'</script>"; 
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
		<li><a class="active" href="index.php">Home</a></li>
		<li><a class ="nonactive" href="https://www.jfn.ac.lk/">About</a></li>
		<li><a class ="nonactive" href="http://www.jfn.ac.lk/index.php/contact-us/">Contact</a></li>
	</ul>
</nav>
<div class="container">
<div class="row">
<div class="col-md-12">
<h3>Insert Record | Insert hostel furniture details</h3>
<hr />
</div>
</div>
<form name="insertrecord" method="post">
<div class="row">
<div class="col-md-4"><b>Furniture_number</b>
<input type="text" name="f_number" class="form-control" required>
</div>
<div class="col-md-4"><b>Room_number</b>
<input type="text" name="room_number" class="form-control" required>
</div>
</div>
<div class="row">
<div class="col-md-4"><b>Type</b>
<input type="text" name="type" class="form-control" required>
</div>
<div class="col-md-4"><b>Condition_of_furniture</b>
<input type="text" name="condition_of_furniture" class="form-control" maxlength="100" 
required>
</div>
</div> 
<div class="col-md-8"><b>Availability</b>
<input type="text" name="availability" class="form-control" maxlength="100" 
required>
</div>
</div>
<div class="row" style="margin-top:1%">
<div class="col-md-4">
<input type="submit" name="insert" value="Submit">
</div>
</div> 
</form>
</div>
</div>
</body>
</html>

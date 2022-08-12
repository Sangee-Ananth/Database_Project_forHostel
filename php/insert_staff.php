<?php
// include database connection file
require_once'dbconfig.php';
if(isset($_POST['insert']))
{
// Posted Values  
$staff_number=$_POST['staff_number'];
$occupation=$_POST['occupation'];
$age=$_POST['age'];
// Call the store procedure for insertion
$sql=mysqli_query($con,"call sp_insert_staff('$staff_number','$occupation','$age')");
if($sql)
{
// Message for successfull insertion
echo "<script>alert('Record inserted successfully');</script>";
echo "<script>window.location.href='index_staff.php'</script>"; 
}
else 
{
// Message for unsuccessfull insertion
echo "<script>alert('Something went wrong. Please try again');</script>";
echo "<script>window.location.href='index_staff.php'</script>"; 
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
		<li><a class ="nonactive" href="https://www.jfn.ac.lk">About</a></li>
		<li><a class ="nonactive" href="http://www.jfn.ac.lk/index.php/contact-us/">Contact</a></li>

	</ul>
</nav>
<div class="container">
<div class="row">
<div class="col-md-12">
<h3>Insert Record | Insert hostel staff details</h3>
<hr />
</div>
</div>
<form name="insertrecord" method="post">
<div class="row">
<div class="col-md-4"><b>Staff_number</b>
<input type="text" name="staff_number" class="form-control" required>
</div>
<div class="col-md-4"><b>Occupation</b>
<input type="text" name="occupation" class="form-control" required>
</div>
</div>
<div class="row">
<div class="col-md-4"><b>Age</b>
<input type="number" name="age" class="form-control" required>
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

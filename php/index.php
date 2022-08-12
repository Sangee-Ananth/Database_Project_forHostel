<?php
// include database connection file
require_once'dbconfig.php';
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
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
		<li><a class ="nonactive" href="http://www.jfn.ac.lk/">About</a></li>
		<li><a class ="nonactive" href="http://www.jfn.ac.lk/index.php/contact-us/">Contact</a></li>
	</ul>
</nav>

<div class="container" style="background-color: white;">
<div class="options">

<div onclick="location.href='index_block.php';" style="cursor: pointer;">
<a href="index_block.php"> Hostel Blocks Data</a>
</div>
<div onclick="location.href='index_room.php';" style="cursor: pointer;">
<a href="index_room.php"> Hostel Rooms Data</a>
</div>
<div onclick="location.href='index_key.php';" style="cursor: pointer;">
<a href="index_key.php"> Room Keys Data</a>
</div>
<div onclick="location.href='index_furniture.php';" style="cursor: pointer;">
<a href="index_furniture.php"> Furnitures Data</a>
</div>
<div onclick="location.href='index_hosteller.php';" style="cursor: pointer;">
<a href="index_hosteller.php"> Hostellers Data</a>
</div>
<div onclick="location.href='index_staff.php';" style="cursor: pointer;">
<a href="index_staff.php"> Hostel Staffs Data</a>
</div>
<div onclick="location.href='index_history.php';" style="cursor: pointer;">
<a href="index_history.php"> Hostel Room History </a>
</div>
</div>
</div>





</body>
</html>
<?php
// include database connection file
require_once'dbconfig.php';
if(isset($_POST['update']))
{
// Get the row id
$row_id=intval($_GET['id']);
// Posted Values  
$id_number=$_POST['id_number'];
$room_number=$_POST['room_number'];
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$district=$_POST['district'];
$city=$_POST['city'];
$telephone_number=$_POST['telephone_number'];
 
// Store  Procedure for Updation
$querry = "update hostellers 
            set id_number='$id_number',
            room_number='$room_number',
            first_name='$first_name',
            last_name='$last_name',
            district = '$district',
            city= '$city',
            telephone_number = '$telephone_number'
            where id=$row_id";
// Store  Procedure for Updation
$sql=mysqli_query($con,$querry);
// $sql=mysqli_query($con,"call sp_update('$id_number','$room_number','$first_name','$last_name','$district',,'$city','$telephone_number','$rid')");
// Mesage after updation
echo "<script>alert('Record Updated successfully');</script>";
// Code for redirection
echo "<script>window.location.href='index_hosteller.php'</script>"; 
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
<h3>Update Record | PHP CRUD Operations using Stored Procedure</h3>
<hr />
</div>
</div>
<?php 
// Get the userid
$row_id=intval($_GET['id']);
$querry = "select * from hostellers where id = $row_id";
$sql =mysqli_query($con, $querry);
while ($result=mysqli_fetch_array($sql)) {                 
?>
<form name="insertrecord" method="post">
<div class="row">
<div class="col-md-4"><b>id_number</b>
<input type="text" name="id_number" value="<?php echo htmlentities($result['id_number']);?>" class="form-control" required>
</div>
<div class="col-md-4"><b>room_number</b>
<input type="text" name="room_number" value="<?php echo htmlentities($result['room_number']);?>" class="form-control" required>
</div>
</div>

<div class="row">
<div class="col-md-4"><b>first_name</b>
<input type="text" name="first_name" value="<?php echo htmlentities($result['first_name']);?>" class="form-control" required>
</div>
<div class="col-md-4"><b>last_name</b>
<input type="text" name="last_name" value="<?php echo htmlentities($result['last_name']);?>" class="form-control" maxlength="300" required>
</div>
</div>  
<div class="row">
<div class="col-md-4"><b>district</b>
<input type="text" name="district" value="<?php echo htmlentities($result['district']);?>" class="form-control" maxlength="300" required>
</div>
<div class="col-md-4"><b>city</b>
<input type="text" name="city" value="<?php echo htmlentities($result['city']);?>" class="form-control" maxlength="300" required>
</div>
</div>
<div class="row">
<div class="col-md-4"><b>telephone_number</b>
<input type="number" name="telephone_number" value="<?php echo htmlentities($result['telephone_number']);?>" class="form-control" maxlength="10" required>
<input type="hidden" name= "id", value=<?php echo $row_id?> >
</div>
</div>
<?php } ?>

<div class="row" style="margin-top:1%">
<div class="col-md-8">
<input type="submit" name="update" value="Update">
</div>
</div> 
     </form>
</div>
</div>
 
</body>
</html>
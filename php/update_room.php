<?php
// include database connection file
require_once'dbconfig.php';
if(isset($_POST['update']))
{
// Get the row id
$rid=intval($_POST['rid']);
// Posted Values  
$room_number=strval($_POST['room_number']);
$block_name=strval($_POST['block_name']);
$no_of_people=intval($_POST['no_of_people']);
$status=strval($_POST['status']);

 
// Store  Procedure for Updation
$querry= "update room_table 
            set room_number='$room_number',
            block_name='$block_name',
            no_of_people=$no_of_people,
            status ='$status'
            where room_id=$rid";
$sql=mysqli_query($con,$querry);
// Mesage after updation
echo "<script>alert('Record Updated successfully');</script>";
// Code for redirection
echo "<script>window.location.href='index_room.php'</script>"; 
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
$rid=intval($_GET['edit']);
$querry = "select * from room_table where room_id = $rid";
$sql =mysqli_query($con, $querry);
while ($result=mysqli_fetch_array($sql)) {                 
?>
<form name="insertrecord" method="post">
<div class="row">
<div class="col-md-4"><b>room_number</b>
<input type="text" name="room_number" value="<?php echo htmlentities($result['room_number']);?>" class="form-control" required>
</div>
<div class="col-md-4"><b>block_name</b>
<input type="text" name="block_name" value="<?php echo htmlentities($result['block_name']);?>" class="form-control" required>
</div>
</div>
 
<div class="row">
<div class="col-md-4"><b>no_of_people</b>
<input type="number" name="no_of_people" value="<?php echo htmlentities($result['no_of_people']);?>" class="form-control" required>
</div>
<div class="col-md-4"><b>status</b>
<input type="text" name="status" value="<?php echo htmlentities($result['status']);?>" class="form-control" maxlength="10" required>
<input type="hidden" name= "rid", value=<?php echo $rid?> >
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
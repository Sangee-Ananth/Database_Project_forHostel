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
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://getbootstrap.com/dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="./css/style.css">
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/boxicons@2.1.1/dist/boxicons.js"></script>
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

<!-- <div class="sidebar">
    <div class="logo_content">
        <div class="logo">
            <div class="logo_name">UOJ</div>
        </div>
    </div>
</div> -->

<div class="container">
<div class="row">
<div class="col-md-12">
<?php
$room_number = strval($_GET['room_number']);
?>
<h3>Room <?php echo $room_number ?> </h3> <hr />
<a href="insert_hostellers.php"><button class="btn btn-primary"> Insert Record</button></a>
<div class="table-responsive">                
<table id="mytable" class="table table-bordred table-striped">                 
<thead>
<th>#</th>
<th>Id_number</th>
<th>Room_number</th>
<th>First_name</th>
<th>Last_name</th>
<th>District</th>
<th>City</th>
<th>Telephone_number</th>
<th>Edit</th>
<th>Delete</th>
</thead>
<tbody>
    

<?php
$room_number = strval($_GET['room_number']);
$querry = "select * from hostellers  where room_number = '$room_number'";
$sql =mysqli_query($con,$querry );

$cnt=1;
$row=mysqli_num_rows($sql); //Count all the rows 
if($row>0){
while ($result=mysqli_fetch_array($sql)) {           
    ?> 
    <tr>
    <td><?php echo htmlentities($cnt);?></td>
    <td><?php echo htmlentities($result['id_number']);?></td>
    <td><?php echo htmlentities($result['room_number']);?></td>
    <td><?php echo htmlentities($result['first_name']);?></td>
    <td><?php echo htmlentities($result['last_name']);?></td>
	<td><?php echo htmlentities($result['district']);?></td>
	<td><?php echo htmlentities($result['city']);?></td>
	<td><?php echo htmlentities($result['telephone_number']);?></td>

    <td><a href="update_hosteller.php?id=<?php echo htmlentities($result['id']);?>"><button class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></button></a></td>
    <td><a href="delete_hostellers.php?del=<?php echo htmlentities($result['id']);?>"><button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');"><span class="glyphicon glyphicon-trash"></span></button></a></td>
    </tr>
<?php 
// for serial number increment
$cnt++;
} } else { ?>
<tr>
    <td colspan="9" style="color:red; font-weight:bold;text-align:center;"> No Record found</td>
</tr>
<?php } ?>    

</tbody>      
</table>
</div>
</div>
</div>
</div>

</body>
<html>
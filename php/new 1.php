<?php
// include database connection file
require_once'dbconfig.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>PHP CRUD Operations using Stored Procedure </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        
    </style>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://getbootstrap.com/dist/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-12">
<h3>PHP CRUD Operations using Stored Procedure</h3> <hr />
<a href="insert_block.php"><button class="btn btn-primary"> Insert Record</button></a>
<div class="table-responsive">                
<table id="mytable" class="table table-bordred table-striped">                 
<thead>
<th>#</th>
<th>block_location</th>
<th>block_name</th>
<th>no_of_floors</th>
<th>no_of_rooms</th>
<th>Edit</th>
<th>Delete</th>
</thead>
<tbody>
    
<?php 
$sql ="Select *from `hostel_blocks`";
$result=mysqli_query($con,$sql);
if($result){
while ($row=mysqli_fetch_assoc($result)) {  
$block_location=$row['block_location'];
$block_name=$row['block_name'];
$no_of_floors=$row['no_of_floors'];
$no_of_rooms=$row['no_of_rooms'];
echo''
} 
}    
?>  
    

      
</tbody>      
</table>
</div>
</div>
</div>
</div>
</body>
</html>
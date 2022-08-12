<?php
// include database connection file
require_once'dbconfig.php';
// Code for record deletion
if(isset($_GET['delete']))
{
$id=intval($_GET['delete']);
$querry = "DELETE from room_table where room_id=$id";
$sql=mysqli_query($con,$querry);

echo "<script>alert('Record deleted');</script>";
// Code for redirection
echo "<script>window.location.href='index_room.php'</script>"; 
}
?>
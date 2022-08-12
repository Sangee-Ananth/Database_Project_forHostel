<?php
// include database connection file
require_once'dbconfig.php';
// Code for record deletion
if(isset($_GET['del']))
{
$id=intval($_GET['del']);
$querry = "DELETE from hostellers where id=$id";
$sql=mysqli_query($con,$querry);

echo "<script>alert('Record deleted');</script>";
// Code for redirection
echo "<script>window.location.href='index_hosteller.php'</script>"; 
}
?>
<?php
$con = mysqli_connect('localhost','root');
if ($con) {
	echo "Connection successful";
}else{
	echo "No Connection";
}
mysqli_select_db($con,'ytuserdata');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];


$query = "insert into userinfodata( user, email, mobile)
        values('$user','$email','$mobile') ";

mysqli_query($con,$query); 
header('location:index.php');
?>
<?php
require 'config.php';
$type = $_POST['user'];
$username = $_POST['username'];
$password = $_POST['password'];
$query = "select id from account where user_type = '$type' and username = '$username' and password = '$password'";
$result= $connect->query($query);
$count=mysqli_num_rows($result);
if( $count == 1){
  session_start();
while($data = mysqli_fetch_row($result)){
  $_SESSION['user'] = $data[0];
}
if($type == 0)
	header("Location: ../users/admin/dashboard.php");
else if($type == 1)
	header("Location: ../users/faculty/dashboard.php");
else if($type == 2)
	header("Location: ../users/librarian/dashboard.php");
}
else if($count == 0)
echo 'Either your username or password is incorrect';

?>

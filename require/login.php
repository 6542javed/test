<?php
require 'config.php';
$type = $_POST['user'];
$username = $_POST['username'];
$password = $_POST['password'];
if($type == 0)
  $table = 'admin';
else if($type == 1)
  $table = 'lib_member';
$query = "select id from $table where username = '$username' and password = '$password'";
if($result= $connect->query($query)){
$count=mysqli_num_rows($result);
if( $count == 1){
  session_start();
while($data = mysqli_fetch_row($result)){
  $_SESSION['user'] = $data[0];
  $_SESSION['type'] = $type;
  $_SESSION['table'] = $table;
}
if($type == 0)
	header("Location: ../users/admin/dashboard.php");
else if($type == 1)
	header("Location: ../users/librarian/dashboard.php");
else echo "something went wrong";
}
else if($count == 0){
echo 'Either your username or password is incorrect';
}
}
else{
  echo "Error:".$query."<br/>".$connect->error;
}
?>

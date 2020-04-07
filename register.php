<?php
if (isset($_POST['submit'])) {


  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname="esports";

  $conn = new mysqli($servername,$username,$password,$dbname);


$user = $conn->real_escape_string($_POST['user']);
$pass = $conn->real_escape_string($_POST['pass']);
$email = $conn->real_escape_string($_POST['email']);

$q = "insert into players(username,password,email) values('$user','$pass','$email')";

if($conn -> query($q))
{
  echo "data entered successfully";
}
else {
  echo "Error : ".$conn->error;
}




}


 ?>

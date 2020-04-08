<?php

$boolean=false;
if (isset($_POST['submit'])) {
  $count1=0;
  $count2=0;
  $count3=0;
  $q=" ";

  $name = "";
  $email = "";
  $mpass = "";

      $user = $_POST['user'];
      $pass = $_POST['pass'];
      $email = $_POST['email'];

      $error = ['user'=> '',
              'pass' => '',
                  'email' => ''
                  ];

      //$colors = $_POST['colors'];

      if(empty($user)){
         // echo "";
          $error['user'] = "<em style='color : red'  >*Name can't be empty.</em>";
      }
      else{
          if(!preg_match('/^[a-zA-Z\s]+$/', $user)){
              $error['user'] = "<em>Name can contain only aplhabets and spaces.</em>";
          }
          else {
            $count1=+1;
          }
      }

      if(empty($pass)){
         // echo "";
          $error['pass'] = "<em style='color : red' >*Password can't be empty.</em>";
      }
      else{
          if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $pass)) {
            $error['pass'] = "<em style='color : red' >*Create a strong password eg Aaron1#.</em>";
          }
          else {
            $count2=+1;
          }
      }

      //predefined regex for email using filters
      if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
          $error['email'] = "<em style='color:red'>E-mail should be in proper format.</em>";
      }
      else {
        $count3=+1;
      }








  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname="esports";

  $conn = new mysqli($servername,$username,$password,$dbname);


$user = $conn->real_escape_string($_POST['user']);
$pass = $conn->real_escape_string($_POST['pass']);
$email = $conn->real_escape_string($_POST['email']);

if($count1 > 0 && $count2 > 0 && $count3 >0)
{
  $q = "insert into players(username,password,email) values('$user','$pass','$email')";
}
else {

}


if($conn -> query($q))
{
  echo '<script>alert("Registered Successfully!")</script>';
}
else {
  echo "Error : ".$conn->error;
}
}
include('login.php');

 ?>

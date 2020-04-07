<?php
include("config.php");
session_start();

if (isset($_POST['submit'])) {

  $_SESSION['user']=$_POST['user'];


       $myusername = mysqli_real_escape_string($db,$_POST['user']);
       $mypassword = mysqli_real_escape_string($db,$_POST['pass']);

       $sql = "SELECT id FROM players WHERE username = '$myusername' and password = '$mypassword'";

       $result = mysqli_query($db , $sql) or trigger_error($db->error."[ $sql]");

       $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

       if(empty($row))
       {

       }
       else{
         $active  = $row['id'];
       }



       $count = mysqli_num_rows($result);

       if($count > 0) {

         $_SESSION['myusername']= $myusername;
         $_SESSION['login_user'] = $myusername;

         header("location: Loggedindex.php");

     }
     else {

       echo '
         Your Login Name or Password is invalid';

     }



}


 ?>

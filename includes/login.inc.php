<?php

if(isset($_POST["submit"]))
{
   // Grabbing the data
   $uid = $_POST["uid"];
   $pwd = $_POST["pwd"];

   // Instantiate SignupContr class
   include "../classes/dbh.classes.php";
   include "../classes/login.classes.php";
   include "../classes/login-contr.classes.php"; 
   $login = new LoginContr($uid, $pwd);

   // Running error handlers and user signup
    $login->loginUser();

   // Going back to the front page
    //header("location: ../login.signup.php?error=none");
    //header("location: ../index.php?error=none");
    header("location: ../pages/request-service.php?error=none");
}
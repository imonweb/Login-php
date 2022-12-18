<?php 

if(isset($_POST['submit'])) {

  // Grabbing the data
  $uid = $_POST['uid'];
  $pwd = $_POST['pwd'];
  $pwdrepeat = $_POST['pwdrepeat'];
  $email = $_POST['email'];

  // Instantiate SignupContr class
  include "../classes/signup.classes.php";
  include "../classes/signup.contr.classes.php";
  $signup = new SignupContr();

  // Running error handlers and user signup

  // going to back to front page
}
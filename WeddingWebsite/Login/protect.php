<?php
$Password = 'liz&just'; // Set your password here

if (isset($_POST['submit_pwd'])){
   $pass = isset($_POST['passwd']) ? $_POST['passwd'] : '';
     
   if ($pass != $Password) {
      showForm("Wrong password");
      exit();     
   }
} else {
   showForm();
   exit();
}
?>
<?php
   if(isset($_POST['email']) || isset($_POST['password'])) {
      $email = $_POST['email'];
      $password = $_POST['password'];

      if($email = "1@gmail.com" && $password ='1' ) {
         header('location: ./../index.html');
      } else {
         echo 'forgot your email or password';
      }
   } 


?>
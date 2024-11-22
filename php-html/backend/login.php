<?php
   if(isset($_POST['email']) || isset($_POST['password'])) {
      $email = $_POST['email'];
      $password = $_POST['password'];
      
      if (preg_match('/[a-zA-Z]+[0-9]+/', $email)) {
         if (preg_match('/^\d{6,}$/', $password)) {
            if($email == "1@gmail.com" && $password == '1' ) {
               header('location: ./../index.html');
            } else {
               echo 'Forgot your email or password';
            }
         } else {
            echo 'Password must be at least 6 digits long and contain only numbers';
         }
      } else {
         echo 'Email must contain letters and at least one number';
      }
   }
?>

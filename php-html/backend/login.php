<?php
   if(isset($_POST['email']) || isset($_POST['password'])) {
      $email = $_POST['email'];
      $password = $_POST['password'];

      if (preg_match('/[a-zA-Z]+[0-9]+/', $email)) {
         if (preg_match('/^\d{6,}$/', $password)) {
            if($email == "1@gmail.com" && $password == '1' ) {
               header('Location: ./../index.php?status=success');
            } else {
               header('Location: ./../index.php?status=error');
            }
         } else {
            header('Location: ./../index.php?status=invalid_password');
         }
      } else {
         header('Location: ./../index.php?status=invalid_email');
      }
   }
?>

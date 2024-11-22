<?php
   if(isset($_POST['email']) || isset($_POST['password'])) {
      $email = $_POST['email'];
      $password = $_POST['password'];
      
      if (preg_match('/[a-zA-Z]+[0-9]+/', $email)) {
         if (preg_match('/^\d{6,}$/', $password)) {
            if($email == "1@gmail.com" && $password == '1' ) {
               header('location: ./../index.html');
            } else {
               echo 'Lupa Email atau Password';
            }
         } else {
            echo 'Password harus minimal 6 karakter dan satu angka unik';
         }
      } else {
         echo 'Email harus berupa huruf dan setidaknya satu angka';
      }
   }
?>

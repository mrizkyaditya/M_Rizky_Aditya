<?php
   if(isset($_POST['email']) || isset($_POST['password'])) {
      $email = $_POST['email'];
      $password = $_POST['password'];

      if (preg_match('/[a-zA-Z]+[0-9]+/', $email)) {
         if($email == "user@gmail.com" && $password == 'user1' ) {
            header('location: ./../index.html');
         } else {
            echo 'Salah Email atau Password';
         }
      } else {
         echo 'Email harus berupa huruf setidaknya minimal satu angka ';
      }
   }
?>

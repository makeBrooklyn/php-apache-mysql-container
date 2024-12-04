<?php
   echo "Hello from the docker php-apache-mysql container";

   $mysqli = new mysqli("db", "root", "example", "company1");


   $sql = 'SELECT * FROM users';

   if ($result = $mysqli->query($sql)) {
      while ($data = $result->fetch_object()) {
         $users[] = $data;
      }
   }

   foreach ($users as $user) {
      echo "<br>";
      echo $user->name . " " . $user->fav_color;
      echo "<br>";
   }
?>

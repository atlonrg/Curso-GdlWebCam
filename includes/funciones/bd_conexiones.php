<?php
   $conn = new mysqli('localhost', 'root', 'gc6609ch', 'gdlwebcamp');

   if($conn->connect_error){
       echo $error -> $conn->connect_error;
   }
   ?>

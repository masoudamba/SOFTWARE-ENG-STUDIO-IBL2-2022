<?php
$mysqli = new mysqli('localhost','root','','bnb');
   if($mysqli->connect_errno){
      echo $mysqli->connect_errno.": ".$mysqli->connect_error;
   }
 ?>

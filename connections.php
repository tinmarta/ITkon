<?php
  $connections = mysqli_connect ('localhost:3307','root','','logindb');
    if(mysqli_connect_errno()){
      echo "Failed to connect in Mysql" . mysqli_connect_error();
    }else{
      echo "Connected";
    }
?>
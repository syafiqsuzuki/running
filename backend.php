<?php

include './js/config.php';
$sql="insert into registration (name, address, email, message) values 
('$_POST[name]','$_POST[address]','$_POST[email]','$_POST[message]')";
if(!mysqli_query($con,$sql)){
    die ('Error: ' .mysqli_error($con));
  }
  else {
echo "<script type='text/jscript'>alert('You have been registered!')</script>";
header('refresh:0;url=index.html');
  }

?>
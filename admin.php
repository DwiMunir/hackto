<?php
  $name = $_POST['name'];
  $pass = $_POST['pass'];

  if(isset(!empty($name) && !empty($pass))){
    echo 'berhasil';
  }

?>

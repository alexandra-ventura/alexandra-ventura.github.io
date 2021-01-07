<?php

  include_once('./config/init.php');
  include_once('./database/user.phps');
  


    $to      = $_POST["to"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    mail($to, $subject, $message);


  header('Location: geral.php');
  
 

?>
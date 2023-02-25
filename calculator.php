<?php
  session_start();
     if(!$_POST['first_number']){
        $_SESSION['error']['number_one_error'] = 'Number one is missing';
            header('location: index.php');
             die();
     }

     if(!$_POST['second_number']){
        $_SESSION['error']['number_two_error'] = 'Number two is missing';
           header('location: index.php');
           die();
     }

      if (isset($_POST["add"])) {
         $_SESSION['result'] = $_POST['first_number'] + $_POST['second_number'];
       } elseif (isset($_POST["substact"])) {
          $_SESSION['result'] = $_POST['first_number'] - $_POST['second_number'];
       } elseif (isset($_POST["multi"])) {
          $_SESSION['result'] = $_POST['first_number'] * $_POST['second_number'];
       } elseif (isset($_POST["divi"])) {
           $_SESSION['result'] = $_POST['first_number'] / $_POST['second_number'];
       }

     header('location: index.php');

?>
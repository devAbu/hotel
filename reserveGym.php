<?php
  require 'connection.php';


  $id = $_REQUEST['id'];
  $name = $_REQUEST['name'];
  $email = $_REQUEST['email'];


      $query = "INSERT INTO gymreserve (`name`, `email`) VALUES ('$name', '$email')";

      $response = @mysqli_query($connection, $query);
      if ($response) {
          echo ('Reserved');
          $query2 = "DElete from gymRequest where ID = $id";
          $result = @mysqli_query($connection, $query2);
          if($result){
          header("location: admin.php");
          }
      } else {
          echo mysqli_error($connection);
      }

 ?>

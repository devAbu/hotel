<?php
  require 'connection.php';


  $id = $_REQUEST['id'];
  $name = $_REQUEST['name'];
  $email = $_REQUEST['email'];
  $date = $_REQUEST['date'];


      $query = "INSERT INTO swimmingpoolreservation (`date`, `name`, `email`) VALUES ('$date','$name', '$email')";

      $response = @mysqli_query($connection, $query);
      if ($response) {
          echo ('Reserved');
          $query2 = "DElete from swimmingpoolrequest where ID = $id";
          $result = @mysqli_query($connection, $query2);
          if($result){
          header("location: admin.php");
          }
      } else {
          echo mysqli_error($connection);
      }

 ?>

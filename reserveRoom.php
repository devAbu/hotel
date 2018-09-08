<?php
  require 'connection.php';


  $id = $_REQUEST['id'];
  $name = $_REQUEST['name'];
  $room = $_REQUEST['room'];
  $checkIn = $_REQUEST['checkIn'];
  $checkOut = $_REQUEST['checkOut'];
  $adult = $_REQUEST['adult'];
  $child = $_REQUEST['child'];
  $price = $_REQUEST['price'];

      $query = "INSERT INTO rezervacija (`name`, `room`, `checkIn`, `checkOut`, `adult`, `child`, `price`) VALUES ('$name','$room', '$checkIn', '$checkOut', '$adult', '$child', '$price')";

      $response = @mysqli_query($connection, $query);
      if ($response) {
          echo ('Reserved');
          $query2 = "DElete from request where ID = $id";
          $result = @mysqli_query($connection, $query2);
          if($result){
          header("location: admin.php");
          }
      } else {
          echo mysqli_error($connection);
      }

 ?>

<?php
  require 'connection.php';


  $id = $_REQUEST['id2'];


          $query = "Delete from swimmingpoolrequest where ID = $id";
          $result = @mysqli_query($connection, $query);
          if($result){
          header("location: admin.php");
      } else {
          echo mysqli_error($connection);
      }

 ?>

<?php

require 'connection.php';


$name = $_REQUEST['name'];
$surname = $_REQUEST['surname'];
$email = $_REQUEST['email'];
$pass = $_REQUEST['pass'];



if ($_REQUEST['task'] == "register") {
    $query = "INSERT INTO registracija (`email`, `name`, `surname`, `pass`) VALUES ('$email','$name', '$surname', '$pass')";

    $response = @mysqli_query($connection, $query);
    if ($response) {
        echo ('success');
    } else {
        echo mysqli_error($dbc);
    }
}

?>
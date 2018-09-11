<?php

require 'connection.php';

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];

if ($_REQUEST['task'] == "reserve") {
    $query = "INSERT INTO gymRequest (`name`, `email`) VALUES ('$name','$email')";

    $response = @mysqli_query($connection, $query);
    if ($response) {
        echo ('reserved');
    } else {
        echo mysqli_error($connection);
    }
}

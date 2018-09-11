<?php

require 'connection.php';

$date = $_REQUEST['date'];
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];

if ($_REQUEST['task'] == "reserve") {
    $query = "INSERT INTO eventRequest (`date`, `name`, `email`) VALUES ('$date', '$name', '$email')";

    $response = @mysqli_query($connection, $query);
    if ($response) {
        echo ('reserved');
    } else {
        echo mysqli_error($connection);
    }
}

<?php

require 'connection.php';

$emailSub = $_REQUEST['emailSub'];

if ($_REQUEST['task'] == "subscribe") {
    $query = "INSERT INTO newsletter (`email`) VALUES ('$emailSub')";

    $response = @mysqli_query($connection, $query);
    if ($response) {
        echo ('success');
    } else {
        echo mysqli_error($connection);
    }
}

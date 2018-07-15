<?php

require 'connection.php';

$text = $_REQUEST['text'];
$session = $_REQUEST['session'];

if ($_REQUEST['task'] == "feedback") {
    $query = "INSERT INTO feedback (`name`, `content`) VALUES ('$session','$text')";

    $response = @mysqli_query($connection, $query);
    if ($response) {
        echo ('success');
    } else {
        echo mysqli_error($connection);
    }
}

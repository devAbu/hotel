<?php

require 'connection.php';

$text = $_REQUEST['text'];
$name = 'combe';

if ($_REQUEST['task'] == "feedback") {
    $query = "INSERT INTO feedback (`name`, `content`) VALUES ('$name','$text')";

    $response = @mysqli_query($connection, $query);
    if ($response) {
        echo ('success');
    } else {
        echo mysqli_error($connection);
    }
}

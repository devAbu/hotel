<?php


require 'connection.php';

$email = $_REQUEST['email'];
$pass = $_REQUEST['pass'];


if ($_REQUEST['task'] == "login") {

    $sql = "SELECT `email`, `pass` FROM `registracija` WHERE `email` = '$email'";
    $result = $connection->query($sql);


    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($row['email'] == $email) {
                if ($row['pass'] == $pass) {
                    $query = "INSERT INTO login (`name`,`pass`) VALUES ('$email', '$pass')";

                    $response = @mysqli_query($connection, $query);
                    if ($response) {
                        echo ('success');
                    } else {
                        echo mysqli_error($connection);
                    }
                } else {
                    echo ('pass');
                }
            } else {
                echo ('mail');
            }
        }
    }
}

?>
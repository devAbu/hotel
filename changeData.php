<?php
    require 'connection.php';

    $email = $_REQUEST['email'];
$pass = $_REQUEST['pass'];

if ($_REQUEST['task'] == "change") {

    $sql = "SELECT email FROM registracija WHERE email = '$email'";
    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($row['email'] == $email) {

                $query = "UPDATE registracija set pass = '$pass' where email = '$email'";

                $response = @mysqli_query($connection, $query);
                if ($response) {
                    echo ('success');
                } else {
                    echo mysqli_error($connection);
                }

                /* session_start();
            $_SESSION['email'] == $emailLog; */
            } else {
                echo ('mail');
            }
        }
    }
}


?>
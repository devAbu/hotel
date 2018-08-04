<?php
require 'connection.php';

$email = $_REQUEST['email'];
$pass = $_REQUEST['pass'];

$hash_pass = password_hash($pass, PASSWORD_DEFAULT);

if ($_REQUEST['task'] == "change") {

    $sql = "SELECT email FROM registracija WHERE email = '$email'";
    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($row['email'] == $email) {

                $query = "UPDATE registracija set pass = '$hash_pass' where email = '$email'";

                $response = @mysqli_query($connection, $query);
                if ($response) {
                    echo ('success');
                } else {
                    echo mysqli_error($connection);
                }
            } else {
                echo ('mail');
            }
        }
    }
}

<?php

require 'connection.php';

//$name = $_REQUEST['session'];
$room = $_REQUEST['room'];
$checkIn = $_REQUEST['checkIn'];
$checkOut = $_REQUEST['checkOut'];
$adultsNum = $_REQUEST['adultsNum'];
$childNum = $_REQUEST['childNum'];
//$price = $_REQUEST['price'];

$query = "INSERT INTO rezervacija (`name`, `room`, `checkIn`, `checkOut`, `adult`, `child`, `price`) VALUES ('test','$room', '$checkIn', '$checkOut', '$adultsNum', '$childNum', 0)";

$response = @mysqli_query($connection, $query);
if ($response) {
    echo ('success');
    header('location: index.php');
} else {
    echo mysqli_error($connection);
}

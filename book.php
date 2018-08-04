<?php

require 'connection.php';

$name = $_REQUEST['session'];
$room = $_REQUEST['room'];
$checkIn = $_REQUEST['checkIn'];
$checkOut = $_REQUEST['checkOut'];
$adultsNum = $_REQUEST['adultsNum'];
$childNum = $_REQUEST['childNum'];
$price = $_REQUEST['price'];

echo $checkIn;
echo '<br>';
echo $checkOut;
echo '<br>';
echo $room;
echo '<br>';
//  `room` like '$room' and
$sql = "SELECT * FROM `rezervacija` WHERE checkIn BETWEEN  '$checkIn' and  '$checkOut' or checkOut BETWEEN '$checkIn'  and '$checkOut' having room = '$room'";
$result = @mysqli_query($connection, $sql);
// AND `checkIn` between '$checkIn' and '$checkOut' or `checkOut` between '$checkIn' and '$checkOut'
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo 'reserved';
        header('location: bookNew.php');
    }
} else {
    $query = "INSERT INTO rezervacija (`name`, `room`, `checkIn`, `checkOut`, `adult`, `child`, `price`) VALUES ('$name','$room', '$checkIn', '$checkOut', '$adultsNum', '$childNum', '$price')";
    $response = @mysqli_query($connection, $query);
    if ($response) {
        echo ('free');
        header('location: index.php');
    } else {
        echo mysqli_error($connection);
    }
}

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
$sql = "SELECT * FROM `request` WHERE checkIn BETWEEN  '$checkIn' and  '$checkOut' or checkOut BETWEEN '$checkIn'  and '$checkOut' having room = '$room' order by checkOut asc ";
$result = @mysqli_query($connection, $sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo $row['checkIn'];
        echo '<br />';
        echo $row['checkOut'];
        echo '<br />';
        echo 'reserved';
        echo '<br />';
        header('location: bookNew.php?Message='.urlencode($row[checkIn ] ." to ". $row[checkOut]));

    }
} else {
    $query = "INSERT INTO request (`name`, `room`, `checkIn`, `checkOut`, `adult`, `child`, `price`) VALUES ('$name','$room', '$checkIn', '$checkOut', '$adultsNum', '$childNum', '$price')";
    $response = @mysqli_query($connection, $query);
    if ($response) {
        echo ('free');
        header('location: index.php?Message=free');


    } else {
        echo mysqli_error($connection);
    }
}

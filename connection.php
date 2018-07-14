<?php
        define('DB_USER', 'abu');
define('DB_PASSWORD', 'aburefko159753');
define('DB_HOST', 'localhost');
define('DB_NAME', 'hotelcombrero');

$connection = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('Some error occured, could not connect' . mysqli_connect_error());
?>
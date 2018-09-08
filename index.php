<!--TODO: Pravi tekst a ne lorem ispum -->
<?php
session_start();
?>
<?php
    if(isset($_REQUEST['Message'])){
      echo '<input type="text" value="juhu" id="test" hidden/>';
    }
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" type="text/css" rel="stylesheet">
    <title>Hotel Online System</title>
    <link rel="icon" type="image/ico" href="images/home.ico" />
    <meta name="author" content="combe">
    <meta name="keywords" content="Hotel, bosnia, reserve, sarajevo, room, app, applicaton">
    <meta name="description" content="Hotel online system for check and reserve a hotel room for your holiday ">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb"
        crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scroll/12.1.5/js/smooth-scroll.min.js" integrity="sha256-MMt0/21G3z0Zg4ET1kI3HC9npItDowkitRDVr0FhCxA="
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="loaders.min.css" />

     <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <link href="toastr.css" rel="stylesheet"/>
    <script src="toastr.js"></script>


    <script type="text/javascript">
        $(function () {
            var scroll = new SmoothScroll('a[href*="#top"');
        });
    </script>

    <style>
        body {
            background-color: gold;
        }

        .loader {
            position: fixed;
            top: 50%;
            left: 50%;
            z-index: 999;
            transform: scale(4);
        }
    </style>
</head>

<body id="body" data-spy="scroll">

    <div class="loader">
        <div class="loader-inner ball-scale-ripple-multiple">
        </div>
    </div>
<!--TODO: skontat kako promijeniti jezik na button-->
    <section style="z-index:555; position:fixed; top:15%; left:35%;">
        <div style="width:100% !important;  height:100% !important;">
            <div class="" tabindex="2" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-secondary">
                            <h5 class="modal-title">
                                <a href="index">
                                    <img src="images/home.ico" width="100" height="100" style="margin-bottom:20px;" />
                                </a>
                            </h5>
                            <h3 class="mt-5 ml-4">CHOOSE YOUR LANGUAGE</h3>

                        </div>
                        <div class="modal-body bg-dark" style="margin-top:-16px">
                            <button id="button1" type="button" class="btn btn-dark btn-block text-left prvi" onclick="button1Click();">
                                <img src="images/english.png" class="mr-2" width="50" height="50" />
                                <span style="font-size:25px;">English</span>
                            </button>
                            <button id="button2" type="button" class="btn btn-dark  btn-block text-left prvi" style="margin:0px !important;" onclick="button2Click();">
                                <img src="images/arabia.png" class="mr-2" width="50" height="50" />
                                <span style="font-size:25px;">Arabic</span>
                            </button>
                            <button id="button3" type="button" class="btn btn-dark btn-block text-left prvi" style="margin:0px !important; " onclick="button3Click();">
                                <img src="images/turkish.png" class="mr-2" width="50" height="50" />
                                <span style="font-size:25px;">Turkish</span>
                            </button>
                            <button id="button4" type="button" class="btn btn-dark btn-block text-left prvi" style="margin:0px !important;" onclick="button4Click();">
                                <img src="images/bosna.png" class="mr-2" width="50" height="50" />
                                <span style="font-size:25px;">Bosnian</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <article>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="opacity:0.8">
            <a class="navbar-brand" href="index">
                <img src="images/home.ico" alt="logo" width="55" height="45">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="index">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="room">Rooms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="skyBar">Sky Bar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="restaurant">Restaurant</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="events">CONFERENCE CENTER (EVENT)</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="feedback">Feedback</a>
                    </li>
                    <?php
    if (isset($_SESSION['email'])) {
        echo '<li class="nav-item">
            <a href="bookNew" class="nav-link link">
                Book</a>
        </li>';
    }?>
                </ul>
                <?php
if (isset($_SESSION['email'])) {
    echo "<ul class='navbar-nav ml-auto'><li class='nav-item'><a href='signOut.php'  class='nav-link link'><span class='navLinks'><i class='fas fa-sign-in-alt mr-2'></i>Sign Out</span></a></li></ul>";
} else {
    echo "<ul class='navbar-nav ml-auto'>
                    <li class='nav-item'>
                        <a href='register' class='nav-link link'>
                            <span class='navLinks'>
                                Sing Up</span>
                        </a>
                    </li>
                    <li class='nav-item'>
                        <a href='login' class='nav-link link'>
                            <span class='navLinks'>
                                Sign In</span>
                        </a>
                    </li>
                </ul>";
}
?>
            </div>
        </nav>

    </article>

    <article>
        <div class="row">
            <div class="col-12 mt-5" id="top">
                <video autoplay muted loop id="myVideo" class="mt-5">
                    <source src="videos/bgVideo.mp4" type="video/mp4">
                </video>
            </div>

        </div>
    </article>

    <article>
        <div class="row no-gutters">
            <div class="col-6">
                <div class="row">
                    <div class="col-12">

                        <a href="room">
                            <img src="images/room.jpg" class="img-fluid index" />
                        </a>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-6">
                        <img src="images/food.jpg" class="img-fluid" style="width: 1520px !important; " />
                    </div>
                    <div class=" col-6 text-center mt-5 ">
                        <label>
                            Lorem ipsum dolor sit amet,no sea takimata sanctus est Lorem ipsum dolor sit amet. consetetur sadipscing elitr, Stet clita
                            kasd gubergren,
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-6 ">
                <a href="skyBar ">
                    <img src="images/skyBar.jpg " class="img-fluid index" style="height: 580px;" />
                </a>
            </div>
            <div class="col-10 ">
                <a href="events ">
                    <img src="images/event glavna stranica.jpg " class="img-fluid index" style="width: 1520px !important;height: 250px; " />
                </a>
            </div>
            <div class="col-2 text-center mt-5 ">
                <label>
                    Lorem ipsum dolor sit amet,no sea takimata sanctus est Lorem ipsum dolor sit amet. consetetur sadipscing elitr, Stet clita
                    kasd gubergren,
                </label>
            </div>
            <div class="col-6 ">
                <img src="images/namjestaj.jpg " class="img-fluid " />
            </div>
            <div class="col-6 ">
                <a href="swimmingPool">
                    <img src="images/pool.jpg " class="img-fluid index " />
                </a>
            </div>
            <div class="col-6 ">
                <a href="restaurant">
                    <img src="images/kafa.jpg " class="img-fluid index " />
                </a>
            </div>
            <div class="col-6 ">
                <a href="spa ">
                    <img src="images/spa.jpg " class="img-fluid index" style="height: 445px;" />
                </a>
            </div>
            <div class="col-10 ">
                <a href="events ">
                    <img src="images/event2 glavna stranica.jpg " class="img-fluid index" style="width: 1520px !important;height: 250px; " />
                </a>
            </div>
            <div class="col-2 text-center mt-5 ">
                <label>
                    Lorem ipsum dolor sit amet,no sea takimata sanctus est Lorem ipsum dolor sit amet. consetetur sadipscing elitr, Stet clita
                    kasd gubergren,
                </label>
            </div>
            <div class="col-12 bg-secondary ">
                <div class="offset-1 ">
                    <div class="row ">


                    <?php
require 'connection.php';

$query = "select * from ads";
$result = $connection->query($query);

$numRows = $result->num_rows;

if ($numRows != 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="col-3 ">
                            <a href="http://localhost/github/btt-diplomski " target="_blank " class="rec">
                                <img src=" data:image/jpeg;base64,' . base64_encode($row["logo"]) . '" class="img-fluid my-1 mx-2 " width="75 " height="75 " />
                            </a>
                        </div>
                        <div class="col-4 mt-3 ">
                            <a href="http://localhost/github/btt-diplomski " target="_blank " class="rec">
                                <span style="font-size:30px; ">' . $row['title'] . '</span>
                            </a>
                        </div>
                        <div class="col-3 text-right mt-3 ">
                            <a href="http://localhost/github/btt-diplomski " target="_blank " class="rec">
                                <span style="font-size:20px; ">' . $row['type'] . '
                                    <i class="fab fa-connectdevelop "></i>
                                </span>
                            </a>
                        </div>';
    }
} else {
    echo 'no paid ads';
}

?>
                    </div>
                </div>
            </div>
            <div class="col-7 mt-3 ">
                <div class="row ">
                    <div class="col-12 ">
                        <h2 class="ml-5 " style="font-size:40px;color:gold; ">ABOUT US</h2>
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active ml-5">
                                    <div class="col-8 ">
                                        <label>
                                            Lorem ipsum dolor sit amet,sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, no sea takimata
                                            sanctus est Lorem ipsum dolor sit amet. sed diam voluptua. sed diam voluptua.
                                        </label>
                                    </div>
                                </div>
                                <div class="carousel-item ml-5 ">
                                    <div class="col-8 ">
                                        <label>
                                            Lorem ipsum dolor sit amet,sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, no sea takimata
                                            sanctus est Lorem ipsum dolor sit amet. sed diam voluptua. sed diam voluptua.
                                        </label>
                                    </div>
                                </div>
                                <div class="carousel-item ml-5 ">
                                    <div class="col-8 ">
                                        <label>
                                            Lorem ipsum dolor sit amet,sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, no sea takimata
                                            sanctus est Lorem ipsum dolor sit amet. sed diam voluptua. sed diam voluptua.
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 offset-1 ">
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <i class="fas fa-angle-down fa-rotate-90 fa-3x " style="color:goldenrod; "></i>
                        </a>
                    </div>
                    <div class="col-3 offset-1 text-right ">
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <i class="fas fa-angle-up fa-rotate-90 fa-3x " style="color:goldenrod; "></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-5 mt-3 ">
                <div class="row ">
                    <div class="col-12 ">
                        <h2 class="ml-5 " style="font-size:40px; color:gold ">AWARDS</h2>
                    </div>
                    <div class="col-8 ml-5 ">
                        <ul class="list-group list-group-flush ">
                            <li class="list-group-item " style="background:none !important; ">
                                <i class="fas fa-trophy fa-2x mr-2 " style="color:goldenrod; "></i> 2017 The Best Hotel in Sarajevo</li>
                            <li class="list-group-item " style="background:none !important; ">
                                <i class="fas fa-chart-line fa-2x mr-2 " style="color:goldenrod; "></i> 2015 The Most Satisfied Guests</li>
                            <li class="list-group-item " style="background:none !important; ">
                                <i class="fas fa-check-circle fa-2x mr-2 " style="color:goldenrod; "></i> 2017 The Kindest Employees</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <footer class="w3-gray mt-3 ">
        <div class="row ml-3 ">
            <div class="col-3 ">
                <div class="row ">
                    <div class="col-12 mt-2 ">
                        <img src="images/home.ico " alt="logo " width="75 " height="75 " />
                    </div>
                    <div class="col-12 mt-4 mb-2 ">
                        Address:
                        <br />
                        <span>
                            <a id="map11" data-toggle="modal" class="text-warning" data-target="#map1" style="text-decoration:none;cursor: pointer; ">
                                <i class="fas fa-map-marker mr-2 mt-2 "></i>Grada Bakua 11</a>
                            <div class="modal fade " id="map1" tabindex="-1 " role="dialog " aria-labelledby="modalTitle " aria-hidden="true ">
                                <div class="modal-dialog modal-lg " role="document ">
                                    <div class="modal-content ">
                                        <button type="button " class="close " data-dismiss="modal " aria-label="Close " style="float:right; ">
                                            <span aria-hidden="true " style="float:right;margin-right:15px;margin-top:5px; ">
                                                <i class="fas fa-times "></i>
                                            </span>
                                        </button>
                                        <div class="modal-body ">
                                            <div class="col-12 ">
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2878.2453302725744!2d18.349382815303517!3d43.830010879115655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4758c990fdf0ccc5%3A0xdab20818f84ffaf7!2sGrada+Bakua%2C+Sarajevo+71000!5e0!3m2!1sen!2sba!4v1520858418062 "
                                                    width="700 " height="450 " frameborder="0 " style="border:0 " allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </span>
                        <br />
                        <span>
                            <a id="map22" data-toggle="modal" class="text-warning" data-target="#map2" style="text-decoration:none;cursor: pointer; ">
                                <i class="fas fa-map-marker mr-2 mt-2 "></i>Dobrinja 3, Sarajevo</a>
                            <div class="modal fade " id="map2" tabindex="-1 " role="dialog " aria-labelledby="modalTitle " aria-hidden="true ">
                                <div class="modal-dialog modal-lg " role="document ">
                                    <div class="modal-content ">
                                        <button type="button " class="close " data-dismiss="modal " aria-label="Close " style="float:right; ">
                                            <span aria-hidden="true " style="float:right;margin-right:15px;margin-top:5px; ">
                                                <i class="fas fa-times "></i>
                                            </span>
                                        </button>
                                        <div class="modal-body ">
                                            <div class="col-12 ">
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d4840.668991463732!2d18.346342773553868!3d43.82931261829321!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sba!4v1523047759583 "
                                                    width="600 " height="450 " frameborder="0 " style="border:0 " allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </span>
                        <br />
                        <span>
                            <a href="# " id="map33" data-toggle="modal" class="text-warning" data-target="#map3" style="text-decoration:none; ">
                                <i class="fas fa-map-marker mr-2 mt-2 "></i>Bosnia & Herzegovina</a>
                            <div class="modal fade " id="map3" tabindex="-1 " role="dialog " aria-labelledby="modalTitle " aria-hidden="true ">
                                <div class="modal-dialog modal-lg " role="document ">
                                    <div class="modal-content ">
                                        <button type="button " class="close " data-dismiss="modal " aria-label="Close " style="float:right; ">
                                            <span aria-hidden="true " style="float:right;margin-right:15px;margin-top:5px; ">
                                                <i class="fas fa-times "></i>
                                            </span>
                                        </button>
                                        <div class="modal-body ">
                                            <div class="col-12 ">
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2944132.178474442!2d15.428947525674637!3d43.89459324278956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x134ba215c737a9d7%3A0x6df7e20343b7e90c!2sBosnia+and+Herzegovina!5e0!3m2!1sen!2sba!4v1523047852547 "
                                                    width="600 " height="450 " frameborder="0 " style="border:0 " allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </span>
                    </div>
                    <div class="col-1 mr-2 mt-5 ">
                        <a href="# ">ENG</a>
                    </div>
                    <div class="col-1 mr-2 mt-5 ">
                        <a href="# ">ARA</a>
                    </div>
                    <div class="col-1 mr-2 mt-5 ">
                        <a href="# ">BOS</a>
                    </div>
                    <div class="col-1 mt-5 ">
                        <a href="# ">TUR</a>
                    </div>
                    <div class="col-12 mt-5 mb-4 ">
                        &copy; Copyright 2018, Combe
                    </div>
                </div>
            </div>
            <div class="col-3 ">
            <?php

$query = "select * from contact";
$result = $connection->query($query);

$numRows = $result->num_rows;

if ($numRows != 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="col-12 mt-4 ">
                    <h1 style="color: gold; ">Contact details:</h1>
                    <br> </div>
                <div class="col-12 mt-4 ">
                    <label>
                        <i class="fas fa-phone " style="color:goldenrod; "></i>
                        <a href="tel:' . $row['phone'] . ' ">' . $row['phone'] . '</a>
                    </label>
                </div>
                <div class="col-12 ">
                    <label>
                        <i class="fas fa-fax " style="color: goldenrod; "></i>
                        <a href="tel:' . $row['home'] . ' ">' . $row['home'] . '</a>
                    </label>
                </div>
                <div class="col-12 ">
                    <label>
                        <i class="fas fa-at " style="color: goldenrod; "></i>
                        <a href="mailto:' . $row['email'] . '">' . $row['email'] . '</a>
                    </label>
                </div>';
    }
} else {
    echo 'no contact info';
}

?>
                <div class="col-12 mt-4 ">
                    <input type="email " class="w3-input w3-gray " placeholder="you@example.com " style="color:gold !important;
                            border-bottom-color: gold !important; " name="emailSub" id="emailSub" onkeyup="check()">
                    <button class="btn btn-secondary" id="subButton" name="subButton"><small style="color: white; ">Subscribe to the newsletter</small></button>
                    <div class="alert" id="mess"></div>
                </div>
            </div>
            <div class="col-3 ">
                <div class="col-12 mt-4 ">
                    <h1 style="color: gold; ">Follow us:</h1>
                    <br> </div>
                <div class="col-12 mt-4 ">
                    <div class="row ">
                        <div class="col-2 ">
                            <label>
                                <a href="https://www.facebook.com">
                                    <i class="fab fa-facebook-f fa-3x " style="color:goldenrod; "></i>
                                </a>
                            </label>
                        </div>
                        <div class="col-2 mr-3 ">
                            <label>
                                <a href="https://www.instagram.com">
                                    <i class="fab fa-instagram fa-3x " style="color:goldenrod; "></i>
                                </a>
                            </label>
                        </div>
                        <div class="col-2 ">
                            <label>
                                <a href="https://www.youtube.com">
                                    <i class="fab fa-youtube fa-3x " style="color:goldenrod; "></i>
                                </a>
                            </label>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-9 ">
                            <span style="font-size: 24px; ">Back to the top:</span>
                        </div>
                        <div class="col-1 ">
                            <a href="#top ">
                                <i class="fas fa-angle-up fa-3x ml-5 " style="color:goldenrod; "></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3 bg-warning">
                <a href="bookNew" id="book">
                    <div class=" col-12 mt-5 text-center ">
                        <i class="fa fa-5x fa-bell mt-4 "></i>
                        <p class="h1 mt-5 ">BOOK NOW
                            <i class="fas fa-angle-right ml-2"></i>
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </footer>
    <script>
        $('section').hide();
        $('article').hide();
        $('footer').hide();
        $(window).on({
            load: function () {
                if(localStorage.getItem('lang') === null){
                    $('.loader').hide();
                    $('article').hide();
                    $('section').show();
                    toastr.success('Are you the 6 fingered man?');
                } else {
                    $('.loader').hide();
                    $('section').hide();
                    $('article').show();
                    $('footer').show();
                    var test = $('#test').val()
                    if(test != null){
                      console.log(test)
                      toastr.success('Room requested!!!');
                    }

                }
                document.getElementById('body').style.backgroundColor = "silver ";
                $('#subButton').prop('disabled', true);
                $('#subButton').css('cursor', 'not-allowed');

            }
        })

        function button1Click() {
            $('article').fadeIn();
            $('.loader').hide();
            $('section').hide();
            $('footer').show();

            if(typeof(Storage) !== "undefined"){
                localStorage.setItem("lang", "eng");
            }


        }

        function button2Click() {
            $('article').show();
            $('.loader').hide();
            $('section').hide();
            $('footer').show();
            if(typeof(Storage) !== "undefined"){
                localStorage.setItem("lang", "ara");
            }

        }

        function button3Click() {
            $('article').show();
            $('.loader').hide();
            $('section').hide();
            $('footer').show();
            if(typeof(Storage) !== "undefined"){
                localStorage.setItem("lang", "tur");
            }
        }

        function button4Click() {
            $('article').show();
            $('.loader').hide();
            $('section').hide();
            $('footer').show();
            if(typeof(Storage) !== "undefined"){
                localStorage.setItem("lang", "bos");
            }
        }

    </script>

<script>
        function check(){
            var emailSub = $('#emailSub').val();

            if(emailSub == "" ){
                $('#subButton').prop('disabled', true);
                $('#subButton').css('cursor', 'not-allowed');
            } else if(emailSub != "" ){
                $('#subButton').prop('disabled', false);
                $('#subButton').css('cursor', '');
            }
        }
    </script>

    <script>
            $('#mess').fadeOut();
                    $('#subButton').click(function () {
                        $('#mess').removeClass('alert-danger').removeClass('alert-success')
                        var emailSub = $('#emailSub').val();

                        function validateEmail($emailSub) {
                            var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                            return emailReg.test($emailSub);
                        }

                        if (emailSub == "") {
                            $("#mess").addClass('alert-danger');
                            $("#mess").html("Email field is required!!!");
                            $("#mess").fadeIn(500).delay(1000).fadeOut(500);
                        } else if (!validateEmail(emailSub)) {
                            $("#mess").addClass('alert-danger');
                            $("#mess").html('Please enter validated email address.');
                            $("#mess").fadeIn(500).delay(1000).fadeOut(500);
                        } else {
                $.ajax({
                    url: "./subscribeData.php?task=subscribe&emailSub="+emailSub,
                    success: function (data){
                        if(data.indexOf('success') > -1){
                            $("#mess").addClass('alert-success');
							$("#mess").html('Thanks for your subscribtion');
							$("#mess").fadeIn(500).delay(1000).fadeOut(500);
                            $('#emailSub').val("");
                            $('#subButton').prop('disabled', true);
                $('#subButton').css('cursor', 'not-allowed');
                        } else {
                            $("#mess").addClass('alert-danger');
							$("#mess").html('You are already subscribe our newsletter');
							$("#mess").fadeIn(500).delay(1000).fadeOut(500);
                        }
                    },
                    error: function (data, err){
                        $("#mess").addClass('alert-danger');
                        $("#mess").html('Some problem occured. Please try again later.');
                        $("#mess").fadeIn(500).delay(1000).fadeOut(500);
                    }
                })
            }
        });
    </script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js "></script>
    <script src="loaders.css.js "></script>

</body>

</html>

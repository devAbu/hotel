<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Menu</title>

    <!-- Favicon -->
    <link rel="icon" href="images/home.ico">

    <!-- Core Stylesheet -->
    <link href="style2.css" rel="stylesheet">

    <!-- Responsive CSS-->
    <link href="css/responsive/responsive.css" rel="stylesheet">

</head>

<body>

    <!-- ***** Header Area Start ***** -->
    <header class="header_area" id="header">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <nav class="h-100 navbar navbar-expand-lg align-items-center">
                        <a class="navbar-brand" href="index.php">Combrero Hotel</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#caviarNav" aria-controls="caviarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                        <div class="collapse navbar-collapse" id="caviarNav">
                            <ul class="navbar-nav ml-auto" id="caviarMenu">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">Home
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
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Breadcumb Area Start ***** -->
    <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(images/skyBar1.jpg)">
        <div class="container h-100">

        </div>
    </div>
    <!-- ***** Breadcumb Area End ***** -->

    <!-- ***** Menu Area Start ***** -->
    <div class="caviar-food-menu section-padding-150 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <div class="food-menu-title">
                        <h2 style="color:gold">Menu</h2>
                    </div>
                </div>

                <div class="col-10">

                    <div class="caviar-menu-slides owl-carousel clearfix">

                        <div class="caviar-portfolio clearfix">
                          <?php
                              require 'connection.php';

                              $query = "select * from menuItem2 where type like '%prva%' ";
                              $result = $connection->query($query);

                              $numRows = $result->num_rows;

                              if ($numRows != 0) {
                                  while ($row = $result->fetch_assoc()) {
                                      echo '<div class="single_menu_item breakfast wow fadeInUp">
                                          <div class="d-sm-flex align-items-center">

                                              <div class="dish-description">
                                                  <h3>'.$row['name'].'</h3>
                                                  <p>'.$row['description'].'</p>
                                              </div>
                                              <div class="dish-value">
                                                  <h3>$'.$row['price'].'</h3>
                                              </div>
                                          </div>
                                      </div>';
                                  }
                              }
                           ?>
                        </div>

                        <div class="caviar-portfolio clearfix">
                          <?php

                              $query = "select * from menuItem2 where type like '%druga%' ";
                              $result = $connection->query($query);

                              $numRows = $result->num_rows;

                              if ($numRows != 0) {
                                  while ($row = $result->fetch_assoc()) {
                                      echo '<div class="single_menu_item breakfast wow fadeInUp">
                                          <div class="d-sm-flex align-items-center">

                                              <div class="dish-description">
                                                  <h3>'.$row['name'].'</h3>
                                                  <p>'.$row['description'].'</p>
                                              </div>
                                              <div class="dish-value">
                                                  <h3>$'.$row['price'].'</h3>
                                              </div>
                                          </div>
                                      </div>';
                                  }
                              }
                           ?>
                        </div>

                        <div class="caviar-portfolio clearfix">
                          <?php

                              $query = "select * from menuItem2 where type like '%treca%' ";
                              $result = $connection->query($query);

                              $numRows = $result->num_rows;

                              if ($numRows != 0) {
                                  while ($row = $result->fetch_assoc()) {
                                      echo '<div class="single_menu_item breakfast wow fadeInUp">
                                          <div class="d-sm-flex align-items-center">

                                              <div class="dish-description">
                                                  <h3>'.$row['name'].'</h3>
                                                  <p>'.$row['description'].'</p>
                                              </div>
                                              <div class="dish-value">
                                                  <h3>$'.$row['price'].'</h3>
                                              </div>
                                          </div>
                                      </div>';
                                  }
                              }
                           ?>
                        </div>

                        <div class="caviar-portfolio clearfix">
                          <?php

                              $query = "select * from menuItem where type like '%dessert%' ";
                              $result = $connection->query($query);

                              $numRows = $result->num_rows;

                              if ($numRows != 0) {
                                  while ($row = $result->fetch_assoc()) {
                                      echo '<div class="single_menu_item breakfast wow fadeInUp">
                                          <div class="d-sm-flex align-items-center">
                                          .'
                                              // <div class="dish-thumb">;
                                              //     <img src="img/menu-img/dish-1.png" alt="">;
                                              // </div>;
                                              .'
                                              <div class="dish-description">
                                                  <h3>'.$row['name'].'</h3>
                                                  <p>'.$row['description'].'</p>
                                              </div>
                                              <div class="dish-value">
                                                  <h3>$'.$row['price'].'</h3>
                                              </div>
                                          </div>
                                      </div>';
                                  }
                              }
                           ?>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Menu Area End ***** -->



    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/others/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

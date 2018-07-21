<?php
session_start();
if (isset($_SESSION['email'])) {
    $session = $_SESSION['email'];
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
    <meta name="keywords" content="Hotel, bosnia, reserve, sarajevo, apartment">
    <meta name="description" content="Hotel online system for check and reserve a hotel room for your holiday ">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb"
        crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scroll/12.1.5/js/smooth-scroll.min.js" integrity="sha256-MMt0/21G3z0Zg4ET1kI3HC9npItDowkitRDVr0FhCxA="
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="loaders.min.css" />

 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <!-- <link rel="stylesheet" href="/resources/demos/style.css"> -->
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

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

    <article>
        <nav class="navbar bg-primary navbar-dark navbar-expand-md fixed-top" style="opacity:0.7; font-size:18px;">
            <a href="index" class="navbar-brand">
                <img src="images/home.ico" alt="logo" class="img-fluid mr-3" width="45" height="45" />
                <span class="h4">COMBRERO HOTEL</span>
            </a>
            <button type="button" class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
                aria-expended="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav" id="navScrollspy">
                    <li class="nav-item">
                        <a href="index" class="nav-link link active">
                            <!-- <i class="fas fa-home mr-2"></i> -->Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="hotel" class="nav-link link">
                            <!-- <i class="fas fa-users mr-2"> --></i>Hotel</a>
                    </li>
                    <li class="nav-item">
                        <a href="events" class="nav-link link">
                            <!-- <i class="fas fa-suitcase mr-2"> --></i>Events</a>
                    </li>
                    <li class="nav-item">
                        <a href="events" class="nav-link link">
                            <!-- <i class="fas fa-suitcase mr-2"> --></i>Room</a>
                    </li>
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
    <section class="bg">
        <div>
            <!-- class="bg-primary" style="opacity:0.7;" -->
            <form action="book.php" method="post">
            <div class="offset-lg-4 ">
                <div class="card" style="width: 22rem; margin-top:-30px;background:none !important; border:none;">
                    <div class="card-body text-center">
                        <img class="card-img-top" src="images/home.ico" style="width:90px !important; margin-top:150px !important; margin-left:100px !important;"
                            height="80" alt="Card image cap">
                        <h3 class="card-title text-uppercase text-primary" style="margin-left:0px !important; width: 400px !important;">Reservation</h3>
                        <?php echo "<input type='text' value='$session' hidden id='session' name='session'>";
?>
                    </div>
                    <ul class="list-group list-group-flush" style="margin-top:-20px;">
                        <li class="list-group-item bg-info" style="border:none; margin-top:-20px; background:none !important;">
                            <div class="row">
                            <?php

require 'connection.php';

$roomValue = $_REQUEST['room'];
$query = "select * from rooms where code like '%$roomValue%'";
$result = $connection->query($query);

$numRows = $result->num_rows;

if ($numRows != 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="col-5">

                                    <img src=" data:image/jpeg;base64,' . base64_encode($row["img"]) . '" alt="room" width="100" height="100">
                                    <small class="text-warning">' . $row['code'] . '</small>
                                     <input type="text " name=" room " id=" room " value=" ' . $row['code'] . ' " hidden>

                                </div>
                                <div class="col-7">
                                    <label class="text-danger">' . $row['description'] . '</label>
                                </div>';
    }
} else {
    echo 'No rooms';
}
?>
                                <!-- <div class="col-5">

                                    <img src="images/room.jpg" alt="room" width="100" height="100">
                                    <small class="text-warning"><?php echo $roomValue; ?></small>
                                    <?php echo "<input type='text' name='room' id='room' value='$roomValue' hidden> "; ?>

                                </div>
                                <div class="col-8">
                                    <label class="text-danger">Lorem ipsum dolor sit amet, consetetur sadipscing elitr,</label>
                                </div> -->
                            </div>
                        </li>
                        <li class="list-group-item bg-info" style="border:none; margin-top:-20px; background:none !important;">
                            <input type="date" style="width:400px; height: 50px; background: none !important; border: none; border-bottom: 1px solid black;"
                                required="" name="checkIn" id="checkIn">
                        </li>
                        <!--<li class="list-group-item bg-info" style="border:none; margin-top:-20px; background:none !important;">
                                <input type="password" placeholder="*****" class="form-control" style="max-width:400px;" required="">
                            </li>-->
                    </ul>
                    <table>
                        <tr>
                            <td>
                                <div style="margin-left:18px;">
                                    <input type="date" style="width:400px !important; height: 50px; background: none !important; border: none; border-bottom: 1px solid black;"
                                        required name="checkOut" id="checkOut">
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <div style="margin-left:18px;">
                                    <input type="number" placeholder="Adults number..." style="width:400px !important; height: 50px; background: none !important; border: none; border-bottom: 1px solid black;"
                                        required name="adultsNum" id="adultsNum" >
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div style="margin-left:18px;">
                                    <input type="number" placeholder="Child number..." style="width:400px !important; height: 50px; background: none !important; border: none; border-bottom: 1px solid black;"
                                        required name="childNum" id="childNum">
                                </div>
                            </td>
                        </tr>
                    </table>
                    <input type="number" name="price" id="price" value=0>

                    <div class="card-body text-center col-2 offset-5">
                        <button type="submit" class="btn btn-primary text-white" id="bookButton">Book
                            <i class="fas fa-sign-in-alt ml-2"></i>
                        </button>
                    </div>
                </div>
                </form>
            </div>
            <div class="text-center text-primary col-2 offset-5">
                <p style="font-size:25px;">&copy; 2018 COMBE</p>
            </div>
        </div>
    </section>


    <script>
        $('section').hide();
        $('article').hide();
        $('footer').hide();
        $.noConflict();
jQuery(document).ready(function ($) {

                $('.loader').hide();
                $('article').show();
                document.getElementById('body').style.backgroundColor = "silver ";
                $('section').show();

                $('#bookButton').prop('disabled', true);
                $('#bookButton').css('cursor', 'not-allowed');

                price()
                check()

                var currentDate = new Date()
                var month = currentDate.getMonth()+1;
                var day = currentDate.getDate();

                var date = currentDate . getFullYear()+'-'+
                        ((''+month) . length < 2 ? '0' : '') + month+'-'+
                        ((''+day) . length < 2 ? '0' : '') + day;
                        console.log(date)
                //$( "#checkIn" ).datepicker();
                $( "#checkIn" ).datepicker({dateFormat: 'yy-mm-dd', minDate: date});
                $( "#checkOut" ).datepicker({dateFormat: 'yy-mm-dd', minDate: date });

        });
    </script>

    <script>
        $('#checkIn').change(function () {
            price();
            check();
        })

        $('#checkOut').change(function (){
           price();
check();

        })

        $('#adultsNum').keyup(function (){
            price()
            check()
        })

        $('#childNum').keyup(function (){
            price()
            check()
        })
    </script>


        <script>
            function check(){
                var checkIn = $('#checkIn').val()
                var checkOut = $('#checkOut').val()
                var adult = $('#adultsNum').val()
                var child = $('#childNum').val()

                if(checkIn >= checkOut || adult == 0 || adult == "" || child == ""){
                    $('#bookButton').prop('disabled', true);
                $('#bookButton').css('cursor', 'not-allowed');
                } else {
                $('#bookButton').prop('disabled', false);
                $('#bookButton').css('cursor', '');

            }
            }
        </script>

         <script>
            function price(){
                var room = $('#room').val()
                var checkIn = Date.parse($('#checkIn').val())
                var checkOut = Date.parse($('#checkOut').val())
                var adult = $('#adultsNum').val()
                var child =$('#childNum').val()
                var price = $('#price').val()

                if(adult == ""){
                    adult = 0
                }

                if(child == ""){
                    child = 0
                }

                adult = parseInt(adult)
                child = parseInt(child)

                var priceAdult = 100 * adult
                var priceChild = 75 * child

                price = priceAdult + priceChild
                price = parseInt(price)
                console.log('price ' + price)


                var currentDate = new Date()
                var month = currentDate.getMonth()+1;
                var day = currentDate.getDate();

                var date = currentDate . getFullYear()+'-'+
                        ((''+month) . length < 2 ? '0' : '') + month+'-'+
                        ((''+day) . length < 2 ? '0' : '') + day;

                date = Date.parse(date)

                var result = checkIn - date;

console.log('result ' + result)

                var final = Math.floor(result / (1000 * 60 * 60 * 24));
                console.log('final ' + final)

                if(final <= 10){
                    price = price + 150
                    console.log(price)
                } else if(final <= 18){
                    price += 100
                    console.log(price)
                } else if(final<= 30){
                    price += 75
                    console.log(price)
                } else {
                    price += 50
                    console.log(price)
                }

                /* if(room.indexOf('Top') > -1){
                    price +=200
                    console.log(price)
                } else if(room.indexOf('Middle') > -1){
                    price += 150
                    console.log(price)
                } else if(room.indexOf('Down') > -1){
                    price += 100
                    console.log(price)
                } */

                $('#price').val(price)

        }
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js "></script>
    <script src="loaders.css.js "></script>


</body>

</html>
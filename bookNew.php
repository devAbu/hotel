<?php
session_start();
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
                            <!-- <i class="fas fa-users mr-2"></i> -->Hotel</a>
                    </li>
                    <li class="nav-item">
                        <a href="events" class="nav-link link">
                            <!-- <i class="fas fa-suitcase mr-2"></i> -->Events</a>
                    </li>
                    <li class="nav-item">
                        <a href="events" class="nav-link link">
                            <!-- <i class="fas fa-suitcase mr-2"></i> -->Room</a>
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
        <div class="container no-gutters">
            <div class="row">
                <div class="col-7 mt-5 offset-4">
                    <h1 class="text-center text-white">Select the part you want to stay in</h1>
                    <a id="map11" data-toggle="modal" class="text-warning" data-target="#map1" style="text-decoration:none;cursor: pointer; ">
                        <img src="images/hotel (2).jpg" alt="top" style="margin-top: 25px;">
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-6  offset-4">
                    <a id="map22" data-toggle="modal" class="text-warning" data-target="#map2" style="text-decoration:none;cursor: pointer; ">
                        <img src="images/hotel (3).jpg" alt="middle">
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-6  offset-4">
                    <a id="map33" data-toggle="modal" class="text-warning" data-target="#map3" style="text-decoration:none;cursor: pointer; ">
                        <img src="images/hotel (4).jpg" alt="down">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <?php
if (isset($_SESSION['email'])) {
    echo '<form action="book2.php" method="post">';
} else {
    echo '';
}
?>

    <div class="modal fade " id="map1" tabindex="-1 " role="dialog " aria-labelledby="modalTitle " aria-hidden="true ">
        <div class="modal-dialog modal-lg " role="document ">
            <div class="modal-content">
                <div class="modal-header" style="height:100px">
                    <div class="text-center">
                        <img src="images/home.ico" alt="logo" width="75" height="75" style="margin-left: 45%;position: absolute;">
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body ">
                    <div class="col-12">
                        <div class="row">
                            <?php 
                            ?>
                            <!-- <div class="col-3">
                                <input type="radio" value="room1Top" id="room11" name="room" hidden onclick="check()">
                                <label for="room11">
                                    <img src="images/room.jpg" class="img-fluid" alt="room1" width="300" height="300">
                                    <small style="margin-right:80px;">juhu</small>
                                </label>
                            </div>
                            <div class="col-3">
                                <input type="radio" value="room2Top" id="room12" name="room" hidden onclick="check()">
                                <label for="room12">
                                    <img src="images/room.jpg" class="img-fluid" alt="room1" width="300" height="300">
                                    <small style="margin-right:80px;">juhu</small>
                                </label>
                            </div>
                            <div class="col-3">
                                <input type="radio" value="room3Top" id="room13" name="room" hidden onclick="check()">
                                <label for="room13">
                                    <img src="images/room.jpg" class="img-fluid" alt="room1" width="300" height="300">
                                    <small style="margin-right:80px;">juhu</small>
                                </label>
                            </div>
                            <div class="col-3">
                                <input type="radio" value="room4Top" id="room14" name="room" hidden onclick="check()">
                                <label for="room14">
                                    <img src="images/room.jpg" class="img-fluid" alt="room1" width="300" height="300">
                                    <small style="margin-right:80px;">juhu</small>
                                </label>
                            </div>
                            <div class="col-3">
                                <input type="radio" value="room5Top" id="room15" name="room" hidden onclick="check()">
                                <label for="room15">
                                    <img src="images/room.jpg" class="img-fluid" alt="room1" width="300" height="300">
                                    <small style="margin-right:80px;">juhu</small>
                                </label>
                            </div>
                            <div class="col-3">
                                <input type="radio" value="room6Top" id="room16" name="room" hidden onclick="check()">
                                <label for="room16">
                                    <img src="images/room.jpg" class="img-fluid" alt="room1" width="300" height="300">
                                    <small style="margin-right:80px;">juhu</small>
                                </label>
                            </div>
                            <div class="col-3">
                                <input type="radio" value="room7Top" id="room17" name="room" hidden onclick="check()">
                                <label for="room17">
                                    <img src="images/room.jpg" class="img-fluid" alt="room1" width="300" height="300">
                                    <small style="margin-right:80px;">juhu</small>
                                </label>
                            </div>
                            <div class="col-3">
                                <input type="radio" value="room8Top" id="room18" name="room" hidden onclick="check()">
                                <label for="room18">
                                    <img src="images/room.jpg" class="img-fluid" alt="room1" width="300" height="300" id="8">
                                    <small style="margin-right:80px;">juhu</small>
                                </label>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                <?php
if (isset($_SESSION['email'])) {
    echo '<button type="submit" class="btn btn-lg btn-success" id="topButton">Select
                        <i class="fas fa-plus-circle ml-2"></i>
                    </button>';
} else {
    echo '<button class="btn btn-lg btn-primary" onclick="redirect()" id="noAcc" name="noAcc">Login
                        <i class="fas fa-sign-in-alt ml-2"></i>
                    </button>';
}
?>

                </div>
            </div>
        </div>
    </div>
    </form>

    <script>
        function redirect(){
            var url = "login.php";
            $(location).attr('href',url);
        }
    </script>

<?php
if (isset($_SESSION['email'])) {
    echo '<form action="book2.php" method="post">';
} else {
    echo '';
}
?>
    <div class="modal fade " id="map2" tabindex="-1 " role="dialog " aria-labelledby="modalTitle " aria-hidden="true ">
        <div class="modal-dialog modal-lg " role="document ">
            <div class="modal-content">
                <div class="modal-header" style="height:100px">
                    <div class="text-center">
                        <img src="images/home.ico" alt="logo" width="75" height="75" style="margin-left: 45%;position: absolute;">
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body ">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-3">
                                <input type="radio" value="room1Middle" id="room21" name="room" hidden onclick="check2()">
                                <label for="room21">
                                    <img src="images/kafa.jpg" class="img-fluid" alt="room1" width="300" height="300">
                                    <small style="margin-right:80px;">juhu</small>
                                </label>
                            </div>
                            <div class="col-3">
                                <input type="radio" value="room2Middle" id="room22" name="room" hidden onclick="check2()">
                                <label for="room22">
                                    <img src="images/kafa.jpg" class="img-fluid" alt="room1" width="300" height="300">
                                    <small style="margin-right:80px;">juhu</small>
                                </label>
                            </div>
                            <div class="col-3">
                                <input type="radio" value="room3Middle" id="room23" name="room" hidden onclick="check2()">
                                <label for="room23">
                                    <img src="images/kafa.jpg" class="img-fluid" alt="room1" width="300" height="300">
                                    <small style="margin-right:80px;">juhu</small>
                                </label>
                            </div>
                            <div class="col-3">
                                <input type="radio" value="room4Middle" id="room24" name="room" hidden onclick="check2()">
                                <label for="room24">
                                    <img src="images/kafa.jpg" class="img-fluid" alt="room1" width="300" height="300">
                                    <small style="margin-right:80px;">juhu</small>
                                </label>
                            </div>
                            <div class="col-3">
                                <input type="radio" value="room5Middle" id="room25" name="room" hidden onclick="check2()">
                                <label for="room25">
                                    <img src="images/kafa.jpg" class="img-fluid" alt="room1" width="300" height="300">
                                    <small style="margin-right:80px;">juhu</small>
                                </label>
                            </div>
                            <div class="col-3">
                                <input type="radio" value="room6Middle" id="room26" name="room" hidden onclick="check2()">
                                <label for="room26">
                                    <img src="images/kafa.jpg" class="img-fluid" alt="room1" width="300" height="300">
                                    <small style="margin-right:80px;">juhu</small>
                                </label>
                            </div>
                            <div class="col-3">
                                <input type="radio" value="room7Middle" id="room27" name="room" hidden onclick="check2()">
                                <label for="room27">
                                    <img src="images/kafa.jpg" class="img-fluid" alt="room1" width="300" height="300">
                                    <small style="margin-right:80px;">juhu</small>
                                </label>
                            </div>
                            <div class="col-3">
                                <input type="radio" value="room8Middle" id="room28" name="room" hidden onclick="check2()">
                                <label for="room28">
                                    <img src="images/kafa.jpg" class="img-fluid" alt="room1" width="300" height="300">
                                    <small style="margin-right:80px;">juhu</small>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <?php
if (isset($_SESSION['email'])) {
    echo '<button type="submit" class="btn btn-lg btn-success" id="middleButton">Select
                        <i class="fas fa-plus-circle ml-2"></i>
                    </button>';
} else {
    echo '<button class="btn btn-lg btn-primary" onclick="redirect()" id="noAcc" name="noAcc">Login
                        <i class="fas fa-sign-in-alt ml-2"></i>
                    </button>';
}
?>
                </div>
            </div>
        </div>
    </div>
    </form>

    <?php
if (isset($_SESSION['email'])) {
    echo '<form action="book2.php" method="post">';
} else {
    echo '';
}
?>
    <div class="modal fade " id="map3" tabindex="-1 " role="dialog " aria-labelledby="modalTitle " aria-hidden="true ">
        <div class="modal-dialog modal-lg " role="document ">
            <div class="modal-content">
                <div class="modal-header" style="height:100px">
                    <div class="text-center">
                        <img src="images/home.ico" alt="logo" width="75" height="75" style="margin-left: 45%;position: absolute;">
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body ">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-3">
                                <input type="radio" value="room1Down" id="room31" name="room" hidden onclick="check3()">
                                <label for="room31">
                                    <img src="images/pool.jpg" class="img-fluid" alt="room1" width="300" height="300">
                                    <small style="margin-right:80px;">juhu</small>
                                </label>
                            </div>
                            <div class="col-3">
                                <input type="radio" value="room2Down" id="room32" name="room" hidden onclick="check3()">
                                <label for="room32">
                                    <img src="images/pool.jpg" class="img-fluid" alt="room1" width="300" height="300">
                                    <small style="margin-right:80px;">juhu</small>
                                </label>
                            </div>
                            <div class="col-3">
                                <input type="radio" value="room3Down" id="room33" name="room" hidden onclick="check3()">
                                <label for="room33">
                                    <img src="images/pool.jpg" class="img-fluid" alt="room1" width="300" height="300">
                                    <small style="margin-right:80px;">juhu</small>
                                </label>
                            </div>
                            <div class="col-3">
                                <input type="radio" value="room4Down" id="room34" name="room" hidden onclick="check3()">
                                <label for="room34">
                                    <img src="images/pool.jpg" class="img-fluid" alt="room1" width="300" height="300">
                                    <small style="margin-right:80px;">juhu</small>
                                </label>
                            </div>
                            <div class="col-3">
                                <input type="radio" value="room5Down" id="room35" name="room" hidden onclick="check3()">
                                <label for="room35">
                                    <img src="images/pool.jpg" class="img-fluid" alt="room1" width="300" height="300">
                                    <small style="margin-right:80px;">juhu</small>
                                </label>
                            </div>
                            <div class="col-3">
                                <input type="radio" value="room6Down" id="room36" name="room" hidden onclick="check3()">
                                <label for="room36">
                                    <img src="images/pool.jpg" class="img-fluid" alt="room1" width="300" height="300">
                                    <small style="margin-right:80px;">juhu</small>
                                </label>
                            </div>
                            <div class="col-3">
                                <input type="radio" value="room7Down" id="room37" name="room" hidden onclick="check3()">
                                <label for="room37">
                                    <img src="images/pool.jpg" class="img-fluid" alt="room1" width="300" height="300">
                                    <small style="margin-right:80px;">juhu</small>
                                </label>
                            </div>
                            <div class="col-3">
                                <input type="radio" value="room8Down" id="room38" name="room" hidden onclick="check3()">
                                <label for="room38">
                                    <img src="images/pool.jpg" class="img-fluid" alt="room1" width="300" height="300">
                                    <small style="margin-right:80px;">juhu</small>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <?php
if (isset($_SESSION['email'])) {
    echo '<button type="submit" class="btn btn-lg btn-success" id="downButton">Select
                        <i class="fas fa-plus-circle ml-2"></i>
                    </button>';
} else {
    echo '<button class="btn btn-lg btn-primary" onclick="redirect()" id="noAcc" name="noAcc">Login
                        <i class="fas fa-sign-in-alt ml-2"></i>
                    </button>';
}
?>
                </div>
            </div>
        </div>
    </div>
    </form>


    <script>
        $('section').hide();
        $('article').hide();
        $('footer').hide();
        $(window).on({
            load: function () {
                $('.loader').hide();
                $('article').show();
                document.getElementById('body').style.backgroundColor = "silver ";
                $('section').show();
                $('#topButton').prop('disabled', true);
                $('#topButton').css('cursor', 'not-allowed');
                $('#middleButton').prop('disabled', true);
                $('#middleButton').css('cursor', 'not-allowed');
                $('#downButton').prop('disabled', true);
                $('#downButton').css('cursor', 'not-allowed');

            }
        });
    </script>


    <script>
        function check(){
            var room1Top = $('#room11').is(':checked');
            var room2Top = $('#room12').is(':checked');
            var room3Top = $('#room13').is(':checked');
            var room4Top = $('#room14').is(':checked');
            var room5Top = $('#room15').is(':checked');
            var room6Top = $('#room16').is(':checked');
            var room7Top = $('#room17').is(':checked');
            var room8Top = $('#room18').is(':checked');

            if(room1Top || room2Top || room3Top || room4Top || room5Top || room6Top || room7Top || room8Top){
                $('#topButton').prop('disabled', false);
                $('#topButton').css('cursor','');
            }
        }
    </script>
    <script>
        function check2(){
            var room1Middle = $('#room21').is(':checked');
            var room2Middle = $('#room22').is(':checked');
            var room3Middle = $('#room23').is(':checked');
            var room4Middle = $('#room24').is(':checked');
            var room5Middle = $('#room25').is(':checked');
            var room6Middle = $('#room26').is(':checked');
            var room7Middle = $('#room27').is(':checked');
            var room8Middle = $('#room28').is(':checked');

            if(room1Middle || room2Middle || room3Middle || room4Middle || room5Middle || room6Middle || room7Middle || room8Middle){
                $('#middleButton').prop('disabled', false);
                $('#middleButton').css('cursor','');
            }
        }
    </script>
    <script>
        function check3(){
            var room1Down = $('#room31').is(':checked');
            var room2Down = $('#room32').is(':checked');
            var room3Down = $('#room33').is(':checked');
            var room4Down = $('#room34').is(':checked');
            var room5Down = $('#room35').is(':checked');
            var room6Down = $('#room36').is(':checked');
            var room7Down = $('#room37').is(':checked');
            var room8Down = $('#room38').is(':checked');

            if(room1Down || room2Down || room3Down || room4Down || room5Down || room6Down || room7Down || room8Down){
                $('#downButton').prop('disabled', false);
                $('#downButton').css('cursor','');
            }
        }
    </script>

    <script>
        $('label').children('img').click(function () {
            $('.selected').removeClass('selected');
            $(this).addClass('selected');
        })
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js "></script>
    <script src="loaders.css.js "></script>


</body>

</html>
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scroll/12.1.5/js/smooth-scroll.min.js" integrity="sha256-MMt0/21G3z0Zg4ET1kI3HC9npItDowkitRDVr0FhCxA="
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="loaders.min.css" />

     <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
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
                            Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="hotel" class="nav-link link">
                         Hotel</a>
                    </li>
                    <li class="nav-item">
                        <a href="events" class="nav-link link">
                          Events</a>
                    </li>
                </ul>
            </div>
        </nav>
    </article>

    <section class="bg">
            <div class="offset-lg-4 offest-xl-4 offset-md-2 offset-sm-3 ">
                <div class="card" style="width: 22rem; margin-top:-30px;background:none !important; border:none;">
                    <div class="card-body text-center">
                        <img class="card-img-top" src="images/home.ico" style="width:90px !important; margin-top:150px !important; margin-left:100px !important;"
                            height="80" alt="Card image cap">
                        <h3 class="card-title text-uppercase text-primary" style="margin-left:0px !important; width: 400px !important;">REGISTER TO ENJOY OUR OFFERS</h3>
                    </div>
                    <ul class="list-group list-group-flush" style="margin-top:-20px; width:433px;">
                        <li  class="list-group-item bg-info" style="background:none !important;">
                            <div class=" alert " id="mess" ></div>
                        </li>
                        <li class="list-group-item bg-info" style="background:none !important;">
                            <input type="text" placeholder="First name..." class="form-control mb-2" style=" height: 50px; background: none !important; border: none; border-bottom: 1px solid black; color: white"
                                required="" name="name" id="name" onkeyup="check()">
                        </li>
                        <li class="list-group-item bg-info" style="border:none; margin-top:-20px; background:none !important;">
                            <input type="text" placeholder="Last name..." class="form-control mb-2" style="height: 50px; background: none !important; border: none; border-bottom: 1px solid black; color: white" required="" name="surname" id="surname" onkeyup="check()">
                        </li>
                        <li class="list-group-item bg-info" style="border:none; margin-top:-20px; background:none !important;">
                            <input type="email" placeholder="you@example.com" class="form-control " style="height: 50px; background: none !important; border: none; border-bottom: 1px solid black; color: white" required="" name="email" id="email" onkeyup="check()">
                        </li>
                    </ul>
                    <table>
                        <tr>
                            <td>
                                <div style="margin-left:18px;">
                                    <input type="password" placeholder="*****" class="form-control" style="width:400px !important; height: 50px; background: none !important; border: none; border-bottom: 1px solid black; color: white" required name="pass" id="pass" onkeyup="check()">
                                </div>
                            </td>
                            <td>
                                <button type="button" class="btn btn-primary" style="margin-left:-44px !important; height: 50px; width:45px; border: none; " id="showPass" name="showPass">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </td>
                        </tr>
                    </table>
                    <div style="margin-top:-10px;">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item bg-info" style="background:none !important;">
                                <a href="login" class="badge text-white" style="text-decoration:none;">
                                    <span style="font-size:13px;">Already has account?</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="card-body text-center" style="margin-left:100px !important; ">
                        <button class="btn btn-primary text-white" id="regButton" name="regButton">Sign up for free
                            <i class="fas fa-user-plus ml-2"></i>
                        </button>
                    </div>
                </div>

            </div>

            <div class="text-center text-primary" style="margin-left:-25px !important;">
                <p style="font-size:20px; ">&copy; 2018 COMBE</p>
            </div>

    </section>

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
                $('#regButton').prop('disabled', true);
                $('#regButton').css('cursor', 'not-allowed');
            }
        });
    </script>

    <script>
        function check(){
            var name = $('#name').val()
            var surname = $('#surname').val()
            var email = $('#email').val()
            var pass = $('#pass').val()

            if(name == "" || surname == "" || email == "" || pass == ""){
                $('#regButton').prop('disabled', true);
                $('#regButton').css('cursor', 'not-allowed');
            } else if(name != "" && surname != "" && email != "" && pass != "" ){
                $('#regButton').prop('disabled', false);
                $('#regButton').css('cursor', '');
            }
        }
    </script>

    <script>
        $('#showPass').click(function () {
                var pass_type = $('#pass').attr('type');
                if (pass_type == "text") {
                    $('#pass').attr('type', 'password');
                } else if (pass_type == "password") {
                    $('#pass').attr('type', 'text');
                }
            });
    </script>

    <script>
        $('#mess').fadeOut()
        $('#regButton').click(function (){

            function validateEmail($emailSign) {
                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                return emailReg.test($emailSign);
            }

            $('#mess').removeClass('alert-success').removeClass('alert-danger').removeClass('alert-warning')

            var name = $('#name').val()
            var surname = $('#surname').val()
            var email = $('#email').val()
            var pass = $('#pass').val()

            if(name == ""){
                $("#mess").addClass('alert-danger');
                $("#mess").html("Please enter your first name!");
                $("#mess").fadeIn(500).delay(1000).fadeOut(500);
            } else if(surname == ""){
                $("#mess").addClass('alert-danger');
                $("#mess").html("Please enter your surname!");
                $("#mess").fadeIn(1000).delay(1000).fadeOut(500);
            } else if(email == ""){
                $("#mess").addClass('alert-danger');
                $("#mess").html("Please enter your email address!");
                $("#mess").fadeIn(1000).delay(1000).fadeOut(500);
            } else if(!validateEmail(email)){
                $("#mess").addClass('alert-warning');
                $("#mess").html("Please enter your email address correctly!");
                $("#mess").fadeIn(1000).delay(1000).fadeOut(500);
            } else if(pass == ""){
                $("#mess").addClass('alert-danger');
                $("#mess").html("Please set a password!");
                $("#mess").fadeIn(1000).delay(1000).fadeOut(500);
            } else {
                $.ajax({
                    url: "./registerData.php?task=register&name="+name+"&surname="+surname+"&email="+email+"&pass="+pass,
                    success: function (data){
                        if(data.indexOf('success') > -1){
                            $("#mess").addClass('alert-success');
							$("#mess").html('Thanks for creating account. Now you can login');
							$("#mess").fadeIn(500).delay(2000).fadeOut(500);
                            $('#name').val("");
                            $('#surname').val("");
                            $('#email').val("");
                            $('#pass').val("");
                            $('#regButton').prop('disabled', true);
                $('#regButton').css('cursor', 'not-allowed');
                        } else{
                            $("#mess").addClass('alert-danger');
							$("#mess").html('The email is already exists. Please try with other one or Sign in with that one.');
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
        })
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js "></script>
    <script src="loaders.css.js "></script>



</body>

</html>

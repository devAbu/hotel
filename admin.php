<!DOCTYPE HTML>
<html>
<head>
<title>Admin Panel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" ctent="text/html; charset=utf-8" />

 <!-- Bootstrap Core CSS -->
<link href="adminFiles/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="adminFiles/css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="adminFiles/css/font-awesome.css" rel="stylesheet">
<!-- jQuery -->
<!-- lined-icons -->
<link rel="stylesheet" href="adminFiles/css/icon-font.min.css" type='text/css' />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<!-- //lined-icons -->
<!-- chart -->
<script src="adminFiles/js/Chart.js"></script>
<!-- //chart -->
<!--animate-->
<link href="adminFiles/css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="adminFiles/js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!----webfonts--->
<link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<!---//webfonts--->
 <!-- Meters graphs -->
<script src="adminFiles/js/jquery-1.10.2.min.js"></script>
<!-- Placed js at the end of the document so the pages load faster -->

</head>

 <body class="sticky-header left-side-collapsed">


  <?php
    require 'connection.php';
?>

    <section>
    <!-- left side start-->
		<div class="left-side sticky-left-side">

			<!--logo and iconic logo start-->
			<div class="logo">
				<h1><a href="admin.php">Hotel <span>Admin</span></a></h1>
			</div>
			<div class="logo-icon text-center">
				<a href="admin.php"><i class="lnr lnr-home"></i> </a>
			</div>

			<!--logo and iconic logo end-->
			<div class="left-side-inner">

				<!--sidebar nav start-->
					<ul class="nav nav-pills nav-stacked custom-nav">
						<li class="active"><a href="index.php"><i class="lnr lnr-power-switch"></i><span>Dashboard</span></a></li>
					</ul>
				<!--sidebar nav end-->
			</div>
		</div>
		<!-- left side end-->

		<!-- main content start-->
		<div class="main-content">
			<!-- header-starts -->
			<div class="header-section">

			<!--toggle button start-->
			<a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a>
			<!--toggle button end-->

			<!--notification menu start -->
			<div class="menu-right">
				<div class="user-panel-top">
					<div class="profile_details">
						<ul>
							<li class="dropdown profile_details_drop">
									<div class="profile_img">
										<!-- <span style="background:url(adminFiles/images/1.jpg) no-repeat center"> </span> -->
										 <div class="user-name">
											<p>Obada<span>Administrator</span></p>
										 </div>

									</div>
							</li>
							<div class="clearfix"> </div>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
			  </div>
			<!--notification menu end -->
			</div>
		<!-- //header-ends -->
			<div id="page-wrapper">
				<div class="graphs">
					<div class="col_3">
						<div class="col-md-4 widget widget1">
							<div class="r3_counter_box">
								<i class="fa fa-users"></i>
								<div class="stats">
									<?php
                          $sql = "SELECT * FROM registracija ";
                          $result = $connection->query($sql);

                          $count = $result->num_rows;
                          echo '<h5>'.$count.'</h5> ';
                        ?>
								  <div class="grow grow1">
									<p>Users</p>
								  </div>
								</div>
							</div>
						</div>
						<div class="col-md-3 widget widget1">
							<div class="r3_counter_box">
								<i class="fas fa-bed fa-4x" style="margin-top:5%; margin-bottom:11%; color: #00BDD0"></i>
								<div class="stats">
									<?php
                          $sql = "SELECT * FROM rooms ";
                          $result = $connection->query($sql);

                          $count = $result->num_rows;
                          echo '<h5>'.$count.'</h5> ';
                        ?>
								  <div class="grow grow1">
									<p>Rooms</p>
								  </div>
								</div>
							</div>
						</div>
						<div class="col-md-4 widget widget1">
							<div class="r3_counter_box">
								<i class="fas fa-hand-holding-usd fa-4x" style="margin-top:5%; margin-bottom:11%; color: #00BDD0"></i>
								<div class="stats">
									<?php
                          $sql = "SELECT sum(price) as price FROM rezervacija ";
                          $result = $connection->query($sql);

                          $count = $result->num_rows;
													if ($count > 0) {
				                    $i = 0;
				                    while ($row = $result->fetch_assoc()) {
				                          echo '<h5>'.$row['price'].'</h5> ';
																	$i++;
															}
													}
                        ?>
								  <div class="grow grow1">
									<p>Profit</p>
								  </div>
								</div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>

		<div class="col_1" >
			<div class="col-md-4 span_8" style="margin-left:8%;">
				<div class="activity_box">
					<h3>Feedbacks 	<?php
										$sql = "SELECT * FROM feedback ";
										$result = $connection->query($sql);

										$count = $result->num_rows;
										echo '<span style="margin-left:5%; color:black">'.$count.'</span> ';
									?></h3>
					<div class="scrollbar scrollbar1" id="style-2">
						<?php
            $sql = "SELECT * FROM feedback ";
            $result = $connection->query($sql);

            $count = $result->num_rows;

            if ($count > 0) {
                    $i = 0;
                    while ($row = $result->fetch_assoc()) {
                      echo '<div class="activity-row">
												<div class="col-xs-7 activity-desc">
													<h5>'.$row['name'].'</h5>
													<p>'.$row['content'].'</p>
												</div>
												<div class="clearfix"> </div>
											</div>';
                        $i++;
                    }

                }
                ?>
					</div>
				</div>
			</div>

			<div class="col-md-6 span_10" style="margin-left:5%">
				<div class="activity_box">
					<h3>Requested<?php
										$sql = "SELECT * FROM request ";
										$sql2 = "SELECT * FROM swimmingPoolRequest ";
										$sql3 = "SELECT * FROM spaRequest ";
										$result = $connection->query($sql);
										$result2 = $connection->query($sql2);
										$result3 = $connection->query($sql3);

										$count = $result->num_rows;
										$count2 = $result2->num_rows;
										$count3 = $result3->num_rows;
										$result = $count + $count2 + $count3;
										echo '<span style="margin-left:5%; color:black">'.$result.'</span> ';
									?></h3>
					<div class="scrollbar scrollbar1" id="style-2">
						<?php
            $sql = "SELECT * FROM request ";
            $result = $connection->query($sql);

            $count = $result->num_rows;

            if ($count > 0) {
                    $i = 0;
                    while ($row = $result->fetch_assoc()) {
                      echo '<div class="activity-row">
												<div class="col-xs-7 activity-desc">
												<h4>Room</h4>
													<h5>'.$row['name'].'</h5>
													<p>'.$row['room'].'</p>
													<p>'.$row['checkIn'].'</p>
													<p>'.$row['checkOut'].'</p>
													<form action="reserveRoom.php" method="POST">
													<input type="text" name="id" id="id" value="'.$row['ID'].'" hidden>
															<input type="text" name="name" id="name" value="'.$row['name'].'" hidden>
															<input type="text" name="room" id="room" value="'.$row['room'].'" hidden>
															<input type="text" name="checkIn" id="checkIn" value="'.$row['checkIn'].'" hidden>
															<input type="text" name="checkOut" id="checkOut" value="'.$row['checkOut'].'" hidden>
															<input type="text" name="adult" id="adult" value="'.$row['adult'].'" hidden>
															<input type="text" name="child" id="child" value="'.$row['child'].'" hidden>
															<input type="text" name="price" id="price" value="'.$row['price'].'" hidden>
															<button type="submit" name="reserve" id="reserve" class="btn btn-warning" style="margin-left:-15%">Reserve</button>
													</form>
													<form action = "deleteReserve.php" action="POST">
													<input type="text" name="id2" id="id2" value="'.$row['ID'].'" hidden>
															<input type="text" name="name2" id="name2" value="'.$row['name'].'" hidden>
															<button type="submit" name="delete" id="delete" class="btn btn-danger" style="margin-left:20%; margin-top:-27%">Delete</button>
													</form>
												</div>
												<div class="clearfix"> </div>
											</div>';
                        $i++;
                    }

                }
                ?>
								<?php
		            $sql = "SELECT * FROM swimmingPoolRequest ";
		            $result = $connection->query($sql);

		            $count = $result->num_rows;

		            if ($count > 0) {
		                    $i = 0;
		                    while ($row = $result->fetch_assoc()) {
		                      echo '<div class="activity-row">
														<div class="col-xs-7 activity-desc">
														<h4>Swimming Pool</h4>
															<h5>'.$row['name'].'</h5>
															<p>'.$row['email'].'</p>
															<p>'.$row['date'].'</p>
															<form action="reserveSwimmingPool.php" method="POST">
															<input type="text" name="id" id="id" value="'.$row['ID'].'" hidden>
																	<input type="text" name="date" id="date" value="'.$row['date'].'" hidden>
																	<input type="text" name="name" id="name" value="'.$row['name'].'" hidden>
																	<input type="text" name="email" id="email" value="'.$row['email'].'" hidden>
																	<button type="submit" name="reserve" id="reserve" class="btn btn-warning" style="margin-left:-15%">Reserve</button>
															</form>
															<form action = "deleteSwimmingPoolReserve.php" action="POST">
															<input type="text" name="id2" id="id2" value="'.$row['ID'].'" hidden>
																	<input type="text" name="email2" id="email2" value="'.$row['email'].'" hidden>
																	<button type="submit" name="delete" id="delete" class="btn btn-danger" style="margin-left:20%; margin-top:-27%">Delete</button>
															</form>
														</div>
														<div class="clearfix"> </div>
													</div>';
		                        $i++;
		                    }

		                }
		                ?>
										<?php
				            $sql = "SELECT * FROM spaRequest ";
				            $result = $connection->query($sql);

				            $count = $result->num_rows;

				            if ($count > 0) {
				                    $i = 0;
				                    while ($row = $result->fetch_assoc()) {
				                      echo '<div class="activity-row">
																<div class="col-xs-7 activity-desc">
																<h4>SPA</h4>
																	<h5>'.$row['name'].'</h5>
																	<p>'.$row['email'].'</p>
																	<p>'.$row['date'].'</p>
																	<form action="reserveSpa.php" method="POST">
																	<input type="text" name="id" id="id" value="'.$row['ID'].'" hidden>
																			<input type="text" name="date" id="date" value="'.$row['date'].'" hidden>
																			<input type="text" name="name" id="name" value="'.$row['name'].'" hidden>
																			<input type="text" name="email" id="email" value="'.$row['email'].'" hidden>
																			<button type="submit" name="reserve" id="reserve" class="btn btn-warning" style="margin-left:-15%">Reserve</button>
																	</form>
																	<form action = "deleteSpaReserve.php" action="POST">
																	<input type="text" name="id2" id="id2" value="'.$row['ID'].'" hidden>
																			<input type="text" name="email2" id="email2" value="'.$row['email'].'" hidden>
																			<button type="submit" name="delete" id="delete" class="btn btn-danger" style="margin-left:20%; margin-top:-27%">Delete</button>
																	</form>
																</div>
																<div class="clearfix"> </div>
															</div>';
				                        $i++;
				                    }

				                }
				                ?>
					</div>
				</div>
			</div>


			<div class="clearfix"> </div>

		</div>

				</div>
			<!--body wrapper start-->
			</div>
			 <!--body wrapper end-->
		</div>
        <!--footer section start-->
			<footer>
			   <p>&copy 2018 COMBE</a></p>
			</footer>
        <!--footer section end-->

      <!-- main content end-->
   </section>

<script src="adminFiles/js/jquery.nicescroll.js"></script>
<script src="adminFiles/js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="adminFiles/js/bootstrap.min.js"></script>
</body>
</html>

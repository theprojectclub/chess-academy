<?php
include('dbconnect.php');

if(isset($_POST['btn']))
{
$name=trim($_POST['name']);
$age=trim($_POST['age']);
$guardian=trim($_POST['gname']);
$email=trim($_POST['email']);

$phoneo=trim($_POST['phoneo']);
$phoneh=trim($_POST['phoneh']);

//Addr Removed


//Checking If the email exits,Check me daddy!
$do=mysql_query("select * from chess where EMAIL='$email'");
    $count=mysql_num_rows($do);

//The insertion Part
if($count=='0'){
        $do1=mysql_query("insert into chess (UID,NAME,AGE,GUARDIAN_NAME,EMAIL,PHONE_O,PHONE_H) Values ('','$name','$age','$guardian','$email','$phoneo','$phoneh
')"); //chess is a tablename in the Database 'dbtest'
mail($email,Hi ,"Hello $name, You have been Sucessfully Registered");

$errmsg="Sucessfully Registered And Email Sent";
    }
else{

  $errmsg="Sory Email Id exits";
}

    if ( !$do1 ) {
$errmsg="Registration Failed,Try again";
die("Connection failed : " . mysql_error());
 }



}

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

		<link rel="icon" type="image/png" href="img/chess-icon-28.png" />

    <title>ASHWA'S CHESS</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <link href="css/grayscale.css" rel="stylesheet">

		<!-- Custom CSS -->
		<link href="css/style.css" rel="stylesheet"

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <img src="img/chess-icon-28.png" class="img-responsive chess-icon">
                </a>
								<div class="nav-title">

									<span class="light">ASHWA'S</span> CHESS

								</div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#gallery">Gallery</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
	                   <li>
                        <button class="btn btn-primary regis-btn" data-toggle="modal" data-target=".bd-example-modal-lg">
													Register Now
												</button>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

 <!-- modal -->
	<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content custom-modal">
     <div class="modal-header">
        <h5 class="modal-title" id="myLargeModalLabel">Registration form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post">
          <div class="form-group">
            <!-- <label for="name">Name:</label> -->
            <input type="text" class="form-control" id="name" name="name" placeholder="Name">
          </div>
          <div class="form-group">
            <!-- <label for="">Age:</label> -->
            <input type="number" class="form-control" id="age" name="age" placeholder="Age">
          </div>
          <div class="form-group">
            <!-- <label for="">Gaurdian's Name:</label> -->
            <input type="text" class="form-control" id="guardian" name="gname" placeholder="Gaurdian's Name">
          </div>
          <div class="form-group">
            <!-- <label for="email">Email address:</label> -->
            <input type="email" class="form-control" id="email" name="email" placeholder="Email address">
          </div>
          <div class="form-group">
            <!-- <label for="address">Phone Number:</label> -->
            <input type="text" class="form-control" id="phone-number" name="phoneo" placeholder="Phone Number">
          </div>
					<div class="form-group">
            <!-- <label for="address">Mobile Number:</label> -->
            <input type="text" class="form-control" id="mobile-number" name="phoneh" placeholder="Mobile Number">
          </div>
					<input type="submit" name="btn" id="submit-form" hidden />
       </form>
      </div>
				<div class="modal-footer modal-buttons">
					<center>
					<button type="button" class="btn btn-primary regis-btn" onclick="submitForm()">Submit</button>
	        <button type="button" class="btn btn-secondary regis-btn" data-dismiss="modal">Close</button>
					</center>
				</div>
    </div>
  </div>
  </div>

	<script>
		function submitForm(){
			document.getElementById('submit-form').click();
		}
	</script>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">ASHWA'S CHESS</h1>
												<div class="scroll-btn">
													<a href="#about" class="btn btn-circle page-scroll">
	                          <i class="fa fa-angle-double-down animated"></i>
	                        </a>
												</div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 lead">
                <h2>About Ashwa's Chess</h2>
						Chess is a two-player strategy board game played on a chessboard, a checkered gameboard with 64 squares arranged in an eight-by-eight grid.[1] Chess is played by millions of people worldwide, both amateurs and professionals.

						Each player begins the game with 16 pieces: one king, one queen, two rooks, two knights, two bishops, and eight pawns. Each of the six piece types moves differently, with the most powerful being the queen and the least powerful the pawn. The objective is to 'checkmate' the opponent's king by placing it under an inescapable threat of capture. To this end, a player's pieces are used to attack and capture the opponent's pieces, while supporting their own. In addition to checkmate, the game can be won by voluntary resignation by the opponent, which typically occurs when too much material is lost, or if checkmate appears unavoidable. A game may also result in a draw in several ways.
			</div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="content-section">
        <div class="download-section">
				<br>
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					<li data-target="#myCarousel" data-slide-to="3"></li>
					<li data-target="#myCarousel" data-slide-to="4"></li>
					<li data-target="#myCarousel" data-slide-to="5"></li>
					<li data-target="#myCarousel" data-slide-to="6"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="img/001.jpg" no-repeat center center scroll alt="" width="100%" height="100%">
					</div>

					<div class="item">
						<img src="img/002.jpg" no-repeat center center scroll alt="" width="100%" height="100%">
					</div>

					<div class="item">
						<img src="img/003.jpg" no-repeat center center scroll alt="" width="100%" height="100%">
					</div>

					<div class="item">
						<img src="img/004.jpg" no-repeat center center scroll alt="" width="100%" height="100%">
					</div>
					
					<div class="item">
						<img src="img/005.jpg" no-repeat center center scroll alt="" width="100%" height="100%">
					</div>
					
					<div class="item">
						<img src="img/006.jpg" no-repeat center center scroll alt="" width="100%" height="100%">
					</div>
					
					<div class="item">
						<img src="img/007.jpg" no-repeat center center scroll alt="" width="100%" height="100%">
					</div>
				</div>

				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		<!--</div>-->
	</section>

    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Contact Start Bootstrap</h2>
                <p>Feel free to email us to provide some feedback on our templates, give us suggestions for new templates and themes, or to just say hello!</p>
                <p><a href="mailto:feedback@startbootstrap.com">feedback@startbootstrap.com</a>
                </p>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="#" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    <li>
                        <a href="#" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">Facebook</span></a>
                    </li>
                    <li>
                        <a href="#" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <div id="map"></div>

    <!-- Footer -->
    <footer>
			<div class="text-center">
				<p>
					Copyright &copy; ASHWA'S CHESS 2017
				</p>
        <p>
					Designed and devoloped by <a href="http://www.fnplus.xyz/">fnplus</a>
				</p>
			</div>
    </footer>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyArKVQJf5lde-QcM8w1x8t6zc3vb9BfYEE&sensor=false"></script>

    <!-- Theme JavaScript -->
    <script src="js/grayscale.js"></script>

</body>

</html>

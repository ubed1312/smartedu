<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/style.css"/>
     <!-- Site Metas -->
    <title> FSJESAS </title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/fsjes.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="stylee.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="host_version"> <!-- Identifiant d'enseignant -->
    <div id="add_data_Modal" class="modal fade">
    
        <center><div class="form-v6-content">
            <div class="form-left">
                <img src="images/login2.jpg" alt="form" width="490" height="431">
            </div>
            <form class="form-detail" role="form" action = "login.php" method = "POST"  >
                <h2>S'identifier</h2>
    
                <div class="form-row">
                    <input type="text" name="email" id="email" class="input-text" placeholder="Email"  required >
                </div>
                <div class="form-row">
                    <input type="password" name="psd" id="password-field" class="input-text" placeholder="Mot de passe"  required>
                       <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                </div>
    
                <div class="form-row-last">
                    <cennter><input type="submit" name="Envoyer" id="Envoyer" class="register" value="S'identifier"></cennter>
                </div>
            </form>
            </div></center>
        </div>
    
    <!-- -------- -->
    
        <!-- Identifiant d'etudiant -->
    
        <div id="add_data_Modal2" class="modal fade">
    
            <center><div class="form-v6-content">
                <div class="form-left">
                    <img src="images/etu.jpg" alt="form" width="580" height="429">
                </div>
                <form class="form-detail" role="form" action = "loginetud.php" method = "POST"  >
                    <h2>S'identifier</h2>
            
                    <div class="form-row">
                        <input type="text" name="Email" id="Email" class="input-text" placeholder="Email"  required >
                    </div>
                    <div class="form-row">
                        <input type="password" name="cne" id="cne" class="input-text" placeholder="Mot de passe"  required>
                        <span toggle="#cne" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                    </div>
                    
                    <div class="form-row-last">
                        <cennter><input type="submit" name="Envoyer1" id="Envoyer1" class="register" value="S'identifier"></cennter>
                    </div>
                </form>
                </div></center>
            </div>
            
            <!-- -------- -->
    <style>
        .field-icon {
          float: right;
            color: black;
          margin-left: -30px;
          margin-top: 14px;
          position: relative;
          z-index: 2;
        }
        
        .container{
          padding-top:50px;
          margin: auto;
        }</style>

	<!-- Modal -->
	<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header tit-up">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Customer Login</h4>
			</div>
			<div class="modal-body customer-box">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs">
					<li><a class="active" href="#Login" data-toggle="tab">Login</a></li>
					<li><a href="#Registration" data-toggle="tab">Registration</a></li>
				</ul>
				<!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane active" id="Login">
						<form role="form" class="form-horizontal">
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="id" name="id" placeholder="Votre Identifiant" type="text">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="psd" name="psd" placeholder="password" type="password">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-10">
									<button type="submit" class="btn btn-light btn-radius btn-brd grd1" id="Enregistrer" name="Enregistrer">
										Enregistrer
									</button>
    
									<a class="for-pwd" href="javascript:;">Forgot your password?</a>
                                    
								</div>
							</div>
						</form>
					</div>
					<div class="tab-pane" id="Registration">
						<form role="form" class="form-horizontal">
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" placeholder="Identifiant" type="text">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="email" placeholder="Email" type="email">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="mobile" placeholder="Mobile" type="email">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="password" placeholder="Password" type="password">
								</div>
							</div>
							<div class="row">							
								<div class="col-sm-10">
									<button type="button" class="btn btn-light btn-radius btn-brd grd1">
										Save &amp; Continue
									</button>
									<button type="button" class="btn btn-light btn-radius btn-brd grd1">
										Cancel</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	  </div>
	</div>

    <!-- LOADER -->
	<div id="preloader">
		<div class="loader-container">
			<div class="progress-br float shadow">
				<div class="progress__item"></div>
			</div>
		</div>
	</div>
	<!-- END LOADER -->	
	
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="index.php">
					<img src="images/university.jpg" style="height: 57px; weight: 10px" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-host">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item "><a class="nav-link" href="index.php">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="about.html">About Us</a></li>
						<li class="nav-item ">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Formation </a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="course-grid-1.html">Licence Professionnelle</a>
								<a class="dropdown-item" href="course-grid-2.html">Licence Fondamentale</a>
								<a class="dropdown-item" href="course-grid-3.html">Master</a>
								<a class="dropdown-item" href="course-grid-4.html">Doctorat</a>
								<a class="dropdown-item" href="course-grid-5.html">Formation continue</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Vie ??tudiants </a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="https://sca.univh2c.ma/cas/login">Espace ENT </a>
								<a class="dropdown-item " href="bourse.php">Bourse</a>
                                <a class="dropdown-item dropdown active" href="Emploi.php">Calendrier</a>
							</div>
						</li>
						<li class="nav-item"><a class="nav-link" href="teachers.html">Professeurs</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Administration </a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" data-toggle="modal" data-target="#add_data_Modal2" href="pricing.html">Administration </a>
								<a class="dropdown-item" data-toggle="modal" data-target="#add_data_Modal" href="ensei.html">Corps enseignant </a>
							</div>
						</li>
						<li class="nav-item"><a class="nav-link" href="http://localhost/smartedu/contact.php">Contact</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
                        <li><a class="hover-btn-new log orange" href="#" data-toggle="modal" data-target="#login"><span>Login</span></a></li>
                    </ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	
<style> 
.footer-links-soi li a:hover{
	background: #17202A;
}
.al{
        background: url(images/ca.jpg)no-repeat;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        background-position: center;
        min-height: 300px;}
        .al h1 {
        color: #fff;
        font-weight: 600;
        text-transform: capitalize;
        padding-top: 11%;
        font-size: 48px;
        line-height: 0px;} </style>

	<div class="al">
		<div class="container text-center">
            
			<h1 style="color: rgb(77, 71, 63);">Calendrier</h1>
		</div>
	</div>
        
    <div id="overviews" class="section wb"  >
        <div class="container" >
            <div class="row"> 
                <div class="col-lg-9 blog-post-single">
                    <div class="blog-item" style="background-color:#eff2f5;">  <!----had style momkin n7ydo---->
						<div>
							<img src="images/Vancance.jpg" alt="" class="img-fluid">

						</div>
						
					</div>
					
                </div><!-- end col -->
				<div class="col-lg-3 col-12 right-single">
               
					<div class="widget-search">
						<div class="site-search-area">
							<form method="get" id="site-searchform" action="#">
								<div>
									<input class="input-text form-control" name="search-k" id="search-k" placeholder="Search keywords..." type="text">
									<input id="searchsubmit" value="Search" type="submit">
								</div>
							</form>
						</div>
					</div> 
					 
                                    <div >
                                    <?php


$servername="localhost";
$username="root";
$password="";
$dbname="siteweb";

$con=mysqli_connect($servername,$username,$password,$dbname);
$requete = "SELECT * FROM note where event='afficher' limit 6";
// envoi de la requ??te
$resultat = $con->query($requete);

// intialisation de la variable $news
$news = '';

// tant qu'il y a un enregistrement, les instructions dans la boucle s'ex??cutent
while ($ligne = $resultat->fetch_assoc())
{ ?>
                                <div >
                                    <div class="pricing-table pricing-table-highlighted">
                                    <center> <div class="pricing-table-header grd1">
                                            <h2>Les Notes</h2>
                                            <h3><?php echo $ligne['filiere']; ?></h3>
                                            <p><?php echo $ligne['drone']; ?></p>
                                             <p>Pr : <?php echo $ligne['nom']; ?>
                                             <?php echo $ligne['prenom']; ?></p></p>
                                        </div>
                                        
                                        <div class="pricing-table-features">
                                            <img src="images/download.jpg" alt="" class="img-fluid">
                                        </div>
                                        <div class="pricing-table-sign-up">
                                        <a  href='https://sca.univh2c.ma/cas/login'><span >Voir les notes sur Ent</span></a></center>
                                        </div><br><br>
                                    </div>
                                </div>
                                <?php } ?>
                                        </div><br><br>
                                    </div>
                                
					
                    
					<!-- <h3><strong>Information Link</strong></h3>
					<ul ><hr>
						<li><a href="index.html">Home</a></li><hr>
						<li><a href="course-grid-1.html">Formation</a></li><hr>
						<li><a href="Teachers.html">Professeurs</a></li><hr>
						<li><a href="about.html">About</a></li><hr>
						<li><a href="http://localhost/smartedu/contact.php">Contact</a></li><hr>
						<li><a href="pricing.html">Vie d'etudiants</a></li><hr>
						<li><a href="ensei.html">Administration</a></li><hr>

					</ul>  -->

					
				</div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->


    <div class="parallax section dbcolor">
        <div class="container">
            <div class="row logos">
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a ><img src="images/logo_01.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a ><img src="images/spon.jpg" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a ><img src="images/Forum.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a ><img src="images/logo_04.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a><img src="images/efe.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a ><img src="images/cho.png" height="75px" width="70px" alt="" class="img-repsonsive"></a>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>About US</h3>
                        </div>
                        <p> la facult?? des sciences juridiques, ??conomiques et sociales Ain Seba?? joue, depuis sa cr??ation, un r??le pr??pond??rant dans son environnement socio??conomique. Notre facult?? est un lieu de libert??, de cr??ativit?? et de responsabilit??. En prise directe avec les enjeux de la soci??t??, elle contribue ?? son d??veloppement ?? travers la cr??ation, la transmission et la valorisation du savoir ainsi que la promotion de la pens??e critique.</p>
                        <div class="footer-right">
							<ul class="footer-links-soi">
								<li><a href="https://www.facebook.com/i.UH2C/?_rdc=1&_rdr"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-github"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul><!-- end links -->
						</div>
                    </div><!-- end clearfix -->
                </div><!-- end col -->

				<div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Information Link</h3>
                        </div>
                        <ul class="footer-links">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="course-grid-1.html">Formation</a></li>
                            <li><a href="Teachers.html">Professeurs</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="http://localhost/smartedu/contact.php">Contact</a></li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
				
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Contact Details</h3>
                        </div>

                        <ul class="footer-links">
							<li><i class="fa fa-fax"></i><a href="mailto:#">fsjesas2016@gmail.com</a></li>
                            <li><i class="fa fa-globe"></i><a href="#">www.uvh2.com</a></li>
                            <li> <i class="fa fa-map-marker"></i>Beausite, BP. 2634 Ain Sebaa - 2634 casablanca, Maroc</li>
                            <li><i class="fa fa-phone"></i>
                            05-22-34-34-82 / 05-22-34-32-12
                            </li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                    <div> <iframe align="right" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13293.768608763525!2d-7.530243!3d33.5938305!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1e0fc88dd347653d!2sFacult%C3%A9%20des%20sciences%20juridiques%2C%20%C3%A9conomiques%20et%20sociales%20d&#39;Ain%20Seb%C3%A2a!5e0!3m2!1sfr!2sma!4v1625674352117!5m2!1sfr!2sma" width="750" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
                </div><!-- end col -->
				
            </div><!-- end row -->
        </div><!-- end container -->
		<!---------------------------------------- MAPS  **  GPS ------------------------------------------->


        <!---------------------------------------- MAPS  **  GPS ------------------------------------------->
    
    </footer><!-- end footer -->

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-center">                   
                    <p class="footer-company-name">All Rights Reserved. &copy; 2021</p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

        <!-- ALL JS FILES -->
        <script src="js/all.js"></script>
        <!-- ALL PLUGINS -->
        <script src="js/custom.js"></script>
        <script src="js/timeline.min.js"></script>
        <script>
            timeline(document.querySelectorAll('.timeline'), {
                forceVerticalMode: 700,
                mode: 'horizontal',
                verticalStartPosition: 'left',
                visibleItems: 4
            });
        </script>
    
    <script>
    $(".toggle-password").click(function() {
    
      $(this).toggleClass("fa-eye fa-eye-slash");
      var input = $($(this).attr("toggle"));
      if (input.attr("type") == "password") {
        input.attr("type", "text");
      } else {
        input.attr("type", "password");
      }
    });
    </script>

</body>
</html>

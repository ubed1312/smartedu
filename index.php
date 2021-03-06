<!-- #F4F6F7 grey-->
<!-- #eea412;    orange -->
<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/style.css"/>
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
<style>
.field-icon {
  float: right;
    color: black;
  margin-left: -25px;
  margin-top: 20px;
  position: relative;
  z-index: 2;
}

.container{
  padding-top:50px;
  margin: auto;
}</style>
<body class="host_version">

<!-- Identifiant d'enseignant -->
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
						<li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="about.html">About Us</a></li>
						<li class="nav-item dropdown">
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
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Vie ??tudiants</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="https://sca.univh2c.ma/cas/login">Espace ENT </a>
								<a class="dropdown-item" href="bourse.php">Bourse</a>
                                <a class="dropdown-item" href="Emploi.php">Calendrier</a>
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
                        <li><a class="hover-btn-new log orange " href="#" data-toggle="modal" data-target="#login"><span>Login</span></a></li>
                    </ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->

	<div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="false" >
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleControls" data-slide-to="1"></li>
			<li data-target="#carouselExampleControls" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active">
				<div id="home" class="first-section" style="background-image:url('images/download.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-right">
									<div class="big-tagline">
										<h2><strong style="font-size: 80px;">FSJES  -  Ain Seb??a                  </strong>&emsp;&emsp;&emsp;&emsp; </h2>
										<p class="lead">Facult??  des  sciences  juridiques , ??conomiques  et  sociales  d'Ain  Seb??a  ,  Casablanca. &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p>
											<a href="http://localhost/smartedu/contact.php" class="hover-btn-new"><span>Contact Us</span></a>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<a href="about.html" class="hover-btn-new"><span>Read More</span></a>
									</div>
								</div>
							</div><!-- end row -->
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<div class="carousel-item">
				<div id="home" class="first-section" style="background-image:url('images/amphi.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-left">
									<div class="big-tagline">
										<h2 data-animation="animated zoomInRight"> <strong style="font-size: 80px;">Vie des campus</strong></h2>
										<p class="lead" data-animation="animated fadeInLeft">
                                            Entreprendre des ??tudes universitaires, c'est un peu comme entreprendre un long et important voyage.</p>
											<a href="http://localhost/smartedu/contact.php" class="hover-btn-new"><span>Contact Us</span></a>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<a href="about.html" class="hover-btn-new"><span>Read More</span></a>
									</div>
								</div>
							</div><!-- end row -->
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<div class="carousel-item">
				<div id="home" class="first-section" style="background-image:url('images/slider-03.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-center">
									<div class="big-tagline">
										<h2 data-animation="animated zoomInRight"><strong style="font-size: 100px;">Formation</strong></h2>
										<p class="lead" data-animation="animated fadeInLeft">Les possibilit??s de formation ?? l???universit?? sont tr??s nombreuses. Les ??tablissements s???organisent autour d???UFR (Unit?? de formation et de recherche) qui proposent des cursus en licence et master dans diverses disciplines </p>
											<a href="http://localhost/smartedu/contact.php" class="hover-btn-new"><span>Contact Us</span></a>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<a href="about.html" class="hover-btn-new"><span>Read More</span></a>
									</div>
								</div>
							</div><!-- end row -->
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<!-- Left Control -->
			<a class="new-effect carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				<span class="fa fa-angle-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>

			<!-- Right Control -->
			<a class="new-effect carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				<span class="fa fa-angle-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>

    <div id="overviews" class="section wb" >
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <h3>About</h3>
                    <p class="lead"> la facult?? des sciences juridiques, ??conomiques et sociales Ain Seba?? joue, depuis sa cr??ation, un r??le pr??pond??rant dans son environnement socio??conomique. Notre facult?? est un lieu de libert??, de cr??ativit?? et de responsabilit??. En prise directe avec les enjeux de la soci??t??, elle contribue ?? son d??veloppement ?? travers la cr??ation, la transmission et la valorisation du savoir ainsi que la promotion de la pens??e critique.
                        </p>
                </div>
            </div><!-- end title -->

            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <!-- <h4>2021 BEST University in Morocco</h4> -->
                        <h2 style="color: #000;">Ses principes :</h2>
                        <p style="color: #34495E;">
                            -&nbsp;&nbsp; Pluridisciplinarit?? ,Autonomie p??dagogique et scientifique,
                             Autonomie administrative et financi??re. <br>
                            - &nbsp;&nbsp; La FSJES remplit deux missions fondamentales: <br>

                            ???  &nbsp; la formation de cadres sp??cialis??s aptes ?? r??pondre aux besoins des organisations priv??es et publiques, <br>
                            ??? &nbsp; le d??veloppement de recherches fondamentales et appliqu??es en sciences Juridiques, sciences ??conomiques, sciences de gestion et sciences sociales.<br><br>
Elle propose un large spectre de formations au sein desquelles les enseignants et des intervenants professionnels transmettent aux ??tudiants des savoirs
et des m??thodes les pr??parant ?? faire face ?? toutes les situations que pr??sente, sur le plan national et international, notre soci??t?? en mutation. <br>

La diversification des formations qui y sont propos??es, les collaborations r??guli??res entre les enseignants et les professionnels, l???originalit?? et la reconnaissance
des recherches qui y sont men??es attirent un nombre croissant d?????tudiants.<br>
                            Ainsi, la Facult?? accueille chaque ann??e, dans ses locaux, plus de 20 000 ??tudiants marocains et ??trangers.<br>
                             Elle est habilit??e ?? d??livrer les dipl??mes de Licence (Etudes Fondamentales et Professionnelles), DEUG/DUT, Master et Master Sp??cialis?? et Doctorat.<br>
                             <div id="mDIV" style="display:none;color: #34495E;" >
                            Parall??lement ?? sa mission de formation, d???enseignement et de recherche scientifique,
                             la Facult?? des sciences Juridiques, Economiques et Sociales noue de fructueux partenariats avec plus d???une vingtaine d???universit??s ??trang??res.

                            Au-del?? de la ma??trise indispensable des connaissances sp??cifiques de Droit,
                             d???Economie et de Gestion, les ??tudiants re??oivent une formation de qualit?? (stages et enseignements pratiques) , ouverte sur la soci??t??, sur le monde professionnel,
                              et sur l???international qui fait d???ailleurs depuis de nombreuses ann??es, la renomm??e de la Facult??.</p>
</div>
                        <!-- <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis montes, nascetur ridiculus mus. Sed vitae rutrum neque. </p> -->

                        <script>
                            function maaFonction() {
                              var div = document.getElementById("mDIV");
                              if (div.style.display === "none") {
                                div.style.display = "block";
                              } else {
                                div.style.display = "none";
                              }
                            }
                            </script>
                        <a class="hover-btn-new orange" onclick="maaFonction()"><span>Learn More</span></a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->

				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="images/a.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
			</div>
			<div class="row align-items-center">
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="images/mission.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->

				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h2 >Ses missions :</h2>
                        <p style="color: #34495E;">
                           <span> -&nbsp;&nbsp; Formation initiale et continue <br>
                            -&nbsp;&nbsp;  Recherche Scientifique et Technologique <br>
                            -&nbsp;&nbsp;  Diffusion de la culture et Information Scientifique et Technique <br>
                            -&nbsp;&nbsp;  Coop??ration Nationale et Internationale <br>
                            -&nbsp;&nbsp;  Orientation et Insertion Professionnelle <span id="maDIV" style="display:none;">
                        -&nbsp;&nbsp;  Former en initial comme en continu les cadres de demain en ??conomie, en &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;gestion et en m??thodes quantitatives appliqu??es.<br>
                        -&nbsp;&nbsp;  Promouvoir la recherche scientifique<br>
                        -&nbsp;&nbsp;  Participer ?? l'insertion professionnelle de nos laur??ats<br>
                        -&nbsp;&nbsp;  V??hiculer une culture para-universitaire et citoyenne<br>

                        -&nbsp;&nbsp;  Participation au d??veloppement ??conomique r??gional et national.</span></span></p>

                        <!-- <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum.</p> -->
                        <script>
                            function maFonction() {
                              var div = document.getElementById("maDIV");
                              if (div.style.display === "none") {
                                div.style.display = "block";
                              } else {
                                div.style.display = "none";
                              }
                            }
                            </script>

                        <a class="hover-btn-new orange" onclick="maFonction()"><span>Learn More</span></a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->

            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->



    <div id="plan" class="section lb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Actualit??s & Evenements</h3>
                <p>Toutes les informations relatives aux ??v??nements r??cents ou aux actualit??s diffus??es par les enseignants et l'administration de la facult?? seront afficher dedans. </p>
            </div><!-- end title -->
<center>
            <div class="row" >
                <div class="col-md-6 offset-md-3" >
                    <div class="message-box" >
                        <ul class="nav nav-pills nav-stacked" id="myTabs"><p>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </p>
                            <li><a class="active" href="#tab1" data-toggle="pill">Actualit??s & Evenements</a></li>
                        </ul>
                    </div>
                </div><!-- end col -->
            </div></center>

            <hr class="invis">

            <div class="row">
                <div class="col-md-12">
                    <div class="tab-content">
                        <div class="tab-pane active fade show" id="tab1">
                            <div class="row text-center">
                                  <?php


$servername="localhost";
$username="root";
$password="";
$dbname="siteweb";

$con=mysqli_connect($servername,$username,$password,$dbname);
$requete = "SELECT * FROM note where event='afficher' limit 6";
$requetee = "SELECT * FROM evenement where event='afficher' and is_deleted=0 limit 6";
// envoi de la requ??te
$resultat = $con->query($requete);
$resultate = $con->query($requetee);

// intialisation de la variable $news
$news = '';

// tant qu'il y a un enregistrement, les instructions dans la boucle s'ex??cutent
while ($ligne = $resultat->fetch_assoc())
{ ?>
                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header grd1">
                                            <h2>Les Notes</h2>
                                            <h3><?php echo $ligne['filiere']; ?></h3>
                                            <p><?php echo $ligne['drone']; ?></p>
                                             <p>Pr : <?php echo $ligne['nom']; ?>
                                             <?php echo $ligne['prenom']; ?></p>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-features">
                                            <img src="images/download.jpg" alt="" class="img-fluid">
                                        </div>
                                        <div class="pricing-table-sign-up">
                                            <a  href='https://sca.univh2c.ma/cas/login'><span >Voir les notes sur Ent</span></a>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                                <?php
                                while ($ligne = $resultate->fetch_assoc())
{ ?>
                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header grd1">
                                            <h2>L'??v??nement</h2>
                                            <h3><?php echo $ligne['nom']; ?></h3>
                                            <p><?php echo $ligne['description']; ?></p>
                                             <p>Date : <?php echo $ligne['date']; ?></p>
                                             

                                             
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-features">
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="Dashboard/Admin/examples/<?php echo $ligne['file'];?>" width="175" height="200" class="img-fluid"/>
                                            
                                        </div>
                                        <div class="pricing-table-sign-up">
                                            <a href='' ><span >Voir plus d??tails sur l'??v??nement</span></a>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div><!-- end row -->
                        </div><!-- end pane -->

                        <div class="tab-pane fade" id="tab2">
                            <div class="row text-center">



                            </div><!-- end row -->
                        </div><!-- end pane -->
                    </div><!-- end content -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->



	<div class="section cl">
		<div class="container">
			<div class="row text-left stat-wrap">
				<div class="col-md-4 col-sm-4 col-xs-12">
					<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-study"></i></span>
					<p class="stat_count">7530</p>
					<h3>Students</h3>
				</div><!-- end col -->

				<div class="col-md-4 col-sm-4 col-xs-12">
					<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-online"></i></span>
					<p class="stat_count">160</p>
					<h3>Courses</h3>
				</div><!-- end col -->

				<div class="col-md-4 col-sm-4 col-xs-12">
					<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-years"></i></span>
					<p class="stat_count">16</p>
					<h3>Years Completed</h3>
				</div><!-- end col -->
			</div><!-- end row -->
		</div><!-- end container -->
	</div><!-- end section -->


    <section class="section lb page-section">
		<div class="container">
			 <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <h3>Notre historique</h3>
                    <p class="lead">La Facult?? des sciences juridiques, ??conomiques et sociales d'Ain Sebaa (FSJESA) est une composante de l'Universit?? Hassan II de Casablanca au Maroc.</p>
                </div>
            </div><!-- end title -->
			<div class="timeline">
				<div class="timeline__wrap">
					<div class="timeline__items">
						<div class="timeline__item">
							<div class="timeline__content img-bg-01">
								<h2>2018</h2>
								<p>Cette capacit?? d'accueil est pass??e de 33.000 places physiques et 2010/2011 ?? plus de 44.700 places physiques en 2018</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-02">
								<h2>2015</h2>
								<p>Elle accueille cette ann??e environ 70.000 ??tudiants,dont plus de 600 ??tudiants internationaux.L'effectif des ??tudiants a connu une hausse consid??rable depuis les 4 derni??re ann??e avec +10 par rapport ?? 2014 et +26% par rapport ?? 2013</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-03">
								<h2>2014</h2>
								<p>fait partie d???un r??seau vaste ?? travers le Maroc dont la vocation est la formation universitaire dans les sciences ??conomiques et gestion, juridiques et sociales.</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-04">
								<h2>2012</h2>
								<p>FSJESA d???Ain Seb??a compte 43 enseignants chercheurs, 23 personnels administratifs et techniques et plus de 6000 ??tudiants dont 1200 en derni??re ann??e de licence 260 en master et 440 en fili??res professionnelles. </p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-01">
								<h2>2010</h2>
								<p>La FSJESA est implant??e dans une zone de concentration de l???activit?? industrielle.</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-02">
								<h2>2007</h2>
								<p>Elle d??livre plus que 1000 dipl??mes par an</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-03">
								<h2>2004</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque condimentum lacus dapibus. Lorem
									ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-04">
								<h2>2002</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque condimentum lacus dapibus. Lorem
									ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


    <div id="testimonials" class="parallax section db parallax-off" style="background-image:url('images/fa.jpg');">
        <div class="container">
            <div class="section-title text-center">
                <h3>Mot du pr??sident</h3>
                <!-- <p>Lorem ipsum dolor sit aet, consectetur adipisicing lit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p> -->
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="testi-carousel owl-carousel owl-theme">
                        <div class="testimonial clearfix">
							<div class="testi-meta">
                                <img src="images/tes.jpg" alt="" class="img-fluid">
                                <h4>IDRISS ABBADI </h4>
                            </div>
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Doyen</h3>
                                <p class="lead" >la FSJESAS est un ??tablissement jeune, dynamique et tourn?? vers l???avenir. L???ouverture de son nouveau si??ge est le premier jalon du P??le Universitaire en cr??ation ?? Mazagan. Ce site particuli??rement attrayant par sa localisation ?? l???entr??e nord de la ville, au c??ur du P??le Urbain Mazagan se caract??rise par un microclimat unique. La FSJESAS s???inscrit dans la continuit?? de la Facult?? polydisciplinaire qui a ??t?? cr????e en 2004 et a d??j?? en son actif des formations ax??es sur des disciplines du management, d?????conomie, du droit et cibl??es sur des cr??neaux porteurs en parfaite ad??quation avec les besoins du march?? de l???emploi.</p>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
							<div class="testi-meta">
                                <img src="images/profw.jpg" alt="" class="img-fluid">
                                <h4>Bouchra BELMOUFFEQ </h4>
                            </div>
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Vice Doyen</h3>
                                <p class="lead">Notre Facult?? accorde un int??r??t particulier ?? la professionnalisation et ?? l???internationalisation de son cursus universitaire et ce en dispensant, en plus des deux licences fondamentales en Sciences Economiques et Gestion et en Droit en fran??ais, cinq fili??res en Licences professionnelles et sept Masters sp??cialis??s dont un Master en Co-diplomation et deux Masters de recherche en Droit public et Droit priv??.</p>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
							<div class="testi-meta">
                                <img src="images/profw.jpg" alt="" class="img-fluid ">
                                <h4>Rajae JEMGHILI  </h4>
                            </div>
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Secr??taire G??n??ral</h3>
                                <p class="lead">La FSJESAS est ?? l?????coute du march?? de l???emploi afin de recueillir ses besoins en mati??re de capital humain qualifi??, et former des profils ad??quats et directement employables. Ceci permet, entre autres, de booster le taux d???employabilit?? des laur??ats de notre facult?? et participer par cons??quent au d??veloppement socio??conomique de notre pays </p>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->
                        <div class="testimonial clearfix">
							<div class="testi-meta">
                                <img src="images/prof.jpg" alt="" class="img-fluid">
                                <h4>Abdellaati ELHAKMAOUI  </h4>
                            </div>
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i>Vice Doyen Charg?? de la Recherche Scientifique et de la Coop??ration</h3>
                                <p class="lead">Notre Facult?? se fixe ??galement comme deuxi??me axe strat??gique dans sa politique de formation, le d??veloppement ?? l???international par la mise en place de cursus doubles dipl??me avec des universit??s Fran??aises, encadr??s conjointement par des experts et des acad??miciens nationaux et internationaux.</p>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
							<div class="testi-meta">
                                <img src="images/prof.jpg" alt="" class="img-fluid">
                                <h4>Hicham BOUANANI  </h4>
                            </div>
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Vice doyen Charg?? des Affaires P??dagogiques</h3>
                                <p class="lead">Afin d???accomplir la mission qu???elle se doit et les objectifs qu??? elle s???est fix??e, La Facult?? des Sciences Juridiques, Economiques et sociales d???El Jadida s???appuie sur un corps professoral jeune, ??nergique et motiv?? qui contribue ??nergiquement au rayonnement aussi bien national qu???international de notre Facult?? ; une ??quipe administrative efficace qui se d??marque par son dynamisme, son engagement et son implication dans plusieurs services et dossiers ; un BDE dynamique, rythm?? et plein d???esprit d??? initiative qui participe activement ?? la vie associative par l???organisation de nombreuses ??v??nements.</p>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        
                        <!-- end testimonial -->
                    </div><!-- end carousel -->
                </div><!-- end col -->
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
<style>.footer-links-soi li a:hover{
	background: #17202A;
}</style>
                        <ul class="footer-links" >
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

        <!-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=iniMap"
        type="text/javascript"></script> -->


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

<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
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
    <link rel="stylesheet" href="style.css">
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
<body class="host_version"> 

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
				<a class="navbar-brand" href="index.html">
					<img src="images/university.jpg" style="height: 57px; weight: 10px" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-host">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
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
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Vie étudiants</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="https://sca.univh2c.ma/cas/login">Espace ENT </a>
								<a class="dropdown-item" href="bourse.html">Bourse</a>
                                <a class="dropdown-item" href="Emploi.html">Calendrier</a>
							</div>
						</li>
						<li class="nav-item"><a class="nav-link" href="teachers.html">Professeurs</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Administration </a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="pricing.html">Corps administratif </a>
								<a class="dropdown-item" href="ensei.html">Corps enseignant </a>
							</div>
						</li>
						<li class="nav-item  active"><a class="nav-link" href="http://localhost/smartedu/contact.php">Contact</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
                        <li><a class="hover-btn-new log orange" href="#" data-toggle="modal" data-target="#login"><span>Login</span></a></li>
                    </ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	


	<div class="al">
		<div class="container text-center">
			<h1 style="color :inherit">Contact
                <!-- <span class="m_1">Lorem Ipsum dolroin gravida nibh vel velit.</span> -->
        </h1>
		</div>
	</div>
	

    <div id="contact" class="section wb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Contactez nous!</h3>
                <p class="lead">Laissez-nous vous donner plus de détails sur notre faculté, n'hésitez pas à nous contacter.</p>
            </div><!-- end title -->

<!-- /**************************************************************** */ -->
<div class="row">
                            <div class="col-md-12">
                                <div class="contact-info-wrap-flex">
                                    
                                        <div class="con-info">
                                        <h4>
                                        <p><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-map-marker"></i></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Faculté des Sciences Juridique Economique et Sociale Beausite, BP :2634 Ain sebaa - &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Casablanca, MAROC</p>
                                        </h4></div>
                                    
                                        <div class="con-info"><h4>
                                        <p><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-phone"></i></span> <a href="tel://00212614000420/21/22">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0522 34 34 82/21/22</a></p></h4>
                                        </div>

                                        <div class="con-info"><h4>
                                        <p><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-fax"></i></span> <a href="tel://00212 522 252 245">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;00212 522 252 245</a></p></h4>
                                        </div>

                                        <div class="con-info"><h4>
                                        <p><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-globe"></i></span> <a href="https://www.est-uh2c.ac.ma/">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;https://www.Fsjes-uh2c.ac.ma/</a></p></h4>
                                        </div>
                                    
                                </div></div></div>
                        
<!-- /**************************************************************** */ -->




            
            <!-- <div class="row">
                <div class="col-xl-6 col-md-12 col-sm-12">
                    <div class="contact_form">
                        <div id="message"></div><div></div>
                        <form id="contactform" class="" action="contact.php" name="contactform" method="post">
                            <div class="row row-fluid">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Your Email">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Your Phone">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <textarea class="form-control" name="comments" id="comments" rows="6" placeholder="Give us more details.."></textarea>
                                </div>
                                <div class="text-center pd">
                                    <button type="submit" value="SEND" id="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block">Get a Quote</button>
                                </div>
                            </div>
						</div>
                        </form></center>
                    </div>
                </div>end col -->
				

				<style type="text/css">/* Reset CSS */
.al{
        background: url(images/contact-us.jpg)no-repeat;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        background-position: center;
        min-height: 300px;}
        .al h1{
        color: #fff;
        font-weight: 600;
        text-transform: capitalize;
        padding-top: 11%;
        font-size: 48px;
        line-height: 0px;}



b, strong{ font-weight:bold;}
a{ text-decoration: none; }
a:hover{ text-decoration: underline; }
.left { float:left; }
.right { float:right; }
.alignleft { float: left; margin-right: 15px; }
.alignright { float: right; margin-left: 15px; }
.clearfix:after,
form:after {
    content: ".";
    display: block;
    height: 0;
    clear: both;
    visibility: hidden;
}

#content {
    background: #f9f9f9;
    background: -moz-linear-gradient(top,  rgba(248,248,248,1) 0%, rgba(249,249,249,1) 100%);
    background: -webkit-linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
    background: -o-linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
    background: -ms-linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
    background: linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f8f8f8', endColorstr='#f9f9f9',GradientType=0 );
    -webkit-box-shadow: 0 1px 0 #fff inset;
    -moz-box-shadow: 0 1px 0 #fff inset;
    -ms-box-shadow: 0 1px 0 #fff inset;
    -o-box-shadow: 0 1px 0 #fff inset;
    box-shadow: 0 1px 0 #fff inset;
    border: 1px solid #c4c6ca;
    margin: 0 auto;
    padding: 25px 0 0;
    position: relative;
    text-align: center;
    text-shadow: 0 1px 0 #fff;
    width: 400px;
}
#content h1 {
    color: #7E7E7E;
    font: bold 25px Helvetica, Arial, sans-serif;
    letter-spacing: -0.05em;
    line-height: 20px;
    margin: 10px 0 30px;
}
#content h1:before,
#content h1:after {
    content: "";
    height: 1px;
    position: absolute;
    top: 10px;
    width: 27%;
}
#content h1:after {
    background: rgb(126,126,126);
    background: -moz-linear-gradient(left,  rgba(126,126,126,1) 0%, rgba(255,255,255,1) 100%);
    background: -webkit-linear-gradient(left,  rgba(126,126,126,1) 0%,rgba(255,255,255,1) 100%);
    background: -o-linear-gradient(left,  rgba(126,126,126,1) 0%,rgba(255,255,255,1) 100%);
    background: -ms-linear-gradient(left,  rgba(126,126,126,1) 0%,rgba(255,255,255,1) 100%);
    background: linear-gradient(left,  rgba(126,126,126,1) 0%,rgba(255,255,255,1) 100%);
    right: 0;
}
#content h1:before {
    background: rgb(126,126,126);
    background: -moz-linear-gradient(right,  rgba(126,126,126,1) 0%, rgba(255,255,255,1) 100%);
    background: -webkit-linear-gradient(right,  rgba(126,126,126,1) 0%,rgba(255,255,255,1) 100%);
    background: -o-linear-gradient(right,  rgba(126,126,126,1) 0%,rgba(255,255,255,1) 100%);
    background: -ms-linear-gradient(right,  rgba(126,126,126,1) 0%,rgba(255,255,255,1) 100%);
    background: linear-gradient(right,  rgba(126,126,126,1) 0%,rgba(255,255,255,1) 100%);
    left: 0;
}
#content:after,
#content:before {
    background: #f9f9f9;
    background: -moz-linear-gradient(top,  rgba(248,248,248,1) 0%, rgba(249,249,249,1) 100%);
    background: -webkit-linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
    background: -o-linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
    background: -ms-linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
    background: linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f8f8f8', endColorstr='#f9f9f9',GradientType=0 );
    border: 1px solid #c4c6ca;
    content: "";
    display: block;
    height: 100%;
    left: -1px;
    position: absolute;
    width: 100%;
}
#content:after {
    -webkit-transform: rotate(2deg);
    -moz-transform: rotate(2deg);
    -ms-transform: rotate(2deg);
    -o-transform: rotate(2deg);
    transform: rotate(2deg);
    top: 0;
    z-index: -1;
}
#content:before {
    -webkit-transform: rotate(-3deg);
    -moz-transform: rotate(-3deg);
    -ms-transform: rotate(-3deg);
    -o-transform: rotate(-3deg);
    transform: rotate(-3deg);
    top: 0;
    z-index: -2;
}
#content form { margin: 0 20px; position: relative }
#content form input[type="text"],
#content form input[type="password"] {
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    -ms-border-radius: 3px;
    -o-border-radius: 3px;
    border-radius: 3px;
    -webkit-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;
    -moz-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;
    -ms-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;
    -o-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;
    box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -ms-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
    background: #eae7e7 url(https://cssdeck.com/uploads/media/items/8/8bcLQqF.png) no-repeat;
    border: 1px solid #c8c8c8;
    color: #777;
    font: 13px Helvetica, Arial, sans-serif;
    margin: 0 0 10px;
    padding: 15px 10px 15px 40px;
    width: 80%;
}
#content form input[type="text"]:focus,
#content form input[type="password"]:focus {
    -webkit-box-shadow: 0 0 2px #ed1c24 inset;
    -moz-box-shadow: 0 0 2px #ed1c24 inset;
    -ms-box-shadow: 0 0 2px #ed1c24 inset;
    -o-box-shadow: 0 0 2px #ed1c24 inset;
    box-shadow: 0 0 2px #ed1c24 inset;
    background-color: #fff;
    border: 1px solid #ed1c24;
    outline: none;
}
#username { background-position: 10px 10px !important }
#password { background-position: 10px -53px !important }
#content form input[type="submit"] {
    background: rgb(254,231,154);
    background: -moz-linear-gradient(top,  rgba(254,231,154,1) 0%, rgba(254,193,81,1) 100%);
    background: -webkit-linear-gradient(top,  rgba(254,231,154,1) 0%,rgba(254,193,81,1) 100%);
    background: -o-linear-gradient(top,  rgba(254,231,154,1) 0%,rgba(254,193,81,1) 100%);
    background: -ms-linear-gradient(top,  rgba(254,231,154,1) 0%,rgba(254,193,81,1) 100%);
    background: linear-gradient(top,  rgba(254,231,154,1) 0%,rgba(254,193,81,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fee79a', endColorstr='#fec151',GradientType=0 );
    -webkit-border-radius: 30px;
    -moz-border-radius: 30px;
    -ms-border-radius: 30px;
    -o-border-radius: 30px;
    border-radius: 30px;
    -webkit-box-shadow: 0 1px 0 rgba(255,255,255,0.8) inset;
    -moz-box-shadow: 0 1px 0 rgba(255,255,255,0.8) inset;
    -ms-box-shadow: 0 1px 0 rgba(255,255,255,0.8) inset;
    -o-box-shadow: 0 1px 0 rgba(255,255,255,0.8) inset;
    box-shadow: 0 1px 0 rgba(255,255,255,0.8) inset;
    border: 1px solid #D69E31;
    color: #85592e;
    cursor: pointer;
    float: left;
    font: bold 15px Helvetica, Arial, sans-serif;
    height: 35px;
    margin: 20px 0 35px 15px;
    position: relative;
    text-shadow: 0 1px 0 rgba(255,255,255,0.5);
    width: 120px;
}
#content form input[type="submit"]:hover {
    background: rgb(254,193,81);
    background: -moz-linear-gradient(top,  rgba(254,193,81,1) 0%, rgba(254,231,154,1) 100%);
    background: -webkit-linear-gradient(top,  rgba(254,193,81,1) 0%,rgba(254,231,154,1) 100%);
    background: -o-linear-gradient(top,  rgba(254,193,81,1) 0%,rgba(254,231,154,1) 100%);
    background: -ms-linear-gradient(top,  rgba(254,193,81,1) 0%,rgba(254,231,154,1) 100%);
    background: linear-gradient(top,  rgba(254,193,81,1) 0%,rgba(254,231,154,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fec151', endColorstr='#fee79a',GradientType=0 );
}
#content form div a {
    color: #004a80;
    float: right;
    font-size: 12px;
    margin: 30px 15px 0 0;
    text-decoration: underline;
}
.button {
    background: rgb(247,249,250);
    background: -moz-linear-gradient(top,  rgba(247,249,250,1) 0%, rgba(240,240,240,1) 100%);
    background: -webkit-linear-gradient(top,  rgba(247,249,250,1) 0%,rgba(240,240,240,1) 100%);
    background: -o-linear-gradient(top,  rgba(247,249,250,1) 0%,rgba(240,240,240,1) 100%);
    background: -ms-linear-gradient(top,  rgba(247,249,250,1) 0%,rgba(240,240,240,1) 100%);
    background: linear-gradient(top,  rgba(247,249,250,1) 0%,rgba(240,240,240,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f7f9fa', endColorstr='#f0f0f0',GradientType=0 );
    -webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.1) inset;
    -moz-box-shadow: 0 1px 2px rgba(0,0,0,0.1) inset;
    -ms-box-shadow: 0 1px 2px rgba(0,0,0,0.1) inset;
    -o-box-shadow: 0 1px 2px rgba(0,0,0,0.1) inset;
    box-shadow: 0 1px 2px rgba(0,0,0,0.1) inset;
    -webkit-border-radius: 0 0 5px 5px;
    -moz-border-radius: 0 0 5px 5px;
    -o-border-radius: 0 0 5px 5px;
    -ms-border-radius: 0 0 5px 5px;
    border-radius: 0 0 5px 5px;
    border-top: 1px solid #CFD5D9;
    padding: 15px 0;
}
.button a {
    background: url(https://cssdeck.com/uploads/media/items/8/8bcLQqF.png) 0 -112px no-repeat;
    color: #7E7E7E;
    font-size: 17px;
    padding: 2px 0 2px 40px;
    text-decoration: none;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
}
.button a:hover {
    background-position: 0 -135px;
    color: #00aeef;
}
</style><br><br><br>

<div class="container">
    <section id="content"><br><br><br>
        <form method="post">
            <h1>Contact</h1>
            <div> <input type="text" placeholder="votre nom" name="nom" id="nom" required="" /> </div>
            <div> <input type="text" placeholder="votre prenom" name="prenom" id="prenom" required="" /> </div>
            <div> <input type="text" placeholder="votre e-mail" name="mail" id="mail" required="" /> </div>
            <!-- <div>
   <input type="radio" id="Homme" name="drone" value="Homme" checked>
  <label for="Homme">Homme</label>
  <input type="radio" id="Femme" name="drone" value="Femme">
  <label for="Femme">Femme</label>
</div> -->
            <div >
           <input style="height:65px;" type="text" placeholder="votre message" name="msg" id="msg" />
            </div>
            
            <!-- <div class="col-lg-12 col-md-12 col-sm-12">
<textarea class="form-control" name="comments" id="comments" rows="6" placeholder="Give us more details.."></textarea>
</div> -->

            <div>
                <input type="submit" value="Envoyer" name="Envoyer" id="Envoyer" />
            </div>
        </form><!-- form -->
        
    </section>
</div><!-- container -->

<!-------------------fpartie Contact.php/html--------------------->

<?php 

if (isset($_POST['Envoyer'])){
    extract($_POST);
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $mail=$_POST['mail'];  
    // $drone=$_POST['drone'];
    $msg=$_POST['msg'];

    include 'database.php';

global $db;
// $q = $db -> prepare("INSERT INTO user(nom,prenom,mail,drone,msg) VALUES(:nom,:prenom,:mail,:drone,:msg)");
$q = $db -> prepare("INSERT INTO user(nom,prenom,mail,msg) VALUES(:nom,:prenom,:mail,:msg)");
$q ->execute([ 'nom' => $nom,
            'prenom' => $prenom,
            'mail' => $mail,
            // 'drone'=> 'Homme',
            'msg' => $msg]);
    }
    ?>

<!-------------------fpartie Contact.php/html--------------------->



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
                    <a ><img src="images/logo_06.png" alt="" class="img-repsonsive"></a>
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
                        <p> la faculté des sciences juridiques, économiques et sociales Ain Sebaâ joue, depuis sa création, un rôle prépondérant dans son environnement socioéconomique. Notre faculté est un lieu de liberté, de créativité et de responsabilité. En prise directe avec les enjeux de la société, elle contribue à son développement à travers la création, la transmission et la valorisation du savoir ainsi que la promotion de la pensée critique.</p>
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
                            <li><a href="index.html">Home</a></li>
                            <li><a href="course-grid-1.html">Formation</a></li>
                            <li><a href="Teachers.html">Professeurs</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="contact.html">Contact</a></li>
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
                </div><!-- end col -->
				
            </div><!-- end row -->
        </div><!-- end container -->
		
        

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
	<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyCKjLTXdq6Db3Xit_pW_GK4EXuPRtnod4o"></script>
	<!-- Mapsed JavaScript -->
	<script src="js/mapsed.js"></script>
	<script src="js/01-custom-places-example.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>

</body>
</html>

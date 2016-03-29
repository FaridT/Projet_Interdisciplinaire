<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Projet - Interdisciplinaire</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
	
	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body id="page-top" class="index container-fluid body" onLoad="$('#<?php echo $lien ;?>').click();">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" style="padding-top:8px;padding-bottom:8px;height:67px;background-color:#2C3E50;border-color:#2C3E50;">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                 <a class="navbar-brand" href="acceuil.php"><img class="img-responsive" src="img/logo.png" alt="logo" style="position: absolute;top: 4px;width: 80px;"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="page-scroll">
                        <a id="start" class="start" style="color:#fff" href="index.php">Start</a>
                    </li>
                    <li class="page-scroll dropdown">
                        <a class="score dropdown-toggle" data-toggle="dropdown" style="color:#fff">Score</a>
						<ul class="dropdown-menu" style="height: 100px;">
							<li class="dropdown-header" style="color: #18BC9C;">Your Hight Score</li>
							<li align="center" style="margin-top: 15px;font-size: 24px;">
							<?php require_once("config.php"); $sql=mysql_query("SELECT MAX(score) as 'MAX:' FROM `score`"); while ($donne =  mysql_fetch_assoc($sql)){
                            echo ''.$donne['MAX:'];
                            }?>
							</li>
						</ul>
                    </li>
                    <li class="page-scroll">
                        <a class="about" style="color:#fff">About</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
	
	<div id="content">
    <!-- Header -->
    <header>
        <div class="container" style="padding-top: 17px;padding-bottom: 16px;">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="img/profile.png" alt="" style="margin-bottom: 0px; width:236px;">
                    <div class="intro-text">
                        <span class="name" style="font-size:46px;">Are You Ready To Be A Moroccan Financial Minister</span>
                        <hr class="star-light">
                        <span class="skills">texttexttexttextetxtetxtetextetxtetxtet</span>
                        <span class="skills">
						</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
	
    </div>
	<!-- Footer -->
    <footer class="text-center">
		<div class="footer-below">
            <div class="container">
                <div class="row" style="height: 8px;">
                    Copyright &copy; Projet Interdisciplinaire 2016
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visible-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

</body>


</html>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Livrable 1</title>
	
	<link href="css/style.css" rel="stylesheet" type="text/css">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
	
	<link rel="canonical" href="http://www.mon-ip.com/adresse-ip-locale.php"/><meta name="RATING" content="Internet" />

	
</head>
<body class="container-fluid" style="background:aliceblue;">
	<div align="center" class="cl">
		<?php
	require_once("config.php");
/*  	$sante= $_POST['sante']/10;
	$education= $_POST['education']/10;			
	$environnement= $_POST['environnement']/10;
	$finance= $_POST['finance']/10;			
	$defense= $_POST['defense']/10;
	$somme=$sante+ $education+ $environnement+ $finance+ $defense;
	if($somme!= 100)
		header("Location: index.php?error=La somme de vous input que vous avez tapper est incorrect");
	
	//______________________________________________________________________
	
	ECHO $sante.'%<br>';
	$var= 20-$sante;
	if($var < 0)
		$var = -$var;
	
	ECHO $education.'%<br>';
	$var1= 20-$education;
	if($var1 < 0)
		$var1 = -$var1;

	ECHO $environnement.'%<br>';
	$var2= 20-$environnement;
	if($var2 < 0)
		$var2 = -$var2;
	
	ECHO $finance.'%<br>';
	$var3= 20-$finance;
	if($var3 < 0)
		$var3 = -$var3;

	ECHO $defense.'%<br>';
	$var4= 20-$defense;
	if($var4 < 0)
		$var4 = -$var4;
	
	$resultat= $var + $var1 + $var2 + $var3 + $var4;
	$resultat= 100-$resultat;
	echo 'votre résultat est de: '.$resultat.'% AAA<br>';
	$score=$resultat/10; */
	
	/* $ipAddress = gethostbyname($_SERVER['SERVER_NAME']);
	echo $ipAddress.'<br>'; */
	
	ob_start(); 
	system("ipconfig /all"); 
	$mycom=ob_get_contents(); 
	ob_clean(); 
	$findme = "IPv4"; 
	$pmac = strpos($mycom, $findme);
	if ($pmac == "") {
		$findme = "IPv4"; 
		$pmac = strpos($mycom, $findme);
		$mac=substr($mycom,($pmac+36),12); 
	}
	else{
		$mac=substr($mycom,($pmac+33),12); 
	}
/* 
	echo $mycom.'<br>';
	echo $mac.'<br>'; */

	ob_start(); 
	$page = file_get_contents ("http://www.mon-ip.com/adresse-ip-locale.php"); 
	echo $page;
	$mycom=ob_get_contents(); 
	ob_clean();
	$findme = "Votre adresse IP Locale est"; 
	$pmac = strpos($mycom, $findme);
	$mac=substr($mycom,($pmac+20),12);
	echo $mycom.'<br>';
	// $myfile = fopen("file1.txt", "w") or die("Unable to open file!");
	// fwrite($myfile, $mycom);
	
	
	$adresse = "http://localhost/projet_inter/envoyer.php"; // adresse de la page à exploiter
echo "$adresse <br>"; // afficher l'adresse
$page = file_get_contents ($adresse); // récupérer le contenu de la page
//echo $page ; // afficher la page

$myfile = fopen("file.txt", "w") or die("Unable to open file!");
fwrite($myfile, $page);
fclose($myfile); 

// $url = 'http://localhost/projet_inter/envoyer.php';
// echo htmlspecialchars(implode('', file($url)));

/* $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $txt);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
fclose($myfile); */
	
	
	/* $estimation_sante= $_POST['estimation_sante']/10;
	ECHO $estimation_sante.'%<br>';
	
	$estimation_education= $_POST['estimation_education']/10;
	ECHO $estimation_education.'%<br>';
	
	$estimation_environnement= $_POST['estimation_environnement']/10;
	ECHO $estimation_environnement.'%<br>';
	
	$estimation_finance= $_POST['estimation_finance']/10;
	ECHO $estimation_finance.'%<br>';
	
	$estimation_defense= $_POST['estimation_defense']/10;
	ECHO $estimation_defense.'%<br>'; */
	//____________________________________________________________
		
	?>
	</div>
</body>
</html>
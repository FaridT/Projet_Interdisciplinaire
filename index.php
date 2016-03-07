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
	
</head>
<body class="container-fluid" style="background:aliceblue">
<?php
$Error= $Error1="";
$Sante = $Education = $Environnement = $Defense = $Finance = $estimation_Sante = $estimation_Education = $estimation_Environnement = $estimation_Defense
 = $estimation_Finance = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["sante"])) {
        $Error = "s'il vous plait remplir tous les zone.";
    } else {
        $Sante = test_input($_POST["sante"]);
    }

    if (empty($_POST["education"])) {
        $Error = "s'il vous plait remplir tous les zone.";
    } else {
        $Education = test_input($_POST["education"]);
    }

    if (empty($_POST["environnement"])) {
        $Error = "s'il vous plait remplir tous les zone.";
    } else {
        $Environnement  = test_input($_POST["environnement"]);
    }
	
	if (empty($_POST["finance"])) {
        $Error = "s'il vous plait remplir tous les zone.";
    } else {
        $Finance = test_input($_POST["finance"]);
    }
	
	if (empty($_POST["defense"])) {
        $Error = "s'il vous plait remplir tous les zone.";
    } else {
        $Defense = test_input($_POST["defense"]);
    }
	
	if (empty($_POST["estimation_sante"])) {
        $Error1 = "s'il vous plait remplir tous les zone.";
    } else {
        $estimation_Sante = test_input($_POST["estimation_sante"]);
    }

    if (empty($_POST["estimation_education"])) {
        $Error1 = "s'il vous plait remplir tous les zone.";
    } else {
        $estimation_Education = test_input($_POST["estimation_education"]);
    }

    if (empty($_POST["estimation_environnement"])) {
        $Error1 = "s'il vous plait remplir tous les zone.";
    } else {
        $estimation_Environnement  = test_input($_POST["estimation_environnement"]);
    }
	
	if (empty($_POST["estimation_finance"])) {
        $Error1 = "s'il vous plait remplir tous les zone.";
    } else {
        $estimation_Finance = test_input($_POST["estimation_finance"]);
    }
	
	if (empty($_POST["estimation_defense"])) {
        $Error1 = "s'il vous plait remplir tous les zone.";
    } else {
        $estimation_Defense = test_input($_POST["estimation_defense"]);
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


if(isset($_POST['sante'],$_POST['education'],$_POST['environnement'],$_POST['finance'],$_POST['defense'])){
    require_once("config.php");
 	$sante= $Sante/10;
	$education= $Education/10;			
	$environnement= $Environnement/10;
	$finance= $Finance/10;			
	$defense= $Defense/10;
	$somme=$sante+ $education+ $environnement+ $finance+ $defense;
	if($somme!= 100){
		if($Error=="")
		$Error="La somme de vous input que vous avez tapper est incorrect";			
	}
	
	if ($Error==""){
	$Sante = $Education = $Environnement = $Defense = $Finance = "";
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
	$score=$resultat/10;
	
	ob_start(); 
	system("ipconfig /all"); 
	$mycom=ob_get_contents(); 
	ob_clean(); 
	$findme = "physique"; 
	$pmac = strpos($mycom, $findme);
	if ($pmac == "") {
		$findme = "Physical"; 
		$pmac = strpos($mycom, $findme);
		$mac=substr($mycom,($pmac+36),17); 
	}
	else{
		$mac=substr($mycom,($pmac+33),17); 
	}
	$sql=mysql_query("select * from joueur where adresse_mac='$mac'");
	$num=mysql_num_rows($sql);
	if($num==0)
		mysql_query('insert into joueur(adresse_mac,score) values("'.$mac.'",'.$score.')');
	else{
		while ($donnee =  mysql_fetch_array($sql))
                                    {
										$score1=$donnee['score'];
										$adresse_mac=$donnee['adresse_mac'];
									}
		$score=$score+$score1;
		mysql_query("UPDATE joueur SET score =$score where adresse_mac= '$adresse_mac'");
	}
	
	if(isset($_POST['estimation_sante'],$_POST['estimation_education'],$_POST['estimation_environnement'],$_POST['estimation_finance'],$_POST['estimation_defense'])){
 	$sante= $estimation_Sante/10;
	$education= $estimation_Education/10;			
	$environnement= $estimation_Environnement/10;
	$finance= $estimation_Finance/10;			
	$defense= $estimation_Defense/10;
	$somme=$sante+ $education+ $environnement+ $finance+ $defense;
	if($somme!= 100){
		if($Error1=="")
		$Error="La somme de vous input que vous avez tapper est incorrect";			
	}
	
	if ($Error1=="" and $Error==""){
		$estimation_Sante = $estimation_Education = $estimation_Environnement = $estimation_Defense = $estimation_Finance = "";
	
	$sql=mysql_query("select * from joueur where adresse_mac='$mac'");
	$num=mysql_num_rows($sql);
	if($num!=0){
		mysql_query('insert into reponse(mac,pourcentage_sante,pourcentage_education,pourcentage_environnement,pourcentage_finance,pourcentage_defense)
		values("'.$mac.'","'.$sante.'%","'.$education.'%","'.$environnement.'%","'.$finance.'%","'.$defense.'%")') or die('<br>'.mysql_error());
	}
	}	
}
	}	
}
?>


	<div align="center" class="cl">
		<h3><kbd style="background:#376921">Scénario: </kbd> Vous avez un salaire mensuel de 8 500 DH net, vous avez payé environ 1000 DH d’impôt </h3>
		<div class="question">
			<h4><kbd style="background:#376921">Question1: </kbd> A votre avis, selon le budget 2015, combien de votre  argent
				a été dépensé dans les  domaines suivants</h4>
			<form class="form-inline" role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
				<div class="form-group">
				  <label>Santé :</label>
				  <input type="text" class="form-control form" name="sante" placeholder="Entrer votre estimation" value="<?php echo $Sante;?>">
				</div>
				
				<div class="form-group">
				  <label>Education :</label>
				  <input type="text" class="form-control form" name="education" placeholder="Entrer votre estimation" value="<?php echo $Education;?>">
				</div>
				
				<div class="form-group">
				  <label>Environnement :</label>
				  <input type="text" class="form-control form" name="environnement" placeholder="Entrer votre estimation" value="<?php echo $Environnement;?>">
				</div>
				
				<div class="form-group">
				  <label>Finances :</label>
				  <input type="text" class="form-control form" name="finance" placeholder="Entrer votre estimation" value="<?php echo $Finance;?>">
				</div>
				
				<div class="form-group">
				  <label>Défense :</label>
				  <input type="text" class="form-control form" name="defense" placeholder="Entrer votre estimation" value="<?php echo $Defense;?>">
				</div>
				<br>
				<span  style="color: red"> <?php echo $Error;?></span>

				<h4><kbd style="background:#376921">Question2: </kbd> Si vous étiez Ministre des finances, combien dépenseriez-vous dans les domaines suivants</h4>
				<div class="form-group">
				  <label>Santé :</label>
				  <input type="text" class="form-control form" name="estimation_sante" placeholder="Entrer votre estimation" value="<?php echo $estimation_Sante;?>">
				</div>
				
				<div class="form-group">
				  <label>Education :</label>
				  <input type="text" class="form-control form" name="estimation_education" placeholder="Entrer votre estimation" value="<?php echo $estimation_Education;?>">
				</div>
				
				<div class="form-group">
				  <label>Environnement :</label>
				  <input type="text" class="form-control form" name="estimation_environnement" placeholder="Entrer votre estimation" value="<?php echo $estimation_Environnement;?>">
				</div>
				
				<div class="form-group">
				  <label>Finances :</label>
				  <input type="text" class="form-control form" name="estimation_finance" placeholder="Entrer votre estimation" value="<?php echo $estimation_Finance;?>">
				</div>
				
				<div class="form-group">
				  <label>Défense :</label>
				  <input type="text" class="form-control form" name="estimation_defense" placeholder="Entrer votre estimation" value="<?php echo $estimation_Defense;?>">
				</div>
				<br>
				<span  style="color: red"> <?php echo $Error1;?></span>
			<button type="submit" class="btn btn-default">Submit</button>
		</form>
	</div>
</body>
</html>
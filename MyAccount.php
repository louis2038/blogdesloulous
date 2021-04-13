<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>site de louis</title>

<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body id="body">
	
<?php include('./menu.php');?>

<p>ceci est la page my account</p>

<form method="post">
	<input type="submit" name="deconnect" id="deconnect" value="deconnecter">
</form>

<?php 
	
if($_SESSION['connected'] != true){
	?>
			<p>se connecter:</p>	
		<form method="post" id="formulaire_connexion">
			<input type="text" name="pseudo_C" id="pseudo_C" placeholder="votre pseudo" required>
			<input type="password" name="password_C" id="password_C" placeholder="votre password" required>
			<input type="submit" name="connect" id="connect">
			<input type="checkbox" name="connexion_auto" id="connexion_auto" value="yes">
			<label> connexion automatique </label>
		</form>
	
			<p>s'inscrire:</p>
		<form method="post">
			<input type="text" name="pseudo_I" id="pseudo_I" placeholder="votre pseudo" required>
			<input type="email" name="email_I" id="email_I" placeholder="votre email" required>
			<input type="password" name="password_I" id="password_I" placeholder="votre password" required>
			<input type="password" name="cpassword_I" id="cpassword_I" placeholder="confirmer votre password" required>
			<input type="submit" name="inscrire" id="inscrire">
		</form>
	<?php
	}
	?>

<?php 
include('./Fonction-all.php');
if(isset($_POST['connect'])){
	
	$pseudo_connection = $_POST['pseudo_C'];
	$password_connection = $_POST['password_C'];
	$output = connexion_user($pseudo_connection, $password_connection);
	echo $output;
		if($output == true){
			echo "connexion reussi !";
			header("Refresh:0");
		}else{
			echo "erreur de connexion !";
		}
}
	
if(isset($_POST['inscrire'])){

$Cpassword_inscription = $_POST['cpassword_I'];
$pseudo_inscription = $_POST['pseudo_I'];
$email_inscription = $_POST['email_I'];
$password_inscription = $_POST['password_I'];
$output = inscription_user($pseudo_inscription, $email_inscription, $password_inscription, $Cpassword_inscription);

	if($output){
		echo "inscription reussi !";
	}else{
		echo "erreur d'inscription !";
	}
}
	
if(isset($_POST['deconnect'])){
	$_SESSION['connected'] = false;
	$_SESSION['pseudo'] = "";
	$_SESSION['email'] = "";
	setcookie('pseudo',"", time());
	setcookie('email',"", time());
	setcookie('password',"", time());
	session_destroy();
	header("Refresh:0");
	}

?>
	

</body>
</html>
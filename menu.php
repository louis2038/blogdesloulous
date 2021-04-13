<?php session_start();?>

<nav id="menu">
	<ul id="menu-nav">

	
	<?php
	if((isset($_SESSION['connected'])) and ($_SESSION['connected'] == true)){
	echo $_SESSION['pseudo']." est connecté !";
	?>
	<li class="li-nav"><a href="./game.php">Game</a></li>
	<li class="li-nav"><a href="./myfile.php">My File</a></li>	
	<?php
	
	}else{
		if(isset($_COOKIE['pseudo'])){
			include('./Fonction-all.php');
			$output = connexion_user($_COOKIE['pseudo'],$_COOKIE['password']);
			if($output == true){
				echo "connexion automatique reussi !";
			}
		}else{
			echo "connectez-vous a votre compte !";
		}
	}
	?>
	<li class="li-nav"><a href="./index.php">Accueil</a></li>
	<li class="li-nav"><a href="./blog.php">Blog</a></li>
	<li class="li-nav"><a href="./mon_cv.php">Mon CV</a></li>
	<li class="li-nav"><a href="./MyAccount.php">MyAccount</a></li>
	</ul>
	
</nav>
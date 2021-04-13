<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>site de louis</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />

</head>

<body id="body">
	
<?php include('./menu.php');?>

<p>ceci est la page game</p>
	

<form method="post">
	<input type="submit" name="send" id="send" value="exécuter" required>
	<input type="submit" name="error_log" id="error_log" value="afficher les erreurs serveurs">
	<input type="number" name="selection_log" id="selection_log" min=1 max=10 value=1>
	<input type="submit" name="new_sheet" id="new_sheet" value="new page">
	<input type="submit" name="afficher_prgm" id="afficher_prgm" value="afficher ancien prgm">
	<textarea type="text" name="code" id="code"><?php 
			if(isset($_POST['afficher_prgm'])){
				
			$content = "cd /var/www/html/USER/".$_SESSION['pseudo']."/;cat FLOW.py";
			$output = array();
			$retval = null;
			exec($content,$output,$retval);
			foreach ($output as &$sortie) {
    		echo $sortie;
			echo "\n";
			}
			}
			if(isset($_POST['new_sheet'])){
				echo "import sys\nimport mysql.connector\nsys.path.insert(1, '/var/www/html/USER')\nfrom SERVICE import *\ns = ServiceClass('l')\n";
			}
	?></textarea>
	
></form>
<p>
<?php 
	if(isset($_POST['error_log'])){
		$filename = "/var/log/apache2/error.log";
				if (!$handle = fopen($filename, 'r')) {
				echo "Impossible d'ouvrir le fichier ($filename)"."\n";
    			}else{
				$contents = fread($handle, filesize($filename));
				$contentT = array();
				$contentT = explode("File",$contents);
				$nbs_int = (int)$_POST['selection_log'];
				$vars = substr($contentT[count($contentT)-($nbs_int)], 0,-2000);
				$final_var = explode("[",$vars);
				
				echo "<br>";
				echo $final_var[0];
				echo "<br>";
				
				}
	
	
	}
	
	
	
	
	
	
		if(isset($_POST['send'])){
			
			$codepython = $_POST['code'];
			if(!empty($codepython)){
				$filename = "/var/www/html/USER/".$_SESSION['pseudo']."/FLOW.py";
				if (!$handle = fopen($filename, 'w+')) {
				echo "Impossible d'ouvrir le fichier ($filename)"."\n";
    			}else{
					
				$contentwrite = $codepython;
			
				fwrite($handle,$contentwrite);
				fclose($handle);
				
				
				$command = "python /var/www/html/USER/l/FLOW.py";
				$retval = 0;
				exec($command,$outputf,$retval);
				echo "<br>";
				if($retval == 0){
					echo "éxecution  reussi !";
				}else{
					echo "erreur type : ".$retval." ,  (voir les erreurs serveurs) <br>";
				}	
				foreach($outputf as $sortie2){
    			echo "<br>";
				echo $sortie2;
				}			
				}
				
			}
		}
	
?></p>
<p>map !</p>
<?php
	if(isset($_POST['send'])){
		

	include("./database.php");
	$q = $db->query("SELECT * FROM map");
	$affichage = array();
	$taille_affichage = 9;
	for ($i = 0; $i <= $taille_affichage; $i++) {
		$affichage[i] = array();
	}	
		while($cursors = $q->fetch()){
		$coord = explode(":",$cursors['position']);
		$affichage[$coord[0]][$coord[1]] = $cursors['donne'];
		}

			
		echo "<table border=1>";
	
		for($i = 0; $i <= $taille_affichage; $i++){
			echo "<tr>";
			for($r = 0; $r <= $taille_affichage; $r++){
				
				echo "<td>".$affichage[$i][$r]."</td>";	
					
			}
			echo "<tr>";
		}
		echo "</table>";
		
	}
		
?>
	
<script>
document.
</script>
	
	
</body>
</html>


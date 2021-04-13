<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>site de louis</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />

</head>

<body id="body">
	
<?php include('./menu.php');?>

<p>ceci est la page my file</p>
	

<form method="post">
	<div>
	<input type="submit" name="open" id="open" value="ouvrir mon fichier">
	<input type="submit" name="refrech_ls" id="refrech_ls" value="voir mes fichiers">
	</div>
	<div>
	<input type="submit" name="open_C" id="open_C" value="ouvrir mon fichiers en cours d'éxécution">
	<input type="submit" name="voir_fic" id="voir_fic" value="voir mes fichiers en cours d'éxécution">
	</div>
	<div><input type="text" name="name_of_file" id="name_of_file" placeholder="nom du fichier"></div>
	<div>
	<textarea type="text" name="write_file" id="write_file"></textarea>	
	<input type="submit" name="send_file" id="send_file" value="send">
	</div>	
	
</form>
<p>
<?php 
	
		if(isset($_POST['open'])){
			$content = "cd /var/www/html/USER/".$_SESSION['pseudo']."/temp/;cat ".$_POST['name_of_file'];
			$output = array();
			$retval = null;
			exec($content,$output,$retval);
			foreach ($output as &$sortie) {
    		echo $sortie;
			echo "<br>";
			}
			echo "retval : ".$retval;
			
			
		}
	
		if(isset($_POST['open_C'])){
			$content = "cd /var/www/html/USER/".$_SESSION['pseudo']."/;cat ".$_POST['name_of_file'];
			$output = array();
			$retval = null;
			exec($content,$output,$retval);
			foreach ($output as &$sortie) {
    		echo $sortie;
			echo "<br>";
			}
			echo "retval : ".$retval;	
		}
	
		if(isset($_POST['voir_fic'])){
			
			$content = "cd /var/www/html/USER/".$_SESSION['pseudo']."/;ls";
			exec($content,$output,$retval);
			foreach ($output as &$sortie) {
    		echo $sortie;
			echo "<br>";
			}	
		} 
	
	
	
		if(isset($_POST['refrech_ls'])){
			
			$content = "cd /var/www/html/USER/".$_SESSION['pseudo']."/temp/;ls";
			exec($content,$output,$retval);
			foreach ($output as &$sortie) {
    		echo $sortie;
			echo "<br>";
			}
			
			
		} 
	
	
		if(isset($_POST['send_file']));
			$content_file = $_POST['write_file'];
			$name_of_file = $_POST['name_of_file'];
			if(!empty($content_file)){
				$filename = "/var/www/html/USER/".$_SESSION['pseudo']."/temp/".$name_of_file;
	
				
				if (!$handle = fopen($filename, 'w+')) {
				echo "Impossible d'ouvrir le fichier ($filename)"."\n";
    			}else{
$contentwrite = "import sys
sys.path.insert(1, '/var/www/html/USER')
from SERVICE import *
s = ServiceClass('".$_SESSION['pseudo']."')
".$content_file;

				fwrite($handle,$contentwrite);
				fclose($handle);
				
				
					
				}
				
			}
	
?></p>


</body>
</html>
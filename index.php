<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>site de louis</title>

<link href="css/styles.php" rel="stylesheet" type="text/css" media="all" />
</head>

<body id="body">
	
	

	
<?php include('./menu.php')?>
<?php
include("./database.php");
global $db;
$q = $db->query("SELECT * FROM user");
while($user = $q->fetch()){
	echo "pseudo : ".$user['pseudo']."<br/>";
}
	

	
?>
<div class="welcome">
<p1><strong>bienvenue sur le blog des loulous</strong></p1>
</div>
	
	
<div class="info">
  <footer>me contacter ?</footer>
</div>
	
</body>
</html>
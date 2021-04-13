<?php
   header('content-type: text/css');
   ob_start('ob_gzhandler');
   header('Cache-Control: max-age=31536000, must-revalidate');
   // etc. 
?>

body{
    background-color: #FF0004;
}

#menu-nav{
    align-items: center;
    background-color: #DB0306;
}

.li-nav{
    display: inline;
    padding-right: 6%;
    padding-left: 6%;
}
	
	
	
<?php
$connection = mysql_connect("localhost", "root","");
$db = mysql_select_db("site");
mysql_set_charset("utf8");
if(!$connection || !$db)
{
	exit(mysql_error());
}
else echo "connected";

 	
?></br>
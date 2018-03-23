<?php
$whitelist = array(
'127.0.0.1',
'::1'
);
if(!in_array($_SERVER['REMOTE_ADDR'], $whitelist)){
$mysql_hostname = "localhost";
$mysql_user = "scubeinfotec";
$mysql_password = "";
$mysql_database = "scubedb";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");
}
else
{
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "scubedb";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database1");
}
?>
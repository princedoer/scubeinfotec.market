<?php
if(session_id() == '')
{
@ob_start();
session_start();
}
ini_set('session.gc_maxlifetime',24*60*60);
ini_set('session.gc_probability',5);
ini_set('session.gc_divisor',1);
$_SESSION['start']='yes';
$actual_link = "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$page=basename($_SERVER['PHP_SELF']);
if (strpos($actual_link, '%27') !== false) {
$new_link=str_replace("%27","",$actual_link);
header('location: http://'.$new_link);
}
else if (strpos($actual_link, "'") !== false) {
$new_link=str_replace("'","",$actual_link);
header('location: http://'.$new_link);
}
else
{
}
if (strpos($actual_link, '%2F%2F') !== false) {
$new_link=str_replace("%27%2F","%2F",$actual_link);
header('location: http://'.$new_link);
}
else if (strpos($actual_link, "//") !== false) {
$new_link=str_replace("//","/",$actual_link);
header('location: http://'.$new_link);
}
else
{
}
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$loginipaddress = '';
if (getenv('HTTP_CLIENT_IP'))
$loginipaddress = getenv('HTTP_CLIENT_IP');
else if(getenv('HTTP_X_FORWARDED_FOR'))
$loginipaddress = getenv('HTTP_X_FORWARDED_FOR');
else if(getenv('HTTP_X_FORWARDED'))
$loginipaddress = getenv('HTTP_X_FORWARDED');
else if(getenv('HTTP_FORWARDED_FOR'))
$loginipaddress = getenv('HTTP_FORWARDED_FOR');
else if(getenv('HTTP_FORWARDED'))
$loginipaddress = getenv('HTTP_FORWARDED');
else if(getenv('REMOTE_ADDR'))
$loginipaddress = getenv('REMOTE_ADDR');
else
$loginipaddress = 'UNKNOWN';
$cpagecolor=array('#F34135', '#3E50B4', '#4BAF4F', '#FF9700', '#E91D62', '#2095F2', '#8AC149', '#FD5621',   '#CCDB38', '#785446', '#9B27B0', '#01BBD4', '#663AB6', '#019587', '#1ABC9C', '#2ECC71', '#3498DB', '#9B59B6', '#F1C40F', '#E67E22', '#E74C3C', '#16A085', '#27AE60', '#2980B9', '#8E44AD', '#F39C12', '#D35400', '#C0392B');
shuffle($cpagecolor);
$whitelist = array(
'127.0.0.1',
'::1'
);

?>
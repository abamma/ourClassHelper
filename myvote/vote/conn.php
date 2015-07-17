<?php 

define('root_dir', str_replace("\\", '/', dirname(__FILE__) ) );//系统所在目录


function getIP() { 
if (@$_SERVER["HTTP_X_FORWARDED_FOR"]) 
$ip = $_SERVER["HTTP_X_FORWARDED_FOR"]; 
else if (@$_SERVER["HTTP_CLIENT_IP"]) 
$ip = $_SERVER["HTTP_CLIENT_IP"]; 
else if (@$_SERVER["REMOTE_ADDR"]) 
$ip = $_SERVER["REMOTE_ADDR"]; 
else if (@getenv("HTTP_X_FORWARDED_FOR"))
$ip = getenv("HTTP_X_FORWARDED_FOR"); 
else if (@getenv("HTTP_CLIENT_IP")) 
$ip = getenv("HTTP_CLIENT_IP"); 
else if (@getenv("REMOTE_ADDR")) 
$ip = getenv("REMOTE_ADDR"); 
else 
$ip = "Unknown"; 
return $ip; 
}

//数据库密码
$dbpwd="ab123456";
$conn=mysql_connect("localhost","root","");
mysql_query("SET NAMES 'gbk'"); 
if(!$conn)
{
	echo("不能连接数据库<br/>");
}
$dblink=mysql_select_db("my_tp",$conn);
?>
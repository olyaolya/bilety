<?php
header('Content-type: text/html; charset=utf-8');
define("DBName","testbd");
define("HostName","localhost");
define("UserName","root");
define("Password","");
if(!mysql_connect(HostName,UserName,Password))
{ echo "Error connecting to database".DBName."!<br>";
echo mysql_error();
exit;
}

mysql_select_db(DBName);
 $r=mysql_query("drop database if exists ".DBName);

 $r=mysql_query("create database ".DBName);
mysql_select_db(DBName);

 $r=mysql_query('SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO"');
if(!$r)
{ echo "Error !<br>";
echo mysql_error();
}

 $r=mysql_query('SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO"');
if(!$r)
{ echo "Error !<br>";
echo mysql_error();
}

 $r=mysql_query('SET time_zone = "+00:00"');
if(!$r)
{ echo "Error !<br>";
echo mysql_error();
}

 $r=mysql_query("CREATE TABLE IF NOT EXISTS `testbd` (  `name` text NOT NULL,  `tel` int NOT NULL,`adres` text NOT NULL, `Horoda` text NOT NULL, `kilkist` int NOT NULL,  `result` int NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=latin1;");
if(!$r)
{ echo "Error !<br>";
echo mysql_error();
}

 $r=mysql_query("INSERT INTO `testbd` (`name`,  `tel` ,`adres`, `Horoda` , `kilkist`,  `result` ) VALUES ('', '100','','', '100', '100'),('', '100','','', '100', '100');");
if(!$r)
{ echo "Error !<br>";
echo mysql_error();
}
 
 
?>

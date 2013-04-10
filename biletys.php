<?php
$Horoda=$_REQUEST['Horoda'];
echo "Horoda=$Horoda <br>";
$kilkist=$_REQUEST['kilkist'];
echo "kilkist=$kilkist <br>";
$bilety=$_REQUEST['bilety'];
echo "bilety=$bilety <br>";
$result=$_REQUEST['result'];
echo "result=$result <br>";
$fp=fopen("zam.txt","a");
fputs($fp,"$Horoda\t$kilkist\t$result\t");
fclose($fp);
?>

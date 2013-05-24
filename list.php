<?php
header('Content-type: text/html; charset=utf-8');
?>


<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title> Замовлення </title>
</head>
<body>
<H1> Замовлення білетів </H1>
<table border=2>
<tr> <td>name</td><td>telephone</td><td>address</td> <td>Horoda</td> <td>kilkist</td>  </tr>
<?php
$fp=fopen("zam.txt","r");
if ($fp)

   {
       while(!feof($fp))

    {
       $stroka=fscanf($fp,"%s\t%s\t%s\t%s\t%d\t%s\n");
       list($name,$tel,$adres,$Horoda,$kilkist,$result)=$stroka;
        //$Horoda=fscanf($fp,"%s\t");
        //$kilkist=fscanf($fp,"%d\t");
        //$result=fscanf($fp,"%d\n");
echo "<TR><td>$name</td> <td>$tel</td><td>$adres</td><td> $Horoda</td> <td>$kilkist</td> </TR>";
}
fclose($fp);

}
?>
</body>
</html>



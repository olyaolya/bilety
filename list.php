<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title> Замовлення </title>
</head>
<body>
<H1> Замовлення білетів </H1>
<table border=2>
<tr> <td>name</td> <td>Horoda</td> <td>kilkist</td> <td>result</td> </tr>
<?php
$fp=fopen("zam.txt","r");
if ($fp)

   {
       while(!feof($fp))

    {
       $stroka=fscanf($fp,"%s\t %s\t %d\t %d\n");
       list($name,$Horoda,$kilkist,$result)=$stroka;
        //$Horoda=fscanf($fp,"%s\t");
        //$kilkist=fscanf($fp,"%d\t");
        //$result=fscanf($fp,"%d\n");
echo "<TR><td>$name</td> <td>$Horoda</td> <td>$kilkist</td> <td>$result</td> </TR>";
}
fclose($fp);

}
?>
</body>
</html>



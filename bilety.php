<?php
header('Content-type: text/html; charset=utf-8');
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title> Замовлення білетів</title>

<script language="JavaScript">
function touch()
{
alert("I was touched!");
}

function calculate()
{

var tsina=parseFloat(document.myform.tsina.value);

var kilkist=parseFloat(document.myform.kilkist.value);

if(document.myform.bilety[0].checked)
document.myform.result.value="Вартість замовлення="+(500*kilkist);
else
if(document.myform.bilety[1].checked)
document.myform.result.value="Вартість замовлення="+(400*kilkist);
else
if(document.myform.bilety[2].checked)
document.myform.result.value="Вартість замовлення="+(200*kilkist);
else
if(document.myform.bilety[3].checked)
document.myform.result.value="Вартість замовлення="+(100*kilkist);
else
if(document.myform.bilety[4].checked) m=0;
else
document.myform.result.value="Вартість замовлення="+(0*kilkist);
}
</script>


</head>
<body>

<form name=myform action="biletys.php">
<div align="center">
<H1>Путівки</H1>
<p>Вибери найкраще місце для подорожей авірейсом та залізнодорожнім рейсом</p>
<h2 align="center"><a class="zakaz_button" href="">ОФОРМИТИ ЗАМОВЛЕННЯ БІЛЕТІВ </a> </h2>
<div class="hidden">
<br /><br /><br />

<div align="center">

Ваше ПІП <br />
<input type="text" name = "name" size="50" /><br /><br />

Контактні телефони<br />
<input type="text" name = "tel" size="50" /><br /><br />

Адрес доставки<br />
<input type="text" name = "adres" size="50" /><br /><br />

Куди направляєтесь:
<select name="Horoda">
<option selected value="Kyiv">Київ</option>
<option value="Lviv">Львів</option>
<option value="Harkiv">Харків</option>
<option value="Shutomur">Житомир</option>
<select>
<br>


<p>Оберіть свій шлях та умови поїздки </p>
<p><input type="radio" name="bilety" value="rad1">Поїздка авіарейсом класом люкс<Br>
<label>
Ціна білету  <input type=reset value="500 $" name=tsina><br>
</label>
</label>
   <input type="radio" name="bilety" value="rad2">Поїздка авіарейсом класом звичайний<Br>
<label>
Ціна білету  <input type=reset value="400 $" name=tsina><br>
</label>
   <input type="radio" name="bilety" value="rad3"> Поїздка залізнодорожнім рейсом класом люкс<Br>
<label>
Ціна білету  <input type=reset value="200 $" name=tsina><br>
</label>
 <input type="radio" name="bilety" value="rad4"> Поїздка залізнодорожнім рейсом класом звичайний<Br>
<label>
Ціна білету  <input type=reset value="100 $" name=tsina><br>
</label>
 </p>

</select>
<br>
<label>
Кількість білетів <input type=text name=kilkist><br>
</label><Br>
<input type=reset value="Очистити">
<br>
<input type=button value="РОЗРАХУВАТИ" onClick="calculate();"><br>

<input type=submit value="Замовити">
<textarea name=result>
</textarea>




</form>

</body>

</html>

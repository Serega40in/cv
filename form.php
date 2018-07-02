<?

header('Content-Type: text/html; charset=utf-8');
// ----------------------------êîíôèãóðàöèÿ-------------------------- // 
 
$adminemail="serega40-in@yandex.ru";  // e-mail àäìèíà 
 
$date=date("d.m.y"); // ÷èñëî.ìåñÿö.ãîä 
 
$time=date("H:i"); // ÷àñû:ìèíóòû:ñåêóíäû 
 
 
//---------------------------------------------------------------------- // 
 
  
 
// Ïðèíèìàåì äàííûå ñ ôîðìû 

$name=$_GET['name'];  
/*$name=iconv('utf-8', 'cp1251', $name);*/
$email=$_GET['email'];  
/*$email=iconv('utf-8', 'cp1251', $email);*/
$tel=$_GET['tel'];  

$message=$_GET['message'];  

 { 
 
 
$msg=" 

<p>$date $time</p> 
 
 <h2>С сайта Резюме</h2>

<p>Имя: $name</p>
<p>Email: $email</p>
<p>Телефон: $tel</p>

<p>Сообщение: $message</p>

<br/>

";
$zag="$date $time С сайта Резюме";
$msg=iconv('utf-8', 'cp1251', $msg);
$zag=iconv('utf-8', 'cp1251', $zag);


 
   
mail("rabresh@mail.ru", "$zag", "$msg", "Content-type: text/html; charset=windows-1251\r\n\r\n");
// Âûâîäèì ñîîáùåíèå ïîëüçîâàòåëþ 
echo 'Отправляется...';


exit('<meta http-equiv="refresh" content="0; url=index2.php" />');

}

?>

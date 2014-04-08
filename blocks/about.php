<?php
include("db.php"); /*Соеденяемся с БД*/
mysql_query("SET NAMES 'utf8'");
$result = mysql_query("SELECT title,text_content FROM pages WHERE page='about'",$db);
if (!$result)
{
	echo "<p>Запрос на выборку данных из базы не прошел. Напишите об этом администратору snoppy911@mail.ru</br>
	<strong>Код ошибки:</strong></p>";
	exit(mysql_error());
}
if (mysql_num_rows($result)>0)
{
	$myrow = mysql_fetch_array($result);
}
else
{
	echo"<p>Информация по запросу не может быть извлечена в таблице нет записей.</p>";
	exit();
}

 ?>
<div class='content text' id='about'>
	<h2>
        ~
        <br/>
       <?php echo $myrow['title']; ?>
        </h2>
        <div>
		<?php echo $myrow['text_content']; ?>
        </div>
</div>

﻿<?php
include("blocks/db.php"); /*Соеденяемся с БД*/
mysql_query("SET NAMES 'utf8'");
$result = mysql_query("SELECT title,text FROM pages WHERE page='about'",$db);
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
} ?>
<div class='content text' id='about'>
		<h2>
        ~
        <br/>
       <?php // $myrow['title']; ?>
       О нас
        </h2>
        <div class='description'>
		<?php // $myrow['text']; ?>
            <p>Уже более трех лет мы занимаемся созданием сайтов и работами в различных направлениях рекламной деятельности. Представительства нашей веб-студии успешно работают в Киеве, Харькове и Донецке.
    Опыт в разработке эффективных рекламных решений дает нам возможность создавать сайты, которые отвечают всем требованиям наших заказчиков, позволяют привлечь и заинтересовать целевую аудиторию и помогают проводить эффективный поиск новых клиентов.
    </p>
        </div>
</div>
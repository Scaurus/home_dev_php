<?php
error_reporting(E_ALL);
include( 'getfile.php');

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="shortcut icon" href="favicon.ico"> </link>
	<title>Python lections</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link href="css/style.css" rel="stylesheet">
	<!-- подсветка синтаксиса -->
	<script type="text/javascript" src="http://yastatic.net/highlightjs/8.2/highlight.min.js"></script>
	<link rel="stylesheet" href="highlight/styles/rainbow.css" />

	<!-- /подсветка синтаксиса -->
</head>
<body>
<script>hljs.initHighlightingOnLoad();</script>
<div id="maket">
	<div id="header">Python Lections</div>
	<div id="left">
		Левая колонка
		<ul>
			<li><a href="#">1. Урок Основы программирования, Python</a></li>
			<li><a href="#">2. Урок Базовые концепции Python</a></li>
			<li><a href="#">3. Урок Типы и операции в Python</a></li>
			<li><a href="#">4. Урок Управляющие конструкции Python</a></li>
			<li><a href="#">5. Урок Классы и ООП в Python</a></li>
		</ul>
	</div>
	<div id="content">
		<div id="content_player">
			<script type="text/javascript" src="js/player.js"></script> <script class="splayer"> var params = {"playlist":[{"title":"sdfsdf","posterUrl":"","video":[{"url":"http://zh-r.me/video/<?php echo $trimmedUrlVideo;?>"}],"duration":0}],"uiLanguage":"ru","width":"640","height":"360"}; player.embed(params); </script>
		</div>
		<div id = "content_description">
			<p>Содержимое страницы XOOPS - это динамический OO (Объектно-Ориентированный) основанный на открытом исходном коде скрипт портала, написанный на PHP. XOOPS поддерживает различные базы данных, XOOPS - это идеальный инструмент для создания небольших высоко-динамичных сообществ вэб-сайтов, внутренних порталов компании, корпоративных порталов, web-публикаторов и многого другого.</p>

			<p><?php
				$stringFromFile = file_get_contents('shag3/translate_numbers1.py');
				$stringAfterNl2br = nl2br($stringFromFile);
				echo $stringAfterReplace = str_replace('   ','&nbsp;&nbsp;&nbsp;&nbsp;',$stringAfterNl2br);
				?> </p>


		</div>
		<div id = "content_Download" >
			<a href="./shag3/Задание.docx">Скачать Задание</a>
		</div>

	</div>


		<div id="code">


		<pre>
			<code class="python hljs">
				<?php
				$stringFromFile = file_get_contents('shag3/translate_numbers1.py');
				$stringAfterNl2br = nl2br($stringFromFile);
				echo $stringAfterReplace = str_replace('   ','&nbsp;&nbsp;&nbsp;&nbsp;',$stringAfterNl2br);
				?>
			</code>
		</pre>
		</div>




	</div>
	<div id="footer">Подвал</div>
</div>
</body>
</html>
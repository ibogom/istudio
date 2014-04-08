<!doctype html>
<html class="">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Imagine studio design studio</title>
<link href="css/boilerplate.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<script src="js/jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="js/respond.min.js" type="text/javascript"></script>
<script src="js/jquery.scrollTo-min.js" type="text/javascript"></script>
<script src="js/scrollspy.js"></script>
<script src="js/animation.js"></script>
</head>
<body  data-spy="scroll" data-target=".small_menu">
<div class="navigation">
    <div class="nav_wrapper">
        <div class="s_menu">
            <img src="img/m_menu.png" />
        </div>
             <div class="small_menu">
                <div><a href="#">О Нас</a></div>
                <div><a href="#services">Цены</a></div>
                <div><a href="#portfolio">Портфолио</a></div>
                <div><a href="#">Контакты</a></div>
             </div>
        <div class="anchor">
        <a href="#" id="top" onclick="return false;"></a>
        </div>
        <div class="email">
            <a href="#"><img src="img/mail.png" /></a>
        </div>
    </div>
</div>
<div class="menu_site_wrapper">
  <div class="header">
  	<div class="main">
    	<div class="menu">
        	<div><a href="#">О Нас</a></div>
            <div><a href="#services">Цены</a></div>
            <div><a href="#portfolio">Портфолио</a></div>
            <div><a href="#">Контакты</a></div>
        </div>
    </div>
  </div>
<div class="logo_wrapper">  
  <div class="main">
        <div class="logo">
            <img src="img/logo.png" />
            <p><span>мир</span> ваших возможностей</p>
        </div>
  </div>
</div>
	 <?php include("blocks/about.php"); ?> 
	 <?php include("blocks/services.php"); ?>
     <?php include("blocks/portfolio.php"); ?>
  </div>
</body>
</html>
<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();

$APPLICATION->AddHeadScript('https://api-maps.yandex.ru/2.1/?lang=ru_RU');
?>
<!DOCTYPE html>
<html>
	<head>
		<?$APPLICATION->ShowHead();?>
		<title><?$APPLICATION->ShowTitle();?></title>

		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
		<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" /> 
		<link href="https://fonts.googleapis.com/css?family=Montserrat:700|Noto+Sans:400,700|Roboto:400,500,700&display=swap&subset=cyrillic" rel="stylesheet">
		<link rel="stylesheet" href="/local/templates/aso/js/slick/slick-theme.css">
		<link rel="stylesheet" href="/local/templates/aso/js/slick/slick.css">
		<link rel="stylesheet" href="/local/templates/aso/css/style.css">

		<link rel="stylesheet" href="/local/templates/aso/css/modals.css">
		<link rel="stylesheet" href="/local/templates/aso/js/UItoTop-jQuery-Plugin/css/ui.totop.css" />
		<link rel="stylesheet" href="/local/templates/aso/css/lightbox.min.css">
		
		
	</head>


	

	<body>
	<div id="panel">
		<?$APPLICATION->ShowPanel();?>
	</div>

	<header>
		<div class="header__top-panel">
			<div class="wrapper flexbox">
				<div class="header__top-panel--info">
					<a href="tel:+73812591555" class="phone">+7 (3812) 59-15-55</a>
					<a href="mailto:aco.55@mail.ru" class="email">aco.55@mail.ru</a>
				</div>
				<div class="header__top-panel--callback btn">Заказать обратный звонок</div>
			</div>
		</div>
		<div class="header__nav">
			<div class="wrapper flexbox">
				<a href="/" class="logo"><div class="logo_txt">Академия Современного Образования</div></a>
				<nav>
					<ul class="flexbox">
						<li><a href="/svedenia/">Сведения об образовательной организации</a></li>
						<li><a href="/#services" class="services--link" onclick="smoothToBlock()">Обучение</a></li>
						<li><a href="/#advantages" class="advantages--link" onclick="smoothToBlock()">Преимущества</a></li>
						<li><a href="/#promo" class="promo--link" onclick="smoothToBlock()">Акции</a></li>
						<li><a href="/#reviews" class="reviews--link" onclick="smoothToBlock()">Отзывы</a></li>
						<li><a href="/#contacts" class="contacts--link" onclick="smoothToBlock()">Контакты</a></li>
					</ul>
				</nav>
				<div class="small_menu_btn btn">Меню</div>
				<div class="small_menu">
					<ul>
						<li><a href="/svedenia/">Сведения об образовательной организации</a></li>
						<li><a href="/#services" class="services--link" onclick="smoothToBlock()">Обучение</a></li>
						<li><a href="/#advantages" class="advantages--link" onclick="smoothToBlock()">Преимущества</a></li>
						<li><a href="/#promo" class="promo--link" onclick="smoothToBlock()">Акции</a></li>
						<li><a href="/#reviews" class="reviews--link" onclick="smoothToBlock()">Отзывы</a></li>
						<li><a href="/#contacts" class="contacts--link" onclick="smoothToBlock()">Контакты</a></li>
					</ul>
					<div class="small_menu_btn--close"></div>
				</div>
			</div>
		</div>
	</header>
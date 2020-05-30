<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>


<footer>
	<div class="footer--top">
		<ul class="footer__menu">
			<li><a href="" class="services--link">Обучение</a></li>
			<li><a href="#">О нас</a></li>
			<li><a href="" class="advantages--link">Преимущества</a></li>
			<li><a href="" class="promo--link">Акции</a></li>
			<li><a href="" class="reviews--link">Отзывы</a></li>
			<li><a href="" class="request--link">Заявка</a></li>
			<li><a href="" class="contacts--link">Контакты</a></li>
		</ul>
		<ul class="footer__info">
			<li><a href="" class="main_slider--link">Сведения об организации</a></li>
			<li><a href="tel:+73812591555">+7 (3812) 59-15-55</a></li>
			<li><a href="mailto:aco.55@mail.ru">aco.55@mail.ru</a></li>
		</ul>
		<div class="distance">
			<a href="/">Академия современного образования</a>
			<a href="#" class="btn">ДИСТАНЦИОННОЕ ОБуЧЕНИЕ</a>
		</div>
		<div class="social">
			<div class="tw"></div>
			<div class="inst"></div>
			<div class="vk"></div>
			<div class="fb"></div>
			<div class="yt"></div>
		</div>
	</div>
	<div class="footer--bottom">
		<a href="/policy/" target="_blank">Политика конфиденциальности</a>
		<a href="https://asmart-group.ru/" target="_blank" class="asmart">
			Cайт создан в IT-company <span>ASMART</span></a>
		</div>
	</footer>




<?
$APPLICATION->IncludeFile(
    SITE_DIR . "/include/modal_service.php",
    Array(),
    Array(
        "MODE" => "html")
);
?>

<?
$APPLICATION->IncludeFile(
    SITE_DIR . "/include/modal_form.php",
    Array(),
    Array(
        "MODE" => "html")
);
?>

<?
$APPLICATION->IncludeFile(
    SITE_DIR . "/include/modal_success.php",
    Array(),
    Array(
        "MODE" => "html")
);
?>
<?
$APPLICATION->IncludeFile(
    SITE_DIR . "/include/modal-svedenia.php",
    Array(),
    Array(
        "MODE" => "html")
);
?>


<script src="/local/templates/aso/js/jquery-3.4.1.min.js"></script>
<script src="/local/templates/aso/js/slick/slick.min.js"></script>
<script src="/local/templates/aso/js/script.js"></script>

<script src="/local/templates/aso/js/jquery.maskedinput.min.js"></script>

<script src="/local/templates/aso/js/UItoTop-jQuery-Plugin/js/easing.js" type="text/javascript"></script>
<script src="/local/templates/aso/js/UItoTop-jQuery-Plugin/js/jquery.ui.totop.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$().UItoTop({ easingType: 'easeOutQuart' }); 
	});
</script>
<script src="/local/templates/aso/js/lightbox.min.js"></script>
<script src="/local/templates/aso/js/modals.js"></script>


</body>
</html>
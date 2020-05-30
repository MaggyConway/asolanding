<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
	//echo "<pre>"; var_dump($arResult["DETAIL_TEXT"]); echo "</pre>";
?>

<section class="course_header">
	<h1><?=$arResult["PROPERTIES"]["TITLE"]["VALUE"]?></h1>
</section>

<div class="wrapper">
<section class="course_detail">

<? if (!empty($arResult["PROPERTIES"]["HOURS"]["VALUE"]) 
		&& !empty($arResult["PROPERTIES"]["FORM"]["VALUE"]) 
			&& !empty($arResult["PROPERTIES"]["DOC"]["VALUE"])) { ?>
	

	<div class="props">
		<div class="block">
			<p>Срок обучения</p>

			<? foreach ($arResult["PROPERTIES"]["HOURS"]["VALUE"] as $hours) { ?>
				<span><?=$hours?></span>
			<?}?>
		</div>
		<div class="block">
			<p>Форма обучения</p>

			<? foreach ($arResult["PROPERTIES"]["FORM"]["VALUE"] as $form) { ?>
				<span><?=$form?></span>
			<?}?>
		</div>
		<div class="block">
			<p>Выдаваемый документ по&nbsp;окончании обучения</p>
			<span><?=$arResult["PROPERTIES"]["DOC"]["VALUE"]?></span>
		</div>
	</div>

<?}?>




<ul>

<? if (!empty($arResult["PROPERTIES"]["REQUEST_FILE"]["VALUE"])) {

	$REQUEST_FILE = CFile::GetPath($arResult["PROPERTIES"]["REQUEST_FILE"]["VALUE"]);?>

	<li><a href="<?=$REQUEST_FILE?>" target="_blank">Форма заявки на обучение</a></li>
	
<?}?>


<? if (!empty($arResult["PROPERTIES"]["DOGOVOR1"]["VALUE"])) {

	$DOGOVOR1 = CFile::GetPath($arResult["PROPERTIES"]["DOGOVOR1"]["VALUE"]);?>

	<li><a href="<?=$DOGOVOR1?>" target="_blank">Форма договора на обучение (юр.лицо)</a></li>

<?}?>



<? if (!empty($arResult["PROPERTIES"]["DOGOVOR2"]["VALUE"])) {

	$DOGOVOR2 = CFile::GetPath($arResult["PROPERTIES"]["DOGOVOR2"]["VALUE"]);?>

	<li><a href="<?=$DOGOVOR2?>" target="_blank">Форма договора на обучение (физ.лицо)</a></li>

<?}?>

</ul>








<div class="content">
	<?=$arResult["DETAIL_TEXT"]?>
</div>

</section>
</div>




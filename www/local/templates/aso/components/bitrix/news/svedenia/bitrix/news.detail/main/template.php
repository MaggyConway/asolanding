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
$this->setFrameMode(true); ?>

<section class="links_header">
	<h1><?=$arResult["NAME"]?></h1>
</section>

<div class="wrapper sved_detail_page">

<? //echo "<pre>"; var_dump($arResult["PROPERTIES"]["SVG_IMG"]["VALUE"]); echo "</pre>"; ?>

<? if (!empty($arResult["PROPERTIES"]["SVG_IMG"]["VALUE"])) { 
	$img =  CFile::GetPath($arResult["PROPERTIES"]["SVG_IMG"]["VALUE"]);
	//echo "<pre>"; var_dump($img); echo "</pre>";
?>

	<div class="image" style="background: url(<?=$img?>) no-repeat center center;"></div>

<?}


if (!empty($arResult["DETAIL_TEXT"])) { ?>

	<div class="sved_detail_txt"><?=$arResult["DETAIL_TEXT"]?></div>

<?}


if (!empty($arResult["PROPERTIES"]["FILES"]["VALUE"])) { ?>

	<ul class="files">

	<? foreach ($arResult["PROPERTIES"]["FILES"]["VALUE"] as $file) {

		$file_path =  CFile::GetPath($file); 

		$file_info = CFile::GetByID($file); 
		$file_name = explode('.', $file_info->arResult[0]["ORIGINAL_NAME"])[0]; ?>
	
		<li><a href="<?=$file_path?>" target="_blank"><?=$file_name?></a></li>

	<? } ?>
	</ul>
<? } ?>

</div>
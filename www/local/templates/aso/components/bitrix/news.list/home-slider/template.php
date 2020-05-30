<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?> 

<div id="main_slider"> 	 

	<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>

	<div class="main_slider__item" 
			style="background: url('<?echo $arItem["PREVIEW_PICTURE"]["SRC"];?>') no-repeat center center;">

		<div class="inner-wrap"></div>

		<div class="inner__content">
			<h1><?echo $arItem["NAME"]?></h1>
			<p><?echo $arItem["PREVIEW_TEXT"];?></p>
			<a href="<?echo $arItem["PROPERTIES"]["LINK"]['VALUE'];?>" class="btn"><?echo $arItem["PROPERTIES"]["NAME_BTN"]['VALUE'];?></a>
		</div>
	</div>
<?endforeach;?>
</div>
<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?> 
<!-- <a name="reviews--anchor"></a> -->
<section id="reviews"><div class="wrapper">
	<h2>Отзывы</h2>
	
<ul id="reviews__slider">
	<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>

		<li class="reviews__slider__item">
			<div class="ava" style="background: url('<?echo $arItem["PREVIEW_PICTURE"]["SRC"];?>');"></div>

			<div class="name">
				 <?echo $arItem["NAME"]?>
				<p class="label">
					 <?echo $arItem["PROPERTIES"]["COURSE"]['VALUE'];?>
				</p>
			</div>

			<p><?echo $arItem["PREVIEW_TEXT"];?></p>

		</li>

	<?endforeach;?>
</ul>

</div></section>
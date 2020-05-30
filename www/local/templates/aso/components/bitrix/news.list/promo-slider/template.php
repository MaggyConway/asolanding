<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?> 
<section id="promo"><!-- <a name="promo--anchor"></a> --><div class="wrapper">
	
<div class="promo__block">

	<div class="receive">
		<h2>Акции</h2>
		<div class="btn">
			 ПОЛУчиТь СКИДкУ
		</div>
	</div>
			
<ul id="promo__slider">
	<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>

		<li class="promo__slider__item">

			<div class="content">
				<div class="title">
					<?echo $arItem["NAME"]?>
				</div>
				<p>
					<?echo $arItem["PREVIEW_TEXT"];?>
				</p>
			</div>

		</li>

	<?endforeach;?>
</ul>

</div></section>
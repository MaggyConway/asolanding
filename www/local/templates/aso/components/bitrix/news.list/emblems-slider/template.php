<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?> 
<a name="reviews--anchor"></a>
<section class="emblems">

	<div class="wrapper">
		
		<ul id="emblems__slider">
			<?foreach($arResult["ITEMS"] as $arItem):?>
			<?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>

			<li class="emblems__item">

				<div class="img__wrap">
					<img alt="img" src="<?echo $arItem["PREVIEW_PICTURE"]["SRC"];?>">
				</div>
				<a href="<?echo $arItem["PROPERTIES"]["LINK"]['VALUE'];?>">
					<?echo $arItem["NAME"]?>
				</a>

			</li>

			<?endforeach;?>
		</ul>

	</div>

</section>
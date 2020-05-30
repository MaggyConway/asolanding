<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?> 


<div class="wrapper"><!-- <a name="services--anchor"></a>  -->
<section id="services"> 	 
<ul>
	<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

	?>

	<li class="services__item"  data-content="<?=htmlspecialchars ($arItem["DETAIL_TEXT"]); ?>">

		<img alt="preview_img" src="<?echo $arItem["PREVIEW_PICTURE"]["SRC"];?>">

		<div class="services__item__label">
			 <?echo $arItem["PROPERTIES"]["LABEL"]['VALUE'];?>
		</div>

		<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="services__item__title"><?echo $arItem["NAME"]?></a>

		<div class="services__item__txt">
			 <?echo $arItem["PREVIEW_TEXT"];?>
		</div>

		<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="services__item__btn-arrow"></a>

	</li>

<?endforeach;?>
</ul>
<a href="" class="btn view_all">ВСЕ КУРСЫ</a>
</section>
</div>
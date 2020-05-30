<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?> 

<section class="license"><div class="wrapper"> 
	<h2>Сертификаты и лицензии</h2>

	<div id="license__slider">
		<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>

			<div class="license__slider__item">
				<a href="<?echo $arItem["PREVIEW_PICTURE"]["SRC"];?>" data-lightbox="image-1" >
				<img src="<?echo $arItem["PREVIEW_PICTURE"]["SRC"];?>" alt="preview_img">
			</a>
			</div>
		<?endforeach;?>
	</div>

	<?php  /* <div id="modal-license-container">
	    <div class="modal--background"></div>
	    <div class="modal">
	        <img src="<?echo $arItem["PREVIEW_PICTURE"]["SRC"];?>" alt="preview_img">
	        <svg class="modal--svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none"><rect x="0" y="0" fill="none" rx="3" ry="3"></rect>
	        </svg>
	        <span class="modal-close"></span>
	    </div>
	</div> */?>

				
</div></section>
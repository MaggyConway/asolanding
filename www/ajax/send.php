<?
include($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");


if(isset($_POST)  && !empty($_POST)){

	$event = $_POST['event'];
	if($event == 'REQUEST'){

		$USER_NAME= $_POST['name'];
		$USER_PHONE= $_POST['phone'];
		$fields = array(
			'USER_NAME' => $USER_NAME,
			'USER_PHONE' => $USER_PHONE,
		);
	}
	if($event){
		CEvent::Send($event, 's1', $fields , 'N', '','' );
	}
	echo true;
} else {
	LocalRedirect("404.php", " 404 Страница не найдена");
}?>
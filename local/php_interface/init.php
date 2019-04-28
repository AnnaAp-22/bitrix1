<?php
define("LOG_FILENAME", $_SERVER["DOCUMENT_ROOT"]."/log.txt");

AddEventHandler("main", "OnBeforeUserRegister", Array("CUserMy", "OnBeforeUserRegisterHandler"));
class CUserMy
{
	function OnBeforeUserRegisterHandler(&$arFields)
	{
		$arFields["LOGIN"] = $arFields["EMAIL"];
		$arFields["CONFIRM_PASSWORD"] = $arFields["PASSWORD"];
	}
}
?>
<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Новая страница");

?><?$APPLICATION->IncludeComponent(
	"bitrix:search.form",
	"search_form",
	Array(
		"PAGE" => "#SITE_DIR#search/index.php",
		"USE_SUGGEST" => "N"
	)
);?><br>
 <br>
 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => ""
	)
);?><br>
 <br>
new<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
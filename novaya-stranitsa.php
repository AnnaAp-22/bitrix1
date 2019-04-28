<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Новая страница");

?><?$APPLICATION->IncludeComponent("bitrix:system.auth.form", "auth", Array(
	"FORGOT_PASSWORD_URL" => "/user/",	// Страница забытого пароля
		"PROFILE_URL" => "/user/profile.php",	// Страница профиля
		"REGISTER_URL" => "/user/registrahion.php",	// Страница регистрации
		"SHOW_ERRORS" => "Y",	// Показывать ошибки
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?><br>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>



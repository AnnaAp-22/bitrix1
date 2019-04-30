<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 30.04.2019
 * Time: 17:37
 */

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

global $USER;
$USER->Authorize(1);

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");
?>
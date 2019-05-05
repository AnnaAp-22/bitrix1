<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
global $APPLICATION;
$aMenuLinksExt=$APPLICATION->IncludeComponent("bitrix:menu.sections", ""
//    , array(
//    "IS_SEF" => "Y",
//    "SEF_BASE_URL" => "/catalog/",
//    "SECTION_PAGE_URL" => "#SECTION_ID#/",
//    "DETAIL_PAGE_URL" => "#SECTION_ID#/#ELEMENT_CODE#.php",
//    "IBLOCK_TYPE" => "yml_import",
//    "IBLOCK_ID" => "30",
//    "DEPTH_LEVEL" => "1",
//    "CACHE_TYPE" => "A",
//    "CACHE_TIME" => "36000000"
//),
 ,Array(
     "CACHE_TIME" => "36000000",
     "CACHE_TYPE" => "A",
     "DEPTH_LEVEL" => "1",
     "IBLOCK_ID" => "1",
     "IBLOCK_TYPE" => "catalog",
     "SECTION_PAGE_URL" => "#SECTION_ID#/",

     "IS_SEF" => "N",
     "SECTION_URL" => ""
 )
//    , false
);
$aMenuLinks = array_merge($aMenuLinks, $aMenuLinksExt);
?>

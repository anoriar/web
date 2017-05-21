<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Feedback");
$APPLICATION->SetTitle("Feedback");
?><?$APPLICATION->IncludeComponent(
	"bitrix:iblock.element.add.form",
	"feedback",
	Array(
		"COMPONENT_TEMPLATE" => ".default",
		"CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",
		"CUSTOM_TITLE_DATE_ACTIVE_TO" => "",
		"CUSTOM_TITLE_DETAIL_PICTURE" => "",
		"CUSTOM_TITLE_DETAIL_TEXT" => "",
		"CUSTOM_TITLE_IBLOCK_SECTION" => "",
		"CUSTOM_TITLE_NAME" => "Имя",
		"CUSTOM_TITLE_PREVIEW_PICTURE" => "",
		"CUSTOM_TITLE_PREVIEW_TEXT" => "",
		"CUSTOM_TITLE_TAGS" => "",
		"DEFAULT_INPUT_SIZE" => "30",
		"DETAIL_TEXT_USE_HTML_EDITOR" => "N",
		"ELEMENT_ASSOC" => "CREATED_BY",
		"GROUPS" => array(0=>"2",),
		"IBLOCK_ID" => "3",
		"IBLOCK_TYPE" => "users",
		"LEVEL_LAST" => "Y",
		"LIST_URL" => "",
		"MAX_FILE_SIZE" => "0",
		"MAX_LEVELS" => "100000",
		"MAX_USER_ENTRIES" => "100000",
		"PREVIEW_TEXT_USE_HTML_EDITOR" => "N",
		"PROPERTY_CODES" => array(0=>"2",1=>"3",2=>"NAME",),
		"PROPERTY_CODES_REQUIRED" => array(0=>"2",1=>"3",2=>"NAME",),
		"RESIZE_IMAGES" => "N",
		"SEF_MODE" => "N",
		"STATUS" => "ANY",
		"STATUS_NEW" => "NEW",
		"USER_MESSAGE_ADD" => "",
		"USER_MESSAGE_EDIT" => "Ваше сообщение отправлено",
		"USE_CAPTCHA" => "N"
	)
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
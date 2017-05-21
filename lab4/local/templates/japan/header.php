<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!DOCTYPE html>

<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Japan</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<?$APPLICATION->ShowHead();?>
	
	
	<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/styles.css" />

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
 
	</head>

	<body>
	<div id="leaves-left"></div>
	<div id="leaves-right"></div>
	<div id="panel"><?$APPLICATION->ShowPanel();?></div>
	

		<header>
	     	<img src="/bitrix/templates/japan/banner.jpg"/>
	    </header>


	<div id="sub-header">
			<?$APPLICATION->IncludeComponent(
				"bitrix:menu", 
				"personal_tab", 

				Array(
					"ROOT_MENU_TYPE"	=>	"top",
					"MAX_LEVEL"	=>	"1",
					"USE_EXT"	=>	"N"
				)
			);?>
		</div>

	<section>
		
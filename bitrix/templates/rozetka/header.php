<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<!DOCTYPE html>
<html>
	<head>
		<?
			$APPLICATION->ShowHead();
			use Bitrix\Main\Page\Asset;
			Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/style.css');
		?>
		<title><?$APPLICATION->ShowTitle();?></title>
		<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" /> 	
	</head>
	<body>
		<div id="panel">
			<?$APPLICATION->ShowPanel();?>
		</div>

		<div class="rootcontainer">
    <div class="tagline">Электрика свет</div>
    <div class="logo_header_container">
      <svg class="logo_header">
        <use xlink:href="#rozetkalogo"></use>
      </svg>
    </div>
    
    <div class="catalog_header">
      <div>Каталог</div>
    </div>
    <div class="contacts_header">3</div>
  

  </div>
	
						
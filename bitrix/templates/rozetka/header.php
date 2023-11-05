<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <?
    use Bitrix\Main\Page\Asset;
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/style.css');
    $APPLICATION->ShowHead();
    $APPLICATION->ShowPanel();
  ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title><?$APPLICATION->ShowTitle()?></title>
</head>
<body>
  <div class="rootcontainer">
    <span class="tagline">Электрика свет</span>
    <div class="logo_header">
      <svg class="icon">
        <use xlink:href="#rozetkalogo"></use>
      </svg>
    </div>
    
    <div class="catalog_header">2</div>
    <div class="contacts_header">3</div>
  

  </div>

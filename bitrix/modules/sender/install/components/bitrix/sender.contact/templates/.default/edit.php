<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/** @var CMain $APPLICATION*/
/** @var array $arResult*/
/** @var array $arParams*/

global $APPLICATION;
$componentParameters = array(
	'ID' => $arResult['ID'],
	'PATH_TO_LIST' => $arResult['PATH_TO_LIST'] ?? '',
	'PATH_TO_ADD' => $arResult['PATH_TO_ADD'] ?? '',
	'PATH_TO_EDIT' => $arResult['PATH_TO_EDIT'] ?? '',
	'SHOW_SETS' => $arParams['SHOW_SETS'] ?? '',
	'SET_TITLE' => 'Y',
);
if (isset($_REQUEST['IFRAME']) && $_REQUEST['IFRAME'] == 'Y')
{
	$APPLICATION->IncludeComponent(
		"bitrix:sender.pageslider.wrapper",
		"",
		array(
			'POPUP_COMPONENT_NAME' => "bitrix:sender.contact.edit",
			"POPUP_COMPONENT_TEMPLATE_NAME" => "",
			"POPUP_COMPONENT_PARAMS" => $componentParameters,
		)
	);
}
else
{
	$APPLICATION->IncludeComponent(
		"bitrix:sender.contact.edit",
		"",
		$componentParameters
	);
}
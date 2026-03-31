<?php
/**
 * Aspro:Max module thematics
 * @copyright 2021 Aspro
 */

IncludeModuleLangFile(__FILE__);
$moduleClass = 'CAllcorp3';

// initialize module parametrs list and default values
$moduleClass::$arThematicsList = array(
	'UNIVERSAL' => array(
		'CODE' => 'UNIVERSAL',
		'TITLE' => GetMessage('THEMATIC_UNIVERSAL_TITLE'),
		'DESCRIPTION' => GetMessage('THEMATIC_UNIVERSAL_DESCRIPTION'),
		'PREVIEW_PICTURE' => '/bitrix/images/aspro.allcorp3/themes/thematic_preview_uni.png',
		'URL' => 'https://allcorp3-demo.ru/',
		'OPTIONS' => array(
		),
		'PRESETS' => array(
			'DEFAULT' => 894,
			'LIST' => array(
				0 => 894,
				1 => 874,
				2 => 597,
				3 => 294,
				4 => 264,
				5 => 444,
				6 => 241,
				7 => 498,
			),
		),
	),
	'ZAVOD' => array(
		'CODE' => 'ZAVOD',
		'TITLE' => GetMessage('THEMATIC_ZAVOD_TITLE'),
		'DESCRIPTION' => GetMessage('THEMATIC_ZAVOD_DESCRIPTION'),
		'PREVIEW_PICTURE' => '/bitrix/images/aspro.allcorp3/themes/thematic_preview_prom.png',
		'URL' => 'https://zavod.allcorp3-demo.ru/',
		'OPTIONS' => array(
		),
		'PRESETS' => array(
			'DEFAULT' => 188,
			'LIST' => array(
				0 => 188,
				1 => 311,
				2 => 217,
			),
		),
	),
);
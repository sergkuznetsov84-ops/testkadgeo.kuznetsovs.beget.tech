<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

//options from TSolution\Functions::showBlockHtml
$arOptions = $arConfig['PARAMS'];
?>
<div class="video-block<?=$arOptions['ADDITIONAL_CLASS'];?>">
	<a class="video-block__play video-block__play--circle various video_link image dark-color video-block__play--sm" 
		href="<?=$arOptions['URL'];?>" 
		title="<?=$arOptions['TITLE'];?>"
	></a>
</div>
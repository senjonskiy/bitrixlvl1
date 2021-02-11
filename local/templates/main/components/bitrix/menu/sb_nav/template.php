<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php
	$arOutput = array();
	$k = 0;
	$previousElement = null;
	foreach ($arResult as $key => $arItem){
		if ($previousElement && $previousElement['DEPTH_LEVEL'] > $arItem['DEPTH_LEVEL'])
			$k++;

		if ($arItem['IS_PARENT']){
			$arOutput[$k] = $arItem;
		} else {
			$arOutput[$k]['SUB_ITEMS'][] = $arItem;
		}

		$previousElement = $arItem;

	}
	//echo '<div><pre>';
	//print_r($arOutput);
	//echo '</div></pre>';
?>

<?if (!empty($arResult)):?>

<ul>
<?
$previousLevel = 0;
foreach($arResult as $arItem):
?>
	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>

	<?if ($arItem["IS_PARENT"]):?>
			<li<?if($arItem["CHILD_SELECTED"] !== true):?> class="close"<?endif?>>
				<span class="sb_showchild"></span>
				<a href="<?=$arItem["LINK"]?>"><span><?=$arItem["TEXT"]?></span></a>
				<ul>
	<?else:?>

		<?if ($arItem["PERMISSION"] > "D"):?>
				<li>
					<!-- <div class="page"></div> -->
					<a href="<?=$arItem["LINK"]?>"><span><?=$arItem["TEXT"]?></span></a>
				</li>
		<?endif?>

	<?endif?>

	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>

<?endforeach?>

<?if ($previousLevel > 1)://close last item tags?>
	<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
<?endif?>

</ul>

<?endif?>
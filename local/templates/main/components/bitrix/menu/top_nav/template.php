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
	//echo '<pre>';
	//print_r($arOutput);
	//echo '</pre>';
?> 

<ul>
	<li><a href="#" class="menu-img-fon" style="background-image: url('/local/templates/main/components/bitrix/menu/top_nav/images/nv_home.png');"><span></span></a></li>
	<?foreach($arOutput as $key => $arItem):?>
		<li>
			<a href="<?=$arItem['LINK']?>"><span><?=$arItem['TEXT']?></span></a>
			<?if($arItem["SUB_ITEMS"]):?>
				<ul>
				<?foreach ($arItem["SUB_ITEMS"] as $arSubItem):?>
					<li><a href="<?=$arSubItem['LINK']?>"><span><?=$arSubItem['TEXT']?></span></a></li>
				<?endforeach;?>
				</ul>
			<?endif;?>
		</li>
	<?endforeach;?>
	
	<div class="clearboth"></div>
</ul>
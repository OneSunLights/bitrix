<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>


<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
	<nav class="link-effect-7" id="link-effect-7">
		<ul class="nav navbar-nav">
			<? foreach($arResult as $arItem):
					if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
						continue;
			 ?>
			 <? if($arItem["SELECTED"]): ?>
				<li class="active act"><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
			<? else: ?>
				<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
			<? endif; ?>
			<? endforeach; ?>
		</ul>
	</nav>
</div>
<?endif?>
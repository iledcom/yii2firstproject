<?php

foreach ($list as $item) { ?>
	<h1><a href="<?=Yii::$app->urlManager->createUrl(['test/view', 'id' => $item['id']]);?>">
		<?=$item['title'];?></a>
	</h1>
	<p><?=$item['content'];?></p>
	<hr>
<?php } ?>

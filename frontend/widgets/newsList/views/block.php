<?php 
	foreach ($list as $item) { ?>
    <h3><a href="<?=Yii::$app->urlManager->createUrl(['test/view', 'id' => $item['id']]);?>">
        <?=$item['title'];?></a>
    </h3>
    <p><?=$item['content'];?></p>
    <hr>
<?php } ?>
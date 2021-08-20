<?php
	use yii\helpers\Url;
	// Позволяет использовать обращение к методу класса в болеее короткой форме
	// Например Yii::$app->urlManager->createUrl(['test/index']); , как Url::to(['test/index']);
?>

<h1><?=$item['title'];?></h1>
<p><?=$item['content'];?></p>

<a href="<?=Url::to(['test/index'])?>" class="btn btn-info">Back</a>
<?php

use yii\helpers\Html;

?>

<?php foreach ($comments as $comment) {
	echo Html::tag('h5', Html::encode($comment['author']));
	echo Html::tag('p', Html::encode($comment['text']));
	echo '<hr>';
}
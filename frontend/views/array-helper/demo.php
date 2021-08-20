<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;

$email = ArrayHelper::getColumn($employees, 'email');

echo implode(', ', $email);

$listData = ArrayHelper::map($employees, 'id', 'email');

echo '<hr>';

echo Html::dropDownList('emails', [], $listData);
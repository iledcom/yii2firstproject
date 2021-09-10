<?php
/* @var $this yii\web\View */
/* @var $model frontend\models\forms\SearchForm */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\helpers\HighlightHelper;
?>
<div class="row">
    <div class="col-md-12">

        <?php $form = ActiveForm::begin(); ?>

        <?php echo $form->field($model, 'keyword'); ?>

        <?php echo Html::submitButton('Search', ['class' => 'btn btn-primary']); ?>

        <?php ActiveForm::end(); ?>

    </div>
</div>
<hr>

<div class="row">
    <div class="col-md-12">
        <?php if($results):?>
            <?php foreach ($results as $item) { ?>
                <?php echo $item['title']; ?>
                <hr>
                <?php echo HighlightHelper::process($model->keyword, $item['content']); ?>
                <hr>
            <?php } ?>
        <?php endif; ?>
    </div>
</div>
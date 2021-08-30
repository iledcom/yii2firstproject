<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

?>

<?php $form = ActiveForm::begin(); ?>
	
	<?php echo $form->field($book, 'name'); ?>

	<?php echo $form->field($book, 'isbn'); ?>
	<br>
	<br>
	<br>
	<br>
	<br>
	<?php echo $form->field($book, 'date_published')->widget(
		DatePicker::classname(), [
    'options' => ['placeholder' => 'Enter birth date ...'],
    'pluginOptions' => [
        'autoclose'=>true,
        'format' => 'yyyy-mm-dd',
    ]
]); ?>

	<?php echo $form->field($book, 'publisher_id')->dropDownList($publishers); ?>

	<?php echo Html::submitButton('Save', [
		'class' => 'btn btn-primary',
	]); ?>

<?php ActiveForm::end(); ?>
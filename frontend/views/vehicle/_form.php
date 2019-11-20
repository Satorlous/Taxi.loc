<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Vehicle */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vehicle-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true])->label('Название') ?>

    <?= $form->field($model, 'capacity')->textInput()->label('Вместимость') ?>

    <?= $form->field($model, 'type')->dropDownList($types, ['prompt' => 'Выберите тип'])->label('Тип транспорта') ?>

    <?= $form->field($model, 'line_id')->dropDownList([])->label('Маршрут') ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

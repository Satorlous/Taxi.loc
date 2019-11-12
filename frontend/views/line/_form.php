<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Line */
/* @var $form yii\widgets\ActiveForm */
?>
    <div class="line-form">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'code')->textInput(['maxlength' => true])->label('Название') ?>

        <?= $form->field($model, 'start_time_operation')->textInput()->label('Время начала работы') ?>

        <?= $form->field($model, 'end_time_operation')->textInput()->label('Время конца работы') ?>

        <?= $form->field($model, 'type')->textInput(['maxlength' => true])->label('Тип транспорта') ?>

        <?= $form->field($model, 'map')->textInput(['maxlength' => true])->label('Карта маршрута') ?>

        <div class="form-group">
            <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>


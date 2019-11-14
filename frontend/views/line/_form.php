<?php

use Symfony\Component\VarDumper\VarDumper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Line */
/* @var $form yii\widgets\ActiveForm */
?>
<?php
    $time_arr = [];
    for ($i = 0; $i <=24; $i++)
    {
        $i<10 ? $time = '0' : $time = '';
        $time .= $i.':00:00';
        $time_arr[$time] = $time;
    }
    VarDumper::dump($avts);
?>
    <div class="line-form">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'code')->textInput(['maxlength' => true])->label('Название') ?>

        <?= $form->field($model, 'start_time_operation')->dropDownList($time_arr)->label('Время начала работы') ?>

        <?= $form->field($model, 'end_time_operation')->dropDownList($time_arr)->label('Время конца работы') ?>

        <?= $form->field($model, 'type')->dropDownList($avts)->label('Тип транспорта') ?>

        <?= $form->field($model, 'map')->textInput(['maxlength' => true])->label('Карта маршрута') ?>

        <div class="form-group">
            <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>


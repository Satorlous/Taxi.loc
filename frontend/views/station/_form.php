<?php

use frontend\models\Line;
use frontend\models\Station;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Station */
/* @var $form yii\widgets\ActiveForm */

$alines = [];
foreach(Line::find()->all() as $line)
    if(count($line->stations) < 5)
        $alines[] = $line;
?>

<div class="station-form">


    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true])->label('Название') ?>

    <?= $form->field($model, 'line_id')->dropDownList(
            ArrayHelper::map($alines, 'id', 'code'),
            [
                'prompt' => 'Выберите маршрут',
            ]
    )->label('Маршрут') ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

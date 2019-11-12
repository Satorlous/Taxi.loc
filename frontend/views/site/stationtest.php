<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Station */
/* @var $form ActiveForm */
?>
<div class="row">
    <div class="col-9">
        <?php $form = ActiveForm::begin(); ?>
        <?= $form->field($model, 'name') ?>
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
    <div class="col-3">
        <div id="sidebar">
            <div class="portlet" >
                <div class="portlet-decoration">
                    <div class="portlet-title">Редактирование</div>
                </div>
                <div class="portlet-content">
                    <ul class="operations" >
                        <li><a href="#list">Список остановочных пунктов</a></li>
                        <li><a href="#manage">Управлять остановочными пунктами</a></li>
                    </ul></div>
            </div>
        </div>
    </div>
</div>

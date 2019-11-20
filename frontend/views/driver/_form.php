<?php

use frontend\models\Vehicle;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\DriverForm */
/* @var $form yii\widgets\ActiveForm */

$vehicles = Vehicle::find()->all();
?>

<div class="driver-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true])->label('ФИО') ?>

    <div class="form-group field-driver-birth_date required">
        <label for="driver-birth_date">Дата рождения</label>

        <input type="date" id="driver-birth_date" name="Driver[birth_date]" class="form-control"
               value="2000-01-01"
               min="1900-01-01" max="2019-12-31">
    </div>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true])->label('E-Mail') ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true])->label('Телефон') ?>

    <?= $form->field($model, 'vehicle_id')->dropDownList(
        ArrayHelper::map($vehicles, 'id', 'name'), ['prompt' => 'Выберите ТС'])->label('Транспортное средство')
    ?>

    <?= $form->field($model, 'avatar')->fileInput(['accept' => 'image/*'])->label('Аватара') ?>



    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

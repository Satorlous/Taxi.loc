<?
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\jui\Datepicker;

?>
<div class="row">
    <div class="col-9">
        <div id="content">
            <p><i>Поля отмеченные<span class="required-label"></span> обязательны к заполнению.</i></p>
            <div class="form">
                <?php $form = ActiveForm::begin(['id' => 'form-signup']);?>
                    <?= $form->field($model, 'name')->textInput()->label('ФИО', ['class' => 'required-label']) ?>
                    <?= $form->field($model, 'username')->textInput()->label('Логин', ['class' => 'required-label']) ?>
                    <?= $form->field($model, 'email')->label('E-Mail', ['class' => 'required-label']) ?>
                    <?= $form->field($model, 'password')->passwordInput()->label('Пароль', ['class' => 'required-label']) ?>
                    <div class="form-group field-signupform-birthdate required">
                        <label for="signupform-birthdate" class="required-label">Дата рождения</label>

                        <input type="date" id="signupform-birthdate" name="SignupForm[birth_date]" class="form-control"
                               value="2000-01-01"
                               min="1900-01-01" max="2019-12-31">
                    </div>
                    <?= $form->field($model, 'gender')->dropDownList(['M' => 'М', 'F' => 'Ж'])->label('Пол', ['class' => 'required-label']); ?>
                    <div class="form-group">
                        <?= Html::submitButton('Зарегистрироваться', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                    </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
    <div class="col-3">
        <div id="sidebar">
            <div class="portlet" >
                <div class="portlet-decoration">
                    <div class="portlet-title">Редактирование</div>
                </div>
                <div class="portlet-content">
                    <ul class="operations" >
                        <li><a href="#list">Список пользователей</a></li>
                        <li><a href="#manage">Управлять списком</a></li>
                    </ul></div>
            </div>
        </div><!-- sidebar -->
    </div>
</div>
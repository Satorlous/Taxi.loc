<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Line */

$this->title = 'Новый маршрут';
?>
<div class="line-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'avts' => $avts,
    ]) ?>

</div>

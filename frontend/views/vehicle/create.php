<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Vehicle */

$this->title = 'Новое транспортное средство';
$this->params['breadcrumbs'][] = ['label' => 'Vehicles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vehicle-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'types' => $types,
    ]) ?>

</div>

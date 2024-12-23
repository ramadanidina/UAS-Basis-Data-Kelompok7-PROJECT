<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\pengerjaan */

$this->title = 'Update Pengerjaan: ' . $model->id_Pengerjaan;
$this->params['breadcrumbs'][] = ['label' => 'Pengerjaans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_Pengerjaan, 'url' => ['view', 'id' => $model->id_Pengerjaan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pengerjaan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

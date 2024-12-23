<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\negosiasi */

$this->title = 'Update Negosiasi: ' . $model->id_Negosiasi;
$this->params['breadcrumbs'][] = ['label' => 'Negosiasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_Negosiasi, 'url' => ['view', 'id' => $model->id_Negosiasi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="negosiasi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

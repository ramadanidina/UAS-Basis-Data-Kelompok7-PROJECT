<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\karyawan */

$this->title = 'Update Karyawan: ' . $model->id_Karyawan;
$this->params['breadcrumbs'][] = ['label' => 'Karyawans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_Karyawan, 'url' => ['view', 'id' => $model->id_Karyawan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="karyawan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

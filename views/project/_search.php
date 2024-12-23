<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProjectSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="project-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_Project') ?>

    <?= $form->field($model, 'Jenis_Project') ?>

    <?= $form->field($model, 'Nama_Client') ?>

    <?= $form->field($model, 'Tgl_Masuk') ?>

    <?= $form->field($model, 'Harga') ?>

    <?php // echo $form->field($model, 'CLIENT_id_Client') ?>

    <?php // echo $form->field($model, 'KARYAWAN_id_Karyawan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

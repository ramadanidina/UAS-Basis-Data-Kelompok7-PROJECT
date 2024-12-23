<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\NegosiasiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="negosiasi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_Negosiasi') ?>

    <?= $form->field($model, 'Tgl_Menghubungi') ?>

    <?= $form->field($model, 'Media_Hubung') ?>

    <?= $form->field($model, 'CLIENT_id_Client') ?>

    <?= $form->field($model, 'KARYAWAN_id_Karyawan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

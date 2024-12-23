<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\negosiasi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="negosiasi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_Negosiasi')->textInput() ?>

    <?= $form->field($model, 'Tgl_Menghubungi')->textInput() ?>

    <?= $form->field($model, 'Media_Hubung')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CLIENT_id_Client')->textInput() ?>

    <?= $form->field($model, 'KARYAWAN_id_Karyawan')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\project */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="project-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_Project')->textInput() ?>

    <?= $form->field($model, 'Jenis_Project')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Nama_Client')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Tgl_Masuk')->textInput() ?>

    <?= $form->field($model, 'Harga')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CLIENT_id_Client')->textInput() ?>

    <?= $form->field($model, 'KARYAWAN_id_Karyawan')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\pengerjaan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pengerjaan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_Pengerjaan')->textInput() ?>

    <?= $form->field($model, 'Tgl_Mulai')->textInput() ?>

    <?= $form->field($model, 'Tgl_Selesai')->textInput() ?>

    <?= $form->field($model, 'KARYAWAN_id_Karyawan')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\client */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="client-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_Client')->textInput() ?>

    <?= $form->field($model, 'Nama_Client')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Alamat_Client')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'No_Hp_Client')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

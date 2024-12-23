<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PengerjaanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pengerjaan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_Pengerjaan') ?>

    <?= $form->field($model, 'Tgl_Mulai') ?>

    <?= $form->field($model, 'Tgl_Selesai') ?>

    <?= $form->field($model, 'KARYAWAN_id_Karyawan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

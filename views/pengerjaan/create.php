<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\pengerjaan */

$this->title = 'Create Pengerjaan';
$this->params['breadcrumbs'][] = ['label' => 'Pengerjaans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengerjaan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

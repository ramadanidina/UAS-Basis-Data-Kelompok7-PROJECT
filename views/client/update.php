<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\client */

$this->title = 'Update Client: ' . $model->id_Client;
$this->params['breadcrumbs'][] = ['label' => 'Clients', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_Client, 'url' => ['view', 'id' => $model->id_Client]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="client-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

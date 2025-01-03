<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\project */

$this->title = 'Update Project: ' . $model->id_Project;
$this->params['breadcrumbs'][] = ['label' => 'Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_Project, 'url' => ['view', 'id' => $model->id_Project]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="project-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

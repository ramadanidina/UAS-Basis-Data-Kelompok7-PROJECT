<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\NegosiasiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Negosiasis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="negosiasi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Negosiasi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_Negosiasi',
            'Tgl_Menghubungi',
            'Media_Hubung',
            'CLIENT_id_Client',
            'KARYAWAN_id_Karyawan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>

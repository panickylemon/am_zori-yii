<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DistrictSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Districts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="district-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create District', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'village_id',
            'number',
            'size',
            'price',
            'date_ready',
            'is_sold',
            'is_house',
            'image' => [
                'label' => 'Image',
                'format' => 'raw',
                'value'=> function($data) {
                    if ($data->image == "") {
                        return "";
                    }
                    return Html::img($data->thumburl,[
                        'alt'=>'фото',
                        'style' => 'width:150px;'
                    ]);
                },
            ],
            // 'updated_at',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>

<?php

use yii\helpers\Html;
use yii\helpers\Url;




/* @var $this yii\web\View */
/* @var $searchModel backend\models\DistrictSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Главная';
$this->params['breadcrumbs'][] = $this->title;

?>

  <div><?= Html::a('Участки', ['district/index']) ?></div>
  <div><?= Html::a('Отзывы', ['review/index']) ?></div>


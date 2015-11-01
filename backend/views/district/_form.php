<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Village;
use common\models\DateReadyDistrict;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model common\models\District */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="district-form">

    <?php $form = ActiveForm::begin([
        'options'=>['enctype'=>'multipart/form-data']
    ]);
    ?>

    <?= $form->field($model, 'village_id')->dropDownList(ArrayHelper::map(Village::find()->all(), 'id', 'name'), ['prompt='>'- Choose Your Permissions -']) ?>

    <?= $form->field($model, 'number')->textInput() ?>

    <?= $form->field($model, 'size')->textInput() ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'is_sold')->checkbox() ?>

    <?= $form->field($model, 'is_house')->checkbox() ?>

    <?= $form->field($model, 'date_ready')->dropDownList(ArrayHelper::map(DateReadyDistrict::find()->all(), 'id',
        'date'),
        ['prompt='>'- Choose Your Permissions -']) ?>

    <?= FileInput::widget([
        'options'=>['accept'=>'image/*'],
        'model' => $model,
        'attribute' => 'image',
        'pluginOptions' => [
            'initialPreview'=>$model->image ? [
                 Html::img($model->thumburl),
            ] : false,
            'overwriteInitial'=>true
        ]
    ]);?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

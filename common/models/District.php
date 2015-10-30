<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "district".
 *
 * @property integer $id
 * @property integer $village_id
 * @property integer $number
 * @property integer $size
 * @property integer $price
 * @property integer $is_sold
 * @property integer $is_house
 * @property string $date_ready
 * @property string $photo
 */
class District extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'district';
    }

    /**
     * @inheritdoc
     */

    public function rules()
    {
        return [
            [['village_id', 'number', 'size', 'price', 'date_ready', 'image'], 'required'],
            [['village_id', 'number', 'size', 'price', 'is_sold', 'is_house'], 'integer'],
            [['date_ready'], 'string', 'max' => 50],
            [['image'], 'file', 'extensions'=>'jpg, jpeg, gif, png'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'village_id' => 'Village ID',
            'number' => 'Number',
            'size' => 'Size',
            'price' => 'Price',
            'is_sold' => 'Is Sold',
            'is_house' => 'Is House',
            'date_ready' => 'Date Ready',
            'image' => 'Photo',
        ];
    }

    public function getImageurl()
    {
        return Yii::$app->params['frontendUrl'].'/uploads/'.$this->image;
    }
    public function getThumburl()
    {
        return Yii::$app->params['frontendUrl'].'/uploads/'.str_replace(".", "_thumb.", $this->image);
    }

    public function getThumburl2()
    {
        return Yii::$app->params['frontendUrl'].'/uploads/'.str_replace(".", "_thumb2.", $this->image);
    }

    public function getVillage()
    {
        return $this->hasOne(Village::className(), ["id" => "village_id"]);
    }

    public function getDateReadyDistrict()
    {
        return $this->hasOne(DateReadyDistrict::className(), ["id" => "date_ready"]);
    }
}

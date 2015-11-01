<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "date_ready_district".
 *
 * @property integer $id
 * @property string $date
 */
class DateReadyDistrict extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'date_ready_district';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date'], 'required'],
            [['date'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Date',
        ];
    }

    public function getDistricts()
    {
        return $this->hasMany(District::className(), ['date_ready' => 'id']);
    }
}

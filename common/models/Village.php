<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "village".
 *
 * @property integer $id
 * @property string $name
 */
class Village extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'village';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    public function getDistricts()
    {
        return $this->hasMany(District::className(), ['village_id' => 'id']);
    }

}

<?php

namespace common\models;

use Yii;


/**
 * This is the model class for table "reviews".
 *
 * @property integer $id
 * @property string $firstname
 * @property string $review
 * @property string $date
 */
class Reviews extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'reviews';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['firstname', 'review'], 'required'],
            [['review'], 'string'],
            [['firstname'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'firstname' => 'Имя',
            'review' => 'Отзыв',
            //'date' => 'Дата отзыва',
        ];
    }
}

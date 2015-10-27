<?php

namespace common\models;

use Yii;


/**
 * This is the model class for table "reviews".
 *
 * @property integer $id
 * @property string $firstname
 * @property string $middlename
 * @property string $lastname
 * @property integer $number_sector
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
            [['firstname', 'middlename', 'lastname', 'number_sector', 'review', 'date'], 'required'],
            [['number_sector'], 'integer'],
            [['review'], 'string'],
            [['date'], 'safe'],
            [['firstname', 'middlename', 'lastname'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'firstname' => 'Firstname',
            'middlename' => 'Middlename',
            'lastname' => 'Lastname',
            'number_sector' => 'Number Sector',
            'review' => 'Review',
            'date' => 'Date',
        ];
    }
}

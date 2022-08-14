<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "teacher".
 *
 * @property int $id
 * @property string $name
 * @property int $contact
 * @property string $address
 * @property string $city
 * @property string $gender
 */
class Teacher extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'teacher';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'contact', 'address', 'city', 'gender'], 'required'],
            [['contact'], 'integer'],
            [['name', 'address', 'city'], 'string', 'max' => 50],
            [['gender'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'contact' => 'Contact',
            'address' => 'Address',
            'city' => 'City',
            'gender' => 'Gender',
        ];
    }
}

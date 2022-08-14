<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property int $id
 * @property string $firstname
 * @property string $lastname
 * @property string $fathername
 * @property string $grade
 * @property string $section
 * @property int $age
 * @property int $rollno
 * @property string $contactno
 * @property string $address
 * @property string $city
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['firstname', 'lastname', 'fathername', 'grade', 'section', 'age', 'contactno', 'address', 'city'], 'required'],
            [['age'], 'integer'],
            [['firstname', 'lastname', 'fathername', 'grade', 'section', 'contactno', 'city'], 'string', 'max' => 50],
            [['address'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'firstname' => 'First name',
            'lastname' => 'Last name',
            'fathername' => 'Father name',
            'grade' => 'Grade',
            'section' => 'Section',
            'age' => 'Age',
            'contactno' => 'Contact no',
            'address' => 'Address',
            'city' => 'City',
        ];
    }
}

<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "developer".
 *
 * @property string|null $name
 * @property string|null $description
 * @property string|null $date
 * @property string|null $location
 * @property string|null $contact
 */
class Developer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'developer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date'], 'safe'],
            [['name', 'description', 'location', 'contact'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'description' => 'Description',
            'date' => 'Date',
            'location' => 'Location',
            'contact' => 'Contact',
        ];
    }
}

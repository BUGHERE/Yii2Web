<?php
/**
 * Team:XJBKF,NKU
 * coding by yanxiaoxiao 1911502
 * 20211127
 */
namespace app\models;

use Yii;

/**
 * This is the model class for table "athlete_num".
 *
 * @property string|null $num
 * @property string|null $Year
 */
class EchartAthleteNumModel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'athlete_num';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['num', 'Year'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'num' => 'Num',
            'Year' => 'Year',
        ];
    }
}

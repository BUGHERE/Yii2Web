<?php
/**
 * Team:XJBKF,NKU
 * coding by yanxiaoxiao 1911502
 * 20211127
 */
namespace app\models;

use Yii;

/**
 * This is the model class for table "china_medal_num".
 *
 * @property string|null $g
 * @property string|null $s
 * @property string|null $c
 * @property string|null $t
 */
class EchartChinaMedalNumModel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'china_medal_num';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['g', 's', 'c', 't'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'g' => 'G',
            's' => 'S',
            'c' => 'C',
            't' => 'T',
        ];
    }
}

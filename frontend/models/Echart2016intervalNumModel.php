<?php
/**
 * Team:XJBKF,NKU
 * coding by wangyijie 1911478
 * 20211127
 */
namespace app\models;

use Yii;

/**
 * This is the model class for table "2016interval_num".
 *
 * @property string|null $my_interval
 * @property string|null $my_num
 */
class Echart2016intervalNumModel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '2016interval_num';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['my_interval', 'my_num'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'my_interval' => 'My Interval',
            'my_num' => 'My Num',
        ];
    }
}

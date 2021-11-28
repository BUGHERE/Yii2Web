<?php
/**
 * Team:XJBKF,NKU
 * coding by wangyijie 1911478
 * 20211127
 */
namespace app\models;

use Yii;

/**
 * This is the model class for table "country_medal_top10".
 *
 * @property string|null $country
 * @property string|null $GoldMedal
 * @property string|null $SilverMedal
 * @property string|null $BronzeMedal
 * @property string|null $Total
 */
class EchartCountryMedalTop10Model extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'country_medal_top10';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['country', 'GoldMedal', 'SilverMedal', 'BronzeMedal', 'Total'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'country' => 'Country',
            'GoldMedal' => 'Gold Medal',
            'SilverMedal' => 'Silver Medal',
            'BronzeMedal' => 'Bronze Medal',
            'Total' => 'Total',
        ];
    }
}

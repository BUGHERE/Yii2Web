<?php
/**
 * Team:XJBKF,NKU
 * coding by zhangshichen 1911515
 * 20211127
 */
namespace app\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $news_id
 * @property string|null $news_title
 * @property int|null $news_hits
 * @property string|null $news_time
 * @property string|null $news_content
 */
class EchartNewsModel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['news_id'], 'required'],
            [['news_id', 'news_hits'], 'integer'],
            [['news_time'], 'safe'],
            [['news_title'], 'string', 'max' => 255],
            [['news_content'], 'string', 'max' => 16000],
            [['news_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'news_id' => 'News ID',
            'news_title' => 'News Title',
            'news_hits' => 'News Hits',
            'news_time' => 'News Time',
            'news_content' => 'News Content',
        ];
    }
}

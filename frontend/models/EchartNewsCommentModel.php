<?php
/**
 * Team:XJBKF,NKU
 * coding by zhangshichen 1911515
 * 20211127
 */
namespace app\models;

use Yii;

/**
 * This is the model class for table "news_comment".
 *
 * @property string|null $news_id
 * @property string|null $comment_id
 * @property string|null $comment_time
 * @property string|null $comment_content
 */
class EchartNewsCommentModel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news_comment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['news_id', 'comment_id', 'comment_time', 'comment_content'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'news_id' => 'News ID',
            'comment_id' => 'Comment ID',
            'comment_time' => 'Comment Time',
            'comment_content' => 'Comment Content',
        ];
    }
}

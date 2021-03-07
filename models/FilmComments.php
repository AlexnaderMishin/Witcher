<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "film_comments".
 *
 * @property int $id
 * @property int $id_user
 * @property int $id_season
 * @property int $id_seria
 * @property string $text
 */
class FilmComments extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'film_comments';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user', 'id_season', 'id_seria', 'text'], 'required'],
            [['id_user', 'id_season', 'id_seria'], 'integer'],
            [['text'], 'string','required'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_user' => 'Id User',
            'id_season' => 'Id Season',
            'id_seria' => 'Id Seria',
            'text' => 'Text',
        ];
    }
}

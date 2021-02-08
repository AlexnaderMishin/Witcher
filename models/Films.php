<?php

namespace app\models;
use yii\base\Model;
use Yii;

/**
 * This is the model class for table "films".
 *
 * @property int $id
 * @property string $preview
 * @property string $name
 * @property int $season
 * @property int $seria
 * @property string $place
 */
class Films extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'films';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['preview', 'name', 'season', 'seria', 'place'], 'required'],
            [['preview', 'place'], 'string'],
            ['preview', 'file', 'extensions' => 'png, jpg', 'maxSize' => 1024 * 1024 * 2, 'message' => 'Такой пользователь уже существует!'],
            [['season', 'seria'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'preview' => 'Preview',
            'name' => 'Name',
            'season' => 'Season',
            'seria' => 'Seria',
            'place' => 'Place',
        ];
    }
}

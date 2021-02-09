<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "films".
 *
 * @property int $id
 * @property string $preview
 * @property string $name
 * @property string $description
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
            [['preview', 'name', 'description', 'season', 'seria', 'place'], 'required'],
            [['preview', 'description', 'place'], 'string'],
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
            'description' => 'Description',
            'season' => 'Season',
            'seria' => 'Seria',
            'place' => 'Place',
        ];
    }
}

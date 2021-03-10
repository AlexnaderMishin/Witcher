<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "film_comments".
 *
 * @property int $id
 * @property int $id_user
 * @property int $id_seria
 * @property string $message
 *
 * @property Films $seria
 * @property User $user
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
            [['id_user', 'id_seria', 'message'], 'required'],
            [['id_user', 'id_seria'], 'integer'],
            [['message'], 'string'],
            [['id_seria'], 'exist', 'skipOnError' => true, 'targetClass' => Films::className(), 'targetAttribute' => ['id_seria' => 'id']],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
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
            'id_seria' => 'Id Seria',
            'message' => 'Message',
        ];
    }

    /**
     * Gets query for [[Seria]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSeria()
    {
        return $this->hasOne(Films::className(), ['id' => 'id_seria']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }
}

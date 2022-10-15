<?php

namespace portalium\notification\models;

use Yii;

/**
 * This is the model class for table "notification_read".
 *
 * @property int $id_read
 * @property int $id_user
 * @property string $created_at
 */
class NotificationRead extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'notification_read';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user', 'created_at'], 'required'],
            [['id_user'], 'integer'],
            [['created_at'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_read' => 'Id Read',
            'id_user' => 'Id User',
            'created_at' => 'Created At',
        ];
    }
}
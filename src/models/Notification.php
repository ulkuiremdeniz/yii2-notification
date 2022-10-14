<?php

namespace portalium\notification\models;

use Yii;

/**
 * This is the model class for table "notification_notification".
 *
 * @property int $id_notification
 * @property int $id_message
 * @property int $type
 * @property int $id_to
 */
class Notification extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'notification_notification';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_message', 'type', 'id_to'], 'required'],
            [['id_message', 'type', 'id_to'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_notification' => 'Id Notification',
            'id_message' => 'Id Message',
            'type' => 'Type',
            'id_to' => 'Id To',
        ];
    }
}
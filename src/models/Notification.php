<?php

namespace portalium\notification\models;

use Yii;
use portalium\notification\Module;

/**
 * This is the model class for table "notification_notification".
 *
 * @property int $id_notification
 * @property int $type
 * @property int $id_to
 * @property string $text
 * @property string $title
 */
class Notification extends \yii\db\ActiveRecord
{
    const TYPE = [
        'user' => '1',
        'group' => '2'
    ];
    public static function getTypes()
    {
        return [
            '1' => Module::t('User'),
            '2' => Module::t('Group')
        ];
    }
    /**
     * {@inheritdoc}
     */

    //tablo adını döndürüyor
    public static function tableName()
    {
        return '{{' . Module::$tablePrefix . 'notification}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['type', 'id_to', 'text', 'title'], 'required'],
            [['type', 'id_to'], 'integer'],
            [['text', 'title'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_notification' => 'Id Notification',
            'type' => 'Type',
            'id_to' => 'Id To',
            'text' => 'Text',
            'title' => 'Title',
        ];
    }
}
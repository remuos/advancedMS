<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "emails".
 *
 * @property integer $id
 * @property string $reciever_name
 * @property string $reciever_email
 * @property string $subject
 * @property string $content
 * @property string $attachement
 */
class Emails extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'emails';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['reciever_name', 'reciever_email', 'subject', 'content', 'attachement'], 'required'],
            [['content'], 'string'],
            [['reciever_name'], 'string', 'max' => 50],
            [['reciever_email', 'subject'], 'string', 'max' => 200],
            [['attachement'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'reciever_name' => 'Reciever Name',
            'reciever_email' => 'Reciever Email',
            'subject' => 'Subject',
            'content' => 'Content',
            'attachement' => 'Attachement',
        ];
    }
}

<?php

namespace backend\modules\admin\models;

use Yii;

/**
 * This is the model class for table "auth_item".
 *
 * @property integer $type
 * @property string $tanım
 */
class AuthItem extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'auth_item';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type', 'tanım'], 'required'],
            [['type'], 'integer'],
            [['tanım'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'type' => 'Type',
            'tanım' => 'Tan�m',
        ];
    }
}

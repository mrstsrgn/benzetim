<?php

namespace backend\modules\admin\models;

use Yii;

/**
 * This is the model class for table "auth_item".
 *
 * @property integer $type
 * @property string $tan覺m
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
            [['type', 'tan覺m'], 'required'],
            [['type'], 'integer'],
            [['tan覺m'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'type' => 'Type',
            'tan覺m' => 'Tan銆m',
        ];
    }
}

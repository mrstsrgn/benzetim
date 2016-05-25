<?php

namespace backend\modules\admin\models;

use Yii;

/**
 * This is the model class for table "auth_assigment".
 *
 * @property integer $id
 * @property string $ad
 */
class AuthAssigment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'auth_assigment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'ad'], 'required'],
            [['id'], 'integer'],
            [['ad'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ad' => 'Ad',
        ];
    }
}

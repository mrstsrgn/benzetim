<?php

namespace backend\modules\admin\models;

use Yii;

/**
 * This is the model class for table "soru".
 *
 * @property string $soru
 * @property integer $id
 */
class Soru extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'soru';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['soru', 'id'], 'required'],
            [['soru'], 'string'],
            [['id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'soru' => 'Soru',
            'id' => 'ID',
        ];
    }
}

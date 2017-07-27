<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cooperacion.app_p_linea".
 *
 * @property integer $id
 * @property string $descripcion
 *
 * @property CooperacionAppTCooperacion[] $cooperacionAppTCooperacions
 */
class linea extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cooperacion.app_p_linea';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['descripcion'], 'required'],
            [['descripcion'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'descripcion' => 'Descripcion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCooperacionAppTCooperacions()
    {
        return $this->hasMany(CooperacionAppTCooperacion::className(), ['id_app_p_linea' => 'id']);
    }
}

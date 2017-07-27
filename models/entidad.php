<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cooperacion.app_t_entidad".
 *
 * @property integer $id
 * @property string $entidad
 * @property string $descripcion
 * @property string $pais
 *
 * @property CooperacionAppTCooperacion[] $cooperacionAppTCooperacions
 */
class entidad extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cooperacion.app_t_entidad';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['entidad', 'descripcion', 'pais'], 'required'],
            [['entidad', 'pais'], 'string', 'max' => 255],
            [['descripcion'], 'string', 'max' => 2000],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'entidad' => 'Entidad',
            'descripcion' => 'Descripción',
            'pais' => 'País',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCooperacionAppTCooperacions()
    {
        return $this->hasMany(CooperacionAppTCooperacion::className(), ['id_app_t_entidad' => 'id']);
    }
}

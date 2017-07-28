<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cooperacion.app_t_cooperacion".
 *
 * @property integer $id
 * @property string $linea_descripcion
 * @property string $link_linea
 * @property integer $id_app_p_modalidad
 * @property integer $id_app_p_agente
 * @property integer $id_app_p_linea
 * @property integer $id_app_t_entidad
 * @property integer $id_app_p_nivel
 *
 * @property CooperacionAppPAgente $idAppPAgente
 * @property CooperacionAppPLinea $idAppPLinea
 * @property CooperacionAppPModalidad $idAppPModalidad
 * @property CooperacionAppPNivel $idAppPNivel
 * @property CooperacionAppTEntidad $idAppTEntidad
 */
class cooperacion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cooperacion.app_t_cooperacion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['linea_descripcion', 'link_linea', 'id_app_p_modalidad', 'id_app_p_agente', 'id_app_p_linea', 'id_app_t_entidad', 'id_app_p_nivel'], 'required'],
            [['id_app_p_modalidad', 'id_app_p_agente', 'id_app_p_linea', 'id_app_t_entidad', 'id_app_p_nivel'], 'integer'],
            [['linea_descripcion', 'link_linea'], 'string', 'max' => 255],
            [['id_app_p_agente'], 'exist', 'skipOnError' => true, 'targetClass' => agente::className(), 'targetAttribute' => ['id_app_p_agente' => 'id']],
            [['id_app_p_linea'], 'exist', 'skipOnError' => true, 'targetClass' => linea::className(), 'targetAttribute' => ['id_app_p_linea' => 'id']],
            [['id_app_p_modalidad'], 'exist', 'skipOnError' => true, 'targetClass' => modalidad::className(), 'targetAttribute' => ['id_app_p_modalidad' => 'id']],
            [['id_app_p_nivel'], 'exist', 'skipOnError' => true, 'targetClass' => nivel::className(), 'targetAttribute' => ['id_app_p_nivel' => 'id']],
            [['id_app_t_entidad'], 'exist', 'skipOnError' => true, 'targetClass' => entidad::className(), 'targetAttribute' => ['id_app_t_entidad' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'linea_descripcion' => 'Línea Descripcion',
            'link_linea' => 'Link Línea',
            'id_app_p_modalidad' => 'Modalidad',
            'id_app_p_agente' => 'Agente',
            'id_app_p_linea' => 'Linea',
            'id_app_t_entidad' => 'Entidad',
            'id_app_p_nivel' => 'Nivel',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdAppPAgente()
    {
        return $this->hasOne(agente::className(), ['id' => 'id_app_p_agente']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdAppPLinea()
    {
        return $this->hasOne(linea::className(), ['id' => 'id_app_p_linea']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdAppPModalidad()
    {
        return $this->hasOne(modalidad::className(), ['id' => 'id_app_p_modalidad']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdAppPNivel()
    {
        return $this->hasOne(nivel::className(), ['id' => 'id_app_p_nivel']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdAppTEntidad()
    {
        return $this->hasOne(entidad::className(), ['id' => 'id_app_t_entidad']);
    }
}

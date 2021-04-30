<?php

namespace common\models\masters;

use Yii;

/**
 * This is the model class for table "{{%maestroclipro}}".
 *
 * @property int $id
 * @property string $venta
 * @property string $codpro
 * @property string $codart
 * @property int $vencimiento
 * @property int $tiempoentrega
 * @property string $codcen
 * @property double $precio
 * @property string $codmon
 * @property string $param1
 * @property string $param2
 * @property string $param3
 * @property string $param4
 *
 * @property Clipro $codpro0
 * @property Maestrocompo $codart0
 */
class Maestroclipro extends \common\models\base\modelBase
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%maestroclipro}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['vencimiento', 'tiempoentrega'], 'integer'],
            [['precio'], 'number'],
            [['venta', 'param3'], 'string', 'max' => 1],
            [['codpro'], 'string', 'max' => 6],
            [['codart'], 'string', 'max' => 14],
            [['codcen'], 'string', 'max' => 5],
            [['codmon'], 'string', 'max' => 4],
            [['param1', 'param2'], 'string', 'max' => 2],
            [['param4'], 'string', 'max' => 10],
            [['codpro'], 'exist', 'skipOnError' => true, 'targetClass' => Clipro::className(), 'targetAttribute' => ['codpro' => 'codpro']],
            [['codart'], 'exist', 'skipOnError' => true, 'targetClass' => Maestrocompo::className(), 'targetAttribute' => ['codart' => 'codart']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('base_labels', 'ID'),
            'venta' => Yii::t('base_labels', 'Venta'),
            'codpro' => Yii::t('base_labels', 'Codpro'),
            'codart' => Yii::t('base_labels', 'Codart'),
            'vencimiento' => Yii::t('base_labels', 'Vencimiento'),
            'tiempoentrega' => Yii::t('base_labels', 'Tiempoentrega'),
            'codcen' => Yii::t('base_labels', 'Codcen'),
            'precio' => Yii::t('base_labels', 'Precio'),
            'codmon' => Yii::t('base_labels', 'Codmon'),
            'param1' => Yii::t('base_labels', 'Param1'),
            'param2' => Yii::t('base_labels', 'Param2'),
            'param3' => Yii::t('base_labels', 'Param3'),
            'param4' => Yii::t('base_labels', 'Param4'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClipro()
    {
        return $this->hasOne(Clipro::className(), ['codpro' => 'codpro']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMaestrocompo()
    {
        return $this->hasOne(Maestrocompo::className(), ['codart' => 'codart']);
    }
    
    
     public function getCentros()
    {
        return $this->hasOne(Centros::className(), ['codcen' => 'codcen']);
    }

    /**
     * {@inheritdoc}
     * @return MaestrocliproQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MaestrocliproQuery(get_called_class());
    }
}

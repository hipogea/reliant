<?php

namespace frontend\modules\asset\models;

use Yii;

/**
 * This is the model class for table "{{%asset_codificacion}}".
 *
 * @property int $id
 * @property int|null $parent_id
 * @property string|null $descripcion
 * @property string|null $codigo
 * @property string|null $lonhijo
 * @property string|null $codigo2
 * @property string|null $codigo3
 * @property string|null $codmaterial
 */
class AssetCodificacion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%asset_codificacion}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['parent_id'], 'integer'],
            [['descripcion'], 'string', 'max' => 40],
            [['codigo', 'lonhijo', 'codigo2', 'codigo3', 'codmaterial'], 'string', 'max' => 16],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('labels', 'ID'),
            'parent_id' => Yii::t('labels', 'Parent ID'),
            'descripcion' => Yii::t('labels', 'Descripcion'),
            'codigo' => Yii::t('labels', 'Codigo'),
            'lonhijo' => Yii::t('labels', 'Lonhijo'),
            'codigo2' => Yii::t('labels', 'Codigo2'),
            'codigo3' => Yii::t('labels', 'Codigo3'),
            'codmaterial' => Yii::t('labels', 'Codmaterial'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return AssetCodificacionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AssetCodificacionQuery(get_called_class());
    }
}

<?php

namespace common\models\masters;
use common\behaviors\FileBehavior;
use Yii;
use common\helpers\h;
/**
 * This is the model class for table "{{%maestrocompo}}".
 *
 * @property int $id
 * @property string $codart
 * @property string $descripcion
 * @property string $marca
 * @property string $modelo
 * @property string $numeroparte
 * @property string $codum
 * @property string $peso
 *
 * @property Ums $codum0
 */
class Maestrocompo extends \common\models\base\modelBase
{
    public $prefijo='12';
    public $booleanFields=['esrotativo'];
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%maestrocompo}}';
    }
 public function behaviors()
{
	return [
		
		'fileBehavior' => [
			'class' => FileBehavior::className()
		],
               
		
	];
}
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['descripcion','codtipo','codum'], 'required'],
            [['codart'], 'string', 'max' => 14],
             [['oldnumberpart','cod1','esrotativo'], 'safe'],
            
            [['descripcion'], 'string', 'max' => 60],
            [['marca', 'modelo', 'numeroparte'], 'string', 'max' => 30],
            [['codum', 'peso'], 'string', 'max' => 4],
            [['codart'], 'unique'],
            [['codum'], 'exist', 'skipOnError' => true, 'targetClass' => Ums::className(), 'targetAttribute' => ['codum' => 'codum']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('base_labels', 'ID'),
             'cod1' => Yii::t('base_labels', 'Code'),
            'codart' => Yii::t('base_labels', 'Auto Cod'),
            'descripcion' => Yii::t('base_labels', 'Description'),
            'marca' => Yii::t('base_labels', 'Vendor'),
            'modelo' => Yii::t('base_labels', 'Model'),
            'numeroparte' => Yii::t('base_labels', 'Part number'),
             'oldnumberpart' => Yii::t('base_labels', 'Alt Part number'),
            'codum' => Yii::t('base_labels', 'UM'),
            'peso' => Yii::t('base_labels', 'Weight'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUm()
    {
        return $this->hasOne(Ums::className(), ['codum' => 'codum']);
    }

    /**
     * {@inheritdoc}
     * @return MaestrocompoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MaestrocompoQuery(get_called_class());
    }
    
    public function beforeSave($insert) {
        //var_dump($insert);die();
        if($insert){
            $this->prefijo=$this->codtipo;
            $this->codart=$this->correlativo('codart',
                h::settings()->get('maestros','sizecodigomaterial') , 
                 'codtipo'
                    );
        }
        return parent::beforeSave($insert);
    }
}

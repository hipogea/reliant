<?php

namespace frontend\modules\asset\models;
use frontend\modules\asset\Module as m;
use frontend\modules\asset\interfaces\assetInterface;
use Yii;

/**
 * This is the model class for table "{{%asset_locations}}".
 *
 * @property int $id
 * @property string|null $ismovil
 * @property string|null $cc
 * @property string|null $codcen
 * @property string|null $istop
 * @property string|null $parent_id
 * @property string $nombre
 * @property string $path
 * @property string|null $activo
 * @property string|null $detalle
 */
class AssetLocations extends \common\models\base\modelBase implements assetInterface
{
    
    public $booleanFields=['ismovil','activo'];
    
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%asset_locations}}';
    }
    
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'path'], 'required'],
            [['detalle'], 'string'],
             [['code','istop','ismovil','activo'], 'safe'],
            //[['parent_id', 'activo'], 'string', 'max' => 1],
            [['cc'], 'string', 'max' => 12],
            [['codcen'], 'string', 'max' => 5],
            [['nombre'], 'string', 'max' => 40],
            [['path'], 'string', 'max' => 256],
             [['parent_id'], 'exist', 'skipOnError' => true, 'targetClass' => AssetLocations::className(), 'targetAttribute' => ['parent_id' => 'id']],
            [['codcen'], 'exist', 'skipOnError' => true, 'targetClass' => \common\models\masters\Centros::className(), 'targetAttribute' => ['codcen' => 'codcen']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('base_labels', 'ID'),
            'ismovil' => Yii::t('base_labels', 'Is movil'),
            'cc' => Yii::t('base_labels', 'Cc'),
            'codcen' => Yii::t('base_labels', 'Center'),
            'code' => Yii::t('base_labels', 'Code'),
            'istop' => Yii::t('base_labels', 'Is top'),
            'parent_id' => Yii::t('base_labels', 'Parent'),
            'nombre' => Yii::t('base_labels', 'Name'),
            'path' => Yii::t('base_labels', 'Path'),
            'activo' => Yii::t('base_labels', 'Active'),
            'detalle' => Yii::t('base_labels', 'Detail'),
        ];
    }

    
    public function getParentLocation()
    {
        return $this->hasOne(self::className(), ['id' => 'parent_id']);
    }
    /**
     * {@inheritdoc}
     * @return AssetLocationsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AssetLocationsQuery(get_called_class());
    }
    
    public function isTop(){
        return ($this->parent_id>0);
    }
    
    
    
    /*
     * Funcion que devuelve el id del Root o del top
     * Se aplica recursividad
     */
    public function idRoot(){
        if($this->isTop()){
            return $this->id;
        }else{
         return $this->parentLocation->idRoot();  
        }
    }
   
    
    /*
     * Funcion que devuelve 
     * los locations  aguas arriba 
     */
    public function parents(){
       $parents=[];
        if($this->isTop()){
            return $parents;
        }else{
           $parents[]=$this->parentLocation;
           $parents=array_merge($parents,$this->parentLocation->parents());
          
        }
       return $parents;
    }
    
     /*
     * Funcion que devuelve 
     * los ids de los parents   aguas arriba 
     */
    public function idParents(){
       $ids=[];
            foreach($this->parents() as $parent){
                $ids[]=$parent->id;
            }
        return $ids;
    }
    
    public function isChild(assetInterface $location){
        
       return in_array($this->id,$location->idParents());
    }
    
    public function hasChilds(){}
    
    /*
     * Donde se va a emplazar
     * 
     */
    public function place($parent){
        if($parent instanceof AssetLocations){
          $this->addError('id',m::t('validaciones','Target location is not location'));
            return false;  
        }elseif($this->isChild($parent)){
            
            $this->addError('id',m::t('validaciones','Target location is a child from this'));
            return false;
        }elseif(!$parent->activo){
           $this->addError('id',m::t('validaciones','Target location is inactive'));
            return false;
        }else{
            $this->parent_id=$parent->id;
            /*
             * IMPLEMENTAR TRANSACCION*/
             
           if($this->save()){
               
               return true;
           }else{
               $this->addError('id',$this->getFirstError());
              return false; 
           }
        }
    }
    
     public function unPlace(){
         
     }
     
     
     public function attachEquipment(){
         
     }
    
}

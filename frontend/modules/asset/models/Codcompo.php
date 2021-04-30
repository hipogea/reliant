<?php
namespace frontend\modules\asset\models;
 use frontend\modules\asset\Module as m;
use Yii;
use common\helpers\h;
class Codcompo extends \common\models\base\modelBase
{
    use \kartik\tree\models\TreeTrait {
        isDisabled as parentIsDisabled; // note the alias
    }
 
    /**
     * @var string the classname for the TreeQuery that implements the NestedSetQueryBehavior.
     * If not set this will default to `kartik	ree\models\TreeQuery`.
     */
    public static $treeQueryClass; // change if you need to set your own TreeQuery
 
    /**
     * @var bool whether to HTML encode the tree node names. Defaults to `true`.
     */
    public $encodeNodeNames = true;
 
    /**
     * @var bool whether to HTML purify the tree node icon content before saving.
     * Defaults to `true`.
     */
    public $purifyNodeIcons = true;
 
    /**
     * @var array activation errors for the node
     */
    public $nodeActivationErrors = [];
 
    /**
     * @var array node removal errors
     */
    public $nodeRemovalErrors = [];
 
    /**
     * @var bool attribute to cache the `active` state before a model update. Defaults to `true`.
     */
    public $activeOrig = true;
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%asset_codcompo}}';
    }
    
    /**
     * Note overriding isDisabled method is slightly different when
     * using the trait. It uses the alias.
     */
    public function isDisabled()
    {
        //if (Yii::$app->user->username !== 'admin') {
           // return true;
        //}
        return false;
        //return $this->parentIsDisabled();
    }
    
    
    public function rules()
    {
        $rules = parent::rules();
         $rules[] = [['codecomplete','description','name'], 'safe'];
        $rules[] = [['name'], 'validate_codigo'];
        //$rules[] = ['maxlenght', 'safe'];
        return $rules;
    }
    
    public function validate_codigo($attribute,$params){
       // print_r($this->attributes);die();
     /* if(!array_key_exists($this->lvl, self::codeLenghts())){
          $this->addError('name',yii::t('base_errors','Level is invalid or parameter code {template} is empty',['template'=>h::gsetting('asset','structure_code_components')]));
      }*/
      //$codel=self::codeLenghts();
      /*var_dump($this->lvl);die();
      //print_r($codel);die();*/
      /*if(strlen($this->name) <> strlen($codel[$this->lvl]) )
         $this->addError('name',yii::t('base_errors','Lenght of name doesn\'t match with {template}',['template'=>$codel[$this->lvl]]));
    */
      
      
      }
    
    
    public static function maxDepth(){
       //$parts= explode('-', h::gsetting('asset','structure_code_components'));
       return count(self::codeLenghts());
    }
    public static  function codeLenghts(){
        //$lenghts=[];
        //$codeTemplate=h::gsetting('asset','structure_code_components');
       return explode('-', h::gsetting('asset','structure_code_components'));
       /*foreach($parts as $key=>$part){
           $lenghts[$key]=$part;
       }
       return $lenghts;*/
    }
    
    public function codComplete(){
        if($this->lvl==0){
            return $this->name;
        }else{
            return $this->parents(1)->one()->codComplete().$this->name;
        }
       
    }
    
    public function afterSave($insert, $changedAttributes) {
        self::updateAll(['codecomplete'=>$this->codComplete()], ['id'=>$this->id]);
        return parent::afterSave($insert, $changedAttributes);
    }
}

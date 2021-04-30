<?php 
namespace common\models;
 use common\helpers\h;
use Yii;
 
class Product extends \kartik\tree\models\Tree
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%tree}}';
    }    
    
    /**
     * Override isDisabled method if you need as shown in the  
     * example below. You can override similarly other methods
     * like isActive, isMovable etc.
     */
    public function isDisabled()
    {
       /* if (h::userName() !== 'admin') {
            return true;
        }*/
        return false;
        return parent::isDisabled();
    }
}
?>